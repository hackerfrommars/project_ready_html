<!DOCTYPE html>

	<head>
		<title>Simple Popup Boxes</title>

		<script type="text/javascript">
			<!--
			    function toggle_visibility(id) {
			       var e = document.getElementById(id);
			       if(e.style.display == 'block')
			          e.style.display = 'none';
			       else
			          e.style.display = 'block';
			    }
			//-->
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<style type="text/css">

			#popupBoxThreePosition{
				top: 0; left: 0; position: fixed; width: 100%; height: 120%;
				background-color: rgba(0,0,0,0.7); display: none;
			}
			.popupBoxWrapper{
				width: 550px; margin: 50px auto; text-align: left;
			}
			.popupBoxContent{
				background-color: #FFF; padding: 15px;
			}
			@import url(http://fonts.googleapis.com/css?family=Droid+Serif);
h2{
text-align: center;
font-size: 24px;
}
hr{
margin-bottom: 30px;
}
div.container{
width: 90%;
height: auto;
margin:0px auto;
font-family: 'Droid Serif', serif;
position:relative;
border: 1px solid black;
}
div.main{
width: 90%;
float:left;
padding: 10px 55px 40px;
background-color: rgba(187, 255, 184, 0.65);
border: 15px solid white;
box-shadow: 0 0 10px;
border-radius: 2px;
font-size: 13px;
}
input[type=text],[type=password] {
width: 80%;
height: 34px;
padding-left: 5px;
margin-bottom: 20px;
margin-top: 8px;
box-shadow: 0 0 5px #00F5FF;
border: 2px solid #00F5FF;
color: #4f4f4f;
font-size: 16px;
}
label{
color: #464646;
text-shadow: 0 1px 0 #fff;
font-size: 14px;
font-weight: bold;
}
#register {
font-size: 20px;
margin-top: 15px;
background: linear-gradient(#22abe9 5%, #36caf0 100%);
border: 1px solid #0F799E;
padding: 7px 35px;
color: white;
text-shadow: 0px 1px 0px #13506D;
font-weight: bold;
border-radius: 2px;
cursor: pointer;
width: 100%;
}
#register:hover{
background: linear-gradient(#36caf0 5%, #22abe9 100%);
}

		</style>

	</head>

	<body>

		<!-- <div id="popupBoxThreePosition">
			<div class="popupBoxWrapper">
				<p style="text-align:right">
					<a href="javascript:void(0)" onclick="toggle_visibility('popupBoxThreePosition');">x</a>
				</p>
				<div class="popupBoxContent">
					<h3>Popup Box 3</h3>
					<p>You are currently viewing popup box 3.</p>
				</div>
				<p>Click <a href="javascript:void(0)" onclick="toggle_visibility('popupBoxThreePosition');">here</a> to close popup box three.</p>

			</div>
		</div> -->

		<!-- <div id="wrapper">

		<p>Click <a href="javascript:void(0)" onclick="toggle_visibility('popupBoxThreePosition');">here</a> to see popup box three.</p>

		</div><!-- wrapper end --> -->

		<div class="container">
			<p class="" data-toggle = "modal" data-target = "#modal-1">Activate the modal</p>
			<div class="modal" id = "modal-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button class = "close" type="button" name="button" data-dismiss = "modal">&times;</button>
								<div class="container">
						<div class="main">
						<form class="form" method="post" action="#">
						<h2>Create Registration Form Using jQuery</h2>
						<label>Name :</label><br>
						<input type="text" name="dname" id="name"><br>
						<label>Email :</label><br>
						<input type="text" name="demail" id="email">
						<label>Password :</label><br>
						<input type="password" name="password" id="password">
						<label>Confirm Password :</label><br>
						<input type="password" name="cpassword" id="cpassword">
						<input type="button" name="register" id="register" value="Register">
						</form>
						</div>
							</div>
						</div>
					</div>
			</div>
		</div>



	</body>

</html>
