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

    // public function details($check){

    //     $detailedItems = [
    //         ['itemName' => 'Diamond', 'level'=>'R','price' => 1000,'desc'=>'Status benda ini Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
    //         ['itemName' => 'Weapon', 'level'=>'SR','price' => 2000,'desc'=>'Status benda ini Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
    //         ['itemName' => 'Knife', 'level'=>'SSR','price' => 3000,'desc'=>'Status benda ini Super Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
    //         ['itemName' => 'Super Diamond', 'level'=>'R','price' => 4000, 'desc'=>'Status benda ini Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
    //         ['itemName' => 'Super Weapon',  'level'=>'SSR','price' => 5000,'desc'=>'Status benda ini Super Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
    //         ['itemName' => 'Super Knife', 'level'=>'SR','price' => 6000,'desc'=>'Status benda ini Super Rare, sangat bermanfaat untuk meningkatkan kekuatan karaktermu!'],
    //     ];

    //     $tampungPrint = [];
    //     foreach($detailedItems as $description) {
    //         if($description['itemName'] == $check){
    //             $tampungPrint = $description;
    //         }
    //     };
    //     return view('productDetail',compact('tampungPrint'));
    // }

}

