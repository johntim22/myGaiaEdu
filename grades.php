<html>
<?php 
session_start();
if (!empty($_SESSION["usname"])){
	//nothing
}
else {
	header("Location: http://localhost/lms.mygaiaedu.gr/index.php");
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
    <style>
        /* The alert message box */
        .alert {
            padding: 20px;
            background-color: orange;
            /* Red */
            color: white;
            /*margin-bottom: 15px;*/
        }

        /* The close button */
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        /* When moving the mouse over the close button */
        .closebtn:hover {
            color: black;
        }
    </style>
</head>

<body id="body">
    <nav>
        <div class="nav-wrapper">
          <a href="dashboard.php" class="brand-logo">myGAIA Edu</a>
           <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="courses.php">Μαθήματα</a></li>
                <li><a href="exams.php">Εξετάσεις</a></li>
                <li><a href="grades.php">Βαθμοί</a></li>
                <li><a href="books.php">Βιβλία</a></li>
                <li><a href="validatelogout.php">Αποσύνδεση</a></li>
            </ul>
        </div>
    </nav>
   <!--- <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        Προσωρινό πρόβλημα εταιρικής συνδρομής Microsoft Office 365. <a>Μάθετε περισσότερα</a>
    </div>--->
    <div class="container">
        <br>
   <h5>✅ Οι βαθμοί μου</h5>
		<div id="transcript">
		<br>
		<h6 id="studentdata">Ιωάννης-Μάριος Τιμοθεάτος (03004894)<br>Πρόγραμμα: GMAT</h6><br>
		<fieldset>
		<legend>Θερινό Πρόγραμμα 2023</legend>
	<table class="striped">
		<thead>
		<tr>
			<th>Κωδικός Μαθήματος</th>
			<th>Τίτλος Μαθήματος</th>
			<th>Βαθμολογία</th>
		</tr>
			</thead>
		<tbody>
		<tr>
			<td>N/A</td>
			<td>Επικοινωνία</td>
			<td>WIP</td>
		</tr>
		<tr>
			<td>GMAT1000</td>
			<td>GMAT Preparation</td>
			<td>WIP</td>
		</tr>
		<tr>
			<td>GPC-PS1000</td>
			<td>Introduction to Psychology</td>
			<td>WIP</td>
		</tr>
		</tbody>
	
	</table>
		</fieldset>
		</div><br>
		 <a class="waves-effect waves-teal btn-flat" onClick="generatepdf();" id="link-fornmd">Εξαγωγή σε PDF</a>
		<br><br>
    </div>
    <!--footer-->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Gaia Education</h5>
                    <p class="grey-text text-lighten-4">Μέλος του Ομίλου SEVEN</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Σύνδεσμοι Ομίλου SEVEN</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="https://www.sevenchc.com/" target="_blank">Όμιλος
                                SEVEN</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://aquapower.gr/" target="_blank">AQUA
                                POWER</a></li>
                        <li><a class="grey-text text-lighten-3" href="http://www.anek.gr" target="_blank">ANEK Lines</a>
                        </li>
                        <li><a class="grey-text text-lighten-3" href="http://localhost/mygaiaedu.gr"
                                target="_blank">Gaia Education</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2023 Όμιλος SEVEN
            </div>
        </div>
    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const d = new Date();
        let hour = d.getHours();
		if (hour > 18 || hour < 6) {
			document.getElementById("body").style.color="white";
			document.getElementById("body").style["background-color"]="#1c2833";
			document.getElementById("link-fornmd").style.color="#ffffff"
		}

    </script>
    <script>
        function eudoxusopen(){
            window.open('http://service.eudoxus.gr','winname','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=1000,height=1000');
        }
        function dereeopen(){
            window.open('https://www.acg.edu/current-students/textbooks/','winname','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=1000,height=1000');
        }
    </script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
	function generatepdf(){
		if (hour > 18 || hour < 6){
		var td = document.getElementsByTagName("td");
		var th = document.getElementsByTagName("th");
		for (var i = 0; i < td.length; i++) {
    				td[i].style.color = 'black';
				}
		for (var i = 0; i < th.length; i++) {
    				th[i].style.color = 'black';
				}
		document.getElementById("studentdata").style.color="black";
		}
		var transpdf = document.getElementById("transcript");
		var opt = {
			filename: 'transcript_gaiaedu.pdf',
		}
		html2pdf().set(opt).from(transpdf).save();
		setTimeout(()=>{returntext();},5000);
	}
		function returntext(){
			if (hour > 18 || hour < 6){
			document.getElementById("studentdata").style.color="white";
			var td = document.getElementsByTagName("td");
			var th = document.getElementsByTagName("th");
			for (var i = 0; i < td.length; i++) {
    				td[i].style.color = 'white';
				}
		for (var i = 0; i < th.length; i++) {
    				th[i].style.color = 'white';
				}
		} }
		
	</script>

</body>

</html>