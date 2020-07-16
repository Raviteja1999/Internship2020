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
        <title> KALAVACHERLA | CTRI,Rajahmundry</title>

      
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
	
    <h5 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;Research Stations&gt;KALAVACHERLA</h5>	
    <br>
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
    
    <div id="content">
    
    <p>
    
    <h3 style="text-align: center; ">
        <span style="color: rgb(165, 42, 42); "><strong>BURLEY TOBACCO RESEARCH CENTRE, KALAVACHERLA</strong></span></span></h3>	
    
    <h5 style="text-align: center; ">Rajanagaram Mandal - 533 294, East Godavari District,  Andhra Pradesh. Phone : 0883-2484330 </h5>
    <h5 style="text-align: center; ">Name of the Head (in-charge): Dr S. Kasturi Krishna</h5><br>
    
    <h3 style="text-align: center; ">
    <img  style='height:320px;width:700px; border:3px solid black;' src="images/burley.jpg" alt="burley"></h3>
    
    <p style="line-height:1.5;">Burley tobacco, grown in the agency and upland areas of East Godavari, West Godavari,
     Visakhapatnam and Vizianagaram districts of Andhra Pradesh, is of exportable quality
     and has very good demand in the International market for cigarette blending. To conduct
     scientific research on the production practices of burley tobacco, a temporary field research 
     centre was established at Jeddangi in East Godavari district during 1975 on 6 acres of leased 
     land and continued up to 1982. Later, the centre was shifted to Chintapalli in Visakahapatnam
     district during 1982 and continued there up to 1986 which was again shifted to Jeddangi during
     1987. In 2008, this centre has been shifted to Kalavacherla to serve the upland burley farmers
     of Gokavaram, Korukonda, Gandepalli and Jaggampeta Mandals in East Godavarai district where
     light soil burley tobacco cultivation is taken up on large scale, in recent times. Major 
     thrust areas of this centre are breeding for high yield and pest and disease resistance, 
     development of production technology and pest and disease management in nursery and field crop. </p>
    
    
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
