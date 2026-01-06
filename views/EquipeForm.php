<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Add Squad</title>
</head>
<body>

<?php require_once '../ApexMercato/header.php' ?>


<main>
    <div class="form-box">
        <h2>ADD SQUAD</h2>
        <form  method="POST" action="../actions/CreateEquipe.php">
            <label>name</label>
            <input type="text" name="nom" required>
            <label>Email</label>
            <input type="text" name="manager" required>
            <label>Budget</label>
            <input type="number" name="budget" required>
            <button>Add Squad</button>
        </form>
    </div>
</main>

<?php require_once '../ApexMercato/footer.php' ?>


</body>
</html>
