<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="form-group container">
    <div class="card">
        <div class="card-head">
            <h1>Registration Form</h1>
        </div>
        <div class="card-body">
            <form method="post"  class="form" action="{{route('register')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input class="form-control" type="text" name="full-name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input class="form-control" type="text" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input class="form-control" type="text" name="contact">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Profile</label>
                    <input class="form-control" type="file" name="profile">
                </div>
                <input class="btn btn-primary btn-small" type="submit" value="submit">
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
