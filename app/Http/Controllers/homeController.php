<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('index', ['properties' => $properties]);
    }


}
