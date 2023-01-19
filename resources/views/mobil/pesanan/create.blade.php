@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <div class="p-3 btn btn-outline-info text-light col-md-5 border-0">
        <main class="form-registration">
            <h1 class="h3 fw-normal text-center text-dark">PEMESANAN MOBIL</h1>
            <form action="{{ url('pesanan') }}" method="post" class="">
                @csrf
                <div class="form-floating">
                    <label for="Nama">Nama </label>
                    <input type="text" class="form-control" name="name" placeholder="Nama" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="Email"> Email </label>
                    <input type="Email" class="form-control " name="email" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="nomor">No Hp/Wa</label>
                    <input type="text" class="form-control" name="Nomor" placeholder="No Hp/Wa" autocomplete="off">
                </div>
                <div class="form-floating">
                    <label for="fakultas">/ hari</label>
                     <select id="fakultas" name="haris_id" class="form-control">
                        <option value="1">1 hari mobil jazz/avanza</option> 
                        <option value="2">2 hari mobil jazz/avanza</option>
                        <option value="3">3 hari mobil jazz/avanza</option> 
                        <option value="4">1 hari mobil hilux/pajero</option> 
                        <option value="5">2 hari mobil hilux/pajero</option>
                        <option value="6">3 hari mobil hilux/pajero</option>
                    </select>
                </div>
                <div class="form-floating">
                    <label for="fakultas">Nama Mobil</label>
                     <select id="fakultas" name="mobils_id" class="form-control">
                        <option value="1">Avanza</option> 
                        <option value="2">Jazz</option>
                        <option value="3">hilux</option> 
                        <option value="4">pajero</option>
                    </select>
                </div>
                <button class="w-50 btn btn-outline-success text-dark mt-3" type="submit">Pesan</button>
            </form>
        
        </main>
    </div>
</div>
@endsection

