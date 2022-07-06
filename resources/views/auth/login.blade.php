@extends('layouts.main')

@section('title', 'Masuk')

@section('content')
    <div class="d-flex justify-content-center mt-2">
        <div class="card of-card-auth mb-4" style="width: 30rem">
            <div class="of-bg-red of-font-header text-light fs-4 p-3 card-img-top mb-3">
                Masuk
            </div>
            <div class="card-body">
                <div>
                    <div class="mb-3">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username"
                            required>
                    </div>
                    <div class="mb-1">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Kata Sandi"
                            required>
                    </div>
                    <div class="mb-4">
                        <a class="link-danger" href="#"><small>Lupa sandi?</small></a>
                    </div>
                    <div class="mb-3">
                        <div class="mb-2 form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember">
                            <label for="remember" class="form-check-label">Ingat Saya</label>
                        </div>
                        <button class="btn w-100 of-bg-red text-light">Kirim</button>
                    </div>
                    <div class="text-center">
                        Belum punya akun? <a class="link-danger" href="{{ route('register') }}">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
