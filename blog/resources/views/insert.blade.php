<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('sms'))
        <strong>{{session()->get('sms')}}</strong>
    @endif
        <br>
        <a href="{{route('show.data')}}"><button class="btn btn-primary">Show</button></a></td>
<form action="{{route('success.data')}}" method="post" >
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" >

    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" >

    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input type="text" class="form-control" name="phone" ><br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
