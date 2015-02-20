<?php
  #Author: Alexis Carroll
  include "../includes/header_template.php";
?>

<h2>Home Page</h2>

<h3>About This Site</h3>

<h4>This Page</h4>

<p>
  This site is meant for personal blogging. You can follow the links at the top
  of the page to navigate the site. This main page includes a description of
  all the pages and features that are both currently implemented and will be
  done in the future. It also contains the three most recent posts in full form.
</p>

<h4>Add Post</h4>

<p>
  The Add Post page is a page where you can add your own post.  Right now, a
  post consists of a title and a story. Eventually, you will also be able to
  upload a photo to go with your story. Eventually, this feature will be
  password protected.
</p>

<h4>About Me</h4>

<p>
  The About Me page displays information about the main user of the site.
  Eventually, there will be a page in which the main user can enter their
  information.
</p>

<h4>Archive</h4>

<p>
  The Archive page displays all posts. The stories are shortened to save
  vertical space, and eventually there will be a delete button so the user
  can delete posts. This feature will also be password protected. Eventually,
  you will be able to click on a post title to send you to a page with the
  whole story.
</p>

<h4>Photo Gallery</h4>

<p>
  Once photo submission has been implemented, the Photo Gallery page will
  show all photos that have been submitted. You will be able to click on the
  photo to go to the full story.
</p>

<?php
  $filearr = get_a_file("../text/articles.txt");
  $filearr = array_reverse($filearr);
  for ($i = 0; $i < 5; $i++):
    list($title, $story, $picture, $picalt) = explode("\t", $filearr[$i]);
?>
<div class="article">
  <h3><?= $title?></h3>

  <img src="../img/<?= $picture?>" alt="<?= $picalt?>" />

  <p><?= $story?></p>
</div>
<?php
  endfor;
  include "../includes/footer_template.php";
?>
