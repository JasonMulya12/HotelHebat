@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Fasilitas Kamar</h2>
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
            <th>Tipe Kamar</th>
            <th>Nama Fasilitas </th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($fasilitaskamars as $fasilitaskamar)
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $fasilitaskamar->tipe_kamar}}</td>
            <td>{{ $fasilitaskamar->fasilitas_kamar}}</td>
            <td>
                <form action="{{ route('fasilitaskamar.destroy', $fasilitaskamar->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('fasilitaskamar.edit', $fasilitaskamar->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('fasilitaskamar.create') }}"> +</a>
            </div>
            {!! $fasilitaskamars->links() !!}

@endsection