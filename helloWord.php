<?php 
    class Person {
        // proprietà 
        public $name = "";  
 
        //costruttore
        public function __construct($name)
                {
                //inizializzare della variabile $name   
                $this->name = $name;
            }
                             
            //metodi
            public function getName() {
            //$this rappresenta l'oggetto che sarà costruito a runtime
            return $this->name;
            }
          
    }

    class Padre extends Person {

        public $nomefiglio = "";

        public function __construct($nome,$nomefiglio){
            parent::__construct($nome);
            $this->nomefiglio = $nomefiglio;
        }

        public function getName()
        {
            return array($this->name, $this->nomefiglio);
        }
    }
                 
              
?>          