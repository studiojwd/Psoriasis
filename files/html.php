<?php include_once( "constants.php" ); ?>
<?
$TIME = time() + TIME_DIFF;
$FILE = preg_replace( "/index/", "Home", basename( $_SERVER[ 'PHP_SELF' ], ".php" ));
$TITLE = preg_replace( "/_/", " ", $FILE );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo $tpTitle ?></title>
  <meta name="description" content="<?php echo $pgDesc ?>"></meta>
  <meta name="keywords" content="<?php echo $pgKeywords ?>"></meta>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="robot" content="index,follow">
  <meta name="revisit-after" content="5">
  <meta name="copyright" content="Copyright 2010, JWDesign.eu All rights reserved">
  <link type="text/css" media="all" rel="stylesheet" href="files/index.css" />
  <!--[if IE]>
  <link rel="stylesheet" type="text/css" media="all" href="files/ie_bugs.css" />
  <![endif]-->
<script type="text/javascript" src="files/head.js" ></script>
  <link rel="shortcut icon" href="/favicon.ico" />
</head>
<body>
  <div class="wrapper">
    <div class="ie_float_bug"></div>
    <div id="header">
    	<div class="header-color">&nbsp;</div>
      <h1>Psoriasis</h1>
    </div>
    
    <div class="group">
      <a href="index.php" class="menu">About Psoriasis</a>
      <a href="Medical_Treatments_for_Psoriasis.php" class="menu">Medical Treatments for Psoriasis</a>
      <a href="Research_on_the_Oregon_Plant.php" class="menu">Research on the Oregon Plant</a>
      <a href="Research_on_the_Oregon_Grape.php" class="menu">Research on the Oregon Grape</a>
      <a href="Cosmetic_Treatments_for_Psoriasis.php" class="menu">Cosmetic Treatments for Psoriasis</a>
      <a href="Oregon_Skin_Care_Range.php" class="menu">Oregon Skin Care Range</a>
      <a href="Examples_of_Psoriasis.php" class="menu">Examples of Psoriasis</a>



    </div>
    <div class="clear">&nbsp;</div>
    <div class="content" id="<?=$FILE?>">
        <? @include_once "pages/" . $FILE . ".html"; ?>
        <? @include_once "pages/" . $FILE . ".php"; ?>
    </div>

    <div class="clear">&nbsp;</div>
    <div class="footer">
      <div class="copyright">
        &copy; 2010, Designed by <a href="http://www.jwdesign.eu" target="_blank">JWDesign.eu</a>
      </div>
    </div>
  </div>
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-243403-12']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
