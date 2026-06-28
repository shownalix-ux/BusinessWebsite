<?php
$pageTitle = "Pricing";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pricing | Your Business</title>

<link rel="stylesheet" href="assets/css/style.css">

<style>
body{
font-family:Arial,sans-serif;
background:#f4f7fb;
margin:0;
}
.container{
width:90%;
max-width:1200px;
margin:auto;
padding:70px 20px;
}
.heading{
text-align:center;
margin-bottom:50px;
}
.heading h1{
font-size:42px;
margin-bottom:10px;
}
.heading p{
color:#666;
}
.cards{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
gap:30px;
}
.card{
background:#fff;
padding:35px;
border-radius:15px;
box-shadow:0 10px 30px rgba(0,0,0,.08);
text-align:center;
}
.card h2{
margin-bottom:15px;
}
.price{
font-size:42px;
font-weight:bold;
color:#0d6efd;
margin:20px 0;
}
.card ul{
list-style:none;
padding:0;
}
.card li{
padding:10px 0;
border-bottom:1px solid #eee;
}
.btn{
display:inline-block;
margin-top:25px;
padding:14px 28px;
background:#0d6efd;
color:#fff;
text-decoration:none;
border-radius:8px;
}
.featured{
transform:scale(1.05);
border:2px solid #0d6efd;
}
</style>

</head>
<body>

<div class="container">

<div class="heading">
<h1>Simple Pricing</h1>
<p>Choose the package that fits your business.</p>
</div>

<div class="cards">

<div class="card">
<h2>Starter</h2>
<div class="price">$50</div>

<ul>
<li>5 Pages Website</li>
<li>Responsive Design</li>
<li>Contact Form</li>
<li>Basic SEO</li>
<li>7 Days Support</li>
</ul>

<a href="contact.php" class="btn">Get Started</a>

</div>

<div class="card featured">
<h2>Professional</h2>

<div class="price">$150</div>

<ul>
<li>10+ Pages</li>
<li>Modern UI/UX</li>
<li>Portfolio</li>
<li>Speed Optimization</li>
<li>SEO Setup</li>
<li>30 Days Support</li>
</ul>

<a href="contact.php" class="btn">Most Popular</a>

</div>

<div class="card">

<h2>Business</h2>

<div class="price">$300+</div>

<ul>
<li>Custom Website</li>
<li>CMS Integration</li>
<li>Advanced SEO</li>
<li>Performance Optimization</li>
<li>Priority Support</li>
<li>Deployment Included</li>
</ul>

<a href="contact.php" class="btn">Request Quote</a>

</div>

</div>

</div>

</body>
</html>
