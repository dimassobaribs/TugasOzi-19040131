@extends('layout.v_template')
@section('title','Dosen')

@section('content')
    @foreach($guru as $data)
        <h3> NIM    : {{$data['nim']}}</h3><br>
        <h3> Nama   : {{$data['nama']}}</h3><br>
        <h3> Matkul : {{$data['matkul']}}</h3><br>
    @endforeach    
@endsection