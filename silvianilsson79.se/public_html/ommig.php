<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Silvia Nilsson</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  
    <section id="page_container">
     <section id="head">
       <section id="head-left">
          <header>
             <a href="index.php"><h1>Silvia Nilsson</h1></a>
         </header>
     </section>
     <section id="head-right">
        <?php require_once('./php/meny.php'); ?>
    </section>
</section>

<section id="center_column">
    <article class="om_mig">Mitt namn är Silvia Nilsson och är <span id="age_text">33 år</span> gammal, är gift och har två barn. Tycker om att vara med familjen, vänner, träna och ta hand om vår söta kanin "Silledanke". Är uppvuxen i <span id="childhood_text">Söderhamn</span>. Och nu studerar jag Nätapplikationsprogrammerare i <span id="live_text">Växjö</span>  på Yrkeshögskolan.</article>
    <ul class="om_mig_list">
        <li><button id="age_link">Ålder</button></li>
        <li><button id="childhood_link">Uppvuxen</button></li>
        <li><button id="live_link">Bor</button></li>
        
    </ul>
    
</section>

<section id="right_column">
   
</section>

<?php require_once('./php/footer.php'); ?>


<script src="js/om_mig.js"></script>
</body>
</html>