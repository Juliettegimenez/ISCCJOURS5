<?php
class Astronaut {
    private $name ;
    private $snacks ;
    private $destination ;
    private static $var = 0;
    private $id ;
    public function getId () {
        return $this->id ;
        }
        public function getDestination () {
            return $this->destination ;
            }
            public function __construct ($name) {
                $this->id = Astronaut::$var ++;
                $this->name = $name ;
                $this->snacks = 0 ;
                $this->destination = null ;
                echo "$this->name ready for launch !\n";
                }
 ?>