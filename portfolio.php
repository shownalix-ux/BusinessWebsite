<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - DG DIGITAL WEB TEAM</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
    <div class="logo">DG DIGITAL WEB TEAM</div>

    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>

    <a href="https://wa.me/923713727350" class="nav-btn">WhatsApp</a>
</header>

<section class="services">
    <div class="container">
        <h1>Our Portfolio</h1>
        <p>Some of the websites and digital projects we create.</p>

        <div class="service-grid">

            <div class="service-card">
                <h3>Corporate Business Website</h3>
                <p>Professional website for a growing business.</p>
            </div>

            <div class="service-card">
                <h3>E-Commerce Store</h3>
                <p>Online shopping website with responsive design.</p>
            </div>

            <div class="service-card">
                <h3>Restaurant Website</h3>
                <p>Modern website with menu, gallery and contact page.</p>
            </div>

            <div class="service-card">
                <h3>Portfolio Website</h3>
                <p>Personal portfolio for freelancers and developers.</p>
            </div>

            <div class="service-card">
                <h3>Landing Page</h3>
                <p>High-converting landing page for marketing campaigns.</p>
            </div>

            <div class="service-card">
                <h3>Business Dashboard</h3>
                <p>Custom admin panel and management system.</p>
            </div>

        </div>
    </div>
</section>

</body>
</html>
^\
<?php $pageTitle = "Portfolio"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portfolio | Your Business</title>

<link rel="stylesheet" href="assets/css/style.css">

<style>
body{
margin:0;
font-family:Arial,sans-serif;
background:#f5f7fa;
}
.container{
max-width:1200px;
margin:auto;
padding:60px 20px;
}
h1{
text-align:center;
font-size:42px;
margin-bottom:10px;
}
.subtitle{
text-align:center;
color:#666;
margin-bottom:50px;
}
.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
gap:30px;
}
.card{
background:#fff;
border-radius:12px;
overflow:hidden;
box-shadow:0 8px 25px rgba(0,0,0,.08);
transition:.3s;
}
.card:hover{
transform:translateY(-8px);
}
.card img{
width:100%;
height:220px;
object-fit:cover;
}
.content{
padding:20px;
}
.content h3{
margin-top:0;
}
.tech{
color:#0d6efd;
font-size:14px;
margin:10px 0;
}
.btn{
display:inline-block;
padding:10px 18px;
background:#0d6efd;
color:#fff;
text-decoration:none;
border-radius:6px;
margin-top:10px;
}
</style>
</head>

<body>

<div class="container">

<h1>Our Portfolio</h1>
<p class="subtitle">
A selection of websites built for businesses and professionals.
</p>

<div class="grid">

<div class="card">
<img src="https://picsum.photos/600/400?random=1" alt="">
<div class="content">
<h3>Business Website</h3>
<p>Modern corporate website with responsive design.</p>
<p class="tech">HTML • CSS • PHP</p>
<a href="#" class="btn">View Project</a>
</div>
</div>

<div class="card">
<img src="https://picsum.photos/600/400?random=2" alt="">
<div class="content">
<h3>Restaurant Website</h3>
<p>Elegant restaurant website with online booking.</p>
<p class="tech">PHP • JavaScript</p>
<a href="#" class="btn">View Project</a>
</div>
</div>

<div class="card">
<img src="https://picsum.photos/600/400?random=3" alt="">
<div class="content">
<h3>E-Commerce Store</h3>
<p>Fast online store with premium user experience.</p>
<p class="tech">PHP • MySQL</p>
<a href="#" class="btn">View Project</a>
</div>
</div>

<div class="card">
<img src="https://picsum.photos/600/400?random=4" alt="">
<div class="content">
<h3>Agency Website</h3>
<p>Professional digital agency website for international clients.</p>
<p class="tech">Bootstrap • PHP</p>
<a href="#" class="btn">View Project</a</d^\

^\
<?php
require_once("config/database.php");

$projects = $db->query("SELECT * FROM portfolio ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);

include("includes/navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Portfolio</title>

<style>
.container{
max-width:1200px;
margin:40px auto;
padding:20px;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:20px;
}

.card{
background:#fff;
border-radius:10px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
overflow:hidden;
}

.card img{
width:100%;
height:220px;
object-fit:cover;
}

.card h3{
padding:15px;
margin:0;
}

.card p{
padding:0 15px 15px;
}
</style>

</head>
<body>

<div class="container">

<?php foreach($projects as $project){ ?>

<div class="card">

<img src="uploads/portfolio/<?= htmlspecialchars($project['image']); ?>" alt="Project">

<h3><?= htmlspecialchars($project['title']); ?></h3>

<p><?= htmlspecialchars($project['description']); ?></p>

</div>

<?php } ?>

</div>

<?php include("includes/footer.php"); ?>

</body>
</html>
