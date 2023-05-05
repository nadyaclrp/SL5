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
            ['projectName' => 'Fugemy', 'category' => 'Silver (Application)', 'apaItu' => '
                FuGemy is an educational website that was founded in December 2010. Its branches are spread all over the world. FuGemy provides services to sell courses to people who want to learn online.
                This app is an online learning platform specially designed for high school students. This application provides access to students to study various subjects taken at school. Academic course applications for high school students usually provide learning modules that have been developed by experts and experienced teachers, and are packaged in the form of videos, texts and images that are interesting and easy to understand. With this academic course application for high school students, students can get access to learning that is more flexible and can study anytime and anywhere using their devices such as smartphones, tablets or laptops.
The application also displays testimonials from alumni who have successfully graduated from well-known Indonesian universities.
                ', 'founderImage' => '../assets/fugemyFounder.jpg', 'webImage' => '../assets/fugemyWeb.png'],
            ['projectName' => 'Foundly', 'category' => 'Gold (Artificial Intelligence)', 'apaItu' => '
                Object recognition is the area of artificial intelligence (AI) concerned with the abilities of robots and other AI implementations to recognize various things and entities.
                Object recognition allows robots and AI programs to pick out and identify objects from inputs like video and still camera images. Methods used for object identification include 3D models, component identification, edge detection and analysis of appearances from different angles.
                ', 'founderImage' => '../assets/foundlyFounder.png', 'webImage' => '../assets/foundlyWeb.png'],
            ['projectName' => 'PoorBye', 'category' => 'Silver (Application)', 'apaItu' => '
            Through the Application, we offer personal financial management services including tracking transactions, budgets, and savings, financial education and additional services including but not limited to, financial reminder features, chat features with chatbots, and financial consulting features.
                ', 'founderImage' => '../assets/poorbyeFounder.jpeg', 'webImage' => '../assets/poorbyeWeb.png'],
            ['projectName' => 'Prediction Heart Disease', 'category' => 'Red (Machine Learning)', 'apaItu' => '
                The Heart Disease Prediction application is an end user support and online consultation project. Here, we propose a web application that allows users to get instant guidance on their heart disease through an intelligent system online. The application is fed with various details and the heart disease associated with those details.
                The application allows user to share their heart related issues. It then processes user specific details to check for various illness that could be associated with it.
            ', 'founderImage' => '../assets/heartFounder.jpeg', 'webImage' => '../assets/heartWeb.png']
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

