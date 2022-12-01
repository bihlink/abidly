<html lang="en">
<head>
    <title>Abid's Pleroma Instance</title>
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
    echo file_get_contents("https://maplefeed.bihlink.com/apiv2/feed?userurl=https://abid.cc/users/abid&theme=modern-light-min&size=100&header=true&replies=true&boosts=true");
    ?>
  </div>
    
  <div class="my-3 p-3 text-center">
      Feed Powered By <a href="https://maplefeed.bihlink.com" target="_blank">MaPleFeed</a>
  </div>
</body>
</html>
