<!DOCTYPE HTML>
<!--Nicole Cheung-->
<html>
	<?php session_start(); ?>
	<head>
		<title>CompSci Student | Programmer | Hobbyist Artist</title>
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
		<link rel="stylesheet" href="main.css">
		<style>
			#mainBody {
				position: fixed;
				right: 0px;
				top: 0px;
				bottom: 0px;
				width: 65%;
				background: white;
				overflow: auto;
			}
			.triangle {
				position: relative;
				top: 10%;
				width: 100px;
				height: 100px;
				transform: rotate(45deg);
				background: white;
				left: -50px;
				z-index: -1;
			}
			.title {
				font-size: 30pt;
				margin-top: -15px;
				margin-left: 20px;
			}
			.pdf {
				color: #cf871d;
				margin-top: -5px;
				margin-left: 20px;
				font-size: 15pt;
			}
			.category {
				font-size: 22pt;
				margin-top: 0px;
				margin-left: 20px;
				padding-top: 10px;
				padding-left: 5px;
			}
			.content {
				font-size: 14pt;
				padding-left: 10px;
				padding-right: 20px;
				color: black;
			}
			.detail {
				color: #cf871d;
			}
			.sub {
				font-size: 18pt;
				color: #cf871d;
				padding-left: 5px;
			}
			td {
				width: 200px;
				color: black;
			}
			#language{
				padding-bottom:60px;
			}

		</style>
	</head>
	<body>
		<div>
			<?php include "navbar.php"; ?>
			<div id = "mainBody">
				<div class = "triangle"></div>
				<div class = "title">Resume</div>
				<div class = "pdf">[Click here to download resume]</div>
				<div class = "category" id = "education">Education
					<div class = "content">
						Cornell University, College of Engineering, Ithaca, NY <br>
						Bachelor of Science in Computer Science, May 2019 <br>
						Cumulative GPA: <span class = "detail">3.56</span> <br>
						Dean’s List: <span class = "detail">Fall 2015, Spring 2016</span> <br>
						Relevant Courses: <span class = "detail">Object Oriented Programming and Data Structure, Intermediate Design and Programming for the Web, Discrete Structure, Digital Logic and Computer Organization, Embedded Systems (In Progress), Data-Driven Web Application (In Progress)</span>
					</div>
				</div>
				<div class = "category" id = "skills">Skills
					<div class = "sub">Programming Languages
						<div class = "content">
							<table>
								<tr>
									<td>Java</td>
									<td>PHP</td>
									<td>SQL(PLSQL, MySQL)</td>
								</tr>
								<tr>
									<td>Javascript(JQuery)</td>
									<td>HTML</td>
									<td>CSS</td>
								</tr>
							</table>
						</div>
					</div>
					<div class = "sub">Other Skills
						<div class = "content">
							<table>
								<tr>
									<td>Microsoft Office</td>
									<td>Adobe Photoshop</td>
								</tr>
							</table></div>
					</div>
				</div>
				<div class = "category" id = "experience">Experience
					<div class = "sub">Relevant Experience
						<div class = "content">
							Consolidated edison, summer programming intern<br>
							July 2014 – January 2015<br>
							Job Description: <span class = "detail">Worked with systems operators and observed their workflow to create an interface and database for them to update, edit, and access the data with ease.</span><br>
							Reference: <span class = "detail">Leonid Bukhman, Systems Operation, Consolidated Edison. bukhmanL@coned.com</span>
						</div>
					</div>
					<div class = "sub">Other Experience
						<div class = "content">
							Brooklyn chinese-american association, summer Camp Counselor<br>
							July 2016 – August 2016<br>
							Job Description: <span class = "detail">Educated children on different subjects such as English, Math, Technology, Social Studies, and Chinese. Guided the assistant and volunteers in the classroom to create a better learning environment for the students. </span><br>
							Reference: <span class = "detail">Kimberly Woo, Site Supervisor, Brooklyn Chinese-American Association. 917-474-9133</span>
						</div>		
					</div>
				</div>
				<div class = "category" id = "language">Language
					<div class = "content">
						Fluent in English, Mandarin, and Cantonese. <br>
						Currently studying Japanese.
					</div>
				</div>
			</div>
			<?php include "contact_admin_form.php"; ?>
		</div>
		<script type = "text/javascript">
		</script>
	</body>
</html>