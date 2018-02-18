<?php

    /**
     * a class to represent a trait as part of a traitline
     */
    class Skill {

        public function __construct($id, $name, $modifiers = array()) {
            $this->id = $id;
            $this->name = $name;
            $this->modifiers = $modifiers;
        }

    }

?>