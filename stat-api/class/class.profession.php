<?php

    /**
     * a profession
     */
    class Profession {
        
        public function __construct($name, $base_health, $traitlines) {
            $this->name = $name;
            $this->base_health = $base_health;
            $this->traitlines = $traitlines;
        }
    }
?>