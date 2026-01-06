<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Add Coach</title>
</head>
<body>

<?php require_once '../ApexMercato/header.php' ?>


<main>
    <div class="form-box">
        <h2>ADD COACH</h2>
        <form>
            <label>Name</label>
            <input type="text" name="name" required>
            <label>Nationality</label>
            <input type="text" name="nationalite" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Coaching Style</label>
            <input type="text" name="style_coaching" required>
            <label>Experience (Years)</label>
            <input type="number" name="annee_exp" required>
            <button>Add Coach</button>
        </form>
    </div>
</main>

</body>
</html>


<?php require_once '../ApexMercato/footer.php' ?>
