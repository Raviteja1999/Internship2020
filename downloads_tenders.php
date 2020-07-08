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
        <meta name="viewport" content="width=1024">
        <title>Title Page</title>

      
    </head>
    <style>
            .content{
       padding:20px;
      word-spacing: 3px ;
      line-height: 1.5;
  }
    
    </style>

      <body>
     
<div class="content">
	
    <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Downloads&gt;Tenders & Quotations</h5>		
    
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
   <div id="content">
    <br>
    
    <h3 style="text-align: center; "><span style="color: rgb(165, 42, 42); "><strong>TENDERS / QUOTATIONS (ARCHIVES) </strong></span></h3><br />
    
    
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


        <?php
include "footerreader.php";
?>
</html>
