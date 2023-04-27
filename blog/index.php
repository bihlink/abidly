<?php
$p = $_GET['p'];
if(isset($p)) {
   $file = $p . '.php';
   if (file_exists($file) == true) {
       include $file;
   } else {
       echo '<h1>The file '.$file.' does not exist.</h1>';
       exit();
   }
   //include $p . '.php';
} else {
?>

<html lang="en">
<head>
    <title>Abid's Blog</title>
<?php
  include_once('inhead.php');   
?>
<meta property="og:title" content="Abid's Blog">
<meta property="og:description" content="Articles and guest posts with various interesting topics">
<meta property="og:image" content="https://api.pagepeeker.com/v2/thumbs.php?size=x&code=e29fa6bbd0&url=https://abid.vercel.app/blog/">
<meta property="og:url" content="https://abid.vercel.app/blog/">
<meta property="og:site_name" content="Abid's Network">
<meta property="og:locale" content="en_US">
</head>
<body>
<?php
 include_once('navbar.php');  
?>
  <div class="container shadow my-3">
    <div class="row">
       <div class="col-md-8 col-lg-9">
         
        <h1>Abid's Blog</h1>
       
       </div>
       <div class="col-md-4 col-lg-3">
         <?php
         include_once('sidebar.php');  
         ?>
       </div>
     </div>
  </div>
</body>
</html>

<?php
}
