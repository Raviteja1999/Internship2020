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
        <title>Home | CTRI,Rajahmundry</title>

    

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
        <style>
            /* slideshow content styling*/
            .carousel-item{
            background: white;
            }
            .carousel-item>img{
            height:350px;
            width:670px;
            }

            .carousel-control-prev:hover{

            border-radius: 0,0,10px,10px;
            background-image: -webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);

            } 
            .carousel-control-next:hover{
            
            border-radius: 0,0,10px,10px;
            background-image: -webkit-linear-gradient(right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);
            }
             /* slideshow content styling*/

          /* messagecontent styling */
          .image{
                
                padding-top: 3px;
            
            }
            .image>img{
            height:150px;
            width: 150px;
            border:2px solid black;
            padding:1px;
            
            display: block;
            margin-left: auto;
            margin-right: auto;  
                  
            }
        
        .rowwise
        {
            margin-left: 5%;
        }
          
        .directordesk {
            padding:0;
          }  

        .directordesk>h3{
            font-weight:bold;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            background-color: rgb(29, 165, 211); 
            padding: 5px;
            
          }
    
     .moduletable>h3{
         font-weight:bold;
         border-top-left-radius: 20px;
         border-top-right-radius: 20px;
         background-color: rgb(29, 165, 211); 
         padding: 5px;
         
      }
      /* messagecontent styling */
    
  
          

    </style>

      <body>
  
<!-- slideshow content -->



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



      <!-- message content  -->
     
     
      <div class="firstrow row">
                
                <marquee width="100%" direction="left" height="auto"  style="background-color:#138FA0;" >
                <i class="fa fa-angle-double-left"></i>
                <span style="color:white">Latest News ||  All the Quick news is updated in this section </span>    
                <i class="fa fa-angle-double-right"></i>
                    </marquee>

            </div>

                <br>
        <div class="secondrow row">
                <div class="col-lg-1"></div>

                <div class="directordesk col-lg-5 " >
                    <h3 class="text-center" style="background:rgb(29, 165, 211) ;">Director desk</h3>
                    <div class="row" style="float:0;margin:0;">
                        <div class="col-7" style="padding:0">
                        <p style="font-size:14px;line-height: 25px; "> Government of India constituted Indian Central Tobacco Committee (ICTC) in 1945 keeping in view the important role played by tobacco in national economy and employment generation.
                            The Central Tobacco Research Institute was established in 1947 at Rajahmundry under the aegis of ICTC, Madras.
                          <a href="directordesk.php" style="float: right;"><i>more</i></a>    
                     </p>     
                      </div>
                    <div class="col">
                        <div class="image ">
                            <img src="img/ddr-h.jpg" style=" height:100px;width:100px;"   alt="Image">
                            <div style="text-align: center;"><strong >Dr. D. Damodar Reddy<br> 
                                Director</strong></div>
                    </div> 
                    </div>
                    </div>
                </div>

                <div class="latest updates col-lg-5">
                  
                    <div class="moduletable" >
                        <h3 class="text-center">Latest Updates</h3>
                        <div class="news">
                        <div class="menu">
                        
                        <marquee  behavior='scroll'  scrolldelay='150'  direction='up' onmouseover='stop();'
                                onmouseout='start();'>
                        
                        
                        <li><a href="files/women.jpg" target="_blank" style="color:blue""><b>International Women's Day Celebrations</b></a></li>
                        
                        <li><a href="files/bas.jpg" target="_blank" style="color:blue""><b>Circular: Biometric Attendance System</b></a></li>
                        
                        <li><a href="files/scspveda.pdf" target="_blank" style="color:blue""><b>SC Sub Plan-2020, CTRI RS, Vedasandur</b></a></li>
                        
                        <li><a href="files/scspjlm.pdf" target="_blank" style="color:blue""><b>SC Sub Plan-2020, CTRI RS, Jeelugumilli</b></a></li>
                        
                        <li><a href="files/scplankan1.pdf" target="_blank" style="color:blue""><b>SC Sub Plan-2020, CTRI RS, Kandukur</b></a></li>
                                
                        
                        <li><a href="files/training.pdf" target="_blank" style="color:blue""><b>Training calendar of ICAR-CTRI</b></a></li>
                        <li><a href="files/iso.pdf" target="_blank" style="color:blue"><b>ICAR-CTRI awarded with ISO 9001:2015 certificate.
                        </b></a></li>
                        
                        
                        
                        
                         
                        
                        
                        
                        
                        
                        
                        </marquee>
                        <!-- <a href="#" style="float: right;"><i>more</i></a>  	 -->
                                
                            </div>
                        </div>
                        
                        </div> 
                    
                  </div>
                </div>
                <div class="col-lg-1"></div>
                
    </div><!-- second row closed-->

     
<?php
include "footer.php";
?>
     </body>

</html>
