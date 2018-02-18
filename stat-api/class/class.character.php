<?php

    /**
     *  a class to represent a character with a given amount of Stats
     */
    class Character {

        public function __construct($name, $profession, $selected_traitlines) {
            $this->name = $name;
            $this->profession = $profession;
            $this->selected_traitlines = $selected_traitlines;
            $this->equipment_pieces = array();
        }

        public function add_equipment_piece($equipment_piece) {
            $this->equipment_pieces[] = $equipment_piece;
        }

        public function get_weapons() {
            $weapons = array();
            foreach ($this->equipment_pieces as $equipment_piece) {
                if (is_weapon($equipment_piece->slot)) {
                    $weapons[] = $equipment_piece;
                }
            }
            return $weapons;
        }

        public function get_stats() {
            
            global $professions, $debug, $attunement;            
            $profession = $professions[$this->profession];

            $stats = array(
                Attribute::Power => 1000,
                Attribute::Precision => 1000,
                Attribute::Vitality => 1000,
                Attribute::Toughness => 1000,
                Attribute::Ferocity => 0,
                Attribute::Condition_Damage => 0,
                Attribute::Healing_Power => 0,
                Attribute::Expertise => 0,
                Attribute::Concentration => 0,
                Attribute::Agony_Resistance => 0,
                Attribute::Critical_Chance => 4,
                Attribute::Critical_Damage => 150,
                Attribute::Boon_Duration => 0,
                Attribute::Condition_Duration => 0,
                Attribute::Armor => 0,
                Attribute::Health => $profession->base_health
            );
            
            $runes_added = false;
            $percentage_modifiers = array();

            # Add all equipment modifiers
            foreach ($this->equipment_pieces as $equipment_piece) {
                $debug[] = $equipment_piece->slot;
                foreach ($equipment_piece->modifiers as $modifier) {
                    $debug[] = " " . $modifier->get_result() . " " . $modifier->attribute;
                    $stats[$modifier->attribute] += $modifier->get_result();
                }

                # Runes, Sigils, Gems                
                $debug[] = " Runes";
                foreach($equipment_piece->upgrades as $upgrade) {
                    $debug[] = "  " . $upgrade->name;
                    if ($upgrade instanceof Rune && $runes_added) continue;
                    foreach ($upgrade->modifiers as $modifier) {
                        if ($modifier->attribute == Attribute::All) {
                            foreach(Attribute::all_stats as $stat) {
                                if ($modifier instanceof FlatModifier) {
                                    $stats[$stat] += $modifier->get_result();
                                    $debug[] = "   " .$modifier->get_result() . " " . $modifier->attribute;
                                } else {
                                    $percentage_modifiers[] = $modifier;
                                    $debug[] = "   Remember Percentage Modifier for Upgrade: " . $upgrade->name;
                                }
                            }
                        } else {
                            if ($modifier instanceof FlatModifier) {
                                $stats[$modifier->attribute] += $modifier->get_result();
                                $debug[] = "   " . $modifier->get_result()." ".$modifier->attribute;
                            } else {
                                $percentage_modifiers[] = $modifier;
                                $debug[] = "   Remember Percentage Modifier for Upgrade: " . $upgrade->name;
                            }
                        }
                    }
                    if ($upgrade instanceof Rune) { # After the fist loop -> dont calculate Runes again
                        $runes_added = true;
                    }
                }

                # Infusions
                $debug[] = " Infusions";
                foreach($equipment_piece->infusions as $infusion) {
                    foreach ($infusion->modifiers as $modifier) {
                        if ($modifier instanceof FlatModifier) {
                            $stats[$modifier->attribute] += $modifier->get_result();
                            $debug[] = "  " . $modifier->get_result()." ". $modifier->attribute;
                        } else {
                            $percentage_modifiers[] = $modifier;
                            $debug[] = "  Remember Percentage Modifier for Infusion: " . $infusion->name;
                        }
                    }
                }
            }

            # Add selected traits
            $debug[] = "Traits";
            $traits = array();
            foreach ($this->selected_traitlines as $selected_trait_line) {

                # Major traits
                foreach($selected_trait_line->traits as $selected_trait) {
                    $traits[] = $profession->traitlines[$selected_trait_line->id]->major_traits[$selected_trait];
                }

                # Minor traits
                foreach ($profession->traitlines[$selected_trait_line->id]->minor_traits as $minor_trait) {
                    $traits[] = $minor_trait;
                }
            }


            # Add all modifiers given by traits to the stat array
            foreach($traits as $trait) {
                $debug[] = " " . $trait->name;
                foreach($trait->modifiers as $modifier) {
                    $fulfills = false;
                    foreach($this->get_weapons() as $weapon) {
                        $fulfills = $fulfills || $modifier->all_constraints_met($weapon->type);
                    }
                    if ($this->profession == "Elementalist") { 
                        $fulfills = $fulfills || $modifier->all_constraints_met($attunement);
                    }
                    if ($fulfills) {
                        if ($modifier instanceof FlatModifier) {
                            $debug[] = "  " . $modifier->get_result() . " " . $modifier->attribute;
                            $stats[$modifier->attribute] += $modifier->get_result();
                        } else {
                            $percentage_modifiers[] = $modifier;
                            $debug[] = "  Remember Percentage Modifier for Trait: " . $trait->name;
                        }
                    }
                }
            }

            # Calculate Percentage modifiers
            $debug[] = "Percentage-Modifiers";
            usort($percentage_modifiers, "comparePM");
            foreach($percentage_modifiers as $modifier) {
                $stats[$modifier->attribute] += $modifier->get_result($stats[$modifier->reference]);
                $debug[] = " add " . $modifier->value * 100 . "% of " . $modifier->reference . " (" . $stats[$modifier->attribute] . ") to " . $modifier->attribute . ": " . $modifier->get_result($stats[$modifier->attribute]) . " " . $modifier->attribute;
            }
            
            # do some nice little calculation to get stuff like health, crit chance or armor
            $stats[Attribute::Armor] += Attribute::get_armor($stats[Attribute::Toughness]);
            $stats[Attribute::Boon_Duration] += Attribute::get_boon_duration($stats[Attribute::Concentration]);
            $stats[Attribute::Condition_Duration] += Attribute::get_boon_duration($stats[Attribute::Expertise]);
            $stats[Attribute::Critical_Chance] += Attribute::get_critical_chance($stats[Attribute::Precision] - 1000);
            $stats[Attribute::Critical_Damage] += Attribute::get_critical_damage($stats[Attribute::Ferocity]);
            $stats[Attribute::Health] += Attribute::get_health($stats[Attribute::Vitality] - 1000);

            return $stats;
        }
 
    }
?>