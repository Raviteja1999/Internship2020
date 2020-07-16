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
        <title> HUNSUR | CTRI,Rajahmundry</title>

      
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
	
    <h5 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;Research Stations&gt;HUNSUR</h5>	
    <br>
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
    
    <div id="content">
    
    
    <p>
    
    <h3 style="text-align: center; ">
        <span style="color: rgb(165, 42, 42); "><strong>CTRI RESEARCH STATION, HUNSUR</strong></span></span></h3>	
    
    <h5 style="text-align: center; ">MYSORE DISTRICT - 571 105,  Karnataka. Phone : 08222-252030</h5>
    <h5 style="text-align: center; ">Head of the station: Dr.S. Ramakrishnan</h5><br>
    
    <h3 style="text-align: center; ">
    <img  style='height:320px;width:700px; border:3px solid black;' src="images/hunsur.JPG" alt="hunsur"></h3>
    
    <p style="line-height:1.5;">The research station was established in 1957 under the second five year 
    plan with Plant Pathology and Agronomy disciplines keeping an objective of
     finding remedial measures to control diseases. In order to conduct research 
     in other fronts, Plant Breeding, Nematology and Genetics disciplines were
     added during 1975, 1976 and 1978 respectively. Initially during the establishment,
     30 acres of land was available and in 1982 an additional area of 148 acres was
     acquired to fulfil the need. </p>
    <p style="line-height:1.5;">  The research station was established basically to conduct research on
     flue cured virginia tobacco. On account of large scale cultivation of bidi
     tobacco in southern Karnataka, work on bidi tobacco was also carried out.
     But when the area under bidi tobacco came down drastically due to large
     scale cultivation of FCV tobacco, the work on bidi tobacco was stopped
     in the year 1988. </p>
    
    <h3><b>MANDATE</b></h3>
    
    
    <p>
        <span style="font-size:16px;">1. To conduct research on all phases of production management of flue cured virginia tobacco of Karnataka. </span></p>
    <p>
        <span style="font-size:16px;">2. To collect tobacco germplasm and to maintain and operate tobacco genetic resources.</span></p>
    <p>
        <span style="font-size:16px;">3. To produce and distribute quality seeds of FCV tobacco varieties released from the Institute to Karnataka farmers. </span></p>
    <p>
        <span style="font-size:16px;">4. To publish and disseminate research findings and recommendations of latest technology to the tobacco growers</span></p>
    
    
    <p>
        </p>
    
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
