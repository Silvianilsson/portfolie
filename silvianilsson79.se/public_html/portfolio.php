<?php require_once('./php/header.php'); ?>

<?php
require_once('config.php');
require_once(ROOT_PATH.'/classes/db.php');


$db = new Db();

//hämtar alla portfolie items från databasen
$categories = $db->getCategories();

$items = $db->getItems();

//skapar en html list item från en portfolie-item
function portfolio_item($item) 
{

      $html = '<li class="portfolio-item">';
      $html .= '<figure>';
      $html .= '<a href="/visa.php?id='.$item->id.'">';
      $html .= '<img class="thumbnail" src="'.RELATIVE_UPLOAD_PATH.$item->bild.'">';
      $html .= '<figcaption>'.$item->title.'</figcaption>';
      $html .= '</a>';
      $html .= '</figure>';
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
      <ul class="portfolio_list">
        <?php foreach ($items as $item) : ?>
           <?php echo portfolio_item($item); ?> 
        <?php endforeach ?>
      </ul>
    </section>

    <section id="right_column">
    </section>

    <?php require_once('./php/footer.php'); ?>
  </section>


</body>
</html>