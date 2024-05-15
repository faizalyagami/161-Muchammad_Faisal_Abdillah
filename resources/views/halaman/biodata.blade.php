@extends('layout.master')

@section('judul')
Halaman Biodata
@endsection

@section('content')
<form action="/kirim" method="POST">
    @csrf
    <label for="">Nama</label> <br>
    <input type="text" name="name"> <br>
    <label for="">Alamat</label> <br>
    <textarea name="address" id="" cols="30" rows="10"></textarea> <br>
    <label for="">Jenis Kelamin</label> <br>
    <input type="radio" name="gender" value="1"> Pria
    <input type="radio" name="gender" value="2"> Wanita <br>
    <input type="submit" value="kirim">
</form>

<a href="/">Kembali ke menu utama</a>
@endsection