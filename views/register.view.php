<?php require 'layout/head.php' ?>

<h1>Register It Works!</h1>
<form method="post" action="register" >
    <div >
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
        </div> <br>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" name="pass" class="form-control" id="pass" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Confirmation Password</label>
            <input type="password" name="confPass" onkeyup="checkPass()" class="form-control" id="confPass" required>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary" id="submit">Sign Up</button>
</form>

<?= $userFeedBack ?>

<?php require 'layout/footer.php' ?>

