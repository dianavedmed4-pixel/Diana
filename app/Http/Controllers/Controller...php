<?php

namespace App\Http\Controllers;

use App\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlightController extends Controller
{
  /**
   * Создание нового экземпляра рейса.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request)
  {
    
    $flight = new Flight;

    $flight->name = $request->name;

    $flight->save();
  }
}