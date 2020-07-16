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
        <title>Kandukuru | CTRI,Rajahmundry</title>

      
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
	

<h5 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;Research Stations&gt;Kandukuru</h5>	
    <br>
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
<div id="content">
<p>
<h3 style="text-align: center; ">
	<span style="color: rgb(165, 42, 42); "><strong>CTRI RESEARCH STATION, KANDUKUR</strong></span></span></h3>	


<h5 style="text-align: center; ">PRAKASAM DISTRICT-534 456,  Andhra Pradesh.Phone:08598-23554 </h5>
<h5 style="text-align: center; ">Head of the station: Dr. M. ANURADHA</h5><br>

<h3 style="text-align: center; ">
<img  style='height:320px;width:700px; border:3px solid black;' src="images/Kandukur.JPG" alt="kandukur"></h3>

<p style="line-height:1.5;">CTRI Research Station, Kandukur in Prakasam district of Andhra Pradesh was established in 1977 
to conduct research on flue-cured virginia tobacco grown in Southern Light Soils(SLS) of Andhra Pradesh. 
The research station has 42.2 ha of land with good infrasturctural facilities to conduct research on crop
 improvement, crop production and crop protection. </p>
 <p>Out of 1,10,000 ha under FCV tobacco in Andhra Pradesh, the area in Prakasam and Nellore
 districts is about 75,000 ha with about 60% under SLS and rest under Southern Black Soils (SBS). </p>
<p style="line-height:1.5;">The SLS tobacco is semi-monsoon crop and soils are relatively poor in moisture retentivity.
 Rainfall plays significant role on the yield and quality of SLS crop. In SLS, the important factor 
 that governs is not the total amount of rainfall but the distribution of the same during the crop season. 
 The rainfall distribution is erratic, with the periods of drought occurring even during the season of excess rainfall. </p>

<h2><b>MANDATE</b></h2>


<p>
	<span style="font-size:16px;">1. To improve the yield and quality of FCV tobacco in SLS region.  </span></p>
<p>
	<span style="font-size:16px;">2. To develop varieties suitable to SLS area with high yield and quality, tolerance to drought or wet-foot and tolerance/ resistance to pests and diseases.</span></p>
<p>
	<span style="font-size:16px;">3. To identify suitable tobacco based cropping systems and standardize fertilizer schedules. </span></p>
<p>
	<span style="font-size:16px;">4. To develop suitable plant protection measures to control endemic pests and diseases of tobacco. </span></p>
<p>
	<span style="font-size:16px;">5. To identify suitable and viable alternative crops or cropping systems to tobacco in order to regulate area under tobacco. </span></p>

<p>
	<span style="font-size:16px;">6. To develop/demonstrate dry farming techniques for achieving sustainability in tobacco, tobacco based cropping systems and alternative crops to tobacco. </span></p>

<p>
	<span style="font-size:16px;">7. To disseminate knowledge on improved crop production and protection technologies among the tobacco farmers through extension programmes. </span></p>

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
