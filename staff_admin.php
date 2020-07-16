<?php
       include "heading1.html";
      echo "<br>";
      include "navfinal.html";
      echo "<br>"
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=1024">
   
   <title>Administration | CTRI,Rajahmundry</title>
   <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->

</head>
<style>

  .photoprofile{
    padding:3px;
    width:100px;
    height:60px;
  }
   #sidemenu{
     height: 100%;
       width:0;
       position:fixed;
       z-index:1;
       display:hidden;
       top:0;
       right:0;
      background-color: white;
       color:black;
       transition: 0.5s;
     
       overflow:auto;
       
   }

   .row1{
       float:0;
       margin:0 auto;
    
       background-color: white;
   
   }
#tophead{
   position: fixed;
   font-size: 36px;
   background-color: white;
   width: 100%;
   
 
}
#topheadcontent{
   margin-left: 5%;
   margin-right: 5%;
}
#topheadcontent>.closebtn{
   float:right;
}


#profileinfo{
float:none;
margin:0 ;
}

   
   #displayprofile{
       color: black;
   }

   #displayprofilephoto>img{
       height:200px;
       width:200px;
   }
   
   .col-lg-3{
     padding:10px;
   }


</style>

<body>
<h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Staff &gt;Administration Staff</h5>		

  <div id="main">
    <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/86.jpg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 1 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Sri A.K. Maheshwari     </button>  </td></tr>
                       <!-- <td><a href='scientists/profile1.json'><b style='font-size:15px;'>Sri A.K. Maheshwari</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Sr. Finance & Accounts Officer</td></tr>
           
                       <tr>  <td style='font-size:13px;'>akmfao@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value= 1 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/62.jpeg' height='50' width='40'/></td>
                   
                   <td><button id="profile" value= 2 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Smt. V. Bhagyalakshmi</button>  </td></tr>
                   <!-- <td><a href='sreedhar.php'><b style='font-size:15px;'>Smt. V. Bhagyalakshmi</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>Assistant Administrative Officer</td></tr>
       
                   <tr>  <td style='font-size:13px;'>vblakshmi.aao@gmail.com</td></tr>
                   <!-- <tr> <td><button   id="profile" value= 2 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/071.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 3 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Smt. N. Maheswari      </button>  </td></tr>
                       <!-- d><td><a href='sarala.php'><b style='font-size:15px;'>Smt. N. Maheswari </b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>B.Com.</td></tr>
           
                       <tr>  <td style='font-size:13px;'>mahisnath@yahoo.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value= 3 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      <!-- </div> -->
      <!-- <br> -->
      
      <!-- <div class="row"> -->
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/72.jpeg' height='50' width='40'/></td>                    
                       
                       <td><button id="profile" value= 4 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Sri K.T.R. Singh</button>  </td></tr>
                       <!-- <td><a href='scientists/profile1.json'><b style='font-size:15px;'>Sri K.T.R. Singh</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Private Secretary</td></tr>
           
                       <tr>  <td style='font-size:13px;'>ktrsingh05@yahoo.co.in</td></tr>
                       <!-- <tr> <td><button   id="profile" value= 4 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/069.jpeg' height='50' width='40'/></td>
                  
                   <td><button id="profile" value= 5 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  Sri P.V. Satyanarayana    </button>  </td></tr>
                   <!-- <td><a href='sreedhar.php'><b style='font-size:15px;'>Sri P.V. Satyanarayana</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>Assistant Administrative Officer</td></tr>
       
                   <tr>  <td style='font-size:13px;'>pammisatyanarayana68@gmail.com</td></tr>
                   <!-- <tr> <td><button   id="profile" value= 5 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/070.jpeg' height='50' width='40'/></td>

                       <td><button id="profile" value= 6 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Sri S.V. Ramana</button>  </td></tr>
                       
                       
                       <!-- d><td><a href='sarala.php'><b style='font-size:15px;'>Sri S.V. Ramana</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Assistant Administrative Officer</td></tr>
           
                       <tr>  <td style='font-size:13px;'>svramanactri@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=6 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      <!-- </div> -->
      <!-- <br> -->
      <!-- <div class="row"> -->
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/88.jpeg' height='50' width='40'/></td>                    
                       
                       <td><button id="profile" value= 7 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Smt. P. Mariyamma      </button>  </td></tr>
                       <!-- <td><a href='scientists/profile1.json'><b style='font-size:15px;'>Smt. P. Mariyamma</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Assistant Administrative Officer</td></tr>
           
                       <tr>  <td style='font-size:13px;'>palivela13ctri@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=7 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/92.jpeg' height='50' width='40'/></td>
                   
                   <td><button id="profile" value= 8 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Sri A. Sridhar     </button>  </td></tr>
                   <!-- ><td><a href='sreedhar.php'><b style='font-size:15px;'>Sri A. Sridhar</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>Assistant Administrative Office</td></tr>
       
                   <tr>  <td style='font-size:13px;'>avadhanulasridhar@gmail.com</td></tr>
                   <!-- <tr> <td><button   id="profile" value=8 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/74.jpeg' height='50' width='40'/></td>                    
                       
                       <td><button id="profile" value= 9 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Sri S.K. Sarkar  </button>  </td></tr>
                       <!-- <td><a href='sarala.php'><b style='font-size:15px;'>Sri S.K. Sarkar </b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Personal Assistant</td></tr>
           
                       <tr>  <td style='font-size:13px;'sksr1968@gmail.com></td></tr>
                       <!-- <tr> <td><button   id="profile" value=9 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      <!-- </div> -->
      <!-- <br> -->
      <!-- <div class="row"> -->
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/76.jpeg' height='50' width='40'/></td>                    
                       
                       <td><button id="profile" value= 10 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Smt. Ch. Lakshmi Narayani    </button>  </td></tr>
                       <!-- <td><a href='scientists/profile1.json'><b style='font-size:15px;'>Smt. Ch. Lakshmi Narayani</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Personal Assistant</td></tr>
           
                       <tr>  <td style='font-size:13px;'>laksch5@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=10 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/096.jpeg' height='50' width='40'/></td>

                   <td><button id="profile" value= 11 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  Sri N. Suryanarayana    </button>  </td></tr>
                   <!-- <td><a href='sreedhar.php'><b style='font-size:15px;'> Sri N. Suryanarayana</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>Assistant</td></tr>
       
                   <tr>  <td style='font-size:13px;'>nsnarayana_ctri@yahoo.co.in</td></tr>
                   <!-- <tr> <td><button   id="profile" value=11 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/102.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 12 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>   Sri P. Devanagaraju   </button>  </td></tr>
                       <!-- d><td><a href='sarala.php'><b style='font-size:15px;'>Sri P. Devanagaraju </b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Assistant</td></tr>
           
                       <tr>  <td style='font-size:13px;'>pdevanagaraju@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=12 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      <!-- </div> -->
      <!-- <br> -->
      <!-- <div class="row"> -->
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/108.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value=13  class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Sri B.N. Ghosh     </button>  </td></tr>
                       <!-- d><td><a href='scientists/profile1.json'><b style='font-size:15px;'>Sri B.N. Ghosh</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Assistant</td></tr>
           
                       <tr>  <td style='font-size:13px;'>baidyanath.ghosh264@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=13 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/116.jpeg' height='50' width='40'/></td>

                   <td><button id="profile" value= 14 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Smt. Rohini </button>  </td></tr>
                   <!-- <td><a href='sreedhar.php'><b style='font-size:15px;'>Smt. Rohini</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>Assistant</td></tr>
       
                   <tr>  <td style='font-size:13px;'>sreenivasrohini@gmail.com</td></tr>
                   <!-- <tr> <td><button   id="profile" value=14 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/118.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 15 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Smt. N. Manjula       </button>  </td></tr>
                       <!-- d><td><a href='sarala.php'><b style='font-size:15px;'>Smt. N. Manjula </b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Assistant</td></tr>
           
                       <tr>  <td style='font-size:13px;'>manjulabalasubramani@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=15 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      <!-- </div> -->
      <!-- <br> -->
      <!-- <div class="row"> -->
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/120.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 16 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> XXXXXX     </button>  </td></tr>
                       <!-- d><td><a href='scientists/profile1.json'><b style='font-size:15px;'></b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'></td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <!-- <tr> <td><button   id="profile" value=16 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/122.jpeg' height='50' width='40'/></td>

                   <td><button id="profile" value= 17 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Sri A. Prabhu     </button>  </td></tr>
                   <!-- <td><a href='sreedhar.php'><b style='font-size:15px;'>Sri A. Prabhu</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>Assistant</td></tr>
       
                   <tr>  <td style='font-size:13px;'>aprabhu.jes@gmail.com</td></tr>
                   <!-- <tr> <td><button   id="profile" value=17 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/124.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 18 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  Sri A. Veera Venkata Ramana    </button>  </td></tr>
                       <!-- d><td><a href='sarala.php'><b style='font-size:15px;'>Sri A. Veera Venkata Ramana </b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Assistant</td></tr>
           
                       <tr>  <td style='font-size:13px;'>avv_r@yahoo.co.in</td></tr>
                       <!-- <tr> <td><button   id="profile" value=18 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      <!-- </div> -->

      <!-- <br> -->

      <!-- <div class="row"> -->
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/126.jpeg' height='50' width='40'/></td>
                       

                       <td><button id="profile" value= 19 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Sri V. Narasimha Rao     </button>  </td></tr>
                       <!-- d><td><a href='scientists/profile1.json'><b style='font-size:15px;'>Sri V. Narasimha Rao</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Upper Division Clerk</td></tr>
           
                       <tr>  <td style='font-size:13px;'>vakanarasimharao@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=19 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/128.jpeg' height='50' width='40'/></td>

                   <td><button id="profile" value= 20 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Sri P.V.V.V. Prasad      </button>  </td></tr>
                   <!-- <td><a href='sreedhar.php'><b style='font-size:15px;'>Sri P.V.V.V. Prasad</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>CTRI, Rajahmundry</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <!-- <tr> <td><button   id="profile" value=20 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/130.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value=21 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Sri Ch. Jayaram </button>  </td></tr>
                       <!-- d><td><a href='sarala.php'><b style='font-size:15px;'>Sri Ch. Jayaram </b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Upper Division Clerk</td></tr>
           
                       <tr>  <td style='font-size:13px;'>jayaram.chinta@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=21 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      <!-- </div> -->

      <!-- <br> -->

      <!-- <div class="row"> -->
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/132.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 22 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  Sri P.J.F. Moses    </button>  </td></tr>
                       <!-- d><td><a href='scientists/profile1.json'><b style='font-size:15px;'>Sri P.J.F. Moses</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Upper Division Clerk</td></tr>
           
                       <tr>  <td style='font-size:13px;'>moses_ctri@yahoo.co.in</td></tr>
                       <!-- <tr> <td><button   id="profile" value=22 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/134.jpeg' height='50' width='40'/></td>

                   <td><button id="profile" value= 23 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>   Sri S. Pradeep Kumar   </button>  </td></tr>
                   <!-- <td><a href='sreedhar.php'><b style='font-size:15px;'>Sri S. Pradeep Kumar</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>Upper Division Clerk</td></tr>
       
                   <tr>  <td style='font-size:13px;'> pradeepctri@yahoo.com</td></tr>
                   <!-- <tr> <td><button   id="profile" value=23 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/138.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 24 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Smt. G.M.B Sujatha      </button>  </td></tr>
                       <!-- d><td><a href='sarala.php'><b style='font-size:15px;'> Smt. G.M.B. Sujatha</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Upper Division Clerk</td></tr>
           
        
                       <tr>  <td style='font-size:13px;'>marycherukuri@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=24 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      <!-- </div> -->
      <!-- <br> -->
      <!-- <div class="row"> -->
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/140.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 25 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Smt. J. Suseela Devi      </button>  </td></tr>
                       <!-- d><td><a href='scientists/profile1.json'><b style='font-size:15px;'>Smt. J. Suseela Devi</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Upper Division Clerk</td></tr>
           
                       <tr>  <td style='font-size:13px;'>suseela2004@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=25 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/144.jpeg' height='50' width='40'/></td>

                   <td><button id="profile" value= 26 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Smt. Mumtaz Begum </button>  </td></tr>
                   <!-- <td><a href='sreedhar.php'><b style='font-size:15px;'>Smt. Mumtaz Begum</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>Upper Division Clerk</td></tr>
       
                   <tr>  <td style='font-size:13px;'>mmjbegum1964@gmail.com</td></tr>
                   <!-- <tr> <td><button   id="profile" value=26 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/148.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 27 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  Smt. Y. Subbalakshmi    </button>  </td></tr>
                       <!-- d><td><a href='sarala.php'><b style='font-size:15px;'>Smt. Y. Subbalakshmi</b></a></td></tr> -->
           
       
                       <tr><td style='font-size:12px;'> Upper Division Clerk</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <!-- <tr> <td><button   id="profile" value=27 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      <!-- </div> -->
      <!-- <br> -->
      <!-- <div class="row"> -->
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/152.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 28 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Sri Goutam Ghosh      </button>  </td></tr>
                       <!-- d><td><a href='scientists/profile1.json'><b style='font-size:15px;'>Sri Goutam Ghosh</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Upper Division Clerk</td></tr>
           
                       <tr>  <td style='font-size:13px;'>g.goutam70@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=28 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/154.jpeg' height='50' width='40'/></td>

                   <td><button id="profile" value= 29 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Sri S. Siva Veeraiah     </button>  </td></tr>
                   <!-- <td><a href='sreedhar.php'><b style='font-size:15px;'>Sri S. Siva Veeraiah</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>Upper Division Clerk</td></tr>
       
                   <tr>  <td style='font-size:13px;'>sivaveeraiah9@gmail.com</td></tr>
                   <!-- <tr> <td><button   id="profile" value=29 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/vmudgal.jpg' height='50' width='40'/>
                      
                       <td><button id="profile" value= 30 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Sri Vishal Mudgal      </button>  </td></tr>
                      <!-- </td><td><a href='sarala.php'><b style='font-size:15px;'>Sri Vishal Mudgal </b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Stenographer Grade III</td></tr>
           
                       <tr>  <td style='font-size:13px;'>vishalmudgal12794@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=30 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      <!-- </div> -->
      <!-- <br> -->
      <!-- <div class="row"> -->
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/155.jpeg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 31 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Smt. M. Srilatha     </button>  </td></tr>
                       <!-- d><td><a href='scientists/profile1.json'><b style='font-size:15px;'>Smt. M. Srilatha</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Lower Division Clerk</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <!-- <tr> <td><button   id="profile" value=31 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/Neetha joy Cheeran.jpg' height='50' width='40'></td>
                   
                   <td><button id="profile" value= 32 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Ms. Neetha Joy Cheeran     </button>  </td></tr>
                   <!-- <td><a href='sreedhar.php'><b style='font-size:15px;'>Ms. Neetha Joy Cheeran</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>Lower Division Clerk</td></tr>
       
                   <tr>  <td style='font-size:13px;'>cneethajoy5@gmail.com</td></tr>
                   <!-- <tr> <td><button   id="profile" value=32 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/penumetsa satish.jpg' height='50' width='40'/></td>
                       
                       <td><button id="profile" value= 33 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Sri Penumetsa Satish     </button>  </td></tr>
                       <!-- <td><a href='sarala.php'><b style='font-size:15px;'> Sri Penumetsa Satish</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Lower Division Clerk</td></tr>
           
                       <tr>  <td style='font-size:13px;'>satish.penumetsa@icar.gov.in</td></tr>
                       <!-- <tr> <td><button   id="profile" value=33 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      <!-- </div> -->
      <!-- <br> -->
      <!-- <div class="row"> -->
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/pithani Satya Naveen.jpg' height='50'   width='40'/></td>
                       
                       <td><button id="profile" value= 34 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  Sri Pithani Satya Naveen    </button>  </td></tr>
                       <!-- <td><a href='scientists/profile1.json'><b style='font-size:15px;'>Sri Pithani Satya Naveen</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Lower Division Clerk</td></tr>
           
                       <tr>  <td style='font-size:13px;'>naveenpithani15@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=34 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/SSKC Gowd Ponakalla.jpg' height='50' width='40'/></td>
                   
                   <td><button id="profile" value= 35 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Sri S.S.K.C. Gowd Ponakalla     </button>  </td></tr>
                   <!-- <td><a href='sreedhar.php'><b style='font-size:15px;'>Sri S.S.K.C. Gowd Ponakalla</b></a></td></tr> -->
       
                   <tr><td style='font-size:12px;'>Lower Division Clerk</td></tr>
       
                   <tr>  <td style='font-size:13px;'>sskcgowd.ponakalla@icar.gov.in</td></tr>
                   <!-- <tr> <td><button   id="profile" value=35 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/GANGADHARA_RAO_PHOTO.jpg' height='50'  width='40'/></td>
                       
                       <td><button id="profile" value= 36  class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Sri Karagana Gangadhara Rao     </button>  </td></tr>
                       <!-- <td><a href='sarala.php'><b style='font-size:15px;'> Sri Karagana Gangadhara Rao</b></a></td></tr> -->
           
                       <tr><td style='font-size:12px;'>Lower Division Clerk</td></tr>
           
                       <tr>  <td style='font-size:13px;'>gangadhar.k52@gmail.com</td></tr>
                       <!-- <tr> <td><button   id="profile" value=36  class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
                        </table>
       
       </div> 
      </div>
     
<br>     
<!-- end of rows -->

       <!-- <button   id="profile1" value=1 class="btn btn-link" onclick="profile(this.id,this.value)">Profile</button>
       <button  id="profile2" value=2  class="btn btn-link"  onclick="profile(this.id,this.value)">Profile</button> -->

  </div> 

  </body>

  <?php
         include "footerreader.php";
        ?> 


  <div id="sidemenu">
      <div class="row1" id="tophead" >
     
      <div id="topheadcontent">
         <span>Profile</span>
        
       <a href="javascript:void(0)" class="closebtn" onclick="closeprofile()">&times; </a>
     </div>
    
     </div>

     <br><br><br>
     <div id="content">
         <button class="btn btn-primary" style="float:right;" onclick="printdiv()">Print</button>
     <div class="row" id="profileinfo" >
        
       <div id="displayprofilephoto" class="col-lg-4"  style=" text-align: center; position:inherit"></div>
       
       <div id="displayprsonalinfo" class="col-lg-8" style=" position:inherit"></div>
       
     </div>
     
      <div id="displayprofile"></div>

      </div>
  </div>

</html>

<script>

   function profile(getid, getvalue){
      document.getElementById("sidemenu").style.width="100%";
     //  document.getElementById("main").style.marginRight="500px";
       document.body.style.backgroundColor="rgba(0,0,0,0.4)";
       

       
       // window.onscroll = function() {myFunction()};

       // var navbar = document.getElementById("tophead");
       // var sticky = navbar.offsetTop;

       // function myFunction() {
       // if (window.pageYOffset >= sticky) {
       //     navbar.classList.add("sticky")
       // } else {
       //     navbar.classList.remove("sticky");
       // }
       // }
       


       var callid= getid;
       var callvalue = getvalue;
       
       

       var display = document.getElementById("displayprofile");

       var request = new XMLHttpRequest();
       request.onreadystatechange = function(){
           console.log(request.status); 
       }

           
       request.open('GET','administration/profile'+ callvalue+'.json');  //change at this line
       request.onload=function(){
           var obtaineddata= JSON.parse(request.responseText);
           displayprofilefunction(obtaineddata);
       }
       request.send();

       function displayprofilefunction(data){
           var details='';
           var personalinfo='';

            var profileimage = new Image();
           
            
              profileimage.setAttribute('id','photoid');
             profileimage.setAttribute('alt','profile');

           
                  
           for (i=0;i<data.length;i++)
           {
               profileimage=data[i].img;
               personalinfo += '<p>'+ '<p>'+ "<b>Name</b>:"+ "<t>"+data[i].name+"<p>" + data[i].degree   +"<p>"+"Designation  :" +data[i].designation
                   +"<p>"+"Address :" + data[i].address +"<p>" +"Phone  :" +data[i].phone +"<p>" +"Email  :" +data[i].email ;
                       
                 
                 
               

                   
                  //Employment Record
                 
                   details +="<p><p>"+ "Employment Record  :<p> <ul>";          
              

                   for(j=0;j< data[i].employment_record.length;j++){
                       details+= '<t><t><t><li>' +data[i].employment_record[j]+ "</li>";
                   }



                   

                   details+="</ul>"+"<p>";            
                   

           }




          
          // document.getElementById("displayprofilephoto").appendChild(profileimage);
          document.getElementById("displayprofilephoto").innerHTML ='<img src="'+profileimage +'" alt="profileimage" id= "profilephoto">';
          document.getElementById("displayprsonalinfo").innerHTML=personalinfo;
           document.getElementById("displayprofile").innerHTML=details;
       }
   }

   function closeprofile()
   {
       document.getElementById("sidemenu").style.width="0px";
     //  document.getElementById("main").style.marginRight="0px";
       document.body.style.backgroundColor = "white";
       
    
       
   }


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