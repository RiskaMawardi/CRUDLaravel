@extends('layouts.main')
@section('container')

<style>
   .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}

</style>



<div class="card">
<img src="assets/img/avatar.png" alt="Avatar" class="avatar">
    <div class="container">
        <h4><b>John Doe</b></h4>
        <p>Architect & Engineer</p>
    </div>
</div>
<br>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam in sequi, exercitationem debitis pariatur
    officiis rem at nostrum soluta. Cupiditate ipsum quis at repudiandae recusandae repellendus animi sit quibusdam
    sapien</p>
<a href="{{route('index')}}" class="btn btn-primary">Back</a>
@endsection
