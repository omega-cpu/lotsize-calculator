<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

   
    public function result(Request $request){
        // dd($request->all()); // Add this line for debugging
        
        $required = $request->validate([
           'points' => 'required',
           'tickValue' => 'required',
           'totalEquity'=> 'required',
           'riskPercentage'=> 'required',
        ]);
        $point = $request->input('points');
        $tickValue = $request->input('tickValue'); 
        $riskPerOneStandartLot = $point * $tickValue;

        $riskPercent = $request->input('riskPercentage');
        $totalEquity = $request->input('totalEquity');
        $maxRiskPerTrade = (($riskPercent/100) * $totalEquity);

        $lotSize = number_format(($maxRiskPerTrade / $riskPerOneStandartLot), 2, '.', '');
        $data = [
            'riskPerOneStandartLot' => $riskPerOneStandartLot,
            'maxRiskPerTrade'  => $maxRiskPerTrade,
            'lotSize' => $lotSize,
        ];
        return view('results',$data);
    }


}
