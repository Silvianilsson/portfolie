<?php require_once('./php/header.php'); ?>

<?php

require_once('config.php');
require_once(ROOT_PATH.'/classes/db.php');


$db = new Db();

$items = $db->getCategories();

//skapar en html list item från en portfolie-item
function portfolio_item($item) 
{

      $html = '<li class="portfolio-item-kurser">';
      $html .= '<a href="/portfolio_by_category.php?id='.$item->id.'">';
      $html .= $item->name;
      $html .= '</a>';
      $html .= '</li>';
      
      return $html;
      
}
?>

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
       <ul class="links_list">
         <?php foreach ($items as $item) : ?>
            <?php echo portfolio_item($item); ?>
          <?php endforeach ?>
       </ul>
      
      <img class="links_pic" src="images/kurser2.jpg" alt="Kurs" title="Kurs"/>

    </section>

    <section id="right_column">
    </section>

    <?php require_once('./php/footer.php'); ?>
  </section>


</body>
</html>