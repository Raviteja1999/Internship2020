<!-- <?php
      //  include "heading1.html";
      // echo "<br>";
      // include "navfinal.html";
      // echo "<br>"
      // ?>
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
        }
        #content{
            text-align:center;
        }
    </style>
    <body>
      
      title="opens a PDF file in new window"
      title="external website that opens in a new window"
        
        <div id="google_translate_element"></div>
        
        <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>
        
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
      <h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;About Us &gt;Our Directors</h5>		
      <input type="button" id="btn" class="btn btn-primary" value="Print" onclick="printDiv();" style="float:right">

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
     




      
    
      
      </body> 

      -->

      <?php
      
      include "test2.php";

      include "navfinal.html";
     
      
      ?>
<style>
   .carousel-item{
            background: white;
            }

            .carousel-item>img{
            height:350px;
            width:670px;
            }
          @media(max-width:1300px){
        
          }

            .carousel-control-prev:hover{

            border-radius: 0,0,10px,10px;
            background-image: -webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);

            } 
            .carousel-control-next:hover{
            
            border-radius: 0,0,10px,10px;
            background-image: -webkit-linear-gradient(right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);
            }

            @media(max-width:1100px;){

              .carousel-item>img{
            height:300px;
            width:610px;
            }
            }

            
            @media(max-width:400px;){

              .carousel-item>img{
            height:100px;
            width:200px;
            }
            }
</style>
      
  <div id="carouselId" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators" id="mycarouselindicator" >
      <li data-target="#carouselId" id="carouselId" data-slide-to="0" class="active"></li>
      <li data-target="#carouselId" id="carouselId" data-slide-to="1"></li>
      <li data-target="#carouselId" id="carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner text-center" role="listbox">
      <div class="carousel-item active">
        <img src="img/slide3.jpg" alt="First slide">
        <img src="img/slide2.jpg" alt="Second slide">
       
      


      </div>
      <div class="carousel-item">
       
        <img src="img/slide1.jpg" alt="Third slide">
        <img src="img/slide2.jpg" alt="Second slide">
      

      </div>
  
      <div class="carousel-item">
       
       <img src="img/slide1.jpg" alt="Third slide"> 
       <img src="img/slide3.jpg" alt="First slide">

      </div>
    </div>
 
   <a class="carousel-control-prev ctrl" id="mycarouselcontrolprev" href="#carouselId"  data-slide="prev" type="hidden" style="width:50px;"  >
   <!-- <span class=".carousel-control-prev-icon" aria-hidden="true"></span> -->
   <i class="fa fa-angle-left" style="font-size:48px"></i>
    <span class="sr-only">Previous</span>
   </a>

 <a class="carousel-control-next ctrl"  id="mycarouselcontrolprev" href="#carouselId"  data-slide="next" type="hidden"  style="width:50px;">
  <i class="fa fa-angle-right" style="font-size:48px"></i>
    <span class="sr-only">Next</span>
   </a>

  
</div>
<?php
include "footerreader.php"
?>