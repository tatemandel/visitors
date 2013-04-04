<html>
  <head>
    <title>TATE'S SITE</title>
  </head>
  <style>
    div {
    border:2px solid #000000;
    padding:10px 40px; 
    background-color:red;
    width:300px;
    border-radius:25px;
    box-shadow: 10px 10px 5px #888888
    }
   </style>
  <body>
    <t><strong>Number of visitors: </strong></t>
    <?php 
       system ('python getcount.py');
       system ('python increment.py'); 
    ?>
    <t><br/><strong>Users by browser:</strong><br/></t>
    <div>
    <?php 
       $a = $_SERVER['HTTP_USER_AGENT'];
       $command = "python browser.py \"$a\"";
       system ("$command");
    ?>
    </div>
  </body>
</html>
