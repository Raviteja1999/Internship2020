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
        <title>training | CTRI,Rajahmundry</title>

      
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
<h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Services &gt;Service & Training</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

<div id="content">


		

<h3 style="text-align: center; ">
	<span style="font-size:20px;"><span style="color: rgb(165, 42, 42); "><strong>TRAINING MODULES</strong></span></span></h3>
<b>
<p>
	<span style="font-size:16px;">Following Training programmes will be conducted. </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Scientific management of tobacco nursery </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Post harvest product management of tobacco </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; FCV tobacco production technology </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Natu tobacco production technology </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Techniques for evaluation of physical and chemical quality characteristics of tobacco </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Kitchen gardening (KVK) </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Vermi Compost making (KVK) </span></p>
<p>
	<span style="font-size:16px;">&bull;&nbsp; Energy conservation and integrated barn technique.&nbsp;</span></p>

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
