<!doctype>
<html>
<head>
    <title>Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>


<div class="form">
    <form method="post" class="form" }}>
        <div class="Fullname">
            <label>FullName : </label>
            <input class="name" type="text" name="name" placeholder="FullName">
            <br>
            <label>Address : </label>
            <input class="address" type="text" name="address" placeholder="Address">
            <br>
            <label>Contact : </label>
            <input class="contact" type="number" placeholder="Contact">
            <br>
            <label>E-mail : </label>
            <input class="email" type="email" placeholder="E-mail">
            <br>
        </div>
        <div class="mb-3">
            <label class="form-label">Profile : </label>
            <input class="form-control" type="file" name="profile">
            <br>
        </div>
        <input type="submit" value="submit">

    </form>

</div>
<style>
    .form{
        text-align: center;
        background-color: #00b8d4;
        padding: 10%;
    }


</style>
</body>
</html>

