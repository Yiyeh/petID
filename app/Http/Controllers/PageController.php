<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use App\Adoption;

class PageController extends Controller
{
    public function index(){

    	$pets = Pet::orderBy('id','desc')->paginate();
    	$losts = Pet::orderBy('id','desc')->where('lost', 1)->paginate();
    	$adoptions = Adoption::orderBy('id','desc')->paginate();

    	return view('users.index', compact('pets', 'losts','adoptions'));

    }
}
