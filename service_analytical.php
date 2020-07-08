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

<h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Services &gt;Analytical</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

<div id="content">


<h3 style="text-align: center; ">
	<span style="color: rgb(165, 42, 42); "><strong>ANALYTICAL SERVICES</strong></span></h3>

<p>
	&nbsp;</p>
<p>
	<span style="font-size:16px;">1. Smoke constituents viz., Tar, Nicotine and Carbon monoxide </span></p>
		<p> <span style="font-size:16px;">2. Solanesol by HPLC </span></p>
<p>
	<span style="font-size:16px;">3. Nicotine, Reducing sugars and Chlorides by Auto-analyzer </span></p>
<p>
	<span style="font-size:16px;">4. Nitrogen, Phosphorus, Potassium, Calcium, Magnesium, Sulphur, Silica and Ash in leaf/ soil/ fertilizer </span></p>
<p>
	<span style="font-size:16px;">5. Leaf physical quality parameters viz., Filling Value (FV) and Equilibrium Moisture Content (EMC) </span></p>
<p>
	<span style="font-size:16px;">6. Micronutrients viz., Zinc, Copper, Iron, Manganese &amp; Boron in leaf/ soil/ fertilizer by AAS</span></p>
<p>
	<span style="font-size:16px;">7. Soil properties and fertility -- pH, Electrical conductivity, Chlorides, Organic carbon, Available P &amp; K </span></p>
<p>
	<span style="font-size:16px;">8. Water quality -- pH, Electrical conductivity, Chlorides &nbsp;</span></p>

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
