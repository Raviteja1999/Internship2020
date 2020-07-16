<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=1024">
        <title>Title Page</title>

        

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

      
    </head>
    <style>
    
      .linktxt
      {
        color: white;
      }
      .copyright
      {
        background-color: #103875;
      }
      .copyright>span
      {
       
        color:white;
      }
      .sticky{
        position:fixed;
        top: 0;
        width: 100%;
      }
      
    </style>
<body>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark static">

   
      
        <div style="background-color:#199B98 ">
  
        <div class="row1 row py-3 d-flex justify-content-center">

        <div class="internallinks col-xg ml-4" >
            <a href="disclaimer.php"><span class="linktxt">Disclaimer</span></a>
          </div>

          <div class="internallinks col-xg ml-4" >
            <a href="webpolicy.php"><span class="linktxt">Web Policy</span></a>
          </div>

          <div class="internallinks col-xg ml-4" >
            <a href="sitemap.php"><span class="linktxt">Sitemap</span></a>
          </div>

          <!-- <div class="internallinks col-xg ml-4" >
            <a href="#"><span class="linktxt">Login</span></a>
          </div> -->

          <div class="internallinks col-xg ml-4" >
            <a href="help.php" ><span class="linktxt">Help</span></a>
          </div>
          
          <div class="internallinks col-xg ml-4" >
            <a href="privacypolicy.php"><span class="linktxt">Privacy Policy</span></a>
          </div>

          <div class="internallinks col-xg ml-4">
            <a href="contact.php"><span class="linktxt">Contact</span></a>
          </div>



        </div>

      </div>
    
  
    
    <!-- Copyright -->
    <div class="copyright  py-4 text-center"  >
         
      <span style="" >&copy;<span id="cpy"></span>   Reserved to Central Tobacco Research Institute. |</span>
      
    
          <span style="">Last Modified:  <span id="upd"></span>  | </span>

          <span style="">No of Visitors since 2014:  <span id="vis">
         
           <?php 
            $handle = fopen("counter.txt", "r");
            if(!$handle){
            echo "could not open the file" ;
            }
            else {
              $counter = ( int ) fread ($handle,20) ;
              fclose ($handle) ;
              $counter++ ;
              echo $counter ;
            $handle =  fopen("counter.txt", "w" ) ;
            fwrite($handle,$counter) ;
            fclose ($handle) ;
              }
            ?>    <span></span></span> </span>
            <br>

    </div>

    

    <script>
      var temp= new Date();
      var d=temp.getFullYear();
      var x = document.lastModified;
     // var year= x.getFullYear();;
      document.getElementById("cpy").innerHTML=d;
      document.getElementById("upd").innerHTML=x;

      /*window.onload=counter;

      function counter()
      {
        var v = document.getElementById("vis");
        var count=0;
        count= $('#vis span').text();
        count=count+1;
      v.innerHTML = parseInt(count);
      }
      window.onload=counter();*/
    </script>

    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
  </body>
  </html>
 