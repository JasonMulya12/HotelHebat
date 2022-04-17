@extends('layouts.master')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Resepsionis</h2>
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
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Password</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($resepsionis as $resepsioni)
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $resepsioni->name}}</td>
            <td>{{ $resepsioni->email}}</td>
            <td>{{ $resepsioni->role}}</td>
            <td>{{ $resepsioni->password}}</td>
            <td>
                <form action="{{ route('resepsionis.destroy', $resepsioni->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('resepsionis.edit', $resepsioni->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $resepsionis->links() !!}
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('resepsionis.create') }}"> +</a>
            </div>

@endsection