<?
namespace chocolate{
    class Mars {
        private $Id;
        private static $var = 0;
        public function __construct (){
            $this->Id = Mars::$var ;
            Mars::$var = Mars::$var+1;
            }
            public function getId(){
                return $this->Id;
        }

    }
}

namespace planet {
    class Mars {
        private $Id;
        private $size;
        private static $var = 0;
        public function __construct($size = NULL){
            $this->Id = Mars::$var ;
            Mars::$var = Mars::$var+1;
            $this->size = $size;
        }
        public function getId(){
            return $this->Id;
        }
            public function getSize(){
                return $this->size;
        }
        public function setSize(){
            $this->size = $size;
        }
    }
}
?>