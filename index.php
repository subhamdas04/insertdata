<!DOCTYPE html>
<html>
<head>
	<title>Data Insert</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<style type="text/css">
		.main{
			display: flex;
			flex-direction: column;
			height: auto;
			min-height: 20px;
			width: 600px;
			border: 2px solid black;
			border-radius: 10px;
			align-items: center;
			justify-content: center;
		}
		#frm{
			width: 100%;
		}
		.textbox{
			width: 80%;
			height: 30px;
			margin-top: 20px;
			border-radius: 10px;
			border: 1px solid black;
			font-size: 20px;
			padding-left: 7px;
			outline: none;
		}
		.btn{
			width: 60%;
			height: 30px;
			border: 0;
			outline: none;
			background: red;
			color: white;
			border-radius: 10px;
			cursor: pointer;
			margin-top: 20px;
			margin-bottom: 20px;
			font-size: 17px;
		}
		.btn:active{
			background: black;
		}
	</style>
</head>
<body>
	<center>
		<div class="main">
			<form id="frm" onsubmit="return submitFun()">
				<h2>Sign up</h2>
				<input type="text" name="fname" class="textbox" autocomplete="off" placeholder="Enter your Name" required>
				<input type="text" name="contact" class="textbox"
				autocomplete="off" placeholder="Enter your Phone Number" required>
				<input type="email" name="email" class="textbox"
				autocomplete="off" placeholder="Enter your Email" required>
				<input type="password" name="password" class="textbox" autocomplete="off" placeholder="Enter your password" required>
				<input type="submit" name="submit" class="btn" value="Submit">
			</form>
		</div>
	</center>

	<script type="text/javascript">
		function submitFun(){
			var a = document.getElementsByName('fname')[0].value;
			var b = document.getElementsByName('contact')[0].value;
			var c = document.getElementsByName('email')[0].value;
			var d = document.getElementsByName('password')[0].value;

		$.ajax({
			type: "GET",
			url: "insert.php",
			data:{
				p: a,
				q: b,
				r: c,
				s: d
			},
			success: function(data){
				alert(data);
				location.reload();
			}
		});
		return false;	
		}
		
	</script>


</body>
</html>