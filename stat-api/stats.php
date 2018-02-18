<?php

    # header
    header("Access-Control-Allow-Origin: *");
    header('Content-type: application/json');
    
    # parameters set?
    if (!array_key_exists("name", $_GET) 
        || !array_key_exists("apikey", $_GET)
        || !array_key_exists("gamemode", $_GET)
        || !array_key_exists("weapon", $_GET)) {
        die('{ "error": "missing parameter" }');
    }
    if (!in_array($_GET['gamemode'], array("wvw", "pve"))) {
        die('{ "error": "unknown game mode" }');
    }
        
    # yep
    $character_name = $_GET['name'];
    $api_key = $_GET['apikey'];
    $game_mode = $_GET['gamemode'];
    $weapon = $_GET['weapon'];
    $attunement = array_key_exists("attunement", $_GET) ? $_GET['attunement'] : "Earth";
    $get = array_key_exists("get", $_GET) && $_GET['get'] != "" ? explode(",", $_GET['get']) : array("stats");
    
    # require some shit
    require_once("class/class.modifier.php");
    require_once("class/class.traitline.php");
    require_once("class/class.trait.php");
    require_once("class/class.skill.php");
    require_once("class/class.profession.php");
    require_once("class/class.equipment_piece.php");    
    require_once("constants/attributes.php");
    require_once("constants/weapons.php");
    require_once("constants/runes.php");
    require_once("constants/sigils.php");
    require_once("constants/gems.php");
    require_once("constants/infusions.php");
    require_once("constants/slots.php");
    require_once("constants/professions.php");    
    require_once("class/class.character.php");
    require_once("functions.php");
    require_once("../gw2-api/paths.php");

    //set error handler
    set_error_handler("custom_error");

    # here we go... => get the character info from the official API
    $json = json_decode(file_get_contents(sprintf($urls['character'], $character_name, $api_key)));
    $debug = array();

    # get the traitline ids for the given game mode
    $character = new Character(
        $json->name, # Character Name
        $json->profession, # Profession Name
        $json->specializations->$game_mode, # Selected Traitlines
        $json->skills->$game_mode # Selected Skills
    );

    # add all the equipment pieces
    foreach($json->equipment as $piece) {
        if (in_array($piece->slot, $slots)) {

            # get more info from the api            
            $item = json_decode(file_get_contents(sprintf($urls['item'], $piece->id)));   

            $equipment_piece = new EquipmentPiece(
                $piece->id, 
                $piece->slot,
                is_weapon($piece->slot) ? $item->details->type : $item->type,
                get_modifiers($piece, $item)
            );

            # Runes, Gemstones and Sigils
            if (isset($piece->upgrades)) {
                foreach($piece->upgrades as $upgrade_id) {
                    if (array_key_exists ($upgrade_id, $runes)) { # Upgrade is a Rune
                        $equipment_piece->upgrades[] = $runes[$upgrade_id];
                    } else if (array_key_exists ($upgrade_id, $sigils)) { # Upgrade is a Sigil
                        $equipment_piece->upgrades[] = $sigils[$upgrade_id];
                    } else if (array_key_exists ($upgrade_id, $gems)) { # Upgrade is a Gemstone
                        $equipment_piece->upgrades[] = $gems[$upgrade_id];
                    }
                }
            }

            # Infusions
            if (isset($piece->infusions)) {
                foreach($piece->infusions as $infusion_id) {
                    if (array_key_exists ($infusion_id, $infusions)) { 
                        $equipment_piece->infusions[] = $infusions[$infusion_id];
                    }
                }
            }
            
            $character->add_equipment_piece($equipment_piece); 
        }
    }
    
    # I'm out
    $out = array();
    if (in_array("stats", $get)) $out['stats'] = $character->get_stats();
    if (in_array("equipment", $get)) $out['equipment'] = $character->equipment_pieces;
    if (in_array("traitlines", $get)) $out['traits'] = $character->selected_traitlines;
    if (in_array("skills", $get)) $out['skills'] = $character->selected_skills;
    if (in_array("debug", $get)) $out['debug'] = $debug;
    
    # done!
    echo json_encode($out);

?>