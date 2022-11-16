<!DOCTYPE html>
<html>
<body>

<h2>Activity</h2>

<form action="{{route('storeActivity')}}" method="POST">
    @csrf
  <label>Name Activity:</label><br>
  <input type="text" name="nama_activity"><br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>

