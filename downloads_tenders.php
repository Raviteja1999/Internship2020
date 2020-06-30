<?php
       include "heading1.html";
      echo "<br>";
      include "navfinal.html";
      echo "<br>"
      ?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

      
    </head>
    <style>
           .content{
                padding:15px;
           }

    </style>

      <body>
     
<div class="content">
	
    <h3 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;Downloads&gt;Tenders & Quotations</h3>		
    
    <input type="button" id="btn" value="Print" onclick="printDiv();" style="float:right">
    <div id="content">
    <br>
    
    <h1 style="text-align: center; "><span style="font-size:16px;"><span style="color: rgb(165, 42, 42); "><strong>TENDERS / QUOTATIONS (ARCHIVES) </strong></span></span></h1><br />
    
    
    <a href="files/homo.pdf" ><p style="font-color:red;">Tender Notice for supply of Homogeniser & Automatic Nitrogen Evaparator at ICAR-CTRI, Rajahmundry</p></a>
    
    <a href="files/printing.pdf" ><p style="font-color:red;">Quotation for printing and supply of different publications</p></a> 
    <p>
        &nbsp;</p>
    
    <a href="files/etender.pdf" ><p style="font-color:red;">E-tender notice for false ceiling</p></a> 
    <p>
        &nbsp;</p>
    
    </div>
        
       <br class="clear" />
    
    </div><!-- Class Content End -->

     

     </body>


        <?php
include "footerreader.php";
?>
</html>
