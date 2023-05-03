<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <style>
        th,td{
            color:#fff;
        }
        .table-border{
            box-shadow: 0px 10px 70px 9px #878787;
        }
    </style>
</head>
<body style="background:#2c3e50">
    <div class="container">
        <table class="table table-border text-center  ">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>


            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->email}}</td>
                <td>{{$post->password}}</td>
                <td>
                <a href="/" class="btn btn-primary">Add</a>
                <a href="/edit/{{$post->id}}" class="btn btn-success">Edit</a>
                <a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a>
            </td>

            </tr>
            @endforeach
        </tr>
        </table>
    </div>
</body>
</html>