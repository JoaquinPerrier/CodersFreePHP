<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller{
    public function index(){

        $contactModel = new Contact();

        // return $contactModel->all(); // TRAE TODOS

        // return $contactModel->find(1); // BUSCA POR ID EN BASE DE DATOS

        // return $contactModel->where("email", "joaquinperrier@hotmail.com")->first(); // FILTRA POR CAMPO Y VALUE

        // return $contactModel->create(['name'=>'Pepito El Capoeira', 'email'=> 'pepito@gmail.com', 'phone'=>'115566']);

        $contactModel->delete(18);
        return "Eliminao";

        return $this->view('home', ['title'=>'Home', 'description'=>'Esta es la página Home', 'dataDesdeDB'=>$contactModel->all()]);
    }

    
}
?>