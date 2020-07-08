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
	
    <h5 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;Research Stations&gt;Vedasandur</h5>	
    <br>
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
    <div id="content">
    
    
    <br>
    <p>
    
    <h3 style="text-align: center; ">
        <span style="color: rgb(165, 42, 42); "><strong>CTRI RESEARCH STATION, VEDASANDUR</strong></span></span></h3>	
    
    <h3>DINDIGUL DISTRICT - 624 710,  Tamil Nadu. Phone : 04551-60243 </h3>
    <h3>Name of the Head (in-charge): Dr M KUMARESAN</h3><br>
    
    <h3 style="image-align: center; ">
    <img  style='height:320px;width:700px' src="images/vedasandur.jpg" alt="vedasandur"></h3>
    
    <p>The CTRI Research Station, Vedasandur was established in the year 1948 under the 
    control of the Indian Central Tobacco Committee to carry out research programmes on 
    Agronomy, Botany and related aspects of Chewing , Cigar and Cheroot tobaccos grown in
     Tamil Nadu. The Research Station along with the Institute Head quarters came under 
     the control of ICAR in 1969. </p>
    
    <p><b>MANDATE</b></p>
    
    
    <p>
        <span style="font-size:14px;">1. To breed varieties of Chewing, Cigar and Cheroot tobaccos for higher productivity, quality and resistance to biotic and abiotic stresses </span></p>
    <p>
        <span style="font-size:14px;">2. To carryout research on all types of agro technology for the three tobacco types.</span></p>
    <p>
        <span style="font-size:14px;">3. To produce and distribute genetically pure and quality seeds and seedlings to Tamil Nadu tobacco farmers. </span></p>
    
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
