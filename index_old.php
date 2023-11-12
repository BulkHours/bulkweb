<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style_old.css">
	<style type="text/css">
  video {
        width: 100%    !important;
        height: auto   !important;        
        object-fit: cover; // use "cover" to avoid distortion
        position: absolute;
    }
  
  .img-unselected {
     filter: grayscale(100%);
     opacity: 0.3;
  }

  h3 {
      color: #0097B2;
      font-size: 150%;
  }
  h3 span { 
    background-color: #0097B2;
  }

	</style>
	<meta charset="utf-8">
	<title>Bulkhours</title>
	<link href="favicon.png" rel="icon" type="image/x-icon" />
</head>
<body>



<center>
<img alt="" src="https://raw.githubusercontent.com/guydegnol/bulkhours/main/data/BulkHours.png" />

<a href="/?lan=fr" style="font-size: 18px; margin: 4px 0;background-color: white; color: #4F77AA; padding: 5px 9px; text-align: center; text-decoration: none; display: inline-block;">
<?php
if (isset($_GET['lan']) && $_GET['lan'] == "fr") print('<img alt="" src="FR.png" width="20px" />');
else print('<img alt="" src="FR.png" width="20px" class="img-unselected" />');
?></a>


<a href="/" style="font-size: 18px; margin: 4px 0;background-color: white; color: #4F77AA; padding: 5px 9px; text-align: center; text-decoration: none; display: inline-block;">
<?php
if (isset($_GET['lan']) && $_GET['lan'] == "fr") print('<img alt="" src="UK.png" width="20px" class="img-unselected" />');
else print('<img alt="" src="UK.png" width="20px" />');
?></a>

<?php

if (isset($_GET['lan']) && $_GET['lan'] == "fr") $description = "Support de cours interactif avec évaluation automatique du contrôle continu";
else $description = "Interactive support for courses with automatic evaluation of students's continuous examination";
//$description = "";

print("<h3><span>" . $description . "</span></h3>");


?>

<!-- ul>
<li>🔗 Create a real-time interactivity between 🧑‍🎓students and 👨‍🏫teachers (through Jupyter notebooks),</li>
<li>📈 Serve as as data provider for practical case studies to support courses (data science, physics and IT for now),</li>
<li>🤖 Automatic evaluation of students,</li>
<li>👨‍💻 Tools to develop in C/C++/CUDA within a jupyter notebook environement (with a python kernel),</li>
<li>🧠 Simple Interfaces with new machine learning trends packages🤗.</li>


</ul -->


<br />

<a href="mailto:contact@bulkhours.eu" style="font-size: 18px; margin: 4px 0;background-color: white; color: #4F77AA; padding: 5px 9px; text-align: center; text-decoration: none; display: inline-block;">contact@bulkhours.eu</a>
<video autoplay="" controls=""><source src="Bulkhours_eu.mp4" type="video/mp4" /> Your browser does not support the video tag.</video>

<div>
<img alt="" src="https://raw.githubusercontent.com/guydegnol/bulkhours/main/data/keywords.png" height="500px" />
<a href="https://www.linkedin.com/in/guillaume-therin/">
  </a>
</div>

</center>

</body>
</html>