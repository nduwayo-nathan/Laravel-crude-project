<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>


<style>
    body{
        display: flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        background-color:black;
        
    }
    .container{
       
        background-color:#ffddbb;
        height:90vh;
        padding:20px;
        border-radius:20px;
        margin-top:20px
        
    }
    table{
        border:2px solid black;
        
    }
   
    th{
        border:2px solid black;
        padding:20px;
    }
    tr:nth-child(2){
       border:2px solid blue; 
    }
    td{
        border:2px solid black;
        padding:20px;
    }
    thead{
        background-color:gray;
    }
    button{
        background-color:red;
        margin:5px;
        width:100px
    }
    a{
        background-color:green;  
        color:yellow;
        padding:2px;
        margin:2px;
        border-radius:5px;
        font-weight:bold;
        text-decoration:none;
    }
</style>
</head>
<body>
    <div class="container">
<!-- index.blade.php -->
<h1>Users</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('users.create') }}">Create User</a>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}">View</a>
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
</html>
