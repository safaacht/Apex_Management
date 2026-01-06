<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Add Player</title>

<?php require_once '../ApexMercato/header.php' ?>


<main>
    <div class="form-box">
        <h2>ADD PLAYER</h2>
        <form>
            <label>Name</label>
            <input type="text" name="name" required>
            <label>Nationality</label>
            <input type="text" name="nationalite" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Role</label>
            <input type="text" name="role" required>
            <label>Market Value</label>
            <input type="number" name="valeur_marchande" required>
            <button>Add Player</button>
        </form>
    </div>
</main>

<?php require_once '../ApexMercato/footer.php' ?>


</body>
</html>
