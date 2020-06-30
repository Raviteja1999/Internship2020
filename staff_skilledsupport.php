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
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Document</title>
   <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->

</head>
<style>
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
   
  


</style>

<body>

  <div id="main">
<div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/508.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>	K.A.J. Kennedy</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
                       <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=1 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                       
                       
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/524.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>	Ch. Papa</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=2 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                   </table>
                  
            
         </div>    

	
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/528.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'>	Y. Jayalakshmi </b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
                       <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=3 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                          </table>
       
       </div> 
      </div>
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/530.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>	A. Nageswara Rao</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'SSS></td></tr>
                       <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=4 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                      
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/532.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>	A. Srinivas</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=5 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                  </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/534.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'>P. Ramana </b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
                       <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=6 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                         </table>
       
       </div> 
      </div>
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/538.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>	K. Sankurudu</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=7 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/540.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>	K.V. Narasimha Raju</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=8 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/542.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'>	G. Prasada Rao </b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
                       <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=9 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                        </table>
       
       </div> 
      </div>
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/544.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>	K.V.S.S. Bhaskara Rao</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=10 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/546.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>	K. Satyanarayana</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=11 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/548.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'> 	V.V.P.L. Acharyulu</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=12 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                        </table>
       
       </div> 


      </div>
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/550.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>	B.S.S. Sai</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=13 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/556.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>	N. Kanakanandam</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=14 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/560.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'> Y.S.V. Subba Rao</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=15 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                        </table>
       
       </div> 
      </div>
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/566.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>E. Radhakrishna</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=16 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/568.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>B. Koteswara Rao</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=17 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/570.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'> 	P. Krishna</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=18 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                        </table>
       
       </div> 
      </div>
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/572.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>	P. Kota Babu</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=19 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
           
                       </table>
	
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/574.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>P.V. Ramana</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=20 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/576.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'>	N. Srinivasa Rao </b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=21 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                        </table>
       
       </div> 
      </div>
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/578.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>Y.V. Narayana</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=22 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/580.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>A. Daniel Raju</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=23 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/582.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'> Y. Subrahmanyam</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=24 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                        </table>
       
       </div> 
      </div>
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/588.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>Ch. Satyanarayana</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=25 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/674.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>P.Y. Narasimha Rao</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=26 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/676.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'>Devamma </b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=27 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                        </table>
       
       </div> 
      </div>
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/678.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>Chikka Bhagya</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=28 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
           
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/680.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>Jayamma</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=29 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/682.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'> Byre Gowda</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=30 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                        </table>
       
       </div> 
      </div>
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/694.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'> A.K. Chisim</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=31 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
           
                       </table>
                 
       </div> 
      




        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/698.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>Md. Mohammed Ali</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=32 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
       
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/700.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'>Narayan Chandra Barman </b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=33 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                        </table>
       
       </div> 
      </div>
      
      
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/718.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'> Y.V. Subba Rao</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=34 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/720.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>Ch. Chinnayamma</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=35 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                   </table>
                  
                  



         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/722.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'>Devarapalli Babji </b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=36 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                       </table>
       
       </div> 
      </div>
      
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/724.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>Nandyala Nageswara Rao</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=37 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/726.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>Kalepu Kantham</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=38 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                   
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/728.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'> Neelapu Ramayamma</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=39 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                        </table>
       
       </div> 
      </div>
      <div class="row">
           <div class="col-lg-3">
               <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/730.jpeg' height='50' width='40'/></td><td><a href='scientists/profile1.json'><b style='font-size:15px;'>J. Veerraju</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
           
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=40 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                       </table>
                 
       </div> 

        <div class="col-lg-3">
          <table border='0' height='50' width='320'>
       
                   <tr><td rowspan='3' align='center'><img src='uploads/staff/732.jpeg' height='50' width='40'/></td><td><a href='sreedhar.php'><b style='font-size:15px;'>B.V. Rama Rao</b></a></td></tr>
       
                   <tr><td style='font-size:12px;'>SSS</td></tr>
       
                   <tr>  <td style='font-size:13px;'></td></tr>
                   <tr> <td><button   id="profile" value=41 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                   </table>
                  
            
         </div>    
         
           <div class="col-lg-3">
                <table border='0' height='50' width='320'>
           
                       <tr><td rowspan='3' align='center'><img src='uploads/staff/734.jpeg' height='50' width='40'/></td><td><a href='sarala.php'><b style='font-size:15px;'> S. Krishna</b></a></td></tr>
           
                       <tr><td style='font-size:12px;'>SSS</td></tr>
                       <tr>  <td style='font-size:13px;'></td></tr>
                       <tr> <td><button   id="profile" value=42 class="btn btn-link" onclick="profile(this.id,this.value)">View Profile</button></td></tr>
                        </table>
       
       </div> 
      </div>    
      
         <!-- <button   id="profile1" value=1 class="btn btn-link" onclick="profile(this.id,this.value)">Profile</button>
       <button  id="profile2" value=2  class="btn btn-link"  onclick="profile(this.id,this.value)">Profile</button> -->

  </div> 

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
</body>
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

         
     request.open('GET','skilled/profile'+ callvalue+'.json');  //change at this line
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