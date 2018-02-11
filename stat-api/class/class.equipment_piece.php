<?php

    class EquipmentPiece {
        
        public function __construct($id, $slot, $type, $modifiers = array()) {
            $this->id = $id;
            $this->slot = $slot;
            $this->type = $type;
            $this->modifiers = $modifiers;
            $this->upgrades = array();
            $this->infusions = array();
        }

    }

    /**
     * a Class to represent a Rune and all its possible modifiers
     */
    class Rune {
        
        public function __construct($id, $name, $modifiers = array()) {
            $this->id = $id;
            $this->name = $name;
            $this->modifiers = $modifiers;
        }
    }

    /**
     * a Class to represent a Sigil and all its modifiers
     */
    class Sigil {
        
        public function __construct($id, $name, $modifiers = array()) {
            $this->id = $id;
            $this->name = $name;
            $this->modifiers = $modifiers;
        }
    }

    /**
     * a Class to represent a Gemstone and all its modifiers
     */
    class Gem {

        public function __construct($id, $name, $modifiers = array()) {
            $this->id = $id;
            $this->name = $name;
            $this->modifiers = $modifiers;
        }
    }

    /**
     * a Class to represent an Infusion and all its modifiers
     */
    class Infusion {
        
        public function __construct($id, $name, $modifiers = array()) {
            $this->id = $id;
            $this->name = $name;
            $this->modifiers = $modifiers;
        }
    }

?>