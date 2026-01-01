<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>APEX Management</title>

<style>
/* RESET */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', sans-serif;
}

/* SIDEBAR */
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

/* LOGO */
.logo{
    font-size:22px;
    font-weight:bold;
    color:#22d3ee;
    margin-bottom:30px;
}

.logo span{
    color:#7c3aed;
}

/* SIDEBAR NAV */
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
    margin-right:8px; /* spacing between emoji and text */
}

.sidebar nav a:hover{
    color:#facc15;
}

/* TOP BAR */
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

/* MAIN CONTENT */
.main-content{
    margin-left:220px;
    /* margin-top:60px; */
    padding:30px;
}
</style>
</head>

<body>

<!-- SIDEBAR -->
<aside class="sidebar">
    <div class="logo">APEX<span>Management</span></div>

    <nav>
        <a href="../ApexMercato/index.php"><span class="icon">🏠</span>Home</a>
        <a href="../views/dashboard.php"><span class="icon">📊</span>Dashboard</a>

        <?php if(isset($_SESSION['user_id'])){ ?>
            <a href="../views/JoueurForm.php"><span class="icon">➕</span>Players</a>
            <a href="../views/CoachForm.php"><span class="icon">➕</span>Coaches</a>
            <a href="../actions/logout.php"><span class="icon">🔓</span>Logout</a>
        <?php } ?>

        <a href="../views/LoginForm.php"><span class="icon">🔑</span>Login</a>
        <a href="../views/SignupForm.php"><span class="icon">📝</span>Sign Up</a>
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
