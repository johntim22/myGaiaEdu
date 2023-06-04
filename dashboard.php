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
           <a href="#" class="brand-logo">myGAIA Edu</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="courses.php">Μαθήματα</a></li>
                <li><a href="exams.php">Εξετάσεις</a></li>
                <li><a href="grades.php">Βαθμοί</a></li>
                <li><a href="books.php">Βιβλία</a></li>
                <li><a href="validatelogout.php">Αποσύνδεση</a></li>
            </ul>
        </div>
    </nav>
    <!---<div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        Προσωρινό πρόβλημα εταιρικής συνδρομής Microsoft Office 365. <a>Μάθετε περισσότερα</a>
    </div>--->
	<!---Dashboard columns--->
    <div class="container">
        <br>
        <h4 id="greeting">🌞 Καλημέρα, Ιωάννης-Μάριος Τιμοθεάτος <?php echo($_SESSION["usname"]) ?></h4>
        <br><br>
		<div class="row">
		<div class="col s6">
		<h5>📆 Σημαντικά επόμενα γεγονότα</h5>
		<ul>
		<li style="color: red">ΧΧ/08/2023 Official GMAT Exam</li>
		</ul>
			</div>
			<div class="col s6">
		<h5>📢 Ανακοινώσεις<span class="new badge">1</span></h5>
                <ul>
				<li>Την Δευτέρα 5/6/2023 όλες οι υπηρεσίες της Gaia Education θα παραμείνουν κλειστέςς. Δεν θα πραγματοποιηθούν μαθήματα.</li>
                </ul>
			</div>
			</div>
			<br>
        <div class="row">
			 <div class="col s3">
                <h5>📜 Το πρόγραμμά μου</h5>
                <ul>
					<li><a href="derf.html" target="_blank">GMAT (Graduate Management Admission Test)</a></li>
                </ul>
            </div>
            <div class="col s3">
                <h5>📚 Τα μαθήματά μου</h5>
                <ul>
					<li>Επικοινωνία</li>
                    <li>GMAT Preparation Course</li>
					<li>GPC-PS1000 Introduction to Psychology</li>
                </ul>
            </div>
            <div class="col s3">
                <h5>📖 Τα βιβλία μου</h5>
                <ul>
					<li>Η Τέχνη της Επικοινωνίας</li>
                  <li><a href="https://www.public.gr/product/books/ksenoglossa-frontistiriaka/aggliki-glossa/gmat-official-guide-2022-bundle-books-online-question-bank/1589230" target="_blank">GMAT Official Bundle 2022</a></li>
					<li>Psychology: Perspectives and Connections</li>
                </ul>
            </div>
            <div class="col s3">
                <h5>💽 Online υλικό </h5>
		<ul>
		<li><a href="https://login.prod.efficientlearning.com/wel/login">Wiley e-Learning for GMAT Preparation</a></li>
		</ul>
            </div>
        </div>
    </div>
	<!--Program Planner-->
	<div class="container">
	<h5>🕘 Ωρολόγιο πρόγραμμα</h5>
		<h6 style="color: red">Attention: Always check this section as weekly schedule may change!</h6>
		<br>
		<table>
		<thead>
			<tr>
				<th></th>
				<th>Δευτέρα</th>
				<th>Τρίτη</th>
				<th>Τετάρτη</th>
				<th>Πέμπτη</th>
				<th>Παρασκευή</th>
				<th>Σάββατο</th>
			</tr>
			<tr>
				<td>09:00-09:50</td>
				<td></td>
				<td>GMAT Prepataion</td>
				<td></td>
				<td>GMAT Prepatation</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>10:00-10:50</td>
					<td>Φυσική Αγωγή</td>
				<td>GMAT Prepataion</td>
				<td>Φυσική Αγωγή</td>
				<td>GMAT Prepatation</td>
				<td>Φυσική Αγωγή</td>
				<td>GMAT Preparation</td>
			</tr>
			<tr>
				<td>11:00-11:50</td>
					<td>Φυσική Αγωγή</td>
				<td>GMAT Prepataion</td>
				<td>Φυσική Αγωγή</td>
				<td>GMAT Prepatation</td>
				<td>Φυσική Αγωγή</td>
				<td>GMAT Preparation</td>
			</tr>
			<tr>
				<td>12:00-12:50</td>
				<td>Φυσική Αγωγή</td>
				<td></td>
				<td>Φυσική Αγωγή</td>
				<td></td>
				<td>Φυσική Αγωγή</td>
			</tr>
			<tr>
				<td>13:00-13:50</td>
				<td></td>
				<td>Intro to Psychology</td>
				<td></td>
				<td>Intro to Psychology</td>
			</tr>
			<tr>
				<td>14:00-14:50</td>
				<td>Επικοινωνία</td>
				<td>Intro to Psychology</td>
				<td></td>
				<td>Intro to Psychology</td>
				<td>Επικοινωνία</td>
			</tr>
			<tr>
				<td>15:00-15:50</td>
			</tr>
			<tr>
				<td>16:00-16:50</td>
			</tr>
			<tr>
				<td>17:00-17:50</td>
			</tr>
			</thead>
		</table>
	</div>
	<!--Online Material--->
	<br>
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
        var greeting1 = document.getElementById("greeting");
        if (hour > 11 || hour < 6) {
            greeting1.innerHTML = "🌆 Καλησπέρα, Ιωάννης-Μάριος Τιμοθεάτος <?php echo($_SESSION["usname"])?> " ;
        }
		if (hour > 18 || hour < 6) {
			document.getElementById("body").style.color="white";
			document.getElementById("body").style["background-color"]="#1c2833";
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
</body>

</html>