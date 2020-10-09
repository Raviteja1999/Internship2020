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
        <title>apar_forms | CTRI,Rajahmundry</title>

      
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
	
<h3 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;Downloads&gt;APAR Forms</h3>		

<input type="button" id="btn" value="Print" onclick="printDiv();" style="float:right">
<div id="content">
<br>


<h1 style="text-align: center; "><span style="font-size:16px;"><span style="color: rgb(165, 42, 42); "><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APAR CIRCULARS & FORMS</strong></span></span></h1><br />


<a href="https://icar.gov.in/content/revised-apar-format-various-scientific-position"><p style="font-color:blue;">APAR FORMS FOR SCIENTIFIC PERSONNEL &nbsp;</p></a>

<br>
<br>


<a href="apar/circular1.pdf"><p style="font-color:red;">APAR CIRCULAR FOR TECHNICAL PERSONNEL &nbsp;</p></a>
<a href="apar/APAR_for_ICAR_Tech-Cat-I.pdf"><p style="font-color:red;">APAR_for_ICAR_Tech-Cat-I &nbsp;</p></a>
<a href="apar/Technical_APAR_Proforma-Category-II.pdf"><p style="font-color:red;">Technical_APAR_Proforma-Category-II &nbsp;</p></a>
<a href="apar/Technical_APAR_Proforma-Category-III.pdf"><p style="font-color:red;">Technical_APAR_Proforma-Category-III &nbsp;</p></a>
<br>
<br>
<a href="apar/circular.pdf"><p style="font-color:red;">APAR CIRCULAR FOR ADMINISTRATIVE PERSONNEL &nbsp;</p></a>
<a href="apar/saoapar.pdf"><p style="font-color:red;">SAO APAR &nbsp;</p></a>
<a href="apar/APAR_for_ICAR_PS-PA-Steno-Grade-III.pdf"><p style="font-color:red;">APAR_for_ICAR_PS-PA-Steno-Grade-III &nbsp;</p></a>
<a href="apar/APAR_for_ICAR_UDC-LDC.pdf"><p style="font-color:red;">APAR_for_ICAR_UDC-LDC &nbsp;</p></a>
<a href="apar/APAR-Proforma-AO_and_others.pdf"><p style="font-color:red;">APAR-Proforma-AO_and_others &nbsp;</p></a>
<a href="apar/APAR-Proforma-Dy_Sec.pdf"><p style="font-color:red;">APAR-Proforma-Dy_Sec &nbsp;</p></a>
<a href="apar/APAR-Proforma-Under_Sec_and_others.pdf"><p style="font-color:red;">APAR-Proforma-Under_Sec_and_others
&nbsp;</p></a>




 	
		

<p>
	&nbsp;</p>

</div>
	
   <br class="clear" />

</div><!-- Class Content End -->




</body>

<?php
    include "footerreader.php";
    ?>

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
     
</html>