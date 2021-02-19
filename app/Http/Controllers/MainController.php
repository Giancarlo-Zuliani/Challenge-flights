<?php

namespace App\Http\Controllers;
use App\Airport;
use App\Flight;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
      $airports = Airport::all();
      return view('aereoporti', compact('airports'));
    }

    public function result(Request $request)
    {
      $arr_code = $request -> code_arrival;
      $dep_code = $request -> code_departure;
      $third = $request -> code_third;

      $first = $this->check($arr_code , $dep_code);
      $second = $this->check($dep_code , $third);
      $total = $first['min_price'] + $second['min_price'];
      $firstId = $first['low_id'];
      $secondId = $second['low_id'];
      $firstFlight = Flight::findOrFail($firstId);
      $secondFlight = Flight::findOrFail($secondId);

      return view('results', compact('total' , 'firstFlight' ,'secondFlight'));
      
      
      
      
      
      

      


    }


    private function check($dep,$arr){
      
      $flights = Flight::all();
      $matchedFlights=[];
      foreach($flights as $f){
        if($f -> code_departure == $dep && $f -> code_arrival == $arr){
          $matchedFlights[] = $f;
        }
      };
        if(count($matchedFlights) > 0){
         
          $min_price = $matchedFlights[0] -> price;
          $low_id = $matchedFlights[0] -> id;
          
          for($i=0;$i< count($matchedFlights);$i++){
            $pr = $matchedFlights[$i] -> price;
            if($min_price > $pr){
              $min_price = $pr;
              $low_id = $matchedFlights[$i] -> id;
            }          
          }
          $f = [
            'min_price' => $min_price,
            'low_id' => $low_id
          ];

          return $f;   
    }
  }
}