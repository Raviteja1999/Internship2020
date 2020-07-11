<?php @include_once('header.php'); ?>
<?php @include_once('dbconnect.php'); ?>
<?php @include_once('sendemail.php'); ?>

<div class="row">
<?php @include_once('left_sidebar.php'); ?>
<div class="col-md-7" style="padding:20px;">

<?php
if(isset($_POST['farmqry']) && $_POST['farmqry']=='Submit'){
	$errors= array();
	$file_path = '';
	if($_POST['cname'] == ''){
	$errors[] = 'Enter name';
	}
	if($_POST['state'] == ''){
		$errors[] = 'Select state';
	}
	if($_POST['district'] == ''){
		$errors[] = 'Select district';
	}
	if($_POST['block'] == ''){
		$errors[] = 'Select block';
	}
	if($_POST['vname'] == ''){
		$errors[] = 'Enter village name';
	}
	if($_POST['mblno'] == ''){
		$errors[] = 'Enter mobile number';
	}else{
		if(!preg_match('/^[6-9]{1}[0-9]{9}$/', $_POST['mblno'])){
        $errors[] ="Mobile number should be 10 numbers and start with 6 or 7 or 8 or 9";                        
    	}
	}
	if($_POST['email'] == ''){
		$errors[] = 'Enter email';
	}
	if($_POST['pyear'] == ''){
		$errors[] = 'Select plantation year';
	}
	if($_POST['query'] == ''){
		$errors[] = 'Enter query';
	}
	if(isset($_FILES['farm_file'])){      
      $file_name = $_FILES['farm_file']['name'];
      $file_size = $_FILES['farm_file']['size'];
      $file_tmp = $_FILES['farm_file']['tmp_name'];
      $file_type = $_FILES['farm_file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['farm_file']['name'])));      
      $expensions= array("jpeg","jpg","png","gif","mp4","mp3","wav","webm");      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG,PNG,GIF,MP4,MP3,WAV, and WEBM file.";
      }      
      if($file_size > 4194304) {
         $errors[]='File size must be less than 4 MB';
      } 
           
      if(empty($errors)==true) {

         move_uploaded_file($file_tmp,"uploads/".$file_name);        
      }
      $file_path = "uploads/".$file_name;
	}

	if(empty($errors)){
		
			$msg = "Hi Team,<br><br>";
			$msg .= "New farmer submitted query in icar.gov.in. Following are the details<br><br>";
			$msg .= "Name : ".$_POST['cname']."<br>";
			$msg .= "State : ".$_POST['state']."<br>";
			$msg .= "District : ".$_POST['district']."<br>";
			$msg .= "Block : ".$_POST['block']."<br>";
			$msg .= "Village : ".$_POST['vname']."<br>";
			$msg .= "Email : ".$_POST['email']."<br>";	
			$msg .= "Phone Number : ".$_POST['mblno']."<br>";
			$msg .= "Query : ".$_POST['query']."<br>";
			if(send_mail('Farmer Query',$msg,true,$file_path)){
			 $qry = "INSERT INTO `farmer_queries`(`cname`, `state`, `district`, `block`, `village`, `mobile`, `email`, `pyear`, `query`,`upload_path`) VALUES ('".mysqli_escape_string($con,$_POST['cname'])."','".mysqli_escape_string($con,$_POST['state'])."','".mysqli_escape_string($con,$_POST['district'])."','".mysqli_escape_string($con,$_POST['block'])."','".mysqli_escape_string($con,$_POST['vname'])."','".mysqli_escape_string($con,$_POST['mblno'])."','".mysqli_escape_string($con,$_POST['email'])."','".mysqli_escape_string($con,$_POST['pyear'])."','".mysqli_escape_string($con,$_POST['query'])."','".mysqli_escape_string($con,$file_path)."')";
				 if(mysqli_query($con,$qry)){?>
				<script type="text/javascript">
					window.location.href = window.location.href+"?msg=suc";
				</script>

			<?php
				}else{
					echo '<div class="alert alert-danger" role="alert"><button type="button"  class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Something went wrong.Please try again</div>';
				}
		}else{
			echo '<div class="alert alert-danger" role="alert"><button type="button"  class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sending mail failed.Please try again</div>';
		}
	}else{ ?>
	<div class="alert alert-danger" role="alert">
	<button type="button"  class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<?php foreach ($errors as $err) {
		echo $err."<br>";
	} ?>
	</div>


	<?php }
}
?>

<form method="post" enctype="multipart/form-data" style="background: #7cb5e6;margin:auto;padding: 30px;width: 80%">
<span style="font-size: 16px;font-weight: bold;color:red;margin-left: 35%;">Farmer Query</span><br><br>
<?php if(isset($_GET['msg']) && $_GET['msg'] == 'suc'){ ?>
<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Query sent successfully</div>
<?php  } ?>
<label>Enter Name<span style="color: red">*</label>
<br>
<input type="text" class="form-control" name="cname" value="<?=isset($_POST['cname'])?$_POST['cname']:''?>" required>
<br>

<label>Select State<span style="color: red">* </label>
<select name="state" class="form-control" id="state" required>
<option>Select State</option>
<?php
	$state_qry = "select distinct(state_name),state_code from state_dist_block_list order by state_name";
	$state_res = mysqli_query($con,$state_qry);
	while ($row = mysqli_fetch_array($state_res)) { 
	echo "<option value='".$row['state_code']."'>".$row['state_name']."</option>";
	}
?>
</select>
<br>
<label>Select District<span style="color: red">*</label>
<select name="district" class="form-control" id="district"required>
<option>Select District</option>
</select>
<br>
<label>Select Block<span style="color: red">*</label>
<select name="block" id="block" class="form-control"required>
<option>Select Block</option>
</select>
<label>Village<span style="color: red">*</span></label>
<input type="text" class="form-control" name="vname" value="<?=isset($_POST['vname'])?$_POST['vname']:''?>" required> 
<br>
<label>Mobile No<span style="color: red">*</label>
<input type="mobile" class="form-control" name="mblno" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);setCustomValidity('');if (this.value.length == 1 && (this.value == 0 || this.value == 1 || this.value == 2 || this.value == 3 || this.value == 4 || this.value == 5)) this.value = '';if (this.value.length < this.maxLength) this.setCustomValidity('Mobile number should be 10 numbers and start with 6 or 7 or 8 or 9');"  maxlength = "10"  oninvalid="this.setCustomValidity('Mobile number should be 10 numbers and start with 6 or 7 or 8 or 9')" value="<?=isset($_POST['mblno'])?$_POST['mblno']:''?>" required> 
<br>
<label>Email<span style="color: red">*</label>
<input type="email" class="form-control" name="email" value="<?=isset($_POST['email'])?$_POST['email']:''?>" required> 
<br>
<label>Year of planntation<span style="color: red">*</label>
<select name="pyear" class="form-control" id="pyear">
<option>Select year<span style="color: red">*</option>
<?php for($i=(int)date('Y');$i>=1980 ;$i--){ ?>
<option value="<?=$i;?>" <?=$i==date('Y')?'selected':''?> ><?=$i;?></option>
<?php } ?>
</select>
<br>
<label>Query/problem posed<span style="color: red">*</label>
<textarea rows='5' cols='30' class="form-control" name="query" required><?=isset($_POST['query'])?$_POST['query']:''?></textarea>
<br>
<label>Image/Audio/Video<span style="color: red">*</label>
<input type="file" name="farm_file" id="farm_file">
    
<br>
<input type="submit" name="farmqry" value="Submit" class="btn btn-primary">
</form>
</div>
<?php @include_once('right_sidebar.php'); ?>
</div>
<?php @include_once('footer.php'); ?>
<script type="text/javascript">

	$(document).ready(function(){

		

		$('#state').on('change',function(){
			var state = $(this).val();	

			if(state != ''){
				$.ajax({
					method:'POST',
					url:'get_data.php',					
					data:{state:state,action:'getDistricts'},
					dataType:'json',
					success:function(res){
						if(res){
							$('#district').html('<option>Select District</option>');
							$('#block').html('<option>Select Block</option>');
							for(i=0;i<res.length;i++){
							$('#district').append('<option value="'+res[i]['district_code']+'" >'+res[i]['district_name']+'</option>');
							<?php if(isset($_POST['district'])){ ?>
			$('#district').val("<?=$_POST['district']?>");
			$('#district').change();
			<?php } ?>
						 }
						}
					},
					error:function(err){}

				});
			}
		});

		$('#district').on('change',function(){
			var state = $('#state').val();	
			var district = $(this).val();			

			if(state != ''){
				$.ajax({
					method:'POST',
					url:'get_data.php',					
					data:{state:state,district:district,action:'getMandals'},
					dataType:'json',
					success:function(res){
						if(res){
							$('#block').html('<option>Select Block</option>');
							for(i=0;i<res.length;i++){
							$('#block').append('<option value="'+res[i]['block_code']+'" >'+res[i]['block_name']+'</option>');
							<?php if(isset($_POST['block'])){ ?>
			$('#block').val("<?=$_POST['block']?>");			
		<?php } ?>
						 }
						}
					},
					error:function(err){}

				});
			}
		});
<?php if(isset($_POST['state'])){ ?>
			$('#state').val("<?=$_POST['state']?>");
			$('#state').change();		

		<?php } ?>



		

	});
</script>