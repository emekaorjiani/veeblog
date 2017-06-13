<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controller\Controller;
class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.home');
    }
}
