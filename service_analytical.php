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
        <title>Analytical | CTRI,Rajahmundry</title>

      
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

<h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Services &gt;Analytical</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

<div id="content">


<h3 style="text-align: center; ">
	<span style="color: rgb(165, 42, 42); "><strong>ANALYTICAL SERVICES</strong></span></h3>

<p>
	&nbsp;</p>
  <b>

<p>
	<span style="font-size:14px;">1.   Smoke constituents viz., Tar, Nicotine and Carbon monoxide</span></p>

<p>
	<span style="font-size:14px;">2.   Estimation of Solanesol</span></p>

<p>
	<span style="font-size:14px;">3.   Estimation of Nicotine, Reducing sugars and Chlorides in tobacco leaf</span></p>


<p>
	<span style="font-size:14px;">4.   Estimation of Nitrogen, Phosphorus, Potassium, Calcium, Magnesium, Sulphur in leaf and soil </span></p>

<p>
	<span style="font-size:14px;">5.   Estimation of Micronutrients viz., Zinc, Copper, Iron, & Manganese in leaf and soil by AAS</span></p>

<p>
	<span style="font-size:14px;">6.   Estimation of Soil physico-chemical and fertility parameters -- pH, Electrical Conductivity, Chlorides, Organic carbon, Available P & K</span></p>

<p>
	<span style="font-size:14px;">7.   Estimation of Water quality parameters -- pH, Electrical conductivity and Chlorides  </span></p>

<p>
	<span style="font-size:14px;">8.   Pesticide residue analysis
</span></p>
 
</b>

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
