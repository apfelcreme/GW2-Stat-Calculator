<?php

    class Attribute {

        # achievable through equipment
        const Agony_Resistance = "AgonyResistance";
        const Concentration = "BoonDuration";
        const Condition_Damage = "ConditionDamage";
        const Expertise = "ConditionDuration";
        const Ferocity = "CritDamage";
        const Healing_Power = "Healing";
        const Power = "Power";
        const Precision = "Precision";
        const Toughness = "Toughness";
        const Vitality = "Vitality";

        # achievable through traits or calculation
        const Armor = "Armor";
        const Boon_Duration = "BnDuration";
        const Condition_Duration = "CondDuration";
        const Critical_Damage = "CriticalDamage";
        const Critical_Chance = "CriticalChance";
        const Health = "Health";

        # all -> special calculation later on
        const All = "All";

        # Definiton: All -> https://wiki.guildwars2.com/wiki/All_stats
        const all_stats = array(Power, Precision, Ferocity, Condition_Damage, Toughness, Vitality, Healing_Power);
        
        /**
         * translates toughness into armor
         */
        static public function get_armor($toughness) {
            return $toughness;
        }

        /**
         * translates concentration into boon duration
         */
        static public function get_boon_duration($concentration) {
            return $concentration / 15;
        }

        /**
         * translates expertise into condition duration
         */
        static public function get_condition_duration($expertise) {
            return $expertise / 15;
        }

        /**
         * translates precision into critical chance
         */
        static public function get_critical_chance($precision) {
            return $precision / 21;
        }

        /**
         * translates ferocity into critical damage
         */
        static public function get_critical_damage($ferocity) {
            return $ferocity / 15;
        }

        /**
         * translates vitality into health
         */
        static public function get_health($vitality) {
            return $vitality * 10;
        }

    }

?>