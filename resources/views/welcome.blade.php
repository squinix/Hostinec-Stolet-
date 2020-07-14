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
    <img src="/storage/uploads/denni_menu.jpg" alt="Hostinec stoletá denní menu {{ now()->format('d.m.Y') }}" class="m-auto">
    <h1 class="texl-3xl sm:text-4xl font-thin uppercase text-center pt-16 sm:pt-32 pb-2">
        Nevybrali ste si z denního menu? Zkuste naše minutky 
    </h1>
    <div class="block sm:flex">
        <div class="sm:flex-1 sm:w-1/2 m-auto">
            <img src="/storage/uploads/menu_1.jpg" alt="Hostinec Stoletá stálé menu" class="m-auto">
        </div>
        <div class="sm:flex-1 sm:w-1/2 m-auto">
            <img src="/storage/uploads/menu_2.jpg" alt="Hostinec Stoletá stálé menu" class="m-auto">
        </div>
    </div>
</div>
@endsection

