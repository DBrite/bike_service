<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from autoshed.in/css/images/images/css/js/js/css/css/cars.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jul 2021 19:24:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>AutoShed Leading Bike service and Car Service Online Hyderabad</title>
<link rel="shortcut icon" href="images/favicon.png">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="../../../../../../../../../ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" id="main-style" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
<link rel="stylesheet" id="main-style" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" id="main-style" type="text/css" href="css/animate.css">
<link rel="stylesheet" id="main-style" type="text/css" href="css/custom.css">
<link rel="stylesheet" href="css/font-awesome-animation.min.css">
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}
</script>
<script src="js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
<script>


	    function blockSpecialChar(e) {
            var k = e.keyCode;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 32   || (k >= 1 && k <= 2));
        }
        function blockSpecialnumbers(e) {
            var k = e.keyCode;
            return (k > 47 && k < 58);
        }
	       function chk_validations(form) {
          
          var name = $(form + ' .name').val();
                    var fcontact = $(form + ' .number').val();
                
         		
         		   if (name.length == '') {
         
                        $(form + ' .error').html("Please Enter your  Name");
                        
                        return false;
                    }
         
                 
                   
         	else
                        return true;
         		
         		
          
         }
         
         
                function save_details(d) {
         	
         	
                    
                     event.preventDefault();
         		 
         		   var form = d;
                    if (chk_validations(form)) {
                        
                        
         			
         		    var myData = $(d).serialize();
         
                        $.ajax({
         
                            type: "POST",
         
                            url: "form_actions.php",
         
                            data: myData,
         
                            cache: false,
                            success: function(data) {
                           
                            
         
                             $(form + ' .error').html("Thank you , Will Get Back To You");
         $("#form_frm")[0].reset();
                        
         
                            }
         
                       });
         		
         		}
         		 
         		 
         	}
         	
         	



$(document).ready(function(){
	$(".inp_cls").focusout(function(){
		var frm_val =$('input',this).val();
		// alert(frm_val);
		if(!frm_val==""){
	    	$('label',this).css("top", "-16px");
	    	$('label',this).css("color", "#00AEEF");
	    	$('label',this).css("font-size", "14px");
	    }
	});
});


</script>

</head>

<body>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="../../../../../../../../../code.jquery.com/jquery-1.12.4.js"></script>
  <script src="../../../../../../../../../code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({ minDate: 0}).attr('readonly','readonly');
  } );
  </script>
<script>

$(document).ready(function(){
	$(".inp_cls").focusout(function(){ 
		var frm_val =$('input',this).val();
		var frm_val1 =$('textarea',this).val();
		// alert(frm_val);
		if(!frm_val==""){
	    	$('label',this).hide();
	    	// $('label',this).css("color", "#00AEEF");
	    	// $('label',this).css("font-size", "14px");
	    }
	    else if(!frm_val1==""){
	    	$('label',this).hide();
	    	// $('label',this).css("color", "#00AEEF");
	    	// $('label',this).css("font-size", "14px");
	    }
	});

	// $('input.chk_ip').on('change', function() {
 //    $('input.chk_ip').not(this).prop('checked', false);  
	// });
	
	 $('.chck_div input').on('change', function() {
 	 $('.chck_div input').not(this).prop('checked', false);  
	 });
});



function serviceform(d){ 

	var brnd_year=$("#brnd_year").val();
	var veh_model=$("#veh_model").val();
		$("input[name='service_type']:checked").each(function() { 
	    var service_type = $(this).val();
		});
	var add_service=$("#add_service").val();
	var select_date=$("#datepicker").val();	
	var customer_name=$("#customer_name").val();
	var customer_mali=$("#customer_mali").val();
	var customer_num=$("#customer_num").val();

	var mail=/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; 
	if(brnd_year=='' || veh_model=='' || service_type=='' || select_date=='' || customer_name=='' || customer_mali=='' || customer_num==''){	
		//var name= return $("#form_name").attr("name");	
		//$("#form_error").html("Please enter"+$("#form_name").attr("name"));
		$(this).attr('name');
		$("#form_error").html("Please Enter All fieldss");
		return false;
	}
	else if(!customer_mali.match(mail)){
		$("#form_error").html("Please Enter Valid Email id");
		$("#customer_mali").css("border", "2px solid #dad9d9");
		return false;
	}
	else {
		$("#form_error").html("Saving.. Please wait!");
		$("#form_email").css("border", "none"); 
		
		    var myData = $(d).serialize();
	$.ajax({
    type: "POST",
    url: "form_actions.php",
     data: myData,
    cache: false,
    /*beforeSend: function() {
    $("#loaderId").html("<img src='images/loader.gif'>Checking availability");
            },*/          
    success: function(result){ 
        
	     if(result=="success"){
	        
			$("#form_error").html("Booking Done..!");
		    $("#form_frm")[0].reset();
	    }
	}
    });  	
     }
 	
}
</script>



<!-- Modal -->
  <div class="modal fade" id="contact_form" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title text-center">BOOK A SERVICE</h2>         
        </div>
        <div class="row">
        <div class="col-lg-1">&nbsp;</div>
        <div class="col-lg-10">
	        <div class="modal-body qucik_cont">
	          <form id="form_frm">
			<div id="form_error" class="err_msg" style="margin-top: -10px;margin-bottom: 10px;">&nbsp;</div>
			
			       <div class="row">
	          <div class="col-lg-4 col-md-offset-4">
	          	<select  name="SelectService" class="SelectService">
		          	<option value="">Select Service For</option><option value="Car">Car</option><option value="Bike">Bike</option>
	          	</select>
	          </div>
	          </div>
			
			
			<div class="formset" style="display:none">
	          <div class="row">
	          <div class="col-lg-4 carmodels">
	                  	<select id="comp_name" name="comp_name" class="bikenames" style="display:none">
		          	<option value="">Select One</option><option value="Hero-Moto-Corp">Hero-Moto-Corp</option><option value="Royal-Enfield">Royal-Enfield</option><option value="Bajaj">Bajaj</option><option value="Honda">Honda</option><option value="Yamaha">Yamaha</option><option value="TVS">TVS</option><option value="Suzuki">Suzuki</option><option value="Mahindra">Mahindra</option><option value="Others">Others</option>
	          	</select>
	          	
	          	<select id="comp_name" name="comp_name" class="carnames" style="display:none">
		          	<option value="">Select One</option><option value="Make">Make</option><option value="Audi">Audi</option><option value="Mercedes Benz">Mercedes Benz</option><option value="Jaguar">Jaguar</option><option value="Hyundai">Hyundai</option><option value="Honda">Honda</option><option value="Maruthi Suzuki">Maruthi Suzuki</option><option value="Mahindra">Mahindra</option><option value="Chevrolet">Chevrolet</option><option value="Ford">Ford</option><option value="Fiat">Fiat</option><option value="Volkswagen">Volkswagen</option><option value="Nissan">Nissan</option><option value="Skoda">Skoda</option><option value="Renault">Renault</option><option value="Toyota">Toyota</option><option value="others">others</option>
	          	</select>
	          </div>
	          <div class="col-lg-4">	
	          <select id="brnd_year" name="brnd_year">
	          <option value="">Select Year</option><option value="I dont know">I dont know</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option>
	          </select>
	          </div>
	          <div class="col-lg-4">
	          	<div class="inp_cls">
	          		<input class="effect-161" type="text" id="veh_model" name="veh_model" value="" placeholder="">
	          		<label>Model</label>
	          	</div>
	          </div>
	          </div>
	          <h4>What services do you need for your car?</h4>	
	          <div class="row chck_div">	          
	          	<div class="col-lg-4"><input type="checkbox" value="general" id="service_type" name="service_type" class="chk_ip"></span>&nbsp;&nbsp;General Service</div>
	          	<div class="col-lg-4"><input type="checkbox" name="service_type" value="minor" class="chk_ip" id="service_type">&nbsp;&nbsp;Minor Repair</div>
	          	<div class="col-lg-4"><input type="checkbox" name="service_type" value="major" class="service_type">&nbsp;&nbsp;Major Repair</div>
	          </div>	
	          <div class="row">				
	          	<div class="col-lg-4">
		          	<div class="inp_cls">
				   <input class="effect-161" type="text" placeholder="" id="add_service" name="add_service" />
				   <label>Additional Service</label>
				</div>
	          	</div>
	          	<div class="col-lg-4">	          		
	          		<div class="inp_cls">
	          		<span><input class="effect-161" type="text" id="datepicker" value="" placeholder="Select Date"  name="select_date"><!-- <label>Select Date</label> --></span>
	          		
	          		</div>
	          	</div>
	          	<div class="col-lg-4">&nbsp;</div>
	          </div>	          
	          <div class="row"><h4>How can we get in touch with you?</h4>
	          	<div class="col-lg-4">
	          		<div class="inp_cls">
	          		<input class="effect-161" type="text" value="" placeholder="" id="customer_name" name="customer_name" onKeyPress="return chknam(event);">
	          		<label>Name</label>
	          		</div>
	          	</div>
	          	<div class="col-lg-4">
	          		<div class="inp_cls">
	          		<input class="effect-161" type="text" value="" placeholder="" id="customer_mali" name="customer_mali">
	          		<label>Email</label>
	          		</div>
	          	</div>
	          	<div class="col-lg-4">
	          		<div class="inp_cls">
	          			<input class="effect-161" type="text" value="" placeholder="" id="customer_num" name="customer_num" onKeyPress="return chknum(event);">
	          			<label>Phone Number</label>
	          		</div>
	          	</div>
	          </div>
				<input type="button" name="" value="Send Message" class="btn_more mdl_btn" onclick="serviceform('#form_frm');">
				</form>
				
				</div>
	        </div>
	    </div>
        <div class="col-lg-1">&nbsp;</div>        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- END Modal --><!-- <section class="header">
<div>
<div class="" style="background-color: rgba(0,0,0,0.5)">
	<div class="container">
	  <img src="images/logo.png"> 
	  <div class="col-lg-12 slantbar">
		d
	  </div>         
	</div>
</div> -->

</div>
</section>




<section class="header" id="header">
	<div class="header-bg" style="background: url(images/bannershedhomepage.jpg) no-repeat center top;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    margin: :0px;color: #FFF;width: 100%;">
    <div class="bg_over">
	    <div class="container">
			<div class="col-lg-3 col-md-6 slantbar"></div>
			<div class="row" style="margin-top:15px;">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<ul class="list-inline info_ul">
						<li class="logo_img"><img src="images/logo.png"></li>
						<li style="margin-top: 10%" id="info_div">
						<div><i class="fa fa-envelope env_icon" aria-hidden="true"></i>&nbsp;&nbsp;info@autoshed.in</div>
						<div><i class="fa fa-mobile phn_icon" aria-hidden="true"></i>&nbsp;&nbsp;9963-00-6191</div>
						</li>
						<li style="float: right;">	
 <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span></h2>
						</li>				
					</ul>               
									<a href="tel:9963006191">	<input type="button" name="" value="Tap to call" class="btn_more visible-xs" style="background-color: #00adee;
    color: white;
    border-color: none;
    border-width: 0px;
    width: 92px;
    height: 31px;
    /* float: right; */
    m: -20px;
    position: absolute;
    right: 0;
    top: 35px;
    border-radius: 5px;
    padding: 0px 10px 0px 10px;
    font-size: 11px;
    cursor: pointer;
"></a>
					<div id="mySidenav" class="sidenav">
    					<div class="container" style="background-color: #2874f0; padding: 10px 30px ;">
        					<span class="sidenav-heading">Menu</span>
        					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    					</div>
					    <a href="index.php">Home</a>
					    <a href="about.php">About Us</a>
					    <a href="cars.php">Cars</a>
					    <a href="bikes.php">Bikes</a>
					    <a href="sales.php">Sales</a>
					    <a href="#">Blog</a>
					    <a href="contact.php">Contact Us</a>
					</div>
	
				</div><!-- END col-lg-4 -->
				<div class="col-lg-8 col-md-8  col-sm-8">
				<div style="text-align: right;margin-bottom: 10px;" id="follow_div">
					<span style="color: #ffff00">Follow Us : &nbsp;</span><a href="https://www.facebook.com/autoshed"><i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</div>
					<div id="flipkart-navbar">
        				<div class="row ">
            				<ul class="largenav pull-right">
                				<li class="upper-links"><a class="links" href="index.php">Home</a></li>
                				<li class="upper-links"><a class="links" href="about.php">About Us</a></li>
                				<li class="upper-links"><a class="links" href="cars.php">Cars</a></li>
                				<li class="upper-links"><a class="links" href="bikes.php">Bikes</a></li>
				                <li class="upper-links"><a class="links" href="sales.php">Sales</a></li>
				                <li class="upper-links"><a class="links" href="#">Blog</a></li>
				                <li class="upper-links"><a class="links" href="contact.php">Contact Us</a></li>
                <!-- <li class="upper-links dropdown"><a class="links" href="#">My Account</a>
                    <ul class="dropdown-menu">
                        <li class="profile-li"><a class="profile-links" href="#"> My Order</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">Gift Card</a></li>
                        <li class="profile-li"><a class="profile-links" href="#">Change Password </a></li>
                        <li class="profile-li"><a class="profile-links" href="#">logout</a></li>
                    </ul>
                </li> -->
            				</ul>
       					</div>        
    				</div>
				</div>
			</div>			
			<!-- <div class="col-lg-3" style="background-color: #F5D920;height:100px;"> -->				
		</div>	<!-- END container -->
		<div class="row text-center mang_space">
			<div class="col-lg-6  col-md-6  col-sm-6 dark_bg wow fadeInLeft">
				<div class="col-lg-5  col-md-3  col-sm-3">&nbsp;</div>	
				<div class="col-lg-7   col-md-9  col-sm-9 manag_bg">
					<img src="images/manage-service.png">
					<h2>Manag Your Car / Bike</h2>
					<h4>Services at your conveninece</h4>
					<input type="button" name="" value="Book a service now" class="btn_more" data-toggle="modal" data-target="#contact_form" style="
">
					
				<!--<a href="tel:9963006191">	<input type="button" name="" value="Tap to call" class="btn_more visible-xs" style="
    margin-left: 27%;
"></a>-->
				</div>	
			</div>
			<div class="col-lg-6  col-md-6 col-sm-6 wow fadeInDown" style="margin-top: 80px;">
				<div class="col-lg-4   col-md-4  col-sm-4">
					<img src="images/pickup.png">
					<h5>Pick Up/Drop</h5>
				</div>
				<div class="col-lg-4   col-md-4  col-sm-4">
					<img src="images/upfront.png">
					<h5>Fixed Upfront Pricing</h5>
				</div>
				<div class="col-lg-4  col-md-4  col-sm-4">
					<img src="images/support.png">
					<h5>24x7 Support</h5>
				</div>
		</div>
	</div>	<!-- END overlay bg -->
	</div><!-- END banner bg -->
</section>


<section class="gry_bg sect_space" id="about">
<div class="bg_gre bg_spc">
	<div class="container">
		<div class="header_txt wow fadeInDown">
			<h2>About Us</h2>
			<div class="dividr"></div>
			<h4>We know your time is valuable</h4>
		</div>		
	</div>
</div>

<div class="container wht_bg">
<div class="blck_bg spac_bg">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
				<div class="col-lg-4 col-md-4 col-sm-4 wow fadeInLeft">
					<img src="images/about-service.jpg" class="img-responsive">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
					<p>Autoshed was founded in 2015 with the goal to make two & four wheeler vehicle repair and maintenance affordable, convenient, and transparent. We started autoshed because we believed that the auto repair industry was broken. Dealing with bike & car problems is not only a time-consuming and frustrating experience, it is often expensive.</p>
					<input type="button" name="" value="Know More" class="btn_more">
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
			</div>
			<div class="row text-center">
				<div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
				<div class="col-lg-10 abt_blks wow fadeInDown">
					<div class="col-lg-3 col-md-3 col-sm-3">
						<h1>1000<sup>+</sup></h1><h4>Happy Customers</h4>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<h1>250<sup>+</sup></h1><h4>Services</h4>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<h1>257<sup>+</sup></h1><h4>Workshops</h4>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<h1>90<sup>+</sup></h1><h4>Locations</h4>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>				
			</div>
		</div>
		</div>
</section>

<section>
	<div style="background: url(images/workshop.jpg) no-repeat center top;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    margin: :0px;color: #FFF;width: 100%;">
    	<div class="bg_over" style="padding-top:80px;padding-bottom: 80px;">
    		<div class="container">
				<div class="header_txt wow fadeInDown">
					<h2>Our Process</h2>
					<div class="dividr1"></div>
					<h4>We know your time is valuable</h4>
				</div>		
				<div class="row text-center proces_blk wow fadeInUp">
					<div class="col-lg-3 col-md-3 col-sm-3">
						<p><img src="images/login-icon.png"></p>
						<h4>1. Login / Booking</h4>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<p><img src="images/pickup-icon.png"></p>
						<h4>2. Pickup</h4>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<p><img src="images/service-icon.png"></p>
						<h4>3. Service</h4>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<p><img src="images/delivery-icon.png"></p>
						<h4>4. Delivery</h4>
					</div>

				</div>
			</div>
    	</div>
	</div>
</section>

<section class="gry_bg sect_space" id="about">
<div class="bg_gre bg_spc">
	<div class="container">
		<div class="header_txt wow fadeInDown">
			<h2>Why Choose Us</h2>
			<div class="dividr"></div>
			<h4>We know your time is valuable</h4>
		</div>		
	</div>
</div>
<div class="container wht_bg">
<div class="blck_bg">
			<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-6 wow fadeInLeft" style="padding:0px;">
				<img src="images/whychooseus.png" class="img-responsive">
			
			</div>
			
			<div class="col-lg-7 col-md-7 col-sm-6 spac_bg spce_p1 wow fadeInRight">				
				<p class="">Autoshed was founded in 2015 with the goal to make two & four wheeler vehicle repair and maintenance affordable, convenient, and transparent. We started autoshed because we believed that the auto repair industry was broken. Dealing with bike & car problems is not only a time-consuming and frustrating experience, it is often expensive.</p></br>
					<div class="">
					<ul style="padding-top: 25px;padding-bottom: 25px;">
						<li><p>Modern Workshop</p></li>
						<li><p>Talented Workers</p></li>
						<li><p>Quality Support</p></li>
						<li><p>Best Price</p></li>
					</ul>
				</div>
			</div>				
			</div>			
		</div>
		</div>
</section>




<section id="brands" class="sect_space">

	<div class="container text-center wow fadeInDown">
		<div class="header_txt">
			<h2>Automobile Brands</h2>
			<div class="dividr"></div>
			<h4>We know your time is valuable</h4>		
		</div>
		<img src="images/brand.png" style="padding:40px 0px;margin: 0px auto" class="img-responsive">		
	</div>

</section>

<section class="sect_space">
	<div style="background: url(images/workshop.jpg) no-repeat center top;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    margin: :0px;color: #FFF;width: 100%;">
    	<div class="bg_over">
    	<div class="container text-center">
    	<div class="col-lg-2">&nbsp;</div>
    	<div class="col-lg-8 testi_bg" style="padding:40px 0px">
    		<aside>    		
    			<div class="header_txt wow fadeInDown">
					<h2>Testimonials</h2>
					<div class="dividr1"></div>
					<h4 style="color: #ffff00">We know your time is valuable</h4>		
				</div>
<div id="myCarousel" class="carousel slide services_space wow fadeInDown " data-ride="carousel" style="padding:30px 50px">
  <!-- Indicators -->
  <ol class="carousel-indicators" id="cari_ind">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <!-- <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li> -->
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">     
      	<div class="col-lg-12 col-md-12 col-sm-12">
      	<p style="font-size: 18px;">“I must mention that AutoShed is true to their job with honest prices and dedicated service. I have tried them to get my brakes renewed and the response was better than the leading service providers. They took personal care and have ensure that the job is done on time and meticulously. I must thank Mustafa for following up on all this.</p>
      	<h3 class="guest_name" style="text-align: right;color: #ffff00">- CT Shankar</h3>
      	</div>
    </div>

    <div class="item">      
      	<div class="col-lg-12 col-md-12 col-sm-12">
      	<p style="font-size: 18px;">“The service is Fast and Genuine. I must say, they have the knowledge of their work. Within few hours my bike was as good as new. All the issues got fixed.I surely recommend their service to others.</p>
      	<h3 class="guest_name" style="text-align: right;color: #ffff00">-Manish Agarwal</h3>
      	</div>
    </div>
  </div>

  <!-- Left and right controls -->
  <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->

    		</aside>
    	<div class="col-lg-2">&nbsp;</div>
    	</div>
   		</div>
   	</div>
</section>

<section id="brands" class="sect_space">
	<div class="container wow fadeInDown">
		<div class="header_txt">
			<h2>Get In Touch With Us</h2>
			<div class="dividr"></div>
			<h4>We know your time is valuable</h4>		
		</div>
		<div class="row gre_form">
			<form id="form_frm" method="POST" >
			<div class="error" class="err_msg">&nbsp;</div>
			<!-- <div class="col-lg-4 col-md-4 col-sm-4 ">
				<input type="text" placeholder="Name" id="form_name" name="Your Name">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">		
				<input type="text" placeholder="Email" id="form_email" name="form_email">
			</div> 
			<div class="col-lg-4 col-md-4 col-sm-4">		
				<input type="text" placeholder="Message" id="form_msg" name="form_msg">
			</div>-->
			<div class="col-lg-4 col-md-4 col-sm-4 " style="">
				<div class="inp_cls">
				   <input class="effect-16 name" name="name" type="text" placeholder="" id="form_name" onKeyPress="return chknam(event);"/>
				   <label>Name</label>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 ">
				<div class="inp_cls">
				   <input class="effect-16 emailmain"  name="email" type="text" placeholder=""  id="form_email" />
				   <label>Email</label>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 ">
				<div class="inp_cls">
				   <input class="effect-16 msg" type="text" name="msg" placeholder=""  id="form_msg" />
				   <label>Message</label>
				</div>
			</div>
		</div>
		<div class="row" style="text-align: center;margin-top: -40px;"><input type="button" value="Submit" class="btn_more" onclick="save_details('#form_frm');"></div>
		</form>	
		</div>	
	</div>
</section>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../../../../../../../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=658327540992633";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<section>
<div class="" style="background-color: #000;padding:50px 0px">
	<div class="container foot_ul">
		<div class="col-lg-3 col-md-3 col-sm-3">
			<ul>
				<h4>Quick Links</h4>
				<a href="index.php"><li>Home</li></a>
				<a href="about.php"><li>About Us</li></a>
				<a href="bikes.php"><li>Bikes</li></a>
				<a href="cars.php"><li>Cars</li></a>
				<a href="sales.php"><li>Sales</li></a>
				<a href="contact.php"><li>Contact Us</li></a>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3">
			<ul>
				<h4>Download App</h4>
				<a href="https://play.google.com/store/apps/details?id=com.marusatechnologies.autoshed2"><img src="images/google_playstore.png" class="img-responsive"></a>
				<h4 style="margin-top: 25px;">Social Links</h4>
				<a href="https://www.facebook.com/autoshed"><span class="fb_icn"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>&nbsp;&nbsp;&nbsp;
				<span class="tw_icon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3">
			<div class="fb-page" height="250" data-href="https://www.facebook.com/autoshed" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/autoshed" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/autoshed">AutoShed</a></blockquote></div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3">
			<ul class="list_foot">
				<h4>Contact Us</h4>
				<li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Autoshed, #302, plot no: 38,
Road No: 5, Jubliee Hills,
Hyderabad, Telangana,
India 500033</li>
				<li><span><i class="fa fa-phone" aria-hidden="true"></i></span>9963-00-6191</li>
				<li><span><i class="fa fa-envelope" aria-hidden="true"></i></span>info@autoshed.in</li>
			</ul>
		</div>
	</div>
	<div style="text-align: center;color:#FFE220;font-size: 14px;font-weight: normal;">© Copyright 2016. All rights reserved.</div>
</div>
</section>
<script>
$(document).ready(function(){
    
    

    $(".SelectService").on("change", function(){
          $('.formset').show();
          
        var servicetype=$('.SelectService').val();
        if(servicetype==='Car'){
            $('.bikenames').hide();
             $('.carnames').show(); 
        }
        else{
            
            $('.bikenames').show();
              $('.carnames').hide();
        }
    });
});
</script>


<script>
$(document).ready(function(){
    
    

    $(".SelectService").on("change", function(){
          $('.formset').show();
          
        var servicetype=$('.SelectService').val();
        if(servicetype==='Car'){
            $('.bikenames').hide();
             $('.carnames').show(); 
        }
        else{
            
            $('.bikenames').show();
              $('.carnames').hide();
        }
    });
});
</script>

</body>

<!-- Mirrored from autoshed.in/css/images/images/css/js/js/css/css/cars.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jul 2021 19:24:52 GMT -->
</html>
