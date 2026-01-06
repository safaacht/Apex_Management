<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
</head>
<body>

<?php require_once '../ApexMercato/header.php' ?>


<main>
    <div class="form-box">
        <h2>CREATE ACCOUNT</h2>
        <form>
            <label>Username</label>
            <input type="text" name="username" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <input id="button" type="submit" name="signin" value="SIGN UP">
        </form>
        <div class="link">
            Already registered? <a href="../views/LoginForm.php">Login</a>
        </div>
    </div>
</main>

<?php require_once '../ApexMercato/footer.php' ?>


</body>
</html>
