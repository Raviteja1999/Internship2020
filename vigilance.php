

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
        <meta name="viewport" content="width=1024">
        <title>Title Page</title>


       
    </head>
    <style>
        .content{
            padding:20px;
        }
        #content{
            text-align:center;
        }

        table {
            height:100px;
    width: 100%;
}
    </style>
    <body>
    
    
	<div class="content">
	
    <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;About Us&gt;Vigilance</h5>
    <br>		
    
  <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printDiv();" style="float:right"> 
    <div id="content">

        
        <table style="text-align:center;">
        <tr style="text-align:center">
        
        <td>
        <span style="font-size:16px;"><span style="color:black; "><b>CHIEF VIGILANCE OFFICER</b></span></span> <br /> 
        </td>
        <td>
        <span style="font-size:16px;"><span style="color:black; "><b> VIGILANCE OFFICER</b></span></span>  <br />
  
        </td>
       
        </tr>

        <tr style="text-align:center">
        
        <td>
        <span style="font-size:16px;"><span style="color: rgb(128, 0, 0); "><b> .&nbsp;  </b></span></span> <br> <span style="font-size:12px;"><span style="color: green; "> <b>  </b></span></span> <br />
      <b><span style="font-size:14px;"><span style="color:black; "> OFFICE ADDRESS:</span></span></b><br> <span style="font-size:12px;"><span style="color:black; ">Room No. 102, First Floor, <br> Krishi Bhawan<br> New Delhi - 110 001 <br><br>
       <b>Telephone No: </b>   
       
         </td>


        <td>
        <span style="font-size:16px;"><span style="color: rgb(128, 0, 0); "><b>Dr.&nbsp;  K. PRABHAKARA RAO</b></span></span> <br> <span style="font-size:12px;"><span style="color: green; "> <b> Scientist, Division of Crop Improvement</b></span></span> <br />
      <b><span style="font-size:14px;"><span style="color:black; "> OFFICE ADDRESS:</span></span></b><br> <span style="font-size:12px;"><span style="color:black; ">ICAR-Central Tobacco Research Institute <br> Bhaskar Nagar<br>Rajahmundry - 533 105  <br><br>
       <b>Telephone No:</b>
        </td>
       
        </tr>
        
        </table>
    
    
       
    
    
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
