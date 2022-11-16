<!DOCTYPE html>
<html>
<body>

<h2>Edit Activity</h2>

<form action="{{route('updateActivity', $data->id) }}" method="POST">
    @csrf
  <label>Name Activity:</label><br>
  <input type="text" name="nama_activity" value="{{$data->nama_activity}}"><br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>

