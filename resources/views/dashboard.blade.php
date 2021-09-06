<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<div class="form-group container">
    <div class="card">
        <div class="card-head">
            <h1>Submitted Form</h1>
        </div>
        <div class="card-body">
            <form method="post"  class="form" action="">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input disabled class="form-control" type="text" name="full-name" value="{{$fullName}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input disabled class="form-control" type="text" name="username"  value="{{$username}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input disabled class="form-control" type="text" name="email"  value="{{$email}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input disabled class="form-control" type="text" name="contact"  value="{{$contact}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input disabled class="form-control" type="text" name="password"  value="{{$password}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Profile</label>
                    <img src="{{url("/storage/$path")}}">
                </div>
            </form>

        </div>

    </div>
</div>

<style>
    body{
        background-color: #00b8d4;
        text-align: center;
    }

</style>
</body>
</html>
