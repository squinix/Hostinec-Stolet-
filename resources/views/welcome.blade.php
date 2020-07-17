@extends('layouts.app')

@section('title', 'Hostinec Stoletá')

@section('content')
<div class="container" style="min-height: 100vh;">
    <h1 class="text-4xl font-thin uppercase text-center pt-16 sm:pt-32 pb-2">
        Denní menu 
    </h1>
    <p class="text-center text-base font-thin text-gray-600 pb-6">
        {{ __('messages.' . now()->format('l')) }} {{ now()->format('d.m.') }}
    </p>
    <img src="/storage/uploads/denni_menu.jpg?{{ now() }}" alt="Hostinec stoletá denní menu {{ now()->format('d.m.Y') }}" class="m-auto">
    <h1 class="texl-3xl sm:text-4xl font-thin uppercase text-center pt-16 sm:pt-32 pb-2">
        Nevybrali ste si z denního menu? Zkuste naše minutky 
    </h1>
    <div class="text-center">
        <button type="button" class="bg-brown hover:shadow-xl text-white font-thin py-2 sm:py-4 px-4 sm:px-6 text-xs sm:text-base mt-8 mb-16 uppercase">
            <a href="{{ route('jidelni-listek') }}">
                Přejít na jídelní lístek
            </a>
        </button>    
    </div>
</div>
@endsection

