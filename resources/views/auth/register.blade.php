@extends('layouts.main')

@section('title', 'Daftar')

@section('content')
    <div class="d-flex justify-content-center mt-2">
        <div class="card of-card-auth mb-4" style="width: 30rem">
            <div class="of-bg-red of-font-header text-light fs-4 p-3 card-img-top mb-3">
                Daftar
            </div>
            <div class="card-body">
                <div>
                    <div class="mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nama Lengkap"
                            required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username"
                            required>
                    </div>
                    <div class="mb-4">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Kata Sandi"
                            required>
                    </div>
                    <div class="mb-3">
                        <div class="mb-2 form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember">
                            <label for="remember" class="form-check-label">Ingat Saya</label>
                        </div>
                        <button class="btn w-100 of-bg-red text-light">Kirim</button>
                    </div>
                    <div class="text-center">
                        Sudah punya akun? <a class="link-danger" href="{{ route('login') }}">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
