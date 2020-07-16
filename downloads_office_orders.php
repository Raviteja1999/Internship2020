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
        <title>order | CTRI,Rajahmundry</title>

      
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
	
    <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Downloads&gt;Application Forms</h5>		
    
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

    <div id="content">
    <br>
    
    
    <h3 style="text-align: center; "><span style="color: rgb(165, 42, 42); "><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OFFICE ORDERS</strong></span></h3><br />
    
    <a href="files/sportslist.pdf"><p style="font-color:red;">Sports Selection List&nbsp; </p></a>
    
    <a href="files/pape.pdf"><p style="font-color:red;">Reimbursement of Newspaper bill</p></a>
    
    <a href="files/incentive.pdf"><p style="font-color:red;">Incentive for acquiring fresh higher qualifications in the 7th CPC scenario&nbsp; </p></a>
    
    <a href="files/compen.pdf"><p style="font-color:red;">List of candidates appointed on compassionate grounds&nbsp; </p></a>
    
    <a href="files/da.pdf"><p style="font-color:red;">Grant of Dearness Relief to Central Government Pensioners / family pensioners--Revised rate effective from 01.01.2019--reg&nbsp;</p></a>
    
    <a href="https://icar.gov.in/sites/default/files/Revision%20of%20allowances%20of%20Scientists%20of%20ICAR.pdf"><p style="font-color:red;">Revision of allowances of Scientists of ICAR a per recommendations of 7th CPC--Reg&nbsp;</p></a>
    
    
    <a href="files/grievances.pdf"><p style="font-color:red;">Dr. J. Poorna Bindu nominated as Grievance Redressal Officer&nbsp;</p></a>
    
    <a href="files/nodal.pdf"><p style="font-color:red;">Dr. H. Ravisankar nominated as Nodal Officer for voter awareness forum&nbsp;</p></a>
    
    
            
            
    
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
