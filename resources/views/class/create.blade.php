@extends('layout.main')

@section('content')
    <h1>{{$title}}</h1>
    <form method="POST" action="/class/add">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Kelas Siswa</label>
    <input  class="form-control" id="Nama" name="Nama" value="{{old('nama,$class->Nama')}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection