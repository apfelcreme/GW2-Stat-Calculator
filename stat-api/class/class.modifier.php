<?php

    abstract class Modifier {

        public function __construct($attribute, $value, $modifier_constraints = array()) {
            $this->attribute = $attribute;
            $this->value = $value;
            $this->modifier_constraints = $modifier_constraints;
        }

        abstract public function get_result();

        public function all_constraints_met($weapon) {
            if ($weapon == null) {
                return false;
            }
            if (count($this->modifier_constraints) == 0) {
                return true;
            }
            $bool = false;
            foreach ($this->modifier_constraints as $constraint) {
                $bool = $bool || $constraint->fulfills($weapon);
            }
            return $bool;
        }
    }

    /**
     * a flat modifier (e.g. +100 Healing Power)
     */
    class FlatModifier extends Modifier {

        public function __construct($attribute, $value, $modifier_constraints = array()) {
            parent::__construct($attribute, $value, $modifier_constraints);
        }

        public function get_result() {
            return $this->value;
        }

    }

    /**
     * a modifier, that is calculated based on the current value (e.g. Healingpower is increased by 7% of current Toughness)
     */
    class PercentageModifier extends Modifier {
        
        public function __construct($attribute, $value, $reference, $scope, $modifier_constraints = array()) {
            parent::__construct($attribute, $value, $modifier_constraints);
            $this->reference = $reference;
            $this->scope = $scope;
        }

        public function get_result($reference_value = 0) {
            return $reference_value * $this->value;
        }
    }

    /**
     * a modifier for sigils
     */
    class SigilPercentageModifier extends PercentageModifier {

        public function __construct($attribute, $value, $reference, $modifier_constraints = array()) {
            parent::__construct($attribute, $value, $reference, 1, $modifier_constraints);
        }
    }

    /**
     * a modifier for traits
     */
    class TraitPercentageModifier extends PercentageModifier {

        public function __construct($attribute, $value, $reference, $modifier_constraints = array()) {
            parent::__construct($attribute, $value, $reference, 2, $modifier_constraints);
        }
    }

    /**
     * a modifier for runes
     */
    class RunePercentageModifier extends PercentageModifier {

        public function __construct($attribute, $value, $reference, $modifier_constraints = array()) {
            parent::__construct($attribute, $value, $reference, 3, $modifier_constraints);
        }
    }

    /**
     * a constraint on the activity of the modifier
     */
    class ModifierConstraint {

        public function __construct($weapon) {
            $this->weapon = $weapon;
        }

        public function fulfills($selected_weapon) {
            return $this->weapon == $selected_weapon->type;
        }
    }

?>