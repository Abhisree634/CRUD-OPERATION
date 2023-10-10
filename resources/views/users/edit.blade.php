<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f000;
            border: 1px solid #cdcdcd;
            text-align: center;
        }

        form {
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #cccccc;
        }
    </style>
</head>
<body style="background-color: #ddff0085;">
    <br><br>
    <div class="container">
      <form action="{{route('update.user')}}" method="post"> 
      @csrf
      <input type="hidden" name="id" value="{{encrypt($user->id)}}">
        <h2>Edit Data</h2>
        <form>
            
            <label>Name</label>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Enter name"><br>
            <label>Email</label>
            <input type="email"  name="email" value="{{ $user->email }}" class="form-control" placeholder="Enter email"><br>
            <label>Date Of Birth</label>
           <br>
            <input type="text"  name="date_of_birth" value="{{ $user->date_of_birth }}" class="form-control" placeholder="Enter Date of birth"><br>
           <p>
            <label>Status</label>
           <select id="status" name="status">
            <option value="1" @if($user->status == 1) selected="selected" @endif>Active</option>
            <option value="0" @if($user->status == 0) selected="selected" @endif>Inactive</option>
          
         </select>
      
         <p>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
