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
        <title>Dinhata | CTRI,Rajahmundry</title>

      
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
	
    <h5 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;Research Stations&gt;Dinhata</h5>	
    <br>
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
    
    <div id="content">
    
    
    <p>
    
    <h3 style="text-align: center; ">
        <span style="color: rgb(165, 42, 42); "><strong>CTRI RESEARCH STATION, DINHATA</strong></span></span></h3>	
    
    <h5 style="text-align: center; ">COOCH BEHAR DISTRICT - 756 135,  WEST BENGAL. Phone : 03581-255008 </h5>
    <h5 style="text-align: center; ">Name of the Head (in-charge): Sri SUNIL MANDI</h5>
    <h5 style="text-align: center; ">Email: mandi.sunil@gmail.com</h5><br>
    
    <h3 style="text-align: center;">
    <img style='height:320px;width:700px; border:3px solid black;' src="images/Dinhata.JPG" alt="Dinhata"></h3>
    
    <p style=line-height:1.5;> Before the partition of Bengal (During pre-independence period) Cigar wrapper 
    tobacco used to be grown in Rangpur district, now Bangladesh. As a result of the 
    partition the important cigar tobacco belt was lost. But massive demand of cigar 
    tobacco by the domestic cigar industries located at Tiruchinapalli and Dindigul 
    necessitated the search for a suitable agro-climatic area to cater to the domestic 
    need. Based on intensive pilot trials the district of Cooch Behar in west Bengal 
    ( 26 21' N latitude and 89 27 E longitude ) situated at the foot hill plains of 
    the Himalayas, adjacent to Rangpur was found suitable for growing Cigar tobacco 
    . In 1951 the Research Station at Dinhata was established by the then ICTC for 
    exploring the possibility of growing cigar local tobacco and to develop improved 
    package of practices for enhancing the yield and quality standards and to improve
     Tobacco farmers of the region through research works. Motihari and Jati types of
     tobacco are grown in area of 12,000 hectares covering mostly the northern part
     of West Bengal. The Research Station is working on Cigar wrapper, Jati and Motihari
     tobaccos by evolving high yielding varieties with better quality, management of 
     pests and diseases, minimising the cost of cultivation, producing pure seed 
     and seedlings for the benefit of the farmers and finding most suitable inter 
     crops for tobacco. </p>
    
    
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
