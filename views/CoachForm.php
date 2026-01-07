<?php require_once '../ApexMercato/header.php'; ?>

<div class="form-box">
    <h2>ADD COACH</h2>
    <form action="../actions/CreateCoach.php" method="POST">
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

        <button type="submit" name="submit">Add Coach</button>
    </form>
</div>

<?php require_once '../ApexMercato/footer.php'; ?>
