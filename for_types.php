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
table#center{
    margin-left: auto;
    margin-right:auto;
    }
    
    .content{
       padding:20px;
        word-spacing: 3px ;
       line-height: 1.5;
    }

        </style>
    </head>
    <body>

     <div class="content">

    <h5 style="color:blue; text-align:left;"><a href="index.php" style="color:blue;">Home</a>&gt;For Farmers &gt;Type of Tobacco</h5>		
    <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printdiv();" style="float:right">

    <div id="content">
    
     <h1 style="text-align: center; ">

    
    <span style="font-size:20px;"><span style="color: rgb(165, 42, 42); "><strong>TYPES OF TOBACCO</strong></span></span></h1>
    
    
    <p style=" padding-left:16px; ">
        With its rich agro-climatic diversity, India has the unique position of growing all types of tobacco which are broadly classified as:</p>
    <div class="table1" id="onborder">
    <table border ="1" id="center">
        <tbody>
            <tr>
                <td>&nbsp;1.</td>
                <td >&nbsp;FCV Tobacco</td>
                <td >&nbsp;Andhra Pradesh &amp; Karnataka</td>
            </tr>
            
            <tr>
                <td >&nbsp;2.</td>
                <td>&nbsp;Bidi Tobacco</td>
                <td>&nbsp;Gujarat &amp; Nipani area of Karnataka</td>
            </tr>
            
            <tr>
                <td >&nbsp;3.</td>
                <td>&nbsp;Cigar &amp; Cheroot</td>
                <td>&nbsp;Tamil Nadu &amp; West Bengal</td>
            </tr>
            
            <tr>
                <td >&nbsp;4.</td>
                <td>&nbsp;Hookah Tobacco</td>
                <td>&nbsp;Assam, West Bengal, Bihar &amp; UP </td>
            </tr>
            <tr>
                <td>&nbsp;5.</td>
                <td>&nbsp;Chewing &amp; Snuff</td>
                <td>&nbsp;Tamil Nadu, West Bengal, Bihar, Assam &amp; U.P. </td>
            </tr>
            <tr>
                <td>&nbsp;6.</td>
                <td>&nbsp;Natu, Burley, Lanka</td>
                <td>&nbsp;Andhra Pradesh &amp; HDBRG</td>
            </tr>
            
            <tr>
                <td >&nbsp;7.</td>
                <td>&nbsp;Pikka Tobacco</td>
                <td>&nbsp;Orissa</td>
            </tr>
        </tbody>
    </table>
    </div>
    <br />
        
        <h1 style=" padding-left:16px; "></h1>
        <span style="font-size:20px;"><span style="color: rgb(165, 42, 42); "><strong>BOTANICAL CLASSIFICATION OF TOBACCO</strong></span></span></h1>
    
    <p  style=" padding-left:16px; ">
        
        The genus Nicotiana is one of the five large genera of Solanaceae and is represented by about 60 recognised species.<br />
        <br />
        Description is available for all the 60 species, which are grouped in three sub-groups:</p>
    <ul>
        <li>
            <span style="text-align: center; ">Sub-genus - Rustica</span></li>
        <li>
            <span style="text-align: center; ">Sub-genus - Tabacum</span></li>
        <li>
            <span style="text-align: center; ">Sub-genus - Petunioide</span><span style="text-align: center; ">s</span></li>
    </ul>
    <p style= "padding-left:16px; word-spacing:3px; line-height:1.5;">
        
        The original habitat of the genus is considered to be South American, particularly the regions surrounding the Andes. There are, however, several species in Australia and South Pacific Islands that do not occur in the new world. They are considered to be derivatives of the South American stock. Out of the 60 species, only two species, i.e. <i>Nicotiana tabacum</i> and <i>Nicotiana rustica</i> are cultivated extensively. India grows both the species, but by far the largest area is under <i>N. tabacum</i>. Since <i>N. rustica</i> requires cooler climate, its cultivation is confined mainly to the northern and north-eastern areas of the country, i.e., U.P., West Bengal, Bihar and Assam.</p>
    <p style=" padding:16px;  word-spacing: 3px ;
    line-height: 1.5;">
        The <i>N. tabacum</i> varieties known as desi types have tall plants with broad leaves and have usually pink flowers. The <i>N. rustica</i> varieties known as `vilayati&#39; and `calcuttia&#39; are characterised by short plants with round puckered leaf and yellow flowers. Specific varieties in <i>N. tabacum</i> have been developed for cigarette, cigar and cheroot, bidi, hookah and snuff tobaccos. The varieties developed in <i>N. rustica</i> are used for only chewing, hookah and snuff tobaccos. In addition to <i>N. tabacum</i> and <i>N. rustica</i> which are commonly cultivated, many species of Nicotiana, such as <i>N. affinis</i>, are grown for ornamental purposes. Some of the other species were used in old days by aboriginals (Red Indians and Australian natives) for chewing and smoking. There are 65 <i>Nicotiana Sp.</i>available in the world, of which 45 are being maintained in India. Several of these species have resistance to pests and diseases and are being used for developing disease/pest resistant tobacco varieties.</p>
    
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
