@extends('layouts.app')

@section('content')
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Detail Mahasiswa
 </div>
 <div class="card-body">
 <ul class="list-group list-group-flush">
 <li class="list-group-item"><b>Nim: </b>{{$Mahasiswa->Nim}}</li>
 <li class="list-group-item"><b>Nama: </b>{{$Mahasiswa->Nama}}</li>
 <li class="list-group-item"><b>Kelas: </b>{{$Mahasiswa->kelas->nama_kelas}}</li>
 <li class="list-group-item"><b>Jurusan: </b>{{$Mahasiswa->Jurusan}}</li>
 <li class="list-groupitem"><b>No_Handphone: </b>{{$Mahasiswa->No_Handphone}}</li>
 </ul>
 </div>
 <a class="btn btn-success mt3" href="{{ route('mahasiswas.index') }}">Kembali</a>
 </div>
 </div>
</div>
@endsection