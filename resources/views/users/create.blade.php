<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
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
            border: 1px solid #ccc;
        }
    </style>
</head>
<body style="background-color: #ff8800;">
    <br><br>
    <div class="container">
      <form action="{{route('save.user')}}" method="post"> 
      @csrf
        <h2>Create a New Data</h2>
       
        <form>
            <label>Name</label>
            <input type="text" name="name"  class="form-control" placeholder="Enter name"><br>
            <label>Email</label>
            <input type="email"  name="email"  class="form-control" placeholder="Enter email"><br>
            <label>Date Of Birth</label>
           <br>
            <input type="text"  name="date_of_birth"  class="form-control" placeholder="Enter Date of birth"><br>
           <p>
            <label>Status</label>
           <select id="status" name="status">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
          
         </select>
      
         <p>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>
</html>
