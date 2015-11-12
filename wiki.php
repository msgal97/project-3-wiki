<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="wiki.css">
        <meta charset="utf-8">
        <title>Wiki</title>
    </head>
    <body>
      <h1>What are your thoughts on this shade of blue?</h1>

<?php

if (file_exists('wiki.txt')) {
    $content = file_get_contents('wiki.txt');
} else {
    $content = '(no content)';
}
if(file_exists('wiki.txt')){
  $wiki = file_get_contents('wiki.txt');
}
else{
  $wiki = 'no wiki';
}
if(isset($_GET['content'])){
  $content = $_GET['content'];
    file_put_contents('wiki.txt', $content);
}

?>

<div id="content">

<div class="change">
<form action="wiki.php">
    Share Your Feelings <br/>
    <textarea name="content" rows="8" cols="80">
    </textarea><br/>
    <input type="submit" value="Submit">

    </textarea>
</form>
</div>

</body>
</html>
