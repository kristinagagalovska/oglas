<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Advertisement;

class AController extends Controller
{
    public function view()
    {
        $advertisements = Advertisement::all();
        return view('advertisements.view')->with('advertisements',$advertisements);
    }
}
?>

