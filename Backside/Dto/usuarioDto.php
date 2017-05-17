<?php

  class uduarioDto{

         public $nombre;
         public $edad;
         public $email;
         public $password;
        
      

        
         public function __construct($nombre,$edad,$email,$password){
             $this->nombre=$nombre;
             $this->edad=$edad;
             $this->email=$email;
             $this->password=$password;
             
            
         }

     }   

?>