<?php

    /**
     * a class to represent a trait as part of a traitline
     */
    class TraitLineTrait {

        public $id;
        public $name;
        public $modifiers;
        public $modifier_constraints;

        public function __construct($id, $name, $modifiers = array()) {
            $this->id = $id;
            $this->name = $name;
            $this->modifiers = $modifiers;
        }

    }

?>