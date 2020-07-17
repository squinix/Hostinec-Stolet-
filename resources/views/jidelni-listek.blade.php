@extends('layouts.app')

@section('title', 'Jídelní lístek - Hostinec Stoletá')

@section('content')
<div class="container" style="min-height: 100vh;">
    <h1 class="text-4xl font-thin uppercase text-center pt-16 sm:pt-32 pb-2">
        Stálý jídelní a nápojový lístek 
    </h1>
    <div class="m-5 border border-black my-16">
        <div class="m-auto">
            <img src="/storage/uploads/stoleta_logo.png" alt="hostinec-stoleta-logo" width="190px" class="m-auto -mt-20 bg-white p-5">
        </div>
        <div class="block md:grid md:grid-cols-2 md:divide-x md:divide-gray-700 pb-6">
            <div class="pt-6 md:py-6 px-10">
                <h1 class="text-2xl text-black font-black uppercase pt-4 pb-2">
                    Polévky
                </h1>
                <p class="text-base font-normal pb-2">
                    <span>
                        Česnečka se sýrem a krutóny
                    </span>
                    <span class="float-right">
                        45,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Kulajda se zastřeným vejcem
                    </span>
                    <span class="float-right">
                        45,-
                    </span>
                </p>
                <h1 class="text-2xl text-black font-black uppercase pt-4 pb-2">
                    Jídla k pivu
                </h1>
                <p class="text-base font-normal pb-2">
                    <span>
                        Paštika z husích jater s višnovou omáčkou
                    </span>
                    <span class="float-right">
                        83,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Míchaný tatarák z hovězí svíčkové
                    </span>
                    <span class="float-right">
                        179,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Grilovaný sýr halloumi s cherry rajčátky a toustem
                    </span>
                    <span class="float-right">
                        109,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Bramborové lupínky s BBQ omáčkou
                    </span>
                    <span class="float-right">
                        65,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Utopenec s cibulí a feferonkou
                    </span>
                    <span class="float-right">
                        52,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Nakládaný hermelín
                    </span>
                    <span class="float-right">
                        69,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Cibulové kroužky
                    </span>
                    <span class="float-right">
                        69,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Pražené solené mandle
                    </span>
                    <span class="float-right">
                        69,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Uzený hovězí jazyk s křenovou espumou
                    </span>
                    <span class="float-right">
                        75,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Domácí tlačenka s cibulí
                    </span>
                    <span class="float-right">
                        64,-
                    </span>
                </p>
                <h1 class="text-2xl text-black font-black uppercase pt-4 pb-2">
                    Saláty
                </h1>
                <p class="text-base font-normal pb-2">
                    <span>
                        Salát Nicoise s tuňákem, olivami, vejcem a brambory
                    </span>
                    <span class="float-right">
                        145,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Caesar salát s kuřecím masem a zastřeným vejcem
                    </span>
                    <span class="float-right">
                        165,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Zelný salát
                    </span>
                    <span class="float-right">
                        55,-
                    </span>
                </p>
            </div>
            <div class="md:py-6 px-10">
                <h1 class="text-2xl text-black font-black uppercase pt-4 pb-2">
                    Hlavní jídla
                </h1>
                <p class="text-base font-normal pb-2">
                    <span>
                        Hovězí Biftek 200g
                    </span><br>
                    <small class="text-gray-700">
                        s fazolkami ve slanině a šťouchaným bramborem
                    </small>
                    <span class="float-right">
                        320,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Hovězí flap steak 200g
                    </span><br>
                    <small class="text-gray-700">
                        s cherry rajčátky, česnekem a bramborami Grenaille
                    </small>
                    <span class="float-right">
                        255,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Vepřová žebírka na medu
                    </span><br>
                    <small class="text-gray-700">
                        se zelným salátem a rozpečeným chlebem
                    </small>
                    <span class="float-right">
                        179,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Pečené vepřové koleno
                    </span><br>
                    <small class="text-gray-700">
                        s chlebem
                    </small>
                    <span class="float-right">
                        219,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Vepřová sekyrka
                    </span><br>
                    <small class="text-gray-700">
                        s hranolky a tatarkou
                    </small>
                    <span class="float-right">
                        179,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Vepřový nebo kuřecí řízek
                    </span><br>
                    <small class="text-gray-700">
                        se šťouchaným bramborem
                    </small>
                    <span class="float-right">
                        149,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Hovězí Cheeseburger
                    </span><br>
                    <small class="text-gray-700">
                        s hranolky
                    </small>
                    <span class="float-right">
                        174,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Halloumi Burger s karamelizovanou cibulkou,
                    </span><br>
                    <small class="text-gray-700">
                        dresinkem z pečeného česneku a s batátovými hranolky (bezmasé)
                    </small>
                    <span class="float-right">
                        169,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Grilovaná vepřová panenka
                    </span><br>
                    <small class="text-gray-700">
                        s hříbkovou omáčkou a batátovými hranolky
                    </small>
                    <span class="float-right">
                        189,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Tagliatelle s kuřecím masem,
                    </span><br>
                    <small class="text-gray-700">
                        sešenými rajčaty, špenátem, smetanovou omáčkou a parmezánem
                    </small>
                    <span class="float-right">
                        155,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Kuřecí steak s bylinkovo-ořechovou krustou,
                    </span><br>
                    <small class="text-gray-700">
                        grilovanou kořenovou zeleninou a pečenými bramborami Grenaille
                    </small>
                    <span class="float-right">
                        169,-
                    </span>
                </p>
                <p class="text-base font-normal pb-2">
                    <span>
                        Grilovaný filet ze pstruha na citrónovém másle
                    </span><br>
                    <small class="text-gray-700">
                        s černou čočkou a cuketou
                    </small>
                    <span class="float-right">
                        189,-
                    </span>
                </p>
            </div>
        </div>
    </div>
    <h1 class="texl-3xl sm:text-4xl font-thin uppercase text-center pt-16 sm:pt-32 pb-2">
        Podívejte se na naše denní menu.
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

