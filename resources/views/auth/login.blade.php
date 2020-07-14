@extends('layouts.app')

@section('content')
    <div class="w-64 sm:w-96 m-auto bg-gray-700 my-32 border">
        <h1 class="text-2xl text-white font-thin uppercase text-center py-4 bg-brown">
            Přihlášení
        </h1>
        <div class="p-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="">
                    <label for="email" class="font-black text-xs uppercase">E-mailová adresa</label><br>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                
                <div class="mt-4">
                    <label for="password" class="font-black text-xs uppercase">Heslo</label><br>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mt-4">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>    
                </div>

                <div class="text-right mt-6">
                    <button type="submit" class="btn btn-primary bg-brown px-2 py-3 text-white font-thin text-sm uppercase">
                        Přihlásit se
                    </button>
                </div>
            </form>    
        </div>
    </div>
@endsection
