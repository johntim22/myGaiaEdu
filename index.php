<html>
<?php 
session_start();
if (!empty($_SESSION["usname"])){
	header("Location: http://localhost/lms.mygaiaedu.gr/dashboard.php");
}
else {
	
}
?>
<head>
    <title>myGAIA Edu LMS</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            
        }
    </style>
</head>

<body id="body">
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">myGAIA Edu</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!--<li><a href="sass.html">Μαθήματα</a></li>
            <li><a href="badges.html">Εξετάσεις</a></li>
            <li><a href="badges.html">Βαθμοί</a></li>
            <li><a href="badges.html">Βιβλία</a></li>
            <li><a href="collapsible.html">Αιτήματα</a></li>-->
            </ul>
        </div>
    </nav>
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col s6">
                <h5>Συνδεθείτε στο myGAIA Edu</h5>
                <br>
                <form action="validatelogin.php" method="POST">
				<label>Κωδικός μαθητή:</label>
                <input type="text" placeholder="012345678" id="usname" name="usname">
                <label>Κωδικός πρόσβασης:</label>
                <input type="password" placeholder="••••••••" id="uspass" name="uspass">
                <label>Αριθμός επιβεβαίωσης</label>
                <input type="number" placeholder="123 456">
                <br><br>
                <button type="submit" class="waves-effect waves-light btn">Σύνδεση</button>
				</form>
				
            </div>
            <div class="col s6">
                <img class="center" src="https://impschool.gr/deltio-site/wp-content/uploads/2021/03/education.jpg" height="400px">
            </div>
        </div>
        <!--<hr>
        <h5>Θερινό Πρόγραμμα 2023</h5>
        <p>Οι εγγραφές για το Θερινό Πρόγραμμα έχουν ξεκινήσει. Εάν είστε νέος μαθητής κάντε ηλεκτρονική αίτηση εγγραφής με ένα κλικ <a>εδώ!</a> Υφιστάμενοι μαθητές συνδεθείτε και πραγματοποιήστε την εγγραφή σας.</p>-->
    </div>
	<div class="container">
	
	</div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        function proceed(){
        var ussname=document.getElementById("usname").value;
        var usspass=document.getElementById("uspass").value;
        if (ussname=="03004894" && usspass=="gaiaedu123"){
            window.location.replace("http://localhost/lms.mygaiaedu.gr/dashboard.html");
        }
        else{
            window.alert("Κάποιο από τα στοιχεία που συμπληρώσατε είναι λανθασμένο. Παρακαλούμε δοκιμάστε εκ νέου.")
        }
    }

    </script>
	<script>
		const d = new Date();
        let hour = d.getHours();
		if (hour > 18 || hour < 6) {
			document.getElementById("body").style.color="white";
			document.getElementById("body").style["background-color"]="#1c2833";
		}
	</script>
	<!--Turn on maintenance mode-->
	<!---<script>
	window.location.replace("maintenance.html");
	</script>--->
</body>

</html>