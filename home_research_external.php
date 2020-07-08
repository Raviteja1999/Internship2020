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
	
   
    <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Research &gt;External Funded Projects</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

    <div id="content">
    
    
    
    <h3 style="text-align: center; margin-bottom:0px; ">
        <span style="color: rgb(165, 42, 42); "><strong>Externally Funded Projects</strong></span></h3>
    
    <br>
    <ol>
       <li>
                <strong> Gender Specific Adaptation Programmes in Response to Climate Change in Coastal Eco- Systems      (2016-2019)      (NICRA, ICAR-CRIDA, Hyderabad; )     Budget: Rs.26.3 lakhs </strong></li>
        
            <li>
                <strong>Assessment of Soil Fertility and Development of Online Fertiliser Recommendation system for FCV tobacco &nbsp;&nbsp;&nbsp;&nbsp;  (Approved, 2017-2021) &nbsp;&nbsp;&nbsp;&nbsp; (Tobacco Board, Ministry of Commerce & Industry, GOI; &nbsp; Budget: Rs.45.35 lakhs) </strong></li>
        
        
        <li>	<strong>Development of Distinctiveness, Uniformity and Stability (DUS) Guidelines for FCV and Bidi tobacco &nbsp;&nbsp;&nbsp;&nbsp;  (Approved, 2017-19) &nbsp;&nbsp;&nbsp;&nbsp;   (PPVFR Authority, DAC&FW, MAFW, GOI; &nbsp;&nbsp;&nbsp;&nbsp;   Budget Rs. 18.0 lakhs) for a period of 2 years.</strong>  </li>
    
                
    
    
    
    
    
    
    
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
