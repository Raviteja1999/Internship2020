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
    </head>
    <body>
    <div class="content">
	
    
    <h5 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;Research Stations&gt;Kvkkandukur</h5>	
    <br>
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
    <div id="content">
    <p>
    
    <h3 style="text-align: center; ">
        <span style="color: rgb(165, 42, 42); "><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CTRI-KRISHI VIGYAN KENDRA, KANDUKUR</strong></span></span></h3>	
    
    
    <h3>PRAKASAM DISTRICT-523 105,  Andhra Pradesh.Phone:08598-223553 </h3>
    <h3>I/c Head, KVK: Dr. M. ANURADHA</h3><br>
    
    <h3 style="image-align: center; ">
    <img  style='height:320px;width:700px; border:3px solid black;' src="kvkkan.jpg" alt="kandukur"></h3>
    
    <p style="line-height:1.5;">Krishi Vigyan Kendra was established in the year 2012 under the administrative control of ICAR-CTRI Rajahmundry at CTRI Research station premises, Kandukur in Prakasam district of Andhra Pradesh. </p>
    
    
    <h3><b>MANDATE</b></h3>
    
    
    <p>
     <span style="font-size:16px;"> Application of technology/products through assessment, refinement and demonstration for adoption.   </span></p>
    
    <h3><b>ACTIVITIES</b></h3>
    <p>
        <span style="font-size:16px;">1.On-farm testing to identify the location specificity of agricultural technologies under various farming systems. </span></p>
    <p>
        <span style="font-size:16px;">2.Frontline demonstrations to establish production potentials of technologies on the farmers&#39; fields. </span></p>
    <p>
        <span style="font-size:16px;">3.Training of farmers and extension personnel to update their knowledge and skills in modern agricultural technologies. </span></p>
    
    <p>
        <span style="font-size:16px;">4. Work as resource and knowledge centre of agricultural technologies for supporting initiatives of public, private and voluntary sector for improving the agricultural economy. </span></p>
    
    <p>
        <span style="font-size:16px;">5.Identify, document and validate selected farm innovations. </span></p>
    
    <p>
        <span style="font-size:16px;">6.Organize extension activities to create awareness about improved agricultural technologies.</span></p>
    
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
