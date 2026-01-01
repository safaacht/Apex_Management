<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>APEX MERCATO - Home</title>
<style>
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
</style>
</head>
<body>

<?php require_once '../ApexMercato/header.php' ?>


<main>
    <h1>Welcome to <span>APEX MERCATO</span></h1>
    <p>Your e-Sport management platform. Manage players, coaches, and tournaments easily.</p>
    <div>
        <button onclick="location.href='signup.php'">Sign Up</button>
        <button onclick="location.href='login.php'">Login</button>
    </div>
</main>

<?php require_once '../ApexMercato/footer.php' ?>


</body>
</html>
