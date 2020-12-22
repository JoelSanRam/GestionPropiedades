@extends('MasterPage.admin')

@section('admin')
<div class="login bg-black animated fadeInDown" style="margin-top: -75px">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand" style="text-align: center">
                    <img src="{{ asset('assets/img/logo/logo.svg')}}" alt="Logo" class="logobonito2">

                </div>

            </div>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">
                @error('email')
                    <p class="text-white text-center">{{ $message }}</p>
                @enderror

                @error('password')
                    <p class="text-white text-center">{{ $message }}</p>
                @enderror

                <form method="POST" action="{{ route('login') }}" class="margin-bottom-0">
                    @csrf

                    <div class="form-group m-b-20">
                        <input type="text" class="form-control form-control-lg inverse-mode" style="background-color: #ffffff; color: black" placeholder="Usuario" name="email" id="email" value="{{ old('email') }}" required/>
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control form-control-lg inverse-mode" style="background-color: #ffffff; color: black" placeholder="Contraseña" id="password" name="password" required  />
                    </div>

                    <div class="login-buttons">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" style="background-color: #1C4482">Iniciar sesión</button>
                    </div>
                </form>
            </div>
            <!-- end login-content -->
        </div>

@endsection
