<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>List Of faculty</h1>
<table border="1">
    <tr>
      <th>ID</th>
      <th>NAME</th>
    </tr>
    @foreach($ie as $i)
<tr>
    <td>{{$i->facultyID}}</td>
    <td>{{$i->facultyName}}</td>
</tr>
@endforeach
</table>
</body>

</html>
