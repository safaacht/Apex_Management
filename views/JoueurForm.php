<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Add Player</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif;}
body{min-height:100vh;background:radial-gradient(circle at top,#141a2e,#0b0f1a);color:#e5e7eb;display:flex;flex-direction:column;}
main{flex:1;display:flex;justify-content:center;align-items:center;width:100%;}
.form-box{width:380px;background:#0f172a;padding:30px;border-radius:14px;border:1px solid #1f2937;box-shadow:0 0 25px rgba(124,58,237,.45);}
h2{text-align:center;margin-bottom:25px;color:#22d3ee;letter-spacing:1px;}
label{font-size:14px;color:#9ca3af;margin-bottom:6px;display:block;}
input{width:100%;padding:12px;margin-bottom:18px;background:#020617;border:1px solid #1f2937;border-radius:8px;color:#e5e7eb;}
input:focus{outline:none;border-color:#7c3aed;box-shadow:0 0 8px rgba(124,58,237,.6);}
button{width:100%;padding:12px;background:linear-gradient(135deg,#7c3aed,#22d3ee);border:none;border-radius:10px;color:#020617;font-size:16px;font-weight:bold;cursor:pointer;transition:.3s;}
button:hover{transform:translateY(-2px);box-shadow:0 0 18px rgba(34,211,238,.6);}
.link{text-align:center;margin-top:15px;font-size:14px;}
.link a{color:#facc15;text-decoration:none;font-weight:bold;}
</style>
</head>
<body>

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
