<html lang="en">
<head>
    <title>FediLink - Fediverse Directory Feed</title>
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
    echo file_get_contents("https://maplefeed.bihlink.com/apiv2/feed?userurl=https://mastodon.world/users/fedilink&theme=modern-light-min&size=100&header=true&replies=true&boosts=true");
    ?>
  </div>
</body>
</html>
