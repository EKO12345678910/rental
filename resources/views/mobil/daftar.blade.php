@extends('layouts.main')
@section('container')

<div>
    <table class="table">
        <tr align="center">
            <th>Nama Mobil</th>
            <th>Harga /hari</th>
            <th>Gambar</th>
        </tr>
        <tr align="center">
            <td>Honda Jazz</td>
            <td>350.000</td>
            <td><img  src="https://carnetwork.s3.ap-southeast-1.amazonaws.com/file/c4bce3ad6841474d825a9824411b1134.jpg" style="width: 200px; height: 150px; border: 2px solid rgb(0, 255, 234); border-radius: 100%" /></td>
        </tr>
        <tr align="center">
            <td>Avanza veloz</td>
            <td>350.000</td>
            <td><img  src="https://www.toyota.astra.co.id/sites/default/files/2021-11/2-veloz-silver-mica-metallic.png" style="width: 200px; height: 150px; border: 2px solid rgb(0, 255, 234); border-radius: 100%" /></td>
        </tr>
        <tr align="center">
            <td>Mitsubitshi Pajero</td>
            <td>400.000</td>
            <td><img  src="https://assets.mitsubishi-motors.co.id/products/colors/1627575020-pajero-4x2-bronzepng.png" style="width: 200px; height: 150px; border: 2px solid rgb(0, 255, 234); border-radius: 100%" /></td>
        </tr>
        <tr align="center">
            <td>Toyota Hilux</td>
            <td>400.000</td>
            <td><img  src="https://statik.tempo.co/data/2020/06/04/id_942887/942887_720.jpg" style="width: 200px; height: 150px; border: 2px solid rgb(0, 255, 234); border-radius: 100%" /></td>
        </tr>
        
        

    </table>
</div>

@endsection