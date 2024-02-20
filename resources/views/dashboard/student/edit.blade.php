
@extends('layout.navdashboard')

@section('content')
  <h1>{{ $title }}</h1>

  <form method="POST" action="/dashboard/student/update/{{ $student->id }}">
    @csrf
    @method('POST')
    <div class="form">
        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" name="nis" id="nis" value="{{ $student->nis }}" >
        </div>
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $student->nama }}" >
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Date of Birth</label>
            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $student->tanggal_lahir }}" >
        </div>
        <div class="form-group">
            <label for="kelas">Class</label>
            <select class="form-select" name="kelas" id="kelas">
                @foreach($kelas as $class)
                    <option value="{{$class->id}}" {{ $class->id == $student->kelas ? 'selected' : '' }}>{{$class->Nama}}</option>
                @endforeach
            </select>
            
        </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $student->alamat }}" >
        </div>
        <div class="text-center"> 
            <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
        </div>
    </div>
  </form>
@endsection
