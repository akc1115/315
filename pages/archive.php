<?php
  #Author: Alexis Carroll
  include "../includes/header_template.php";
?>

<h2>Archives</h2>

<?php
  $filearr = get_a_file("../text/articles.txt");
  $filearr = array_reverse($filearr);
  foreach ($filearr as $article):
    list($title, $story, $picture, $picalt) = explode("\t", $article);
    $storypart = substr($story, 0, 50);	
?>
<div class="article">
  <h3><?= $title?></h3>

  <img src="../img/<?= $picture?>" alt="<?= $picalt?>" />

  <p><?= $storypart?></p>
</div>
<?php
  endforeach;
  include "../includes/footer_template.php";
?>
