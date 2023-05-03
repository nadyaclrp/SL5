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
            ['projectName' => 'Fugemy', 'category' => 'Silver (Application)', 'apaItu' => 'FuGemy is an educational website that was founded in December 2010. Its branches are spread all over the world. FuGemy provides services to sell courses to people who want to learn online.', 'founderImage' => '../assets/foundlyFounder.png', 'webImage' => '../assets/foundlyWeb.png'],
            ['projectName' => 'Foundly', 'category' => 'Gold (Artificial Intelligence)', 'apaItu' => '', 'founderImage' => '../assets/foundlyFounder.png', 'webImage' => '../assets/foundlyWeb.png'],
            ['projectName' => 'PoorBye', 'category' => 'Silver (Application)', 'apaItu' => 'FuGemy is an educational website that was founded in December 2010. Its branches are spread all over the world. FuGemy provides services to sell courses to people who want to learn online.', 'founderImage' => '../assets/foundlyFounder.png', 'webImage' => '../assets/foundlyWeb.png'],
            ['projectName' => 'Prediction Heart Disease', 'category' => 'Red (Machine Learning)', 'apaItu' => 'FuGemy is an educational website that was founded in December 2010. Its branches are spread all over the world. FuGemy provides services to sell courses to people who want to learn online.', 'founderImage' => '../assets/foundlyFounder.png', 'webImage' => '../assets/foundlyWeb.png']
        ];

        $tampungPrint = [];
        foreach($detailedProject as $detail) {
            if($detail['projectName'] == $check){
                $tampungPrint = $detail;
            }
        };
        return view('collabDetails',compact('tampungPrint'));
    }

}

