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
        <title>ROI | CTRI,Rajahmundry</title>

      
    </head>
  
    <style>
          

          </style>
      
            <body>
            
      <div class="content">
          
          <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Announcement&gt;Right to Information Act</h5>		
          
          <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

         <div id="content">
        
          <h3 align="center"> <a href="rti.pdf">RIGHT TO INFORMATION ACT </a></h3>
          <br>
          
          <div align="center">
          <table height="87" width="593" border="1">
            <tr>    <td width="593" colSpan="2" height="42"><font face="Tahoma"><b>	<font color="#FF00FF" size="3">    Contact Personnel for e-Governance (Right to information Act. 2005)</font><font color="#FF00FF">	</font></b>    </font>    <p><font face="Tahoma"><b><font color="#0099ff" size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </font></b>    &nbsp;<font color="#008000" size="2"> </font></font></td>  </tr> 
          
           <tr>    <td align="middle" width="593" colSpan="2" height="10"><strong>    <font face="Tahoma" size="4" color="#008000">Central Tobacco Research Institute</font></strong><font face="Tahoma"><br>    </font>    <strong><font face="Tahoma" size="2">Bhaskarnagar, Rajahmundry - 533105</font></strong><font face="Tahoma">    <br>    </font>    <strong><font face="Tahoma" size="2">Phone :</font><font face="Tahoma">    </font> <font size="2">    <font face="Tahoma">91-883-2449871-74 </font>    <font face="Tahoma" size="2">,&nbsp;Fax : 91-883-2448341 </font></font></strong>    </td>  </tr>
           
             <tr>    <td align="middle" width="593" colSpan="2" height="7"></td>  </tr>
           
             <tr>    <td width="291" height="5"><b><font face="Tahoma">Smt </font></b><font face="Tahoma"><b>&nbsp; V. Bhagya Lakshmi <br>    </b></font><b><font face="Tahoma">Assistant Administrative officer</font></b><font face="Tahoma"><b><br>    <i>Central Public Information Officer</i></b></font><font face="Tahoma" size="2"><br>    Email : </font><b><font face="Tahoma" size="1">	<a href="mailto:ctri-ap@nic.in">vblakshmi.aao@gmail.com</a></font></b><br>  Mobile : </font><b><font face="Tahoma" size="1">  <a href="">9849568473</a></font></b></br></td>   <td width="286" height="5"><b><font face="Tahoma">Dr. </font></b><font face="Tahoma"><b>&nbsp; C. Chandrasekhara Rao<br>    </b></font><b><font face="Tahoma">Nodal Officer, PME Cell</font></b><font face="Tahoma"><b><br>    <i>Central Public Information Officer</i></b></font><font face="Tahoma" size="2"><br>    Email : </font><b><font face="Tahoma" size="1">	<a href="mailto:cvnl_rao@rediff.com">ccsrao30@rediff.com</a></font></b> <br>  Mobile : </font><b><font face="Tahoma" size="1">    <a href="">9440333480</a></font></td>   </tr> 
             
             
          
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
