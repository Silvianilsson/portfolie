<?php require_once('./php/header.php'); ?>
<?php require_once('./php/contact.php'); ?>

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
  <p class="contact">Mobilnummer:0709-252835</br>
   <a href="mailto:silvia.nilsson@hotmail.com">silvia.nilsson@hotmail.com</a></p>
   <img class="sladd" src="images/kontakt.jpg" alt="Kontakt" title="Kontakt" height="500 px"img>

  <form class="contact-form" method="post" action="silvia.nilsson@hotmail.com">
    <?php echo form_input('text', 'name', 'Namn:', 'Namn') ?></br>
    <?php echo form_input('email', 'email', 'E-post:', 'E-post') ?></br>
    <?php echo text_area('message', 'Meddelande'); ?></br>
    
    

    <section class="control-group">
      <section class="controls">
        <button type="submit" class="btn">Skicka meddelande</button>
      </section>
    </section>
  </form>
</section>

<section id="right_column">

</section>

<?php require_once('./php/footer.php'); ?>

</section>
</body>
</html>