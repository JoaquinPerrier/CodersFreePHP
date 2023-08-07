<?php

namespace App\Controllers;

class Controller{

    public function view($route, $data = []){
        extract($data); // CREA VARIABLES POR CADA DATA (ES COMO DESTRUCTURING DE JS)

        if(file_exists("../resources/views/{$route}.php")){

            ob_start();
            include "../resources/views/{$route}.php";
            $content = ob_get_clean();
            
            return $content;
        }else{
            return "el archivo no existe";
        }

    }
}

?>