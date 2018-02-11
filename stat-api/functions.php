<?php

    /**
     * returns the modifiers from a piece of equipment
     */
    function get_modifiers($equipment_piece_api, $rich_api_item) {

        global $urls, $slots;
        $id = $equipment_piece_api->id;
        $modifiers = array();

        # item stats
        if (isset($equipment_piece_api->stats)) {
            # Legendary or selectable stats -> read directly from the api 
            foreach($equipment_piece_api->stats->attributes as $attribute => $modifier) {
                $modifiers[] = new FlatModifier($attribute, $modifier);
            }
        } else {
            # predefined stats, retrieve the with the given item id
            foreach($rich_api_item->details->infix_upgrade->attributes as $modifier) {
                $modifiers[] = new FlatModifier($modifier->attribute, $modifier->modifier);
            }
        }

        # if armor -> defense stat
        if ($rich_api_item->type == "Armor") {                
            $modifiers[] = new FlatModifier(Attribute::Armor, $rich_api_item->details->defense);
        }
        return $modifiers;
    }
    
    /**
     * is the given slot part of the armor (runes can be attached)
     */
    function is_armor($slot) {
        return in_array($slot, array("Helm", "Shoulders", "Coat", "Gloves", "Leggings", "Boots"));
    }
    
    /**
     * is the given slot a weapon-slot?
     */
    function is_weapon($slot) {
        return in_array($slot, array("WeaponA1", "WeaponA2", "WeaponB1", "WeaponB2"));
    }
    
    /**
     * is the given slot a trinket?
     */
    function is_trinket($slot) {
        return in_array($slot, array("Backpack", "Amulet", "Ring1", "Ring2", "Accessory1", "Accessory2"));
    }

    /**
     * error handler
     */
    function custom_error($errno, $errstr, $error_file, $error_line, $error_context) {
        global $_GET;
        file_put_contents ("errors.txt", "[" . date("Y-m-d H:i:s") . "] " . $errno . " -> " . $errstr . " in " . $error_file . " [".$error_line."]: " . json_encode($_GET) . PHP_EOL, FILE_APPEND);
        die('{"error" : "'.$errstr.'" }');
    }
      
    /**
     * a comparator for percentage modifiers
     */
    function comparePM($a, $b) {
        return $a->scope > $b->scope;
    }

    function send_message($message, $progress, $data = "") {
        $msg = array(
            "progress" => $progress, 
            "message" => $message,
            "data" => $data);
        echo json_encode($msg) . PHP_EOL;  
        ob_flush();
        flush();        
    }

?>