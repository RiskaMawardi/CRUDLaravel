@extends('layouts.main')
@section('container')



<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header color:#ffce8dd">
                <h2>Create Activity</h2>
            </div>
            <div class="card-body">
                <div class="row align-items-start">
                    <form action="{{route('storeActivity')}}" method="POST">
                        @csrf
                        <label>Name Activity:</label><br>
                        <input type="text" name="nama_activity" class="form-control"><br><br>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
