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
        <title>document | CTRI,Rajahmundry</title>

      
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
    
    <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Downloads&gt;Documents</h5>
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
   <div id="content"><br>
    <h3 style="text-align: center; "><span style="color: rgb(165, 42, 42); "><strong>DOCUMENTS</strong></span></h3><br />

<p ><b>  Phethai Cyclone in AP - Impacts on FCV Tobacco and Advisories for Mitigation </b>(<a href="files/phethai.pdf" target="_blank">  click here to Download</a>) </p>

<p ><b>  Swachhta Hi Sewa 2018</b>(<a href="files/swa.pdf" target="_blank">  click here to Download</a>) </p>

<p ><b>  ANNUAL REPORT : 2019</b>(<a href="files/ar2019-1.pdf" target="_blank">click here to Download</a>) </p>
<p ><b>  ANNUAL REPORT : 2018-2019</b>(<a href="files/ar2019.pdf" target="_blank">click here to Download</a>) </p>

<p><b>Vision 2050</b>(<a href="files/vision.pdf" target="_blank">click here to Download</a>) </p>
<p><b>Orobanche Management Measures</b>(<a href="files/orobanche_report.pdf" target="_blank">click here to Download</a>) </p>
<p><b>IRC - 2018 PROCEEDINGS</b>(<a href="files/irc3.pdf" target="_blank">click here to Download</a>) </p><br>

<p><b>PROCEEDINGS OF THE RESEARCH ADVISORY COMMITTEE MEETING -2018 </b><a href="files/rac18.pdf" target="_blank">(click here to Download)</a>) </p>
<br />


<br /><strong><B>CTRI NEWS</B> </strong>
<p> <b>JULY-DECEMBER,2018</b>(<a href="files/news-20181.pdf">click here to download</a>)</p>
<p> <b>JANUARY-JUNE,2018</b>(<a href="files/news-2018.pdf">click here to download</a>)</p>
<p> <b>JANUARY-JUNE,2017</b>(<a href="files/news17.pdf">click here to download</a>)</p>
<p> <b>JULY-DECEMBER,2017</b>(<a href="files/news172.pdf">click here to download</a>)</p>


</div>
</div>
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
