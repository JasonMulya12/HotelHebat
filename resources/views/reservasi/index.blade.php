@extends('layouts.resepsionis')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Reservasi Hotel</h2>
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
            <th>Nama Tamu</th>
            <th>Tanggal Check In </th>
            <th>Tanggal Check Out </th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($reservasis as $pemesanan)
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $pemesanan->nama_tamu}}</td>
            <td>{{ $pemesanan->tgl_check_in}}</td>
            <td>{{ $pemesanan->tgl_check_out}}</td>
            <td>
                
            </td>
        </tr>
        @endforeach
    </table>
    {!! $reservasis->links() !!}
    


@endsection