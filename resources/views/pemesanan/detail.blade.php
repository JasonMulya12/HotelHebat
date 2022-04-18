@extends('layouts.user')
@section('content')
<div class="container" style="width: 25%;">
<div style="text-align: center;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Struk Hotel Hebat</h2>
                <h6>Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</h6>
            </div>
        </div>
    </div>
<table class="table">
        <tr>
            <td>Nama Pemesanan:</td>
            <td>{{$pemesanan->nama_tamu}}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{$pemesanan->email}}</td>
        </tr>
        <tr>
            <td>Nomor HP:</td>
            <td>{{$pemesanan->no_hp}}</td>
        </tr>
        <tr>
            <td>Nama Tamu:</td>
            <td>{{$pemesanan->nama_tamu}}</td>
        </tr>
        <tr>
            <td>Tipe Kamar:</td>
            <td>{{$pemesanan->tipe_kamar}}</td>
        </tr>
        <tr>
            <td>Tanggal Check In:</td>
            <td>{{$pemesanan->tgl_check_in}}</td>
        </tr>
        <tr>
            <td>Tanggal Check Out:</td>
            <td>{{$pemesanan->tgl_check_out}}</td>
        </tr>
    </table>
    <span>Struk ini sebagai bukti telah melakukan booking hotel. Mohon Disimpan!</span>
</div>
</div>
@endsection