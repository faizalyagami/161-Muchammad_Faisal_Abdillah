@extends('layout.master')

@section('judul')
Users
@endsection

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">USERNAME</th>
        <th scope="col">NAMA</th>
        <th scope="col">EMAIL</th>
        <th scope="col">LEVEL</th>
        <th scope="col">STATUS</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <tr>
        <th scope="row">1</th>
        <td>10050021066</td>
        <td>ABDUL WARITS</td>
        <td>abdulwarits@unisba.ac.id</td>
        <td>User</td>
        <td>Aktif</td>
        <td>
            <a href="" class=" btn btn-info" data-toggle="modal">Reset Password</a>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>10050021066</td>
        <td>ABDUL WARITS</td>
        <td>abdulwarits@unisba.ac.id</td>
        <td>User</td>
        <td>Aktif</td>
        <td>
            <a href="" class=" btn btn-info" data-toggle="modal">Reset Password</a>
        </td>
      </tr>
    </tbody>
  </table>
@endsection
