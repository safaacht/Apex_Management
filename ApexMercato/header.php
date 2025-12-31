<header>
    <div class="logo">APEX<span>Management</span></div>
    <nav>
        <a href="../ApexMercato/index.php">Home</a>
        <a href="../views/dashboard.php">Dashboard</a>
        <?php if(isset($_SESSION['user_id'])){?>
            <a href="../views/JoueurForm.php">Players</a>
            <a href="../views/CoachForm.php">Coaches</a>
            <a href="../actions/logout.php">Logout</a>
        <?php } ?>   
        <a href="../views/LoginForm.php">Login</a>
        <a href="../views/SignupForm.php">Sign Up</a>
    </nav>
</header>

<style>
header{
    background:#020617;
    border-bottom:1px solid #1f2937;
    padding:15px 40px;
}

header .logo{
    font-size:22px;
    font-weight:bold;
    color:#22d3ee;
}

header .logo span{
    color:#7c3aed;
}

header nav{
    margin-top:8px;
}

header nav a{
    margin-right:20px;
    text-decoration:none;
    color:#e5e7eb;
    font-size:14px;
}

header nav a:hover{
    color:#facc15;
}
</style>