<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class collabController extends Controller
{
    public function experiences(){
        $collabCard = [
            ['application' => 'Fugemy', 'description' => 'Education Application', 'image' => '/assets/Fugemy.png'],
            ['application' => 'Foundly', 'description' => 'Artificial Intelligence', 'image' => '/assets/Foundly.png'],
            ['application' => 'PoorBye', 'description' => 'Financial Application', 'image' => '/assets/PoorBye.png'],
            ['application' => 'Prediction Heart Disease', 'description' => 'Machine Learning', 'image' => '/assets/HeartPrediction.png'],
        ];
        return view('profile',compact('collabCard'));
    }

    public function details($check){

        $detailedProject = [
            ['projectName' => 'Fugemy', 'cawu'=>'2','desc'=>'Status benda ini Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
            ['projectName' => 'Foundly', 'cawu'=>'3','desc'=>'Status benda ini Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
            ['projectName' => 'PoorBye', 'cawu'=>'4','desc'=>'Status benda ini Super Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
            ['projectName' => 'Prediction Heart Disease', 'cawu'=>'4','desc'=>'Status benda ini Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],['projectName' => 'Super Knife', 'level'=>'SR','price' => 6000,'desc'=>'Status benda ini Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
        ];

        // $tampungPrint = [];
        // foreach($detailedItems as $description) {
        //     if($description['itemName'] == $check){
        //         $tampungPrint = $description;
        //     }
        // };
        // return view('productDetail',compact('tampungPrint'));
    }

}

