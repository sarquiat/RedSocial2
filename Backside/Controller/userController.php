<?php
  class userController{

     public function __construct()
    {
        
        
    }

    public function registrarUsuario($nombre,$edad,$email,$password){
         if($nombre!= "" && $edad !="" && $email!="" && $password!=""){
       
       
       try{
           
               
                }else{
                    echo json_encode("upss ha ocurrido un error");
                }
                
            }catch (mysqli_sql_exception $e){
                http_response_code(200);
                $array = array("error" => $e->getMessage());
                
            }
       }else{
             
             echo "error";
       }
    }

?>