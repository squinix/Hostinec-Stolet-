@extends('layouts.app')

@section('title', 'Informace - Hostinec Stoletá')

@section('content')
<div class="container" style="min-height: 100vh;">
    <h1 class="text-4xl font-thin uppercase text-center pt-16 sm:pt-32 pb-2">
        O našem hostinci 
    </h1>
    <div class="block sm:flex sm:justify-center sm:items-center my-16">
        <div class="sm:flex-1 m-12">
            <h1 class="text-base font-black uppercase text-brown">
                Historie hostince
            </h1>
            <hr class="w-1/3 my-6">
            <p class="text-base sm:text-lg font-thin tracking-wide">
                Stoletá vždy patřila k pilířům společenského a kulturního života v Kolíně. Hospoda zde byla už ve
                20. století. Hostinec Stoletá se znovuotevřel 23. června 2018. Zaměřujeme se hlavně na tradiční
                českou kuchyni. Hosté mohou ochutnat naše vyhlášené speciality, jako například žebra na medu,
                cheeseburger s hranolkami a nebo domácí dezerty. Každý den pro vás nabízíme polední menu.
                Pestrému výběru nápojů vévodí správně načepované a vychlazené pivo Pilsner Urquell a nebo bohatá
                vinotéka pečlivě vybraným moravských vín.
                To vše v krášně malebném hostinci v centru města Kolína.    
            </p> 
        </div>
        <div class="sm:flex-1 m-12">
            <img src="/storage/uploads/DSC_2144.jpg" alt="Hostinec Stoletá prostory" class="shadow-2xl rounded" width="100%">
        </div>
    </div>
</div>
@endsection

