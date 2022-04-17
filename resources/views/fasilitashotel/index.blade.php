@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Fasilitas Hotel</h2>
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
            <th>Fasilitas</th>
            <th>Keterangan </th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($fasilitashotels as $fasilitashotel)
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $fasilitashotel->nama_fasilitas}}</td>
            <td>{{ $fasilitashotel->ket}}</td>
            <td>
                <form action="{{ route('fasilitashotel.destroy', $fasilitashotel->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('fasilitashotel.edit', $fasilitashotel->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $fasilitashotels->links() !!}
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('fasilitashotel.create') }}"> +</a>
            </div>

@endsection