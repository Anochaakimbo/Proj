<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type ="text/css" href="{{asset('css/style.css')}}">
</head>
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
</tr>
@endforeach
</body>
</html>