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
      
      line-height: 1.5;
  }
    </style>
    <body>
    <div class="content">
	
    
    
   
    <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Research &gt;Patents</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

  <div id="content">
    
    
    <h3 style="text-align: center; ">
        <span style="color: rgb(165, 42, 42); "><strong>PATENTS</strong></span></h3>	
    
    <ul>
        <li>
            <p>
                <strong>IN 211204: Process for purification of Solanesol (95+%) from crude/enriched extracts of tobacco green leaf/ tobacco cured leaf/ tobacco waste</strong></p>
        </li>
        <li>
            <p>
                <strong>IN 227533: Palmyrah fibre separating machine</strong></p>
        </li>

        </ul>
    
    <h3 style="text-align: center; ">
        <span style="color: rgb(165, 42, 42); "><strong>COPY RIGHT</strong></span></h3>	

        <ul>
    
    <br>
           <li>     <strong> SW - 13101 /2019 :Rainfed Natu Tobacco Germplasm Information System</li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    
    <br>
               <li> <strong> SW - 8169 /2014 :Nicotiana Species Information System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
        </li>

        </ul>
    
    
    
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
