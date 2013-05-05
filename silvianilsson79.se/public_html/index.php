<?php require_once('./php/header.php'); ?>

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
      <img class ="barnen" src="images/jag.jpg" alt="Jag" title="Jag"/>
      <section id="datum" class="stil"><?php require_once('./php/date.php'); ?></section>
      <canvas id="klocka" height="300" width="300"></canvas>
    </section>

    <section id="right_column">         	
    </section>

    <?php require_once('./php/footer.php'); ?>
  </section>

  <script src="js/main.js"></script>    
</body>
</html>