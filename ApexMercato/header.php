<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>APEX Management</title>

<style>
/* ===================== BLOCK 1 ===================== */
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif;}
body{min-height:100vh;background:radial-gradient(circle at top,#141a2e,#0b0f1a);color:#e5e7eb;flex-direction:column;display:flex;}
main{flex:1;display:flex;justify-content:center;align-items:center;width:100%;}
.form-box{width:380px;background:#0f172a;padding:30px;border-radius:14px;border:1px solid #1f2937;box-shadow:0 0 25px rgba(124,58,237,.45);}
h2{text-align:center;margin-bottom:25px;color:#22d3ee;letter-spacing:1px;}
label{font-size:14px;color:#9ca3af;margin-bottom:6px;display:block;}
input{width:100%;padding:12px;margin-bottom:18px;background:#020617;border:1px solid #1f2937;border-radius:8px;color:#e5e7eb;}
input:focus{outline:none;border-color:#7c3aed;box-shadow:0 0 8px rgba(124,58,237,.6);}
button{width:100%;padding:12px;background:linear-gradient(135deg,#7c3aed,#22d3ee);border:none;border-radius:10px;color:#020617;font-size:16px;font-weight:bold;cursor:pointer;transition:.3s;}
button:hover{transform:translateY(-2px);box-shadow:0 0 18px rgba(34,211,238,.6);}


/* ===================== BLOCK 2 ===================== */
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif;}
body{
    min-height:100vh;
    background:radial-gradient(circle at top,#141a2e,#0b0f1a);
    color:#e5e7eb;
    display:flex;
    flex-direction:column;
}
main{
    flex:1;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    padding:20px;
    margin-left: 8rem;
}
h1{
    font-size:42px;
    color:#22d3ee;
    letter-spacing:1px;
    margin-bottom:15px;
}
h1 span{
    color:#7c3aed;
}
p{
    font-size:18px;
    color:#9ca3af;
    margin-bottom:25px;
}
button{
    padding:12px 30px;
    font-size:16px;
    font-weight:bold;
    color:#020617;
    background:linear-gradient(135deg,#7c3aed,#22d3ee);
    border:none;
    border-radius:10px;
    cursor:pointer;
    transition:.3s;
}
button:hover{
    transform:translateY(-2px);
    box-shadow:0 0 18px rgba(34,211,238,.6);
}
/* HOME BUTTONS */
.home-buttons{display:flex;gap:20px;justify-content:center;padding: 20px 30px;}

/* ===================== BLOCK 3 ===================== */
*{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif;}
body{min-height:100vh;background:radial-gradient(circle at top,#141a2e,#0b0f1a);color:#e5e7eb;display:flex;flex-direction:column;}
main{flex:1;display:flex;justify-content:center;align-items:center;width:100%;margin-left: 5rem;}
.form-box{width:360px;background:#0f172a;padding:30px;border-radius:14px;border:1px solid #1f2937;box-shadow:0 0 25px rgba(124,58,237,.45);}
h2{text-align:center;margin-bottom:25px;color:#22d3ee;letter-spacing:1px;}
label{font-size:14px;color:#9ca3af;margin-bottom:6px;display:block;}
input{width:100%;padding:12px;margin-bottom:18px;background:#020617;border:1px solid #1f2937;border-radius:8px;color:#e5e7eb;}
input:focus{outline:none;border-color:#7c3aed;box-shadow:0 0 8px rgba(124,58,237,.6);}
#button{width:100%;padding:12px;background:linear-gradient(135deg,#7c3aed,#22d3ee);border:none;border-radius:10px;color:#020617;font-size:16px;font-weight:bold;cursor:pointer;transition:.3s;}
#button:hover{transform:translateY(-2px);box-shadow:0 0 18px rgba(34,211,238,.6);}
.link{text-align:center;margin-top:15px;font-size:14px;}
.link a{color:#facc15;text-decoration:none;font-weight:bold;}

/* ===================== BLOCK 4 ===================== */
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

/* ===================== SIDEBAR BLOCK ===================== */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', sans-serif;
}

.sidebar{
    position:fixed;
    top:0;
    left:0;
    width:220px;
    height:100vh;
    background:#020617;
    border-right:1px solid #1f2937;
    padding:20px;
}

.logo{
    font-size:22px;
    font-weight:bold;
    color:#22d3ee;
    margin-bottom:30px;
}

.logo span{
    color:#7c3aed;
}

.sidebar nav{
    display:flex;
    flex-direction:column;
    gap:12px;
}

.sidebar nav a{
    text-decoration:none;
    color:#e5e7eb;
    font-size:14px;
    padding:8px 10px;
    display:flex;
    align-items:center;
}

.sidebar nav a span.icon{
    margin-right:8px;
}

.sidebar nav a:hover{
    color:#facc15;
}

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
}

.main-content{
    margin-left:220px;
    padding:30px;
}
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
        <?php }else{?>

        <a href="../views/LoginForm.php"><span class="icon">🔑</span>Login</a>
        <a href="../views/SignupForm.php"><span class="icon">📝</span>Sign Up</a>
        <?php } ?>
    </nav>
</aside>

<!-- TOP BAR -->
<div class="topbar">
</div>

<!-- PAGE CONTENT -->
<div class="main-content">
    <!-- Your existing page content -->
</div>

</body>
</html>
