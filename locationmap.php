

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
        <meta name="viewport" content="width=1024">
        <title>location | CTRI,Rajahmundry</title>


       
    </head>

    <style>
        .content{
            padding:20px;
        }
       #content{
           text-align:center;
       }
    </style>
    <body>
    <div class="content">
	
    <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;About Us&gt;Location Map</h5>		
    
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printDiv();" style="float:right">
    <div id="content" >
    
    
    <h2 style="text-align: center; ">
       <span style="color: rgb(165, 42, 42); "><strong>LOCATION MAP</strong></span></h2>
    <br>
    
    
    <iframe width="1000px" height="350"  class="map" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=CTRI+rajahmundry&amp;sll=37.0625,-95.677068&amp;sspn=47.885545,93.076172&amp;t=m&amp;ie=UTF8&amp;hq=CTRI&amp;hnear=Rajahmundry,+East+Godavari,+Andhra+Pradesh,+India&amp;ll=17.026011,81.794243&amp;spn=0.028539,0.026381&amp;output=embed"></iframe><br>
        
      <p>
        &nbsp;</p>
    
    </div>
        
       <br class="clear" />
    
    </div><!-- Class Content End -->
    

     
    </body>
    <?php
    include "footerreader.php";
    ?>

<script>
         function printdiv() 
       {

       var divToPrint=document.getElementById('content');

       var newWin=window.open('','Print-Window');

       newWin.document.open();
       newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');
       newWin.document.close();
       setTimeout(function(){newWin.close();},10);

       }
      </script>
     
</html>
