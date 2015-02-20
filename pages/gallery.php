<?php
  #Author: Alexis Carroll
  include "../includes/header_template.php";
?>

<h2>Gallery</h2>

<?php
  $filearr = get_a_file("../text/articles.txt");
  $filearr = array_reverse($filearr);
  foreach ($filearr as $article):
    list($title, $story, $picture, $picalt) = explode("\t", $article);	
?>

<div class="article">
  <h3><?= $title?></h3>

  <img src="../img/<?= $picture?>" alt="<?= $picalt?>" />
</div>

<?php
  endforeach;
  include "../includes/footer_template.php";
?>
