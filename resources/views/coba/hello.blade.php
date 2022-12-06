@extends('layouts.main')
@section('container')


@if ($message = Session::get('success'))
<div class="alert alert-success" >
    <p>{{$message}}</p>
</div>
@endif


<!-- <a href="{{route('about')}}">About</a>
    <a href="{{route('indexActivity')}}">Activity</a><br><br> -->
<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama Activity</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        @foreach($data as $dt)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$dt->id}}</td>
            <td>{{$dt->nama_activity}}</td>
            <td>
                <a href="{{route('indexEditActivity', $dt->id)}}" class="btn btn-warning">edit</a>
                <a href="{{route('destroyActivity', $dt->id)}}" class="btn btn-danger">delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
