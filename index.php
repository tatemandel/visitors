<html>
  <head>
    <title>TATE'S SITE</title>
  </head>
  <body>
    <t>Number of visitors: </t>
    <?php system ('python getcount.py'); ?>
    <?php system ('python increment.py'); ?>
    <t><br/><br/>Users by browser:<br/></t>
    <div style="margin-left:15px;">
    <?php 
       $a = $_SERVER['HTTP_USER_AGENT'];
       $command = "python browser.py \"$a\"";
       system ("$command");
    ?>
    </div>
  </body>
</html>
