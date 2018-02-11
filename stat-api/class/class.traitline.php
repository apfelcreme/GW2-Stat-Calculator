<?php

    /**
     * a class to represent a traitline 
     */
    class TraitLine {

        public $id;
        public $name;
        public $minor_traits;
        public $major_traits;

        public function __construct($id, $name, $minor_traits, $major_traits) {
            $this->id = $id;
            $this->name = $name;
            $this->minor_traits = $minor_traits;
            $this->major_traits = $major_traits;
        }

    }

?>