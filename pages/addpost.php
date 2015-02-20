<?php
  #Author: Alexis Carroll
  include "../includes/header_template.php";
  if (isset($_POST["title"])) {
    $articles = get_a_file("../text/articles.txt");
    $newarticle = $_POST["title"] . "\t" . $_POST["story"] . "\t" . "../img/blank.jpg" . "\t" . "blank picture";
    $articles[] = $newarticle;
    $text = implode("\n", $articles);
    file_put_contents("../text/articles.txt", $text);
    echo "Article has been added";
  }
?>

<h2>Add Post</h2>

<p>
  Here you can add your post to the site. You will eventually be able to upload
  a picture associated with your story, but for right now, you may enter a
  title and a story.
</p>

<form method="post" action="addpost.php">

  <p>
    <input type="text" name="title" value="Enter your title here" />
    <textarea name="story" cols="50" rows="5">Enter your story here</textarea>
  </p>
  <p>
    <input type="submit" />
  </p>
</form>

<?php
    include "../includes/footer_template.php";
?>
