
@extends('layouts.main')
@section('container')

<table align="center" class="table mt-5">
<tr align="center">
    <th>Name</th>
    <th>Email</th>
    <th>No Hp/Wa</th>
    <th>Mobil</th>
    <th>Hari</th>
    <th colspan="2">Aksi</th>
</tr>
@foreach ($mobil as $key=>$value)

<tr align="center">
<td>{{ $value->name }}</td>
<td>{{ $value->email }}</td>
<td>{{ $value->Nomor }}</td>
<td>{{ $value->mobils->name }}</td>
<td>{{ $value->haris->name }}</td>
<td><a href="{{ url('pesanan/'.$value->id.'/edit') }}" class="text-dark btn btn-outline-info btn-success">Upgrade</a></td>
<td>
    <form action="{{ url('pesanan/'.$value->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button class="text-dark btn btn-outline-info btn-danger" type="submit">Delete</button>
    </form>
</td>
</tr>

@endforeach
</table>
<div class="row justify-content-center mt-5">
    <a href="pesanan/create" class="w-25 btn btn-outline-info btn-warning text-dark">Tambah</a>
 </div>
    
@endsection

    

    


