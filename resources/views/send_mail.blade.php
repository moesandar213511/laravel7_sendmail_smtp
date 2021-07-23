<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{url('assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form method="post" action="{{route('sendMail')}}" class="contact2-form validate-form">
					@csrf
					<span class="contact2-form-title">
						Contact Us
					</span>

					<!-- <div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz"> -->
						<!-- <label for="" class="focus-input2">Email</label><br> -->
						<!-- <input class="" type="text" name="email">  -->
						<!-- class="input2" -->
						<!-- <span class="focus-input2"></span>  -->
						<!-- data-placeholder="EMAIL" -->
					<!-- </div> -->

					<div class="wrap-input2 validate-input" data-validate="Title is required">
						<label for="" class="focus-input2">Title</label><br>
						<input class="" type="text" name="title">
						<span class="focus-input2"></span>
					</div>


					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<label for="" class="focus-input2">Message</label><br>
						<textarea class="" name="message"></textarea>
						<span class="focus-input2"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button type="submit" class="contact2-form-btn">
								Send Your Message
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{url('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/js/main.js')}}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
