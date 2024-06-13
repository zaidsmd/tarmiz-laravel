@extends('admin.auth.main')
@section('document-title','Login')
@section('main-content')
    <div class="card my-5">
        <div class="card-body">
            <div class="text-center">
                <img src="{{asset('img/logo2.png')}}" class="img-fluid w-75" alt="img">
            </div>
            <hr class="border my3" >
            <h4 class="text-center f-w-500 mb-3">Connectez-vous avec votre email</h4>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email-input" placeholder="Email adresse">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                           id="password-input" name="password" placeholder="Mot de passe">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}

                    </div>
                    @enderror
                </div>
                <div class="d-grid mt-4">
                    <button class="btn btn-primary">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
@endsection
