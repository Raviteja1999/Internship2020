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
        <title>equipments | CTRI,Rajahmundry</title>

      
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
	
<h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Facilities &gt;EQUIPMENTS</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
<br>		
    
    <div id="content">
    
    
    
    <h3 style="text-align: center; ">
        <span style="color: rgb(165, 42, 42); "><strong>EQUIPMENTS</strong></span></span></h3>
    
        <p>
	<span style="font-size:16px;">&bull;&nbsp; Cigarette Smoking Machine </span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; Automatic Weather Station </span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; Briquette making Machine </span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; Bio-Analyser</span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; Tissue lyzer</span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; Micro Plate Reader</span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; Total carbon analyzer</span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; NMR for seed oil estimation </span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; GCMS- for measuring tobacco flavours </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Auto Analyser </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Gel Documentation System </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; PCR Machines </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Electro phorisis unit </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Deep freezer </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; High speed refrigerated centrifuge </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; High performance liquid chromotography unit </span></p>


<p>
	<span style="font-size:16px;">&bull;&nbsp; Gas chromotography unit </span></p>

<p>
	<span style="font-size:16px;">&bull;&nbsp; UV spectro photo meter  </span></p>
    
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
