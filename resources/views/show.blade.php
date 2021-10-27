@extends('layouts.app')

@section('title', 'Friends')
<!-- section key, value karena section ini bukan diambil dari file tetapi dari key-->

@section('content')
<!-- karena angka yang kita gunakan adalah array dalam array sehingga memerlukan perulangan berupa foreach -->
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Nama : {{ $friends['nama'] }}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Nomor Telepon : {{ $friends['no_telp'] }}</li>
            <li class="list-group-item">Alamat : {{ $friends['alamat'] }}</li>
        </ul>
    </div>

@endsection
<!-- end section hanya ditulis sekali aja di paling akhir -->
