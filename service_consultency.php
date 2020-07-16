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
        <title>Consultency | CTRI,Rajahmundry</title>

      
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
	
 <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Services &gt;Consultency</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

<div id="content">


	

<h3 style="text-align: center; ">
	<span style="font-size:20px;"><span style="color: rgb(165, 42, 42); "><strong>CONSULTANCY</strong></span></span></h3>

<p>
	&nbsp;</p>
<p>
	<span style="font-size:16px;">1. Soil fertility and fertilizer recommendations </span></p>
<p>
	<span style="font-size:16px;">2. Tobacco insect-pest management </span></p>
<p>
	<span style="font-size:16px;">3. Post-harvest product management </span></p>
<p>
	<span style="font-size:16px;">4. Evaluation of pesticides and fungicides </span></p>
<p>
	<span style="font-size:16px;">5. Evaluation of fertilizers, biofertilizers and sucker control agents</span></p>
<p>
	<span style="font-size:16px;">6. Production and supply of Nuclear Polyhedrosis Virus (NPV) </span></p>
<p>
	<span style="font-size:16px;">7. Soil and water analysis </span></p>
<p>
	<span style="font-size:16px;">8. Leaf analysis&nbsp;</span></p>


<p>
	&nbsp;</p>

</div>
	
   <br class="clear" />

</div><!-- Class Content End -->
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
</body>
        <?php
include "footerreader.php";
?>
</html>
