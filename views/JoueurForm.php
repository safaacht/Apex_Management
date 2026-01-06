<?php require_once '../ApexMercato/header.php'; ?>

<div class="form-box">
    <h2>ADD PLAYER</h2>
    <form action="../actions/CreateJoueur.php" method="POST">
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

        <h3>Contract</h3>
        <div class="contract-grid">
            <div>
                <label>Monthly Salary</label>
                <input type="number" name="salaire" required>
            </div>
            <div>
                <label>Release Clause</label>
                <input type="number" name="clause_rachat" required>
            </div>
            <div>
                <label>Start Date</label>
                <input type="date" name="date_deb" required>
            </div>
            <div>
                <label>End Date</label>
                <input type="date" name="date_fin" required>
            </div>
        </div>

        <button type="submit">Add Player</button>
    </form>
</div>

<?php require_once '../ApexMercato/footer.php'; ?>
