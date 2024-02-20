@extends('layout.main')

@section('content')
<h1>Ini adalah halaman Extraculiculer</h1>
<table class="table">
  <thead>
    <tr class="table-dark">
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Pembina</th>
      <th scope="col">Deskripsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($extra as $extras)
    <tr>
        <td>{{ $extras['id'] }}</td>
        <td>{{ $extras['nama'] }}</td>
        <td>{{ $extras['pembina'] }}</td>
        <td>{{ $extras['deskripsi'] }}</td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection