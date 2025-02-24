<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke(){
        return "The Laravel Controller is one of the parts where all web functionality is created. In the Controller, settings are made to access the Model related to the Database and also how to send the data to the View. Various processing is also done in the Controller.";
    }
}
