@extends('layouts.app')

@section('title', 'Kontakt - Hostinec Stoletá')

@section('content')
<div class="container" style="min-height: 100vh;">
    <h1 class="text-4xl font-thin uppercase text-center pt-16 sm:pt-32 pb-2">
        Kontaktní informace 
    </h1>
    <div class="block sm:flex sm:justify-center sm:items-center my-16">
        <div class="sm:flex-1 m-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.1473228980904!2d15.20015591593293!3d50.02733522564205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470c152159aee9eb%3A0x77f3625ca1f5fdef!2sHostinec%20Stolet%C3%A1!5e0!3m2!1scs!2scz!4v1594372446374!5m2!1scs!2scz"  class="shadow-2xl rounded" width="100%" height="450px" frameborder="0" allowfullscreen="true" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
        <div class="sm:flex-1 m-12">
            <h1 class="text-base font-black uppercase text-brown">
                Kontakt
            </h1>
            <hr class="w-1/3 my-6">
            <ul class="tracking-wide">
                <li>
                    <strong class="text-sm font-bold uppercase">
                        Adresa    
                    </strong>
                </li>
                <li>
                    <small class="text-base font-thin">
                        Hostinec Stoletá, Kutnohorská 33, Kolín
                    </small>
                </li>
                <li class="mt-4">
                    <strong class="text-sm font-bold uppercase">
                        Telefon    
                    </strong>
                </li>
                <li>
                    <small class="text-base font-thin">
                        +420 721 181 007
                    </small>
                </li>
                <li class="mt-4">
                    <strong class="text-sm font-bold uppercase">
                        E-mail    
                    </strong>
                </li>
                <li>
                    <small class="text-base font-thin">
                        hostinecstoleta@gmail.com
                    </small>
                </li>
            </ul>
            <ul class="tracking-wide block sm:hidden mt-4">
                <li>
                    <strong class="text-sm font-bold uppercase">
                        Facebook    
                    </strong>
                </li>
                <li>
                    <small class="text-base font-thin">
                        <button class="py-2 px-2 bg-blue-700 inline-flex items-center mr-2">
                            <a href="https://www.facebook.com/HostinecStoleta" class="uppercase text-xs font-black text-white">
                                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current w-4 h-4">
                                    <path d="M 19.253906 2 C 15.311906 2 13 4.0821719 13 8.8261719 L 13 13 L 8 13 L 8 18 L 13 18 L 13 30 L 18 30 L 18 18 L 22 18 L 23 13 L 18 13 L 18 9.671875 C 18 7.884875 18.582766 7 20.259766 7 L 23 7 L 23 2.2050781 C 22.526 2.1410781 21.144906 2 19.253906 2 z"/>
                                </svg>
                            </a>
                        </button>
                        Hostinec Stoletá
                    </small>
                </li>
                <li class="mt-4">
                    <strong class="text-sm font-bold uppercase">
                        Instagram    
                    </strong>
                </li>
                <li>
                    <small class="text-base font-thin">
                        <button class="py-2 px-2 bg-red-700 inline-flex items-center mr-2">
                            <a href="https://www.instagram.com/hostinec_stoleta/" class="uppercase text-xs font-black text-white">
                                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="fill-current w-4 h-4">
                                    <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"/>
                                </svg>
                            </a>
                        </button>
                        @hostinecstoleta
                    </small>
                </li>
            </ul>
            <table class="hidden sm:block mt-4 w-full m-auto text-left">
                <thead>
                    <th class="text-sm font-bold uppercase">
                        Facebook
                    </th>
                    <th class="text-sm font-bold uppercase pl-2">
                        Instagram
                    </th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-base font-thin">
                            <button class="py-2 px-2 bg-blue-700 inline-flex items-center mr-2">
                                <a href="https://www.facebook.com/HostinecStoleta" class="uppercase text-xs font-black text-white">
                                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="fill-current w-4 h-4">
                                        <path d="M 19.253906 2 C 15.311906 2 13 4.0821719 13 8.8261719 L 13 13 L 8 13 L 8 18 L 13 18 L 13 30 L 18 30 L 18 18 L 22 18 L 23 13 L 18 13 L 18 9.671875 C 18 7.884875 18.582766 7 20.259766 7 L 23 7 L 23 2.2050781 C 22.526 2.1410781 21.144906 2 19.253906 2 z"/>
                                    </svg>
                                </a>
                            </button>
                            Hostinec Stoletá
                        </td>
                        <td class="text-base font-thin pl-2">
                            <button class="py-2 px-2 bg-red-700 inline-flex items-center mr-2">
                                <a href="https://www.instagram.com/hostinec_stoleta/" class="uppercase text-xs font-black text-white">
                                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="fill-current w-4 h-4">
                                        <path d="M 16 3 C 8.8324839 3 3 8.8324839 3 16 L 3 34 C 3 41.167516 8.8324839 47 16 47 L 34 47 C 41.167516 47 47 41.167516 47 34 L 47 16 C 47 8.8324839 41.167516 3 34 3 L 16 3 z M 16 5 L 34 5 C 40.086484 5 45 9.9135161 45 16 L 45 34 C 45 40.086484 40.086484 45 34 45 L 16 45 C 9.9135161 45 5 40.086484 5 34 L 5 16 C 5 9.9135161 9.9135161 5 16 5 z M 37 11 A 2 2 0 0 0 35 13 A 2 2 0 0 0 37 15 A 2 2 0 0 0 39 13 A 2 2 0 0 0 37 11 z M 25 14 C 18.936712 14 14 18.936712 14 25 C 14 31.063288 18.936712 36 25 36 C 31.063288 36 36 31.063288 36 25 C 36 18.936712 31.063288 14 25 14 z M 25 16 C 29.982407 16 34 20.017593 34 25 C 34 29.982407 29.982407 34 25 34 C 20.017593 34 16 29.982407 16 25 C 16 20.017593 20.017593 16 25 16 z"/>
                                    </svg>
                                </a>
                            </button>
                            @hostinecstoleta
                        </td>    
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div>
        <div class="block sm:flex">
            <div class="sm:flex-1 m-12">
                <h1 class="text-base font-black uppercase text-brown">
                    Otevírací doba
                </h1>
                <hr class="w-1/3 my-6">
                <ul class="tracking-wide">
                    <li>
                        <strong class="text-sm font-bold uppercase">
                            Pondělí - čtvrtek    
                        </strong>
                    </li>
                    <li>
                        <small class="text-base font-thin">
                            10:30 - 23:00, kuchyň do 21:00
                        </small>
                    </li>
                    <li class="mt-4">
                        <strong class="text-sm font-bold uppercase">
                            Pátek    
                        </strong>
                    </li>
                    <li>
                        <small class="text-base font-thin">
                            10:30 - 1:00, kuchyň do ...
                        </small>
                    </li>
                    <li class="mt-4">
                        <strong class="text-sm font-bold uppercase">
                            Sobota    
                        </strong>
                    </li>
                    <li>
                        <small class="text-base font-thin">
                            11:30 - 1:00, kuchyň do ...
                        </small>
                    </li>
                    <li class="mt-4">
                        <strong class="text-sm font-bold uppercase">
                            Neděle    
                        </strong>
                    </li>
                    <li>
                        <small class="text-base font-thin">
                            11:30 - 22:00, kuchyň do 20:00
                        </small>
                    </li>
                </ul>
            </div>
            <div class="sm:flex-1 m-12">
                <img src="/storage/uploads/DSC_2151.jpg" alt="Hostinec stoletá výčep" class="shadow-2xl rounded" width="100%">
            </div>
        </div>
    </div>
</div>
@endsection

