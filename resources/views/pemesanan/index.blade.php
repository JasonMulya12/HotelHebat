@extends('layouts.user')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Pemesanan User</h2>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Tamu </th>
            <th>Email</th>
            <th>Nomor Hp </th>
            <th>Tipe Kamar </th>
            <th>Tanggal Check In </th>
            <th>Tanggal Check Out </th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemesanans as $pemesanan)
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $pemesanan->nama_tamu}}</td>
            <td>{{ $pemesanan->email}}</td>
            <td>{{ $pemesanan->no_hp}}</td>
            <td>{{ $pemesanan->tipe_kamar}}</td>
            <td>{{ $pemesanan->tgl_check_in}}</td>
            <td>{{ $pemesanan->tgl_check_out}}</td>
            <td>
                    <a class="btn btn-dark" href="{{ route('pemesanan.edit', $pemesanan->id) }}">Struk</a>
                    <a href="{{ url('myPDF', $pemesanan->id) }}" class="btn btn-success">Print</a>
                
            </td>
        </tr>
        @endforeach
    </table>
    {!! $pemesanans->links() !!} 
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pemesanan.create') }}"> +</a>
            </div>


@endsection