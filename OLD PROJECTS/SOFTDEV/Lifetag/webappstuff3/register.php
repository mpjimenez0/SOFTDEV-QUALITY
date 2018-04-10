<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="main.css" />
<script type="text/javascript" src="built_rt.min.js"></script>
<script type="text/javascript" src="./jquery-validation/lib/jquery-1.11.1.js"></script>
<script type="text/javascript" src="./jquery-validation/dist/jquery.validate.js"></script>
<script type="text/javascript" src="./jquery-validation/dist/additional-methods.js"></script>
<script type="text/javascript">
		var photoid = '';
		var guardianid = '';
		
		function get_photoid(uid){
			
			var upload = Built.App('blt5ac96291778cf429').Upload(uid); // formData is instance of FormData
			upload.fetch()
			.then(function(upload){
				photoid = upload.getUid();
				console.log("get_photoid: " + photoid);
			}); 
		
		}
		
		function get_gid (){
			
			var guname = localStorage.getItem("userName");
			console.log(guname);
			
			var Query = Built.App('blt5ac96291778cf429').Class('guardian').Query;
			var query = Query();
			query     = query.where('username',guname);
			query     = query.only(['uid']);
			query.exec()
			.then(function(res){
				var arr = $.map(res[0].toJSON(), function(el){ return el; });
				guardianid = arr[0];
				console.log("guardian id: " + guardianid);
			});
		}
		
		function getPdata() {	
			
			var dpatient1 = document.getElementById('pLastName').value;
			var dpatient2 = document.getElementById('pBday').value;
			var dpatient3 = document.getElementById('pFirstName').value;
			var dpatient4 = document.getElementById('pConNum').value;
			var dpatient5 = document.getElementById('pComAdd').value;
			
			console.log("getPdata: " + photoid);
			save_pdata(dpatient1, dpatient3, dpatient2, dpatient5, dpatient4, photoid);
			
			document.getElementById("pLastName").value = '';
			document.getElementById("pBday").value = '';
			document.getElementById("pFirstName").value = '';
			document.getElementById("pConNum").value = '';
			document.getElementById("pComAdd").value = '';
			document.getElementById("file-photo").value = '';
			
			alert('Details Saved');
		}
		
		function save_pdata(lastname, firstname, birthdate, address, cnum, pid){
			console.log("save_pdata: " + pid);

			var patient = '';
			var patient_lname = 'patient_lname';
			var patient_fname = 'patient_fname';
			var patient_birthdate = 'patient_birthdate';
			var patient_add = 'patient_add';
			var patient_cnum = 'patient_cnum';
			var patient_pic = 'patient_pic';
			
			var obj = {};
			obj[patient_lname] = lastname;
			obj[patient_fname] = firstname;
			obj[patient_birthdate] = birthdate;
			obj[patient_add] = address;
			obj[patient_cnum] = cnum;
			obj[patient_pic] = pid;
			
			var Patient = Built.App('blt5ac96291778cf429').Class('patient').Object; 
			patient = Patient(obj);
			
			get_gid();
			patient = patient.setReference('guardian', guardianid);
			
			patient
				.save()
				.then(function(patient) {
				    // object created successfully
					
					console.log(patient.toJSON());
				}, function(err) {
				  // some error has occurred
				  // refer to the 'error' object for more details
				});
		}
		
		function save_gdata(g_lname, g_fname, g_username, g_password, g_add, g_birthdate, g_email, g_cnum){
			
			var guardian_lname = 'guardian_lname';
			var guardian_fname = 'guardian_fname';
			var username = 'username';
			var password = 'password';
			var guardian_add = 'guardian_add';
			var guardian_birthdate = 'guardian_birthdate';
			var guardian_email = 'guardian_email';
			var guardian_cnum = 'guardian_cnum';
				
			var obj = {};
			obj[guardian_lname] = g_lname;
			obj[guardian_fname] = g_fname;
			obj[username] = g_username;
			obj[password] = g_password;
			obj[guardian_add] = g_add;
			obj[guardian_birthdate] = g_birthdate;
			obj[guardian_email] = g_email;
			obj[guardian_cnum] = g_cnum;
				
			console.log(obj);
			
			var Guardian = Built.App('blt5ac96291778cf429').Class('guardian').Object; 
			console.log(guardian = Guardian(obj));

			console.log(guardian
				.save()
				.then(function(guardian) {
				  // object created successfully
				  console.log(guardian.toJSON());
				}, function(err) {
				  // some error has occurred
				  // refer to the 'error' object for more details
				}));
		}

		function checkEmail(email) {
		
			// email = $('form input[name="gMailAdd"'); //change form to id or containment selector
			var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
			return re.test(email);
		}
		
		function validate(){
			  var email = $("#gMailAdd").val();
			  if (checkEmail(email)) {
				  
				var dguardian1 = document.getElementById('gLastName').value;
				var dguardian2 = document.getElementById('gBday').value;
				var dguardian3 = document.getElementById('gFirstName').value;
				var dguardian4 = document.getElementById('gUserName').value;
				var dguardian5 = document.getElementById('gPW2').value;
				var dguardian6 = document.getElementById('gConNum').value;
				var dguardian7 = document.getElementById('gComAdd').value;
				var dguardian8 = document.getElementById('gMailAdd').value;
			
				save_gdata(dguardian1, dguardian3, dguardian4, dguardian5, dguardian7, dguardian2, dguardian8, dguardian6);
				//alert('Valid Email');
				
				document.getElementById("gLastName").value = '';
				document.getElementById("gBday").value = '';
				document.getElementById("gFirstName").value = '';
				document.getElementById("gUserName").value = '';
				document.getElementById("gPW").value = '';
				document.getElementById("gPW2").value = '';
				document.getElementById("gConNum").value = '';
				document.getElementById("gComAdd").value = '';
				document.getElementById("gMailAdd").value = '';
				alert('Details Saved');
			  }
			  else {
				alert('Please provide a valid email address');
				email.focus;
			  }
			return false;
		}

		function upload_photo(){
			var upload = Built.App('blt5ac96291778cf429').Upload()
			upload     = upload.setFile(document.getElementById('file-photo'));
			
			upload
			.save()
			.then(function(upload){
				
				console.log(upload.toJSON());
				get_photoid(upload.toJSON());
			});
		}
	</script>

	<title>Registration Page</title>
</head>
	<body>

	<div class="topBar">
		<img src="LifeTagLogo.png" height="100"/>
		<div>
			<input type="button" class="submit" id= "log-out" value="Log-out" onClick="log_out()" />
		</div>
	</div>
	
	<div class ="patient">
	<form class="patientForm">
			<br/>
			<input type="text" size="45" class="pBlock" id="pLastName" placeholder="Last Name">
			<input type="text" size="45" class="BdayBlock" id="pBday" placeholder="Birthday (MM/DD/YYYY)">
			<br/> 
			<br/>
			<input type="text" size="45" class="pBlock" id="pFirstName" placeholder="First Name">
			<input type="text" size="45" class="BdayBlock" id="pConNum" placeholder="Contact number">
			<br/> 
			<br/>
			<input type="text" size="45" class="AdBlock" id="pComAdd" placeholder="Complete Address">
			<br/>
			<br/>
			<label for="file">Patient's Photo: </label>
			<input type="file" id="file-photo" name="file-photo" class="fileUpload" />
			<input type="button" id="upload-photo" name="upload-photo" value="Upload Photo" onClick="upload_photo()"/>
			<!--<div class="spinner">
			  <div class="rect1"></div>
			  <div class="rect2"></div>
			  <div class="rect3"></div>
			  <div class="rect4"></div>
			  <div class="rect5"></div>
			</div>-->
			<br/>
			<input type="button" id="submit" value="Submit" onClick="getPdata()" />
		</form> 
	</div>
	
	<div class ="guardian">
	<form class="guardianForm">
			<br>
			<input type="text" size="45" class="pBlock" id="gLastName" placeholder="Last Name">
			<input type="text" size="45" class="BdayBlock" id="gBday" placeholder="Birthday (MM/DD/YY)">
			<br> 
			<br>
			<input type="text" size="45" class="pBlock" id="gFirstName" placeholder="First Name">
			<input type="text" size="45" class="BdayBlock" id="gConNum" placeholder="Contact number">
			<br> 
			<br>
			<input type="text" size="45" class="AdBlock" id="gUserName" placeholder="User Name">
			<br> 
			<br>
			<input type="password" size="45" class="AdBlock" id="gPW" placeholder="Enter Password">
			<br> 
			<br>
			<input type="password" size="45" class="AdBlock" id="gPW2" placeholder="Repeat Password">
			<br> 
			<br>
			<input type="text" size="45" class="AdBlock" id="gComAdd" placeholder="Complete Address">
			<br> 
			<br>
			<input type="text" size="45" class="AdBlock" name="gMailAdd" id="gMailAdd" placeholder="Enter Valid Email Address">
			<br>
			<input type="button" id="submit" value="Submit" onClick="validate()" />
		</form> 
	</div>
	
	
	</body>
	</html>
	
	
	