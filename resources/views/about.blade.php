@extends('layout.main')

@section('content')
<h1>Tentang Saya</h1>
<h2>Nama : {{ $nama }}</h2>
<h3>Kelas : {{ $kelas }}</h3>
<img src="{{ $foto }}" alt="" style="max-width: 200px; max-height: 200px;">
@endsection 