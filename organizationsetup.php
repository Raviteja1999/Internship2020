

<?php
include "heading1.html";
echo"<br>";
include "navfinal.html";
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>


       
    </head>
    <body>
    

    <div class="content">
	
    <h3 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;About Us&gt;Organisation Structure</h3>		
    
    <input type="button" id="btn" value="Print" onclick="printDiv();" style="float:right">
    <div id="content">
    
    <br>
    
    <h3 style="image-align: center; ">
    <img  style='height:700px;width:600px' src="images/organisation.PNG" alt="organisation"></h3>
    
    
       <br class="clear" />
    
    </div><!-- Class Content End -->
    </body>
    <?php
    include "footerreader.php";
    ?>
</html>
