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
</head>
<body style="background:#2c3e50">
    <div class="container">
        <div class="row">
        <h1 class="text-center pt-3 text-white">Add User</h1>
        <form method="POST" action='/store'style="width:50%;margin: auto;box-shadow: 0px 10px 70px 9px #878787; padding: 26px;margin-top: 28px; ">
            @csrf
        <div class="mb-3">
                <label for="exampleFormControlInput1" style="font-weight: 600; color:#fff;" class="form-label">Name</label>
                <input type="Text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter your name" required >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" style="font-weight: 600;color:#fff" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter your Email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" style="font-weight: 600;color:#fff" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="password" name="password" id="exampleInputPassword1" required>
            </div>
            <button type="submit" name="submit" value="submite" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</body>
</html>