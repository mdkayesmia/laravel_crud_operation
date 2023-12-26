<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container"><br>
    <div>
        @if(session()->has('sm'))
            <strong>{{session()->get('sm')}}</strong>
        @endif
    </div>
<table class="table">
       <a href="{{route('insert.data')}}"> <button class="btn btn-primary" type="button">Insert</button></a>
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $info)
    <tr>
      <td>{{$info->name}}</td>
      <td>{{$info->email}}</td>
      <td>{{$info->phone}}</td>
      <td><a href="{{route('delete.data',$info->id)}}"><button class="btn btn-danger">Delete</button></a>
      <a href="{{route('update.data',$info->id)}}"><button class="btn btn-primary">Update</button></a></td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
</body>
</html>
