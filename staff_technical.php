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
    
    <title>Technical | CTRI,Rajahmundry</title>

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
    
    /* .row{
                padding:15px; 
               text-align:center;
           }
    */

 
</style>
<body>


   <div id="main">
        
   <h4 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Staff&gt;Technical</h4>		
<br>  

        <div class="row">
             <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/204.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 1 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> J.V.R. Satyavani     </button>  </td></tr>
                       <td><a href=''><b style='font-size:15px;'>	J.V.R. Satyavani</b></a></td></tr> 
            
                        <tr><td style='font-size:12px;'>Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>satyavani.kota@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 1 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>-->
            
                        </table></div>
            </div>

        </div> 

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/212.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 2 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> C. Mahadeva     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	C. Mahadeva</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>cmahadeva78@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 2 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/224.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 3 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	C.V.K. Reddy     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	C.V.K. Reddy</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>reddycvk@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 3 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        
    <!-- </div>  -->
    <!--Row1 end-->
           <!-- <br> -->

    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/228.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 4 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>D.V.L. Satyavathi      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	D.V.L. Satyavathi</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>dronamraju.satyavathi@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 4 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/230.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 5 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>    Dr. Pallaki Nagesh  </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Dr. Pallaki Nagesh</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>pallakinagesh@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 5 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/232.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 6 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Dr. S.S. Sreenivas     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>Dr. S.S. Sreenivas</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>vas_sss@yahoo.co.in</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 6 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        
    <!-- </div>  -->
    <!-- <br> -->
    <!--Row2 end-->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/234.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 7 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Dr. P.V.V.S. Siva Rao     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Dr. P.V.V.S. Siva Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Assistant Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>pvvssivarao@yahoo.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 7 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/242.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 8 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  G. Nagesh Kanth Rao    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	G. Nagesh Kanth Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Assistant Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>nkanthrao@yahoo.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 8 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/284.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 9 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	C. Muruganantham     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	C. Muruganantham</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Assistant Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>c.m.natham@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 9 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div>  -->
     <!--Row3 end-->
     <!-- <br> -->

    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/244.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 10 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>M.N.P. Kumar      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	M.N.P. Kumar</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Assistant Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>prasanna_ctri@yahoo.co.in</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 10 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/250.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 11 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Dr. S.K. Dam      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Dr. S.K. Dam</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Assistant Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>damskd01@yahoo.co.in</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 11 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/256.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 12 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> T. Venkatesh     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	T. Venkatesh</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Assistant Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>thippajjavenkatesh@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 12 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row4 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/258.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 13 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	N.D. Suresh     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	N.D. Suresh</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Assistant Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>sureshnilavadi@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 13 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/262.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 14 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> R. Rajendran     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	R. Rajendran</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Assistant Chief Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>rrajendran725@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 14 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/238.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 15 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  	K. Santinandivelu    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	K. Santinandivelu</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>santikalapalli@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 15 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row5 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/246.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 16 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>B. Krishna Kumari      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>B. Krishna Kumari</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>krishnasrinivas1998@gmail.com /akshaya99</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 16 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/248.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value=17 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> K. Padmaja     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	K. Padmaja</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>padmajakatakam@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 17 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/264.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 18 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	J. Vasanthi     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	J. Vasanthi</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>vasanthij73@yahoo.in</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 18 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row6 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/282.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 19 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  V. Annadurai    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	V. Annadurai</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>prithviannadurai@yahoo.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 19   class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/263.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 20 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> V.V. Shivaram     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	V.V. Shivaram</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>vvshivaramyadav@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 20 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/268.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 21 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> N. Sreedhar     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	N. Sreedhar</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>nakkalasreedhar@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 21 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row7 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/276.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 22 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>	N. Sambasiva R      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	N. Sambasiva Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>nimmadulasambasivarao@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 22 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/292.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 23 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>   G. Srinivasa Rao   </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	G. Srinivasa Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>guntupalli002@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 23 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/294.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 24 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	M. Trinadh     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	M. Trinadh</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 24 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div>  -->
     <!--Row8 end-->
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/298.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 25 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  G.S.N. Murthy    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	G.S.N. Murthy</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 25 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/304.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 26 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	Y. Yesu     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Y. Yesu</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>yesu.jaya@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 26 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/306.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 27 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Md. Elias     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Md. Elias</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>eliasctri@rediffmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile1" value= 27 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row9 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/308.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 28 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  	B.V. Srinivas    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	B.V. Srinivas</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>b.srinu395@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 28 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/314.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 29 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> T. Venkata Rao     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	T. Venkata Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 29 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/318.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 30 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>	Shambu Gowda      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Shambu Gowda</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 30 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row10 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/320.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 31 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>   	Chikkanna Setty   </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Chikkanna Setty</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 31 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/322.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 32 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Sanna Swamy      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Sanna Swamy</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 32 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/324.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 33 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> D.K. Eshwara     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	D.K. Eshwara</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 33 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row11 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/326.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 34 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>   	M.V. Jaya Krishna   </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	M.V. Jaya Krishna</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'>jkmandapati@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 34 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/328.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 35 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	M. Mathaiah     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	M. Mathaiah</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>mathaiah441@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 35 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/330.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 36 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	P. Eswara Rao      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	P. Eswara Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Officer</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 36 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row12 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/332.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 37 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	M.M. Ali     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	M.M. Ali</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>mas2005@rediffmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 37 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/340.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 38 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> N. Johnson     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	N. Johnson</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>nalli._johnson@rediffmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 38 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/342.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 39 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>M.S. Asokan      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	M.S. Asokan</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>asokanms1965@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 39 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row13 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/344.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 40 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	K.V.V. Satyanarayana     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	K.V.V. Satyanarayana</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>narayana_kvv@rediffmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 40 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/348.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 41 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>	S. Ramakrishna      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	S. Ramakrishna</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 41 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/354.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 42 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Ch. Sudhakara Babu      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Ch. Sudhakara Babu</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>sudhababucherukuri@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 42 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row14 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/ksridevi.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 43 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  Kalaparthi Sridevi    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>Kalaparthi Sridevi</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>sridevisulabha@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 43 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/simhachalam.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 44 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Simhachalam Simma     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Simhachalam Simma</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>chalamrishabchem@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 44 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/358.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 45 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	Sk. Ameer Ali     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Sk. Ameer Ali</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>alictri1960@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 45 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row15 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/360.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 46 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  A. Suresh Babu    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	A. Suresh Babu</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>sureshbabuamruthaluri@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 46 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/362.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 47 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>D. Vara Prasad      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	D. Vara Prasad</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 47 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/364.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 48 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	T. Srinivasa Rao     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	T. Srinivasa Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 48 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row16 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/366.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 49 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Y. Venkateswara Rao     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Y. Venkateswara Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 49 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/370.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 50 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	B. Suresh Kumar     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	B. Suresh Kumar</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>bskumar913@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 50 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/372.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 51 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>   C. Puttamallaiah   </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	C. Puttamallaiah</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>puttamalliah@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 51 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row17 end--> 
     <!-- <br> -->

    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/shravankumar.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 52 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Karri Shravankumar     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>Karri Shravankumar</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>shravankumarkarri@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 52 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/374.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 53 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Gopala Rao     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Gopala Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>gopalarao588@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 53 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/375.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 54 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>	Srilakshmi Peruri      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Srilakshmi Peruri</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>srilakshmiperuri115@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 54 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
     <!--Row18 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/377.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 55 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> S. Bhaskar Naik     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	S. Bhaskar Naik</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>bhaskarsabhavat@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 55 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/379.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 56 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>	Veeranna Kamuni      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Veeranna Kamuni</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>veerakamuni@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 56 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/380.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 57 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Y.V. Subrahmanyam     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Y.V. Subrahmanyam</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 57 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
    <!--Row19 end-->  
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/381.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 58 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Naresh Kumar Mangilipelli      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Naresh Kumar Mangilipelli</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>naresh.mangilipelli@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 58 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/382.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 59 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> M. Srinivas     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	M. Srinivas</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>srinivasmaramganti@yahoo.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 59 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/384.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 60 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  	N. Endaiah    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	N. Endaiah</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>endayyan@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 60 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
    <!--Row20 end-->  
    <!-- <br> -->

    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/385.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 61 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	Aasi Divya     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Aasi Divya</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>aasidivyareddy@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 61 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/386.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 62 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>   Arvind Isukapatla   </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Arvind Isukapatla</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>arvindisuk@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 62 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/vsagar.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 63 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Vidyasgar Kamaka     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>Vidyasgar Kamaka</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>kamakavidyasagar@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 63 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
    <!--Row21 end-->  
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/387.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 64 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  Ramu Nambari    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Ramu Nambari</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>ramnambari@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 64 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/388.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 65 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>   Anshul Sharma   </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Anshul Sharma</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>anshul254sharma@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 65 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/389.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 66 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Pappu Sateesh      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>Pappu Sateesh</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>spsateesh786@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 66 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
    <!--Row22 end-->  
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/390.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 67 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> B. Durga Rao     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	B. Durga Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'> </td></tr>
                        <!-- <tr> <td><button   id="profile" value= 67 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/391.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 68 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	Dr. P.S. Shameer     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Dr. P.S. Shameer</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>shameershameerps@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 68 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/392.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 69 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> A.L.N. Murthy     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	A.L.N. Murthy</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 69 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
    <!--Row23 end-->  
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/394.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 70 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> G. Govinda Raju     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	G. Govinda Raju</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 70 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/396.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 71 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Y. Udaya Kumar     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Y. Udaya Kumar</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 71 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/398.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 72 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>	K. Malakondaiah      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	K. Malakondaiah</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 72 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
   <!-- </div> -->
   <!--Row24 end-->  
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/400.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 73 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>	A. Mutyam      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	A. Mutyam</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>muthyam43veni@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 73 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/402.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 74 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> T. Nagamani     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	T. Nagamani</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 74 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/404.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 75 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  V. Subba Rao    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	V. Subba Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technical Assistant</td></tr>
            
                        <tr>  <td style='font-size:13px;'>vemusubbarao@yahoo.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 75 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
    <!--Row25 end-->  
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/406.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 76 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> S. Rama Raju     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	S. Rama Raju</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 76 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/412.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 77 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	B. Yesu     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	B. Yesu</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 77 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/414.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 78 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>E. Veerabhadra Rao      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	E. Veerabhadra Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 78 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
    <!--Row26 end-->  
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/418.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 79 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  D. Yesurathnam    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	D. Yesurathnam</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 79 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/424.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 80 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Ch. Laxmana Rao     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Ch. Laxmana Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>laxman43pandu@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 80 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/426.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 81 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	M. Mohana Rao     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	M. Mohana Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 81 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
     <!-- </div> -->
     <!--Row27 end-->  
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/430.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 82 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>	J.K. Joy Barman      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	J.K. Joy Barman</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Senior Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>joydevkumar@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 82 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/432.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 83 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>R. Indrani      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	R. Indrani</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 83 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/586.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 83 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> G.V. Ramana     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	G.V. Ramana</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 84 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
     <!-- </div>  -->
     <!--Row28 end--> 
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/526.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 85 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> D. Balarama Reddy     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	D. Balarama Reddy</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 85 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 86 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> P. Janakiramaiah     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>P. Janakiramaiah</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 86 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 87 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> O. Rathamma     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>O. Rathamma</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'></td></tr>
                        <!-- <tr> <td><button   id="profile" value= 87 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
     <!-- </div> -->
     <!--Row29 end-->  
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 88 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> V. Jayamma     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>V. Jayamma</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        
                        <!-- <tr> <td><button   id="profile" value= 88 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/V%20Parameswara%20Rao.JPG' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 89 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Vyndam Parameswara Rao     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>Vyndam Parameswara Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>vyndam.paramesh@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 89 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/D%20Srinivasa%20Rao.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 90 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	Devabathula Srinivasa Rao     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Devabathula Srinivasa Rao</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>srinudevabathula@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 90 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
    <!--Row30 end-->  
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/Phani%20Kumar.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 91 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> A.S.R.R. Phani Kumar     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>Anantatmakula S.R.R. Phani Kumar</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>srrpkumar23@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 91 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/GNS%20Ganesh.JPG' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 92 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	Guttula Naga Satya Ganesh     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Guttula Naga Satya Ganesh</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>ganeshgns007@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 92 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/Thella%20Ramesh.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 93 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Thella Ramesh      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>Thella Ramesh</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>ramesh.thella4@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 93 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
    <!--Row31 end-->  
    <!-- <br> -->

    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/Pallikonda%20Krishna.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 94 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Pallikonda Krishna     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Pallikonda Krishna</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>krishnatej4345@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 94 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/Godavarthi%20SM%20Annapoorna.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 95 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Godavarthi S.M. Annapoorna     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Godavarthi S.M. Annapoorna</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>satya2177@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 95 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/Antharvedi%20Usha%20Angel.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 96 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Antharvedi Usha Angel</button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>Antharvedi Usha Angel</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>angelkishore@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 96 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
    <!--Row32 end-->  
<!-- <br> -->
    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/Gurani%20Satya%20Harish.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 97 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>  Gurani Satya Harish    </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Gurani Satya Harish</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>satyahar007@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 97 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/Nikhil%20CM.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 98 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>	Nikhil, C.M.      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Nikhil, C.M.</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>nikhilcm89@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 98 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/Kolli%20Satyanarayana.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 99 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Kolli Satyanarayana     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>Kolli Satyanarayana</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>satyanarayanakolli2@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 99 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
    <!-- </div> -->
    <!--Row33 end-->  
<!-- <br> -->

    <!-- <div class="row"> -->
            <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/Kshitish%20Kumar%20Mishra.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 100 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>Kshitish Kumar Mishra      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>Kshitish Kumar Mishra</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>kshitish510@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 100 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

        </div>

       <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/Muliki%20Deepak%20Kumar.jpg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 101 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'>	Muliki Deepak Kumar      </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Muliki Deepak Kumar</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>mulikideepakkumar@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 100 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        <div class="col-lg-3">
                <div class='staff'>

                    <div class='staff'>

                        <table border='0' height='50' width='320'>
            
                        <tr><td rowspan='3' align='center' class="photoprofile"><img src='uploads/staff/476.jpeg' height='50' width='40'/></td>
                     
                        <td><button id="profile" value= 102 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> 	Kambala Giribabu     </button>  </td></tr>
                        <!-- <td><a href=''><b style='font-size:15px;'>	Kambala Giribabu</b></a></td></tr> -->
            
                        <tr><td style='font-size:12px;'>Technician</td></tr>
            
                        <tr>  <td style='font-size:13px;'>kambala.giribabu@gmail.com</td></tr>
                        <!-- <tr> <td><button   id="profile" value= 102 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr> -->
            
                        </table></div>
            </div>

            
        </div> 
      
        
    </div> 
    <!--Row34 end--> 
    <!-- row ends -->


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
        
            
        request.open('GET','technical/profile'+ callvalue+'.json');  //change at this line
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
                        
                  
                  
                    //area of interst
                    details +="<p> Area of Interst :"+data[i].area_of_interst;

                    
                   //Employment Record
                  
                    details +="<p><p>"+ "Employment Record  :<p> <ul>";

                                          
                    
                    //  data[i].employment_record.forEach(function(object){

                    //       console.log(data[i].employment_record.length);
                         
                    //      for(j=1;j<= data[i].employment_record.length;j++)
                    //      {
                     
                    //          details+= '<t><t><t><li>' +object[j]+ "</li>";
                                
                                
                    //          }       
                      
                            
                            
                        
                    //      });

                    for(j=0;j< data[i].employment_record.length;j++){
                        details+= '<t><t><t><li>' +data[i].employment_record[j]+ "</li>";
                    }



                    

                    details+="</ul>"+"<p>";
                   
                    

                        //publications
                    
                      details +="<p><p>"+ "Publications  :<p> <ol>";

                    for(j=0;j< data[i].publications.length;j++){
                        details+= '<t><t><t><li>' +data[i].publications[j]+ "</li>";
                    }

                    details+="<p>"+"</ol>";


                            //Awards
                    
                      details +="<p><p>"+ "Awards  :<p> <ul>";

                    for(j=0;j< data[i].awards.length;j++){
                        details+= '<t><t><t><li>' +data[i].awards[j]+ "</li>";
                    }

                    details+="<p>"+"</ul>";
                        
                    
                    

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