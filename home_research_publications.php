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
        <title>Publications | CTRI,Rajahmundry</title>

      
    </head>
    <style>
      .content{
       padding:20px;
      word-spacing: 3px ;
      line-height: 1.5;
  }
    </style>
    </head>
    <body>
    <div class="content">

    <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Research&gt;Publications</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

	<h3 style="text-align: center; "><span style="color: rgb(165, 42, 42); "><strong>RESEARCH PUBLICATIONS</strong></span></h3>
    
    <br>
    <ol>
    
    <li><a href="files/fcj11.pdf" target="_blank" style="color:blue"><b>FCJ 11: A high yielding FCV tobacco cultivar for Northern Light Soils of Andhra Pradesh</b></a></li>
    
    <li><a href="bulletin.pdf" target="_blank" style="color:blue"><b>Technical Bulletin: ICAR-CTRI Research Contribution and Impact</b></a></li>
    
    <li><a href="files/sulakshana.pdf" target="_blank" style="color:blue"><b>CTRI Sulakshana: An improved FCV Tobacco Variety</b></a></li>
    <li><a href="files/indian.pdf" target="_blank" style="color:blue"><b>Indian Tobacco - The Compendium of Varieties</b></a></li>
            
    </ol>
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
