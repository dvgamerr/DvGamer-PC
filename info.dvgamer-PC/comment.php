<?php ob_start(); ?>
<html>
<head>
<?php 
include ("include/info.dvgamer.php");
?>
<title><?php echo $DVG_TITLE; ?></title>
</head><head>
<style type="text/css">
body {background:url(images/bg/AssasinCreed.jpg) right top no-repeat; bgcolor:#FFFFFF;}
</style>
<link rel="shortcut icon" href="images/DevilG.ico">
<link href="include/dvgamer_css.css" rel="stylesheet" type="text/css">
<link href="include/template_css.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="include/module.js"></script>

</head><body>
<table class="logo" height="311" border="0" cellpadding="0" cellspacing="0">
  <tr>
     <td  id="logo" width="600" ><img src="images/info.DvG_logo.png" width="600" height="313" border="0"></td>
     <td valign="top"><?php require("include/header_top.php"); ?></td>
  </tr>
</table>
<?php Moduleleft($adminlogin,$adminuser);  ?>
<table class="main" width="70%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td>
        <div class="main_head"><div>
          <div><strong>.: <a href="index.php?option=home"><?php echo $DVG_HOME; ?></a> --&gt; <?php echo $COMMENT_ADD; ?> :.</strong><br>
          <img class="line" src="images/head_line.png"></div></div></div>
        </td>
    </tr>
    <tr>
      <td>
      <div class="main_body" style="margin-bottom:0px;"><div><div>
      <center>
        <strong>NOW LOADING...</strong><br>
        <img src="images/loading.gif" border="0">
      </center>
      <?php if($cname == "" || $ccomment == "" || strlen($cname) <= 4 || strlen($ccomment) <= 10) { ?>
      <meta http-equiv="refresh" content="0;URL=index.php?option=addcomment&page=fail" >
        <?php 
		echo "</div></div></div>";
		echo "</td></tr><tr><td><div class=\"main_foot\"><div><div>&nbsp;</div></div></div></td></tr></table><br>";
		exit(); } ?>
        
		<?php
		  $sql = "Insert into dvg_comment (name, comment, date, ip) Values ('$cname','$ccomment','".date("Y-m-d")."','".$REMOTE_ADDR."');";
		  $result = mysql_query($sql);
		  echo "<br><br>";
		  if ($result) { ?>
              <meta http-equiv="refresh" content="0;URL=index.php?option=showcomment&id=success" >
          <?php } else { ?> 
              <meta http-equiv="refresh" content="0;URL=index.php?option=addcomment&page=fail" >
           <?php } ?>
           </div></div></div>
       </td>
    </tr>
    <tr>
        <td>
        <div class="main_foot"><div><div>
        &nbsp;
        </div></div></div>
        </td>
    </tr>
</table><br>
</body>
</html>
<?php ob_end_flush(); ?>