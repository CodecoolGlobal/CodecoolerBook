<?php require 'layout/head.php' ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="login" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
        <label class="form-check-label" for="rememberMe">Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <?= $userFeedback?>
</form>
</body>
</html>
<?php require 'layout/footer.php' ?>