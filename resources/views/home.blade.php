<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #00ffd020;">
  
    <br>
    <h1>Welcome CRUD Operations</h1>
    <h2>Users</h2>
    @if (session()->has('message'))
    <p>{{session()->get('message')}}</p>
    @endif
    <a href="{{route('create.user')}}" class="btn btn-sm btn-primary" style="float:right  ">New</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>@if($user->trashed()) Trashed @else Active @endif</td>
              <td>
                @if($user->trashed()) <a href="{{route('activate.user',encrypt($user->id))}}" class="btn btn-success">Activate</a>@endif
                <a href="{{route('edit.user',encrypt($user->id))}}" class="btn btn-primary">Edit</a>  
                <a href="{{route('delete.user',encrypt($user->id))}}" class="btn btn-danger">Delete</a>
                <a href="{{route('force.delete.user',encrypt($user->id))}}" class="btn btn-info">Force Delete</a>


              </td>
            </tr>
            @endforeach
         
         
        </tbody>
      </table>


</body>
</html>