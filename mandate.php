
<?php
include "heading1.html";
echo"<br>";
include "navfinal.html";
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>


       
    </head>

    <style>
        .content{
            padding:20px;
        }
    </style>

    <body>
    

	<div class="content">
	
<h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;About&gt;Mandate</h5>		

<input type="button" class="btn btn-primary" id="btn" value="Print" onclick="printDiv();" style="float:right">
<div id="content">


<h2 style="text-align: center; ">
	<span style="color: rgb(165, 42, 42); "><strong>MANDATE</strong></span></h2>


<p>Basic and strategic research on
domestic and exportable types of
tobacco, improvement in quality and
value added products.</p>

<p> Coordination of tobacco research and
developing alternate usage of tobacco.</p>


<P> Identification of alternative crops/
cropping systems for tobacco growing
regions of the country.</p>

<p> Dissemination of technologies and
capacity building.</p>
	
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