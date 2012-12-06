<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="programerare, växjö, yrkeshögskolan, nätapplikation, html"/>
    <meta name="description" content="Innehåller sidor om mig!"/>
    <meta name="author" content="Silvia Nilsson"/> 
    <title>Silvia Nilsson-Nätapplikationsprogrammerare</title>
    
    <link rel="shortcut icon" href="images/S.png">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  
    <section id="page_container">
       <section id="head">
           <section id="head-left">
              <header>
                 <a href="index.php"><h1>Silvia Nilsson</a></h1>
             </header>
         </section>
         <section id="head-right">
            <?php require_once('./php/meny.php'); ?>
            
        </section>
    </section>
    
    
    
    
    <section id="center_column">
       <img class ="me_pic" src="images/jag/lightbox13.jpg" alt="Silvia" title="Silvia"/>
       <section id="datum"></section>
       <canvas id="klocka" height="300" width="300"></canvas>
   </section>
   
   <section id="right_column">         	
   </section>
   
   <?php require_once('./php/footer.php'); ?>
</section>


<script src="js/main.js"></script>    
</body>
</html>