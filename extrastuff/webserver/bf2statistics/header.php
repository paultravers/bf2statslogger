<?php

// Everybody likes smaller files.
ob_start("ob_gzhandler");

// Start those stats!
require_once('BF2Stats.php');

require_once('config.php');

if( !$stats ) $stats = new BF2Stats();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
 <title><?php echo $title; ?><?php if($page_title) echo " - $page_title"; ?></title>
 <link rel="stylesheet" href="bf2stats.css" type="text/css">
 <script type="text/javascript">
  <!-- Break out of frames
   if (top.location != self.location) {top.location.replace(self.location);}
  //-->
 </script>
 <script type="text/javascript" src="<?php echo $resources_dir ?>/nt.js" ></script>
 <!--[if gte IE 5.5000]><script type="text/javascript" src="<?php echo $resources_dir ?>/pngfix.js"></script><![endif]-->
</head>
<body>