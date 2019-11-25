@extends('layouts.app')

@section('content')
<div class="container" id="login-container">
    <div class="row justify-content-center">
        <div class="col-md-7"><br><br><br><br>
            <div class="card">
                <div class="card-header" style="text-align:center;">
                    <h4 style="margin:0;">{{ __('Login') }}</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Username atau E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="identity" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Kata Sandi') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <div class="form-check">
                                    {{-- <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label> --}}
                                    <input class="form-check-input" type="checkbox" name="show" id="show">
                                    <label class="form-check-label" for="show">
                                        {{ __('Tampilkan Kata Sandi') }}
                                    </label>
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <div class="divider" style="width:10px;height:auto;display:inline-block"></div>
                                <a href="register" class="btn btn-secondary">
                                    {{ __('Registrasi Akun') }}
                                </a>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-9">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Lupa Kata Sandi?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#show').on('change', function(){
            $('#password').attr('type',$('#show').prop('checked')==true?"text":"password"); 
        });
    });
</script>
@endsection
