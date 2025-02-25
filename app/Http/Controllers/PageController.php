<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Welcome';
        }
    public function about() {
        return 'Name : Sabrina Rahmadini
        NIM : 2341760155';
        }
}
