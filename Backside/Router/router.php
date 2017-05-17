<?php
// la clase router encanrgada de enrutar las peticiones

  class Router{
       
        private $user;     
       public function __CONSTRUCT(){
            $this->user = new userController();
       }

       public function router(){

           if(isset($_POST['mode'])){

            if($_POST['mode']=="regUsuario"){
                   //registro de un torneo
                   $nombre = $_POST['nombre_txt'];
                   $edad = $_POST['edad_txt'];
                   $correo = $_POST['email_txt'];
                   $password = $_POST['password_txt'];
                   $this->user->registrarUsuario($nombre,$edad,$correo,$password);
               }
           }

         
       }

  }
?>