<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>APEX Management</title>
<style>
/* ====== RESET ====== */
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif;}
html, body {overflow-x: hidden; overflow-y: auto; min-height: 100vh;}

/* ====== BODY ====== */
body{
    background:radial-gradient(circle at top,#141a2e,#0b0f1a);
    color:#e5e7eb;
    display:flex;
    flex-direction:column;
}

/* ====== SIDEBAR ====== */
.sidebar{
    position:fixed;
    top:0;
    left:0;
    width:220px;
    height:100vh;
    background:#020617;
    border-right:1px solid #1f2937;
    padding:25px 20px;
    z-index:100;
}
.logo{font-size:22px;font-weight:700;color:#22d3ee;margin-bottom:30px;}
.logo span{ color:#7c3aed; }
.sidebar nav{display:flex;flex-direction:column;gap:10px;}
.sidebar nav a{text-decoration:none;color:#e5e7eb;font-size:14px;padding:10px 12px;border-radius:8px;display:flex;align-items:center;transition:.2s;}
.sidebar nav a span{margin-right:8px;}
.sidebar nav a:hover{background:#0f172a;color:#22d3ee;}

/* ====== TOPBAR ====== */
.topbar{
    position:fixed;
    top:0;
    left:220px;
    right:0;
    height:60px;
    background:#020617;
    border-bottom:1px solid #1f2937;
    display:flex;
    align-items:center;
    padding:0 30px;
    color:#e5e7eb;
    z-index:99;
}

/* ====== PAGE CONTENT ====== */
.main-content{
    margin-left:220px;
    margin-top:60px;
    margin-bottom:60px; /* pour footer */
    padding:40px;
    width: calc(100% - 220px);
    display:flex;
    justify-content:center;
    align-items:flex-start;
}

/* ====== FORM BOX ====== */
.form-box {width:400px; max-width:90%; padding:20px 25px; background:#0f172a; border-radius:12px; border:1px solid #1f2937; box-shadow:0 6px 20px rgba(0,0,0,.3);}
.form-box h2{text-align:center;margin-bottom:15px;font-size:22px;color:#22d3ee;}
.form-box h3{margin:15px 0 10px;font-size:14px;color:#7c3aed;font-weight:600;}
label{display:block;font-size:13px;color:#9ca3af;margin-bottom:4px;}
input{width:100%;padding:8px 10px;margin-bottom:12px;border-radius:6px;border:1px solid #1f2937;background:#020617;color:#e5e7eb;font-size:14px;}
input:focus{border-color:#22d3ee;box-shadow:0 0 0 2px rgba(34,211,238,.15);}
button{width:100%;padding:10px;font-size:15px;font-weight:600;border-radius:8px;background:linear-gradient(135deg,#7c3aed,#22d3ee);border:none;cursor:pointer;transition:.2s;}
button:hover{transform:translateY(-1px);box-shadow:0 4px 10px rgba(34,211,238,.35);}
.contract-grid{display:grid;grid-template-columns:1fr 1fr;gap:10px 15px;}

/* ====== FOOTER ====== */
footer{
    position:fixed;
    bottom:0;
    left:0;
    width:100%;
    background:#020617;
    border-top:1px solid #1f2937;
    text-align:center;
    padding:12px;
    font-size:13px;
    color:#9ca3af;
    z-index:1000;
    margin-left: 5rem;
}
footer span{color:#22d3ee;}
</style>
</head>
<body>

<!-- SIDEBAR -->
<aside class="sidebar">
    <div class="logo">APEX<span>Management</span></div>
    <nav>
        <a href="../views/home.php"><span class="icon">🏠</span>Home</a>
        <a href="../views/dashboard.php"><span class="icon">📊</span>Dashboard</a>
        <?php if(isset($_SESSION['role'])){ ?>
            <?php if($_SESSION['role']=="admin"){ ?>
                <a href="../views/JoueurForm.php"><span class="icon">➕</span>Players</a>
                <a href="../views/CoachForm.php"><span class="icon">➕</span>Coaches</a>
                <a href="../views/EquipeForm.php"><span class="icon">➕</span>Squads</a>
            <?php } ?>
            <a href="../actions/logout.php"><span class="icon">🔓</span>Logout</a>
        <?php } else { ?>
            <a href="../views/LoginForm.php"><span class="icon">🔑</span>Login</a>
            <a href="../views/SignupForm.php"><span class="icon">📝</span>Sign Up</a>
        <?php } ?>
    </nav>
</aside>

<!-- TOPBAR -->
<div class="topbar">APEX Management</div>

<!-- MAIN CONTENT -->
<div class="main-content">
