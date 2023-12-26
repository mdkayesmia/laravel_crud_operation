<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
@if(session()->has('sms'))
    <strong>{{session()->get('sms')}}</strong>
@endif;
<div class="container">
    <a href="{{route('show.data')}}"><button class="btn btn-primary">Details</button></a>
    @foreach($data as $info)
<form action="{{route('updatedata.data',$info->id)}}" method="post">
    @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$info->name}}"  >

            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{$info->email}}" >

            <label for="exampleInputEmail1" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{$info->phone}}"><br>

            @endforeach
            <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
