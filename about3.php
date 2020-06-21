

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
	
    <h3 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;About Us&gt;Location Map</h3>		
    
    <input type="button" id="btn" value="Print" onclick="printDiv();" style="float:right">
    <div id="content">
    
    
    <h2 style="text-align: center; ">
        <span style="font-size:16px;"><span style="color: rgb(165, 42, 42); "><strong>LOCATION MAP</strong></span></span></h2>
    <br>
    
    
    <iframe width="950" height="350" 
    src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=CTRI+rajahmundry&amp;sll=37.0625,-95.677068&amp;sspn=47.885545,93.076172&amp;t=m&amp;ie=UTF8&amp;hq=CTRI&amp;hnear=Rajahmundry,+East+Godavari,+Andhra+Pradesh,+India&amp;ll=17.026011,81.794243&amp;spn=0.028539,0.026381&amp;output=embed"></iframe><br>
        
      <p>
        &nbsp;</p>
    
    </div>
        
       <br class="clear" />
    
    </div><!-- Class Content End -->
    

     
    </body>
    <?php
    include "footer.php";
    ?>
</html>
