@extends('layouts.app')

@section('title', 'Jídelní lístek - Hostinec Stoletá')

@section('content')
<div class="container" style="min-height: 100vh;">
    <h1 class="text-4xl font-thin uppercase text-center pt-16 sm:pt-32 pb-2">
        Stálý jídelní a nápojový lístek 
    </h1>
    <div class="block sm:flex">
        <div class="sm:flex-1 sm:w-1/2 m-auto">
            <img src="/storage/uploads/menu_1.jpg"  alt="Hostinec Stoletá stálé menu" class="m-auto">
        </div>
        <div class="sm:flex-1 sm:w-1/2 m-auto">
            <img src="/storage/uploads/menu_2.jpg"  alt="Hostinec Stoletá stálé menu" class="m-auto">
        </div>
    </div>
    <h1 class="texl-3xl sm:text-4xl font-thin uppercase text-center pt-16 sm:pt-32 pb-2">
        Podáváme také hotovky, podívejte se na naše denní menu.
    </h1>
    <div class="text-center">
        <button type="button" class="bg-brown hover:shadow-xl text-white font-thin py-2 sm:py-4 px-4 sm:px-6 text-xs sm:text-base mt-8 mb-16 uppercase">
            <a href="{{ route('hlavni-strana') }}">
                Přejít na denní menu
            </a>
        </button>    
    </div>
</div>
@endsection

