@extends('layouts.auth')

@section('content')
    <div class="form-container">
        <div class="form-card">
            <h1>Login</h1>
            <form>
                <div class="form-group">
                    <input placeholder="Masukkan email" type="email" required autofocus>
                </div>
                <div class="form-group">
                    <input placeholder="Masukkan password" type="password" required>
                </div>
                <div class="form-group">
                    <a class="btn" href="/home">Login</a>
                </div>
            </form>
            <div class="form-group">
                <p>Belum punya akun? <a href="/register">Daftar sekarang</a></p>
            </div>
        </div>
    </div>
@endsection