@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 class="card-title text-center">Selamat Datang di MAN Padang Lawas Utara</h3>
                        <p class="card-text text-center">"Pendidikan adalah tiket ke masa depan. Hari esok dimiliki orang-orang yang mempersiapkan dirinya sejak dini!!!"</p>
                        <a href="{{ url('/siswa') }}"
                            class="btn btn-success my-3 w-100">{{ __('Anda Berhasil Login') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
