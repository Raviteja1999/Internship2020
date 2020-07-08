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
    <h5 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;Research Stations&gt;Jeelugumilli</h5>	
    <br>
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
    <div id="content">
    <br>
    
    <h3 style="text-align: center; ">
       <span style="color: rgb(165, 42, 42); "><strong>CTRI RESEARCH STATION, JEELUGUMILLI</strong></span></span></h3>	
    
    
    <h3>West Godavari District-534456,  Andhra Pradesh. Phone : 08821- 83329</h3>
    <br>
    <h3>Name of the Head(in-charge): Dr. S. KASTURI KRISHNA</h3><br>
    
    <h3 style="image-align: center; ">
    <img style="height:320px; width:700px; border:3px solid black;" src="Jeelugumilli.JPG" alt="Jeelugumilli"></h3>
    
    <p style= "line-height:1.5;">Exportable type of flue cured tobacco is grown in Northern light soils of Andhra Pradesh covering 
    East Godavari, West Godavari and parts of Khammam District in an area of 20,000 ha. Producing 
    30 million Kg. In these soils tobacco is grown under irrigated conditions. To conduct research 
    in this tobacco a research station was started during 1975 on leased land at Devarapalli, West 
    Godavari District and later it was shifted to Kalavacherla, East Godavari District during 1983. 
    Later during 1988, regular research station was started at Jeelugumilli, West Godavari District 
    to conduct systematic research on FCV tobacco.</p>
    
    <h2><b>MANDATE</b></h2>
    
    
    <p>
        <span style="font-size:16px;">1. To evolve high yielding and disease resistant FCV and Natu tobacco varieties.  </span></p>
    <p>
        <span style="font-size:16px;">2. To develop suitable crop management practices for producing semi flavourful to flavourful FCV tobacco.</span></p>
    <p>
        <span style="font-size:16px;">3. To develop suitable crop management practices to Natu tobacco for getting higher yields of quality tobacco. </span></p>
    <p>
        <span style="font-size:16px;">4. To develop alternate cropping systems suitable to that area.</span></p>
    
    
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
