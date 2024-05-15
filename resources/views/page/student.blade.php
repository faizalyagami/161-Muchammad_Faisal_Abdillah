@extends('layout.master')

@section('judul')
Mahasiswa
@endsection

@section('content')
<table class="table" id="myTable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NPM</th>
        <th scope="col">NAMA</th>
        <th scope="col">EMAIL</th>
        <th scope="col">TELEPOM</th>
        <th scope="col">JENIS KELAMIN</th>
        <th scope="col">ANGKATAN</th>
        <th scope="col">PERIODE PENGISIAN</th>
        <th scope="col">TOTAL SKS</th>
        <th scope="col">SERTIFIKAT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>10050021066</td>
        <td>ABDUL WARITS</td>
        <td>abdulwarits@unisba.ac.id</td>
        <td>081265945263</td>
        <td>Laki-Laki</td>
        <td>2021</td>
        <td>01 January 2024</td>
        <td>150</td>
        <td>Approve</td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>10050021066</td>
        <td>ABDUL WARITS</td>
        <td>abdulwarits@unisba.ac.id</td>
        <td>081265945263</td>
        <td>Laki-Laki</td>
        <td>2021</td>
        <td>01 January 2024</td>
        <td>150</td>
        <td>Approve</td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>10050021066</td>
        <td>ABDUL WARITS</td>
        <td>abdulwarits@unisba.ac.id</td>
        <td>081265945263</td>
        <td>Laki-Laki</td>
        <td>2021</td>
        <td>01 January 2024</td>
        <td>150</td>
        <td>Approve</td>
      </tr>
    </tbody>
  </table>
@endsection
