@extends('layouts.auth')

@section('content')
    <div class="form-container">
        <div class="form-card">
            <h1>Register</h1>
            <form>
                <div class="form-group">
                    <input placeholder="Masukkan nama" type="text" required autofocus>
                </div>
                <div class="form-group">
                    <input placeholder="Masukkan email" type="email" required autofocus>
                </div>
                <div class="form-group">
                    <input placeholder="Masukkan nomor handphone" type="number" required autofocus>
                </div>
                <div class="form-group">
                    <input placeholder="Masukkan password" type="password" required>
                </div>
                <div class="form-group">
                    <a class="btn" href="/">Daftar</a>
                </div>
            </form>
            <div class="form-group">
                <p>Sudah punya akun? <a href="/">login</a></p>
            </div>
        </div>
    </div>
@endsection