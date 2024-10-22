<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type ="text/css" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
@if($find)
<body>
    <nav class = "wepnav">
        <ul>
            <li><a href="{{route('dashboard')}}">Home</a></li>
            <li><a href="{{route('student')}}">StudentList</a></li>
        </ul>
    </nav>
    <h1>Student Updated</h1>
    <form action="{{route('updatestd')}}" method="POST" class = "form">
    <h2>Updated Student</h2>
    @csrf
    <p>Student ID: <input type ="text" name = "stu_ID" value ="{{$find->id}}"  readonly></p>
    <p>NAME: <input type ="text" name = "stu_name" value ="{{$find->stu_name}}" > </p>
    <p>AGE :<input type ="number" name = "age" value = "{{$find->age}}"></p>
    <p>grade:</p>
    <select name="grade">
        <option value="{{$find->grade}}" selected hidden > {{$find->grade}} </option>
        <option value=1>A</option>
        <option value=2>B</option>
        <option value=3>C</option>
        <option value=4>D</option>
        <option value=0>F</option>
    </select>
    <p><input class ="btn btn-warning" type ="submit" value = "Updated"></p>
    <a class = "ax" href="{{ route('student') }}">
        <button class ="btn btn-primary" type="button">Back to Insert Student</button>
    </a>
    </form>
@else
<body>
    <nav class = "wepnav">
        <ul>
            <li><a href="{{route('dashboard')}}">Home</a></li>
            <li><a href="{{route('student')}}">StudentList</a></li>
        </ul>
    </nav>
    <h1>Student Management</h1>
    <form action="student/insert" method="POST" class = "form">
    <h2>Add Student</h2>
    @csrf
    <p>ชื่อนักศึกษา: <input type ="text" name = "stu_name"></p>
    <p>อายุ: <input type ="number" name = "age"></p>
    <p>grade:</p>
    <select name="grade">
        <option value=1>A</option>
        <option value=2>B</option>
        <option value=3>C</option>
        <option value=4>D</option>
    </select>
    <p class = "a"><input type ="submit" value = "Add student"></p>
    </form>
@endif

    <h2>Student list ( student{{ $stc }} )</h2>
    <table border="1" class = "table">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>AGE</th>
      <th>GRADE</th>
    </tr>
@foreach($st as $sts)
    <tr>
    <td>{{$sts->id}}</td>
    <td>{{$sts->stu_name}}</td>
    <td>{{$sts->age}}</td>
    <td>{{$sts->grade}}</td>
    <td>
        <a href="/student/updated/{{$sts->id}}">
        <input class ='btn btn-warning' type ="button" value="Update"/>
    </td>
    <td>
  <a href="#" onclick="return ConfirmDelete({{$sts->id}})">
    <input class='deletebutton' type="button" value="Delete"/>
  </a>
    </td>

    </tr>

@endforeach

<script>
function ConfirmDelete(StudentID) {
  if (confirm("Are you sure you want to delete?")) {
    window.location.href = `/student/delete/${StudentID}`;
    return false;
  }
  return false;
}
</script>
</body>
</html>
