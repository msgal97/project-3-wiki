<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="wiki.css">
        <meta charset="utf-8">
        <title>Wiki</title>
    </head>
    <body>
      <h1>What are your thoughts at the moment</h1>

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
    <?php echo $safe_content; ?>
  </div>
<form action="wiki.php">

    <input type="submit" value="Save">
    <textarea name="content" rows="8" cols="80"><?php

//echo $safe_content;

?></textarea>
</form>

<script>
$('#content').click(function() {
    $('form').removeClass('hidden');
    $('#content').addClass('hidden');
});
</script>
</body>
</html>
