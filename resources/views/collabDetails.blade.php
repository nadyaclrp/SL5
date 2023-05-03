@extends('master')
@section('tittle','Project Details')

@section('titlePage', 'Project Details ')
@section('body')
    <div class="bg-gradient-to-t from-lavenderGray to-white h-fit text-navy">
        <h2 class="px-2 text-left text-xl font-bold underline pt-4">What is {{$tampungPrint['projectName']}}?</h2>
        <h3 class="p-2">{{$tampungPrint['apaItu']}}</h3>
        <h2 class="px-2 text-left text-xl font-bold underline pt-4">{{$tampungPrint['projectName']}}'s Category: {{$tampungPrint['category']}}</h2>
        <h2 class="px-2 text-left text-xl font-bold underline pt-4">{{$tampungPrint['projectName']}}'s Founder</h2>
        <img class=" px-2 pt-2 w-80 h-80 rounded-l my-auto justify-center" src="({{$tampungPrint['founderImage']}})">
        <h2 class="px-2 text-left text-xl font-bold underline pt-4">Webite View {{$tampungPrint['projectName']}}?</h2>
        <img class=" px-2 pt-2 w-80 h-80 rounded-l my-auto justify-center pb-20" src="({{$tampungPrint['webImage']}})">
    </div>
@endsection
