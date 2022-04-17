@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Kamar</h2>
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
            <th>Jumlah Kamar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tipekamars as $tipekamarss)
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $tipekamarss->tipe_kamar}}</td>
            <td>{{ $tipekamarss->jumlah_kamar}}</td>
            <td>
                <form action="{{ route('tipekamar.destroy', $tipekamarss->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('tipekamar.edit', $tipekamarss->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $tipekamars->links() !!}
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tipekamar.create') }}"> +</a>
            </div>

@endsection