function log_out(uname) {
			localStorage.removeItem("userName");
			window.location.href = "http://localhost/webappstuff3/log-in.php";
			//alert(localStorage.getItem("userName"));
		}