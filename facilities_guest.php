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
        <title>Guest | CTRI,Rajahmundry</title>

      
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
	
<h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Services &gt;Analytical</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">
<div id="content">
    
    
    <p style="text-align: center; ">
    <span style="color: rgb(128, 0, 0); "><strong>GUEST HOUSE PER DAY PER BED CHARGES</strong> (</span></span><a href="files/guest.pdf">APPLICATION FORM</a>)&nbsp;</p>
    
    
    <div id="onborder">
    <table>
    <tbody id="table1" style="border: 1px solid;">
    
            <tr style="border: 1px solid;">
                <td style="width:10%;" style="border: 1px solid;"> 
                    &nbsp;</td>
                <td style="text-align:center; width:20%;border: 1px solid;">
                    <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; SUIT </strong></strong></td>
                <td style="text-align:center; width:15%;border: 1px solid;">
                    <strong><strong>&nbsp;&nbsp; &nbsp;A.C. ROOM</strong></strong></td>
                <td style="text-align:center; width:10%;border: 1px solid;">
                    <strong><strong>&nbsp;&nbsp; &nbsp;DORMITORY </strong></strong></td>
            </tr>
            <tr class="generaltext">
                <td class="generaltext" style="border: 1px solid;">
                    SERVING &amp; RETIRED O FFICERS OF NARS (ICAR / SAUs) ON OFFICIAL VISIT</td>
                <td class="generaltext" style="border: 1px solid;">
                    &nbsp;&nbsp;&nbsp; &nbsp;Rs.500/-</td>
                <td class="generaltext" style="border: 1px solid;">
                    &nbsp;&nbsp;&nbsp; &nbsp;Rs.250/-</td>
                <td class="generaltext" style="border: 1px solid;">
                    &nbsp;&nbsp;&nbsp; &nbsp;Rs.150/-</td>
            </tr>
        </tbody>
    </table>
    </div>
    <p>
        &nbsp;</p>
    <p>
        <span style="font-size:16px;"><span style="color:#800000;"><strong><strong>CONTACT PERSON: <strong> </strong></strong></strong></span></span></p>
    <p>
        <span style="color:#0000ff;"><b>O.I.C: Dr. K. Prabhakara Rao, Scientist</b></span></p>
    <p>
        <span style="color:#0000ff;">Phone: 0883-2449871 Extn: 112<br />
        Mobile: 7702664572<br />
        CTRI QUARTERS COMPLEX,<br />
        KORUKONDA ROAD<br />
        OPP. RAMAKRISHNA MISSION<br />
        RAJAHMUNDRY - 533 105.</span></p>
    <ul>
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
