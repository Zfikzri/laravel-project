@extends('layout.main')

@section('content')
    <h1>{{$title}}</h1>
    <form method="POST" action="/class/update/{{$kelas->id}}">
    @csrf
  <div class="mb-3">
    <label  class="form-label">Nama Kelas</label>
    <input  class="form-control" id="Nama" name="Nama" value="{{old('Nama',$kelas->Nama)}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection