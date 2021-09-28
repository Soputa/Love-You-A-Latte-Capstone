
 <!DOCTYPE html>
 <html>
   <head>
	   
	 <title>Love You A Latte (CapStone Team Yellow)</title>
	 
	 
	 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	 <script src="../_js/jquery.min.js"></script>
	 <script src="../_js/jquery-ui.min.js"></script>
     <script src="external/jquery/jquery.js"></script>
	 <script src ="js/jquery-ui.min.js"></script>
	 <link href="css/headerFont.css" rel="stylesheet">
	 <script>
    /* $(document).ready(function(){
		 customerName = prompt("What is your name? ")
		 customerGreet = alert("Hello "+customerName+" !")
     })

	*/</script>

    </head>
	<body>
		
	<div id="cen">
		<header>
			<h1>Love You A Latte </h1>
		</header>

		<h2>Please leave your First and last name , as well as your contact information</h2>
			<form  action="logtime.php" method="post" enctype="multipart/form-data">
				<label for="fname">First name</label>
				<input type="text" id="fname" name="fname"><br><br>
				<label for="lname">Last name</label>
				<input type="text" id="lname" name="lname"><br><br>
				<label for="phone">Phone number</label><br>
				<input type="tel" id="phone" name="phone" placeholder="555-555-555" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" placeholder="youremail@domainame.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
				<input type="submit">
				<button type="button"
				onclick="document.getElementById('time').innerHTML = Date()">
				Click here.</button>
				
				<p id="time"></p>				 
			</form>
			
			<p id="time"></p>
			
        Hello <?php echo$_POST["name"]; ?>

	<footer>
		<h4>Team Yellow 2021</h4>
	</footer>
	</div>	
	</body>
<script>
	alert("Hello World")
</script>
</html>