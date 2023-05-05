@extends('master')
@section('tittle','Project Details')
<div class="w-full h-6 bg-transparent"></div>
<a href="/profile/#experiences">
    <svg width="40" height="40" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-8">
        <path d="M10 60C10 46.7392 15.2678 34.0215 24.6447 24.6447C34.0215 15.2678 46.7392 10 60 10C66.5661 10 73.0679 11.2933 79.1342 13.806C85.2005 16.3188 90.7124 20.0017 95.3553 24.6447C99.9983 29.2876 103.681 34.7995 106.194 40.8658C108.707 46.9321 110 53.4339 110 60C110 73.2608 104.732 85.9785 95.3553 95.3553C85.9785 104.732 73.2608 110 60 110C53.4339 110 46.9321 108.707 40.8658 106.194C34.7995 103.681 29.2876 99.9983 24.6447 95.3553C15.2678 85.9785 10 73.2608 10 60ZM90 55H50L67.5 37.5L60.4 30.4L30.8 60L60.4 89.6L67.5 82.5L50 65H90V55Z" fill="black"/>
    </svg>
</a>
@section('titlePage', 'Project Details')
@section('body')
    <div class="bg-gradient-to-t from-lavenderGray to-white h-fit text-navy justify-items-center w-full pb-8">
        <h2 class="mt-10 text-left text-xl font-bold border-2 border-navy pt-4 w-fit ml-8 p-3 bg-peach rounded-xl">{{$tampungPrint['projectName']}}'s Category: {{$tampungPrint['category']}}</h2>
        <div class="flex flex-row w-[96%] mx-8 mt-4">
            <div class="w-[65%] rounded-3xl border-2 border-navy pb-4">
                <h2 class="px-8 text-left text-xl font-bold underline pt-4">What is {{$tampungPrint['projectName']}}?</h2>
                <h3 class="px-8 w-[90%]">{{$tampungPrint['apaItu']}}</h3>
            </div>
            <div class="w-[35%] pt-4 pb-4">
                <h2 class="px-8 text-left text-xl font-bold underline">{{$tampungPrint['projectName']}}'s Founder</h2>
                <img class=" px-8 pt-2 w-full max-h-[300px] my-auto justify-center" src="{{$tampungPrint['founderImage']}}">
            </div>
        </div>
        <div class="rounded-3xl border-2 border-navy mx-8 mt-4 w-[96%]">
            <h2 class="px-8 text-left text-xl font-bold underline pt-4">{{$tampungPrint['projectName']}}'s View</h2>
            <img class=" px-8 pt-2 w-full h-[50%] rounded-l my-auto justify-center pb-20" src="{{$tampungPrint['webImage']}}">
        </div>
    </div>
@endsection
