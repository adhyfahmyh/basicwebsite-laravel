@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="text-align:center;"><h4 style="margin:0;">{{ __('Registrasi Akun') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="username" class="col-md-2 col-form-label text-md-right"><p style="margin:0;color:crimson;display:inline">*</p><strong>{{ __('Username') }}</strong></label>

                            <div class="col-md-9">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Masukan username untuk Akun anda">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="firstname" class="col-md-2 col-form-label text-md-right"><p style="margin:0;color:crimson;display:inline">*</p><strong>{{ __('Nama Depan') }}</strong></label>

                            <div class="col-md-9">
                                <input id="firstname" type="text" class="form-control @error('name') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="Contoh: Ahmad Dahlan Wahyu nama depannya adalah Ahmad">

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-2 col-form-label text-md-right"><p style="margin:0;color:crimson;display:inline">*</p><Strong>{{ __('Nama Belakang') }}</Strong></label>

                            <div class="col-md-9">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Contoh: Ahmad Dahlan Wahyu nama belakangnya adalah Wahyu">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="about" class="col-md-2 col-form-label text-md-right"><strong>{{ __('Deskripsi Diri') }}</strong></label>

                            <div class="col-md-9">
                                <textarea name="about" id="about" cols="30" rows="10" class="form-control @error('about') is-invalid @enderror" value="{{ old('about') }}" autocomplete="about" placeholder="Deskripsikan diri anda (boleh dikosongkan)"></textarea>
                                {{-- <input id="about" type="" class="form-control @error('about') is-invalid @enderror" name="about" value="{{ old('about') }}" autocomplete="about"> --}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right"><p style="margin:0;color:crimson;display:inline">*</p><strong>{{ __('Alamat E-Mail') }}</strong></label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukan alamat email anda">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="contact" class="col-md-2 col-form-label text-md-right"><strong>{{ __('Nomor HP') }}</strong></label>

                            <div class="col-md-9">
                                <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="contact" placeholder="Masukan nomor handphone anda">
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label for="birthday" class="col-md-2 col-form-label text-md-right"><p style="margin:0;color:crimson;display:inline">*</p><strong>{{ __('Tanggal Lahir') }}</strong></label>

                            <div class="col-md-9">
                                <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" autocomplete="birthday" placeholder="Tanggal Lahir anda">
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="link" class="col-md-2 col-form-label text-md-right"><strong>{{ __('Link Website') }}</strong></label>

                            <div class="col-md-9">
                                <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" autocomplete="link" placeholder="Kosongkan jika tidak ada">
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right"><p style="margin:0;color:crimson;display:inline">*</p><strong>{{ __('Kata Sandi') }}</strong></label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukan kata sandi untuk akun anda">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right"><p style="margin:0;color:crimson;display:inline">*</p><strong>{{ __('Ulangi Kata Sandi') }}</strong></label>

                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Masukan kembali kata sandi anda">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrasi Akun') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
