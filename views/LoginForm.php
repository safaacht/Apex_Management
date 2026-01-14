<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Login</title>

</head>
<body>

<?php require_once '../ApexMercato/header.php' ?>


<main>
    <div class="form-box">
        <h2>LOGIN</h2>
        <form method="post" action="../actions/login.php">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <input id="Form_button" type="submit" name="login" value="LOGIN"> 
        </form>
        <div class="link">
            No account? <a href="../views/SignupForm.php">Create one</a>
        </div>
    </div>
</main>

<?php require_once '../ApexMercato/footer.php' ?>


</body>
</html>
