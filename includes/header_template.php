<?php
# Author: Alexis Carroll

# read a file of text, strip newlines
# return the file as an array of lines
function get_a_file( $filename )
{
  $lines = file( $filename, FILE_IGNORE_NEW_LINES );
  return $lines;
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="Alexis Carroll" />
    <link rel="stylesheet" href="../css/style.css" />

    <title>Blogging Website</title>
  </head>
  <body>

    <header>
      <h1 id="name">
        Blogging Website
      </h1>
      <div id="motto">
        Store your life
      </div>

      <nav>
        <a href="home.php">Home</a>
        <a href="aboutme.php">About Me</a>
        <a href="archive.php">Archives</a>
        <a href="addpost.php">Add Post</a>
        <a href="gallery.php">Photo Gallery</a>
      </nav>
    </header>
