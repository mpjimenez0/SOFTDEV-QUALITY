<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="main.css" />
<script src="./jquery-validation/lib/jquery.js"></script>
<script type="text/javascript" src="built_rt.min.js"></script>
<script src="./jquery-validation/dist/jquery.validate.js"></script>
<script type="text/javascript" src="./jquery-validation/dist/additional-methods.js"></script>
<script type="text/javascript">

	function get_login() {
		var uname = document.getElementById('uname').value;
		var pw = document.getElementById('pw').value;
		
		check_login(uname, pw);
	}
	
	function deviceid() {
		var id = document.getElementById('regBlock').value;
		
		register(id);
	}
	
	function CreateSession(uname, guardID) {
	
			// Check browser support
		if (typeof(Storage) != "undefined") {
			// Store
			localStorage.setItem("userName", uname);
			localStorage.setItem("guardianID", guardID);
			
		} else {
			alert("Sorry, your browser does not support Web Storage...");
		}
	}	
	function check_login(gUname, gpw){
		console.log(gUname);
		console.log(gpw);
			
			var app    = Built.App('blt5ac96291778cf429');
			var query  = app.Class('guardian').Query();
			var query1 = query.where('username', gUname);
			var query2 = query.where('password', gpw);

			var queryArray = [query1, query2];
			var andQuery   = query.and(queryArray);

			andQuery.only(['uid','username', 'password'])
			.exec()
			.then(function(objects) {
					
				try{	
					var arr = $.map(objects[0].toJSON(), function(el){ return el; });
					
					//uid, password, and username
					console.log(arr[0]);
					console.log(arr[1]);
					console.log(arr[2]);
					
						if(arr[0] == gUname){
							CreateSession(arr[0], arr[2]);
						}
						else{
							CreateSession(arr[2], arr[0]);
						}
						
						window.location.href = "http://localhost/webappstuff3/tempMain.php";
				}
				catch(err){
					alert("invalid username/password");
					document.getElementById("uname").value = '';
					document.getElementById("pw").value = '';
				}
			});
		
			
	}
	
	function register(id){
	
		var app    = Built.App('blt5ac96291778cf429');
		var query  = app.Class('device').Query();
		var query1 = query.where('device_id', id);

		query1.only(['distributor', 'dist_branch', 'date_manufactured', 'configfile', 'patient_ref'])
		.exec()
		.then(function(objects) {
		
			try{
			var arr = $.map(objects[0].toJSON(), function(el){ return el; })
				
			//uid, password, and username
			console.log(arr[0]);
			console.log(arr[1]);
			console.log(arr[2]);
			console.log(arr[3]);
			console.log(arr[4]);
			
			window.location.href = "http://localhost/webappstuff3/register.php";
			}
			catch(err){
				alert("invalid serial number");
				document.getElementById("regBlock").value = '';
				
			}
			
		});
	}
</script>

<title>LifeTag</title>
</head>
	<body>

	<div class="topBar">
		<img src="LifeTagLogo.png" height="100"/>
	</div>
	
	<div class="welcome">
		<p> <h1>Welcome to LifeTag.</h1><br>
		<strong>Serenity and Safety at the palm of your hands.</strong></p>	
	</div>
	
	<div class="register">
		<form class="RegForm" id="regform">
			<input type="text" size="45" name="regBlock" id="regBlock" placeholder="Enter LifeTag Serial Number" required>
			<br>
			<br>
			<input type="button" name="register" class="submit" id="register" value="Register" onClick="deviceid();" />
			<br>
		</form> 
			
	</div>
	
	<div class="log-in">
		<form class="LogInForm" id="loginform">
			<input type="text" size="45" class="username" id="uname" placeholder="User Name" required>
			<br>
			<br>
			<input type="password" size="45" class="username" id ="pw" placeholder="Password" required>
			<br>
			<br>
			<input type="button" class="submit" id = "submit" value="Submit" onClick="get_login()" />
			<br>
		</form> 
			
	</div>
	

		
	</body>
	</html>
	
	
	