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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

      
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
            
    <br>
 <h3><strong><span style="color: rgb(128, 0, 0); ">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; AUTHORISED MEDICAL ATTENDANT FOR ICAR-CTRI, RAJAHMUNDRY</span></span></strong>
    </h3>   
    <table border="1" >
        <tbody >
            <tr>
                            <td style="text-left; width:20%">
                <P>	<strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Dr. Vaddadi Hospital</strong></strong>
                                 <br>   <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; M.D. (Gen. Med.)</strong></strong>
                                    <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Vaddadi Hospital</strong></strong> 
                                    <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; D.No. 25-8-6/3</strong></strong> 
    
    
     <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Korukonda Road</strong></strong> 
     <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Andhra Bank Street</strong></strong> 
     <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Rajahmundry - 533 105</strong></strong> 
    
    
    
    </P>
    </td>
    
    
                <td style="width:15%;">
                    <strong><strong>&nbsp;&nbsp; &nbsp;O.P. Timings</strong></strong>
    <p>
    <br><strong><strong>&nbsp;&nbsp; &nbsp;9.30 AM to 02.00 PM</strong></strong>
    <br><strong><strong>&nbsp;&nbsp; &nbsp;6.00 PM to 09.00 PM</strong></strong>
    
    
    </p>
    </td>
    </tr>
    </tbody>
    </table>
    <p>
    <br>					
        
    
    
    <br />
    <strong><span style="font-size:14px;"><span style="color: rgb(128, 0, 0); ">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; PANEL / CONSULTANT DOCTORS FOR ICAR-CTRI </span></span></strong>
    
    <table border="1">
        
    
    
    
    
    
    <tbody>
            
    <tr>
                            <td style="align:left; width:20%;">
                <P>	<strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; NAME OF THE HOSPITAL</strong></strong>
                                
    
    
     </td>
    
    
                <td style="width:15%;">
                    <p>
    <br><strong><strong>&nbsp;&nbsp; &nbsp;CONTACT NUMBERS</strong></strong>
    
    </td>
    
    
    
    
    
    
    
    
    
    
    
    <tr>
                            <td style="align:left; width:20%;">
                    <P><strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; </strong></strong>
                                 <br>   <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  </strong></strong>
                                    <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; </strong></strong> 
                                    <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;  </strong></strong> 
    
    
     </td>
    
    
                <td style="width15%;">
                    <p>
    <br><strong><strong>&nbsp;&nbsp; &nbsp; </strong></strong>
    
    </td>
    
    <tr>
                            <td style="align:left; width:20%;">
                              <P><strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Dr. M. Rajendra Prasad, MDS</strong></strong>
                                 <br>   <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Geeta Mullapudi International Dental Hospital</strong></strong>
                                    <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Kotipalli Bus stand</strong></strong> 
                                    <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Rajahmundry - 533 105</strong></strong> 
    
    
     </td>
    
    
                <td  style="width15%;">
                    
    <p>
    <br><strong><strong>&nbsp;&nbsp; &nbsp;0883-2426775</strong></strong>
    <br><strong><strong>&nbsp;&nbsp; &nbsp;0883-2426392</strong></strong>
    
    </td>
    <tr class="generaltext">
                            <td style="align:left; width:20%;">
                    <P><strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Dr. Suguna Gangina, MBBS, DGO</strong></strong>
                                 <br>   <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Gangina Hospital</strong></strong>
                                    <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Chinna Gandhi Statue</strong></strong>
     <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Aryapuram</strong></strong> 
    
                                    <br> <strong><strong>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; Rajahmundry </strong></strong> 
    
    
     </td>
    
    
                <td style="width:15%;">
                    <p>
    <br><strong><strong>&nbsp;&nbsp; &nbsp;0883-2433636</strong></strong>
    
    </td>
    
    
    
    
    
                        
        </tbody>
    
    </table>
    
    
    
    
    
    
       <br class="clear" /></div>
    
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
