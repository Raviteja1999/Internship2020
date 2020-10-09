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
        <title>DATABASE | CTRI,Rajahmundry</title>

      
    </head>
    <style>
    p{
        padding:5px;
    }
    .content{
       padding:20px;
      word-spacing: 3px ;
      line-height: 1.5;
  }
    </style>
    </head>
    <body>


<div class="content">
	
<h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Services &gt;Database</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

<div id="content">


	

<h3 style="text-align: center; ">
	<span style="font-size:20px;"><span style="color: rgb(165, 42, 42); "><strong>DATABASE DEVELOPED</strong></span></span></h3>


    <strong>
<p>
	<span style="font-size:16px;">&bull;&nbsp;<a href='http://agridaksh.iasri.res.in/tobacco.jsp'>Tobacco Agridaksh : An online expert system</a></span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp;<a href='http://ctri.icar.gov.in/weeds/tobacco.html'>Knowledge base system for Tobacco Weed Management</a></span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp;Expert system for Diagnosis and Management of Plant Nutrient Disorders in Flue-Cured Tobacco (Nicotianatabacum L.)</a></span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; Development of computational algorithm for prediction of miRNA in plants &nbsp; in FCV tobacco</span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; Meteorological database management system </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Rainfed Natu Tobacco germplasm information system </span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; <em>Nicotiana </em> species information system </span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; Database on agricultural pests &amp; diseases </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Decision Support System on soil fertility evaluation and recommendation to FCV tobacco crop </span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; Information system for FCV tobacco production and marketing trends in India. </span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; Expert system for identification of major diseases in FCV tobacco. </span></p>
</strong>

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
