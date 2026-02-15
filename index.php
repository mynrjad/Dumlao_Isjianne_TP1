<?php
$name = "Mynrjad";
$title = "UI/UX Designer & Experience Architect";
$xp = 87; // Skill level progress
$level = 12;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $name; ?> | Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">

<style>
:root{
    --neon: #00fff5;
    --purple: #7a00ff;
    --bg: #0f0f1a;
    --card: rgba(255,255,255,0.05);
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: 'Inter', sans-serif;
    background: var(--bg);
    color: white;
    overflow-x:hidden;
}

/* Animated Background */
body::before{
    content:"";
    position:fixed;
    width:200%;
    height:200%;
    background: radial-gradient(circle at 30% 30%, var(--purple), transparent 40%),
                radial-gradient(circle at 70% 70%, var(--neon), transparent 40%);
    animation: moveBg 10s linear infinite alternate;
    z-index:-1;
}

@keyframes moveBg{
    from{ transform: translate(-10%, -10%); }
    to{ transform: translate(10%, 10%); }
}

header{
    padding:60px 20px;
    text-align:center;
}

h1{
    font-family:'Orbitron', sans-serif;
    font-size:3rem;
    text-shadow: 0 0 20px var(--neon);
}

.subtitle{
    opacity:0.8;
    margin-top:10px;
}

.level-box{
    margin-top:20px;
}

.progress{
    width:300px;
    height:12px;
    background:#222;
    margin:10px auto;
    border-radius:20px;
    overflow:hidden;
}

.progress-bar{
    height:100%;
    background:linear-gradient(90deg, var(--neon), var(--purple));
    width: <?php echo $xp; ?>%;
    animation: loadBar 2s ease forwards;
}

@keyframes loadBar{
    from{ width:0 }
}

.section{
    padding:60px 20px;
    text-align:center;
}

.cards{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:30px;
    margin-top:40px;
}

.card{
    background:var(--card);
    backdrop-filter: blur(10px);
    padding:30px;
    width:280px;
    border-radius:20px;
    transition:0.4s ease;
    cursor:pointer;
    border:1px solid rgba(255,255,255,0.1);
}

.card:hover{
    transform:translateY(-10px) scale(1.05);
    box-shadow:0 0 30px var(--neon);
}

.card h3{
    font-family:'Orbitron', sans-serif;
    margin-bottom:15px;
}

button{
    margin-top:20px;
    padding:10px 20px;
    background:transparent;
    border:1px solid var(--neon);
    color:white;
    cursor:pointer;
    border-radius:20px;
    transition:0.3s;
}

button:hover{
    background:var(--neon);
    color:black;
    box-shadow:0 0 20px var(--neon);
}

footer{
    text-align:center;
    padding:40px;
    opacity:0.6;
}
</style>
</head>

<body>

<header>
    <h1><?php echo $name; ?></h1>
    <div class="subtitle"><?php echo $title; ?></div>

    <div class="level-box">
        <p>Level <?php echo $level; ?> Designer</p>
        <div class="progress">
            <div class="progress-bar"></div>
        </div>
        <small><?php echo $xp; ?>% to next level</small>
    </div>
</header>

<section class="section">
    <h2>🎮 Select Your Mission</h2>

    <div class="cards">
        <div class="card" onclick="openMission('about')">
            <h3>01 — About Me</h3>
            <p>Learn the backstory of the designer.</p>
        </div>

        <div class="card" onclick="openMission('projects')">
            <h3>02 — Projects</h3>
            <p>Explore completed design quests.</p>
        </div>

        <div class="card" onclick="openMission('contact')">
            <h3>03 — Contact</h3>
            <p>Start a new collaboration mission.</p>
        </div>
    </div>

    <div id="missionContent" style="margin-top:40px;"></div>
</section>

<footer>
    © <?php echo date("Y"); ?> <?php echo $name; ?> — Game Mode Active
</footer>

<script>
function openMission(type){
    const content = document.getElementById("missionContent");

    if(type === "about"){
        content.innerHTML = `
        <div class="card">
            <h3>Designer Lore</h3>
            <p>A UI/UX Designer focused on crafting seamless, intuitive experiences.
            Specialized in research-driven design and system building.</p>
        </div>`;
    }

    if(type === "projects"){
        content.innerHTML = `
        <div class="card">
            <h3>Featured Quest</h3>
            <p>CRM Tool for Real Estate — Increased usability and workflow efficiency.</p>
            <p>Developer Community Event Designs — GitHub PH</p>
        </div>`;
    }

    if(type === "contact"){
        content.innerHTML = `
        <div class="card">
            <h3>Start Mission</h3>
            <p>Email: hello@yourdomain.com</p>
            <button onclick="levelUp()">Send Signal</button>
        </div>`;
    }
}

function levelUp(){
    alert("🚀 Collaboration Request Sent!");
}

document.addEventListener("keydown", function(e){
    if(e.key === "x"){
        document.body.style.background = "#000";
    }
});
</script>

</body>
</html>
