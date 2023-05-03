@extends('master')
@section('tittle','Project Details')

@section('titlePage', 'Project Details')
@section('body')
    <div class="bg-gradient-to-t from-lavenderGray to-white h-fit text-navy">
        <h2 class="px-8 text-left text-xl font-bold underline pt-4">{{$tampungPrint['projectName']}}'s Category: {{$tampungPrint['category']}}</h2>
        <h2 class="px-8 text-left text-xl font-bold underline pt-4">What is {{$tampungPrint['projectName']}}?</h2>
        <h3 class="px-8">{{$tampungPrint['apaItu']}}</h3>
        <h2 class="px-8 text-left text-xl font-bold underline pt-4">{{$tampungPrint['projectName']}}'s Founder</h2>
        <img class=" px-8 pt-2 w-[35%] h-[3 5%] rounded-l my-auto justify-center " src="{{$tampungPrint['founderImage']}}">
        <h2 class="px-8 text-left text-xl font-bold underline pt-4">{{$tampungPrint['projectName']}}'s View</h2>
        <img class=" px-8 pt-2 w-[50%] h-[50%] rounded-l my-auto justify-center pb-20" src="{{$tampungPrint['webImage']}}">
    </div>
@endsection
