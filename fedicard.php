<?php
if (isset($_GET['profile'])) {
$profile = $_GET['profile'];
$name = basename($profile);
}
?>
<html lang="en">
<head>
    <title>@<?= $name; ?> Fedicard</title>
<?php
  include_once('inc/inhead.php');   
?>
</head>
<body>
<?php
 include_once('inc/navbar.php');  
?>
    
  <div class="container mt-3">
    <?php
    if (isset($profile)) {
    echo file_get_contents("https://maplefeed.bihlink.com/apiv2/feed?userurl=https://$profile&theme=modern-light-min&size=100&header=true&replies=false&boosts=true");
    } else {
    echo file_get_contents("https://maplefeed.bihlink.com/apiv2/feed?userurl=https://mastodon.social/users/abidnev&theme=modern-light-min&size=100&header=true&replies=false&boosts=true");
    }
    ?>
  </div>
    
  <div class="my-3 p-3 text-center">
      Feed Powered By <a href="https://maplefeed.bihlink.com" target="_blank">MaPleFeed</a>
  </div>
</body>
</html>
