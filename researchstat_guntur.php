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
        <title>Guntur | CTRI,Rajahmundry</title>

      
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
	
    
    <h5 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;Research Stations&gt;Guntur</h5>	
    <br>
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
    
    <div id="content">
    <p>
    
    <h3 style="text-align: center; ">
        <span style="color: rgb(165, 42, 42); "><strong>CTRI RESEARCH STATION, GUNTUR</strong></span></span></h3>	
    
    
    <h5 style="text-align: center; ">GUNTUR DISTRICT - 522004,  Andhra Pradesh. Phone : 0863-231892 </h5>
    <h5 style="text-align: center; ">Name of the Head (in-charge): Dr P. VENKATESWARULU</h5><br>
    
    <h3 style="text-align: center; ">
    <img  style='height:320px;width:700px;  border:3px solid black;' src="images/guntur.jpg" alt="guntur"></h3>
    
    <p style="line-height:1.5;">The CTRI Research Station, Guntur was established in 1936 under aegis of Imperial 
    Agricultural Research Institute, New Delhi. In October 1965 it was brought under the 
    administrative and technical control of Indian Council of Agricultural Research, New 
    Delhi. It is a purely black soil farm with high content of clay, pH ranging from 8 to
     8.5, low in organic carbon, medium in phosphorus and high in potassium. </p>
    
    <h3><b>MANDATE</b></h3>
    
    
    <p>
        <span style="font-size:16px;">1. Evolving high yielding FCV, Natu and HDBRG varieties.  </span></p>
    <p>
        <span style="font-size:16px;">2. Maintenance of Germplasm of Natu / HDBRG tobaccos.</span></p>
    <p>
        <span style="font-size:16px;">3. Developing suitable crop management practices for higher yield and quality.</span></p>
    <p>
        <span style="font-size:16px;">4. To work out alternative cropping systems to FCV tobacco. </span></p>
    
    <p>
        <span style="font-size:16px;">5.  To develop pest management modules for effective control of major insect pests. </span></p>
    
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
