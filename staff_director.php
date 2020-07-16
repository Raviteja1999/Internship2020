 
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
    #main{
        padding:100px;
        
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
        transition: 0.3s;
      
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

<h5 style="color:blue; text-align:left;"><a href="home.php" style="color:blue;">Home</a>&gt;Staff &gt;Director</h5>		
    
<div id="main">


     <div class="row">
            <div class="col-lg-3">
                <div class='staff'>

                <div class='staff'>
			<table border='0' height='50' width='320'>
            <tr><td rowspan='3' align='center'><img src='uploads/staff/1.jpeg' height='60' width='60'/></td>
            
            <td><button id="profile" value= 1 class="btn btn-link" onclick="profile(this.id,this.value)" style='font-size:15px;font-weight:bold;padding:0'> Dr. D. DAMODAR REDDY     </button>  </td></tr>

            <!-- <td><a href='director.php'><b>Dr. D. DAMODAR REDDY</b></a></td></tr> -->
			<tr><td>Director</td></tr>
			<tr>  <td>ddreddy132@gmail.com</td></tr>
            </table></div></td></tr>

         <!-- <tr> <td><button   id="profile1" value=1 class="btn btn-link" onclick="profile(this.id,this.value)">Profile</button> -->
   
        </td></tr</table></div>
               </div>
        </div> 

          
          
       
        </div>

        
        </div>

        <!-- <button   id="profile1" value=1 class="btn btn-link" onclick="profile(this.id,this.value)">Profile</button>
        <button  id="profile2" value=2  class="btn btn-link"  onclick="profile(this.id,this.value)">Profile</button> -->
 
       

   <div id="sidemenu">
       <div class="row1" id="tophead" >
      
       <div id="topheadcontent">
          <span>Profile</span>
         
        <a href="javascript:void(0)" class="closebtn" onclick="closeprofile()">&times; </a>
      </div>
     
      </div>

      <br><br><br>

      </body>
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

<?php
         include "footerreader.php";
        ?> 
  

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

            
        request.open('GET','directorprofile'+ callvalue+'.json');  //change at this line
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

                    

                      details +="<p><p>"+ "Honours  :<p> <ul>";

                    for(j=0;j< data[i].Honours.length;j++){
                        details+= '<t><t><t><li>' +data[i].Honours[j]+ "</li>";
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