<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller{
    public function index(){

        $contactModel = new Contact();

        return $contactModel->all();


        return $this->view('home', ['title'=>'Home', 'description'=>'Esta es la página Home', 'dataDesdeDB'=>$contactModel->all()]);
    }

    
}
?>