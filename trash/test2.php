
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"  content="width=1024">
        <title>Title Page</title>

        
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       
     </head>


    <style>

 body:before 
{ 
   content: "";
   position: fixed;
   top: -20px;
   left: 0;
   width: 100%;
   height: 20px;
   z-index: 100;
   box-shadow: 0px 0px 20px rgba(0,0,0,1);
   }


   /* :root{
     --foreground: black;
     --background:  white;
   }

   .darkmode{
     --foreground:white;
     --background:black;
   } */

    body{
          overflow: hidden;
          user-select:none;
          /* background : var(--background);
          color:var(--foreground); */

         /*  background-image: linear-gradient(to right, #e0ffff,white,#e0ffff );*/   
   
   }
      
      .alig{
      padding:3px;  
      background-color: #d1d1d1;
      opacity: 1;
      margin-top: 10px;
      margin-left: 10px;
      margin-right: 10px;
      height:45px;
      font-size: 11px;
      
      }

      .goi,.serh,.sreader,.slang{
       padding-right: 5px   
      }
      .goi{
          font-size:9px;
      }
      .sfont>button{
        background:none;
        border:none;
      }
     
      .sfont>button>img{
        height:20px;
        width:20px;
      }

      .sdec>button{
        font-size: 20px;
        padding:0;
        
      }

  

        .ctrilogotitle>img{
            width:100%;
            background: white;
        }
       
        .croppic>img{
          width:100%;
          height:100%;
         
         
        }
        .goog-te-banner-frame{
          visibility:hidden;
        }

    /* .croppic.carousel.carousel-fade.carousel-item {
    display: block;
    opacity: 0;
    transition: opacity ease-out 0.5s;
    left: 0;
    top: 0;
    position: absolute;
} 
 .croppic.carousel.carousel-fade.carousel-item.active {
    opacity: 1 !important;
} 
 .croppic.carousel.carousel-fade.carousel-item:first-child {
    top: auto;
    position: relative;
    transition: opacity ease-out 1s;
} */



      
      

    </style>

   <body>
   
      <div class="alig ">
        <div class="row no-gutter">

          <div class="col-lg-1"></div>

          <div class="col-lg-4 font-weight-bold">
            <div class="goi row  ">
              GOVERNMENT OF INDIA,
               MINISTRY OF AGRICULTURE AND FARMER'S WELFARE
            </div>
            <div class="goi row ">
              भारत सरकार | कृषि और किसान कल्याण मंत्रालय
            </div>
          </div>

          <!-- <div class="serh col-lg-2">
            <div class="input-group"  style="width:200px;">
            <input type="search" class="form-control" placeholder="search" style="width:150px;">
            <div class="input-group-append"><button class="btn " type="submit" style="background-color:rgba(209, 185, 185, 0.815);"><i class="fa fa-search"></i></button></div>
            </div>
          </div> -->

          <div class="sreader col-lg-1" >
            <a title="screenreader" href="screenreader.php"><img src="img/screen.jpg"  alt="screenreader" style="float: right;"></a>
          </div>

           
          <div class="sfont col-lg-2" >
            <button  id="fontdec" ><img src="img/fontdec.png" title="font decrease"></button>
            <button  id="fontnorm"><img src="img/A.png" title="font normal" style="height: 15px;"  ></button>
            <button  id="fontinc"><img src="img/fontinc.png" title="font increase"></button>
          </div>
    


        <div id="google_translate_element" class=" col-lg-2">
        
        <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>
        
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
          </div>
          
 
          <div class="col-lg-2" id="theme">

            <span class=""  style="padding:0" >
              <button class="btn btn-link style-black  " id="dark" style="font-size: 12px;">Dark</button>
            </span>

            <span class="" style="padding:0" >
              <button class="btn btn-link style-white "  id ="original" style="font-size: 12px;">Original</button>
            </span>

            

              <script>

                let dark =localStorage.getItem('dark');

                const darktoogle = document.querySelector('#dark');

                const originaltoogle =document.querySelector('#original');

                function enabledarktheme()
                {
                 // document.body.classList.add("darkmode");

                 document.body.style.backgroundColor="black";
                     document.body.style.color = "white"; 
                     document.body.style.backgroundImage="none";

                  localStorage.setItem('dark','enabled');
                }

                function disabledarktheme()
                {
              
                  // document.body.classList.remove("darkmode");

                  document.body.style.backgroundImage="linear-gradient(to right, #e0ffff,white,#e0ffff )";  
                    document.body.style.color = "black"

                  localStorage.setItem('dark',null);

                }

                if (dark === 'enabled') {
                    enabledarktheme();
                  }
                  if(dark !== 'enabled')
                  {
                    disabledarktheme();
                  }

                darktoogle.addEventListener( 'click',() =>{

                  dark =localStorage.getItem('dark');

                  if(dark !== 'enabled'){
                    
                    enabledarktheme();
                  
                  }

                });

                 originaltoogle.addEventListener( 'click',() =>{

                  dark =localStorage.getItem('dark');

                  if(dark == 'enabled'){
                   
                    disabledarktheme();

                  }

                });
                 

                    //   document.addEventListener('DOMContentLoaded', function() { 
                    //     originaltheme();
                    // });


                    // function originaltheme(){
                    //   document.body.style.backgroundImage="linear-gradient(to right, #e0ffff,white,#e0ffff )";  
                    //  document.body.style.color = "black"; 
                    // }

                    // function darktheme(){
                    //   document.body.style.backgroundColor="black";
                    //  document.body.style.color = "white"; 
                    //  document.body.style.backgroundImage="none";
                    // }



              </script>
                
              
          </div>
        
        </div>

      </div>

      <div style="padding:2px ;"></div>
      <div class="heading" >

          <div class="header-wrapper input-group justify-content-center row" style="  margin-left:5px;margin-right:5px;  float:none; display: flex;" >

            <div class="officeimg  col-lg-2  "style=" float:none;padding:0; "><img src="img/ctri building.jpg" alt="CTRI Office" style="height:150px; width:100%"></div>
            
              <div class="ctrilogotitle col-lg-8 text-center  "style=" float:none;  padding:0;" ><img src="img/heading2.jpg" alt="img" style=" height:150px"></div> 
            
           <div class="croppic col-lg-2 "style=" float:none; padding:0;background:white;">
           
               
             <img class="crops w3-animate-fading" src="img/slide1.jpg" style="width:100%">
             <img class="crops w3-animate-fading" src="img/slide2.jpg" style="width:100%">
             <img class="crops w3-animate-fading" src="img/slide3.jpg" style="width:100%">
             <img class="crops w3-animate-fading" src="img/slide4.jpg" style="width:100%">


            </div>
            </div>
         
      </div>
      
    
    </body>   
</html>
<script>
var index =0;
sliderfade ();

function sliderfade()
{
var element = document.getElementsByClassName("crops");
    for( i=0;i<element.length;i++){
      element[i].style.display = "none";
    }
    index++;
    if(index>element.length){
      index=1;
    }
    element[index-1].style.display ="block";
    setTimeout(sliderfade,5000);
}

</script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript"> 
   $(function() {
  //  if ($.browser.msie && $.browser.version.substr(0,1)<7)
	// {
	// $('li').has('ul').mouseover(function(){
	// $(this).children('ul').css('visibility','visible');			}).mouseout(function(){	
	// $(this).children('ul').css('visibility','hidden');			})		} 

	$('#fontinc').on('click',function(){
		curSize = parseInt($('body').css('font-size')) + 2;
		if(curSize <= 20){
			$('body').css('font-size',curSize);
			$('body ul li a').css('font-size',curSize);
			$('.content p').css('font-size',curSize);
		}
	});
	$('#fontdec').on('click',function(){
		curSize = parseInt($('body').css('font-size')) - 2;
		if(curSize >= 10){
			$('body').css('font-size',curSize);
			$('body ul li a').css('font-size',curSize);
			$('.content p').css('font-size',curSize);
		}
	});
	$('#fontnorm').on('click',function(){
		
			$('body').css('font-size','16px');
		//	$('body ul li a').css('font-size','12px');
	//		$('.content p').css('font-size','14px');
		
	});       
	 });

</script>


