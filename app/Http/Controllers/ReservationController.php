<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Service;
use App\Hour;

class ReservationController extends Controller
{
    public function reservacion()
    {
        $servicios = Service::all();
        $productos = DB::table('food')->where('reservacion', 1)->get();
        $horas = Hour::all();
        //$productos = Product::all();
        //return view('reservacion')->with('productos',$productos);
        return view('reservacion', compact('servicios', 'productos','horas'));
    }
}
