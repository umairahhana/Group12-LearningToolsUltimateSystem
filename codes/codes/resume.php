<html>

<head>
	<title>Resume generator</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel = "stylesheet" href = "test.css">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php include 'studentheader.php' ?>
<div class="container-fluid" style="margin-top:80px">
	<div class="row">

		<div class="col-sm-12 text-center" id="right">

			<div id="page" class="droid">

				<div class="row" style="margin-bottom:10px;">
				<div class="col-sm-12">
					<div style="display:inline-block;" id="image_box">
						<img src="images/mmu.jpg" alt= "mmu" height="80" width="80">
					</div>
					<div id="info" style="display:inline-block;">
						<h2 id="contentName">Student Name</h2>
						<h5 id="contentRoll">Student ID : 1171XXXXXX</h5>
						<h5 id="contentCourse">Bachelor in Computer Science</h5>
						<h5 id="contentBranch">Software Engineering</h5>
						<h5 id="contentCollege">Multimedia University</h5>
					</div>
					<div id="contact" style="float:right; display:inline-block;">
						+601XXX XXXX<br>
						abc@gmail.com<br>
						abc@student.mmu.edu.my<br>
						<span class="light" id="contactLink1">www.linkedin.com/mmu<br></span>
					</div>
				</div>
				</div>

			
				<div class="section" id="sectionEducation">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>EDUCATION</strong></h4>
						<hr class="hr-below">
					</div>
					<ul class="nobullet">
					<li>
						<table class="table customBordered" id="educationTable">
							<tr>
								<td class="header"><strong>Year</strong></td>
								<td class="header"><strong>Degree / Certificate</strong></td>
								<td class="header"><strong>Institute /College</strong></td>
								<td class="header"><strong>CGPA/Percentage</strong></td>
							</tr>
							<tr>
								<td>2019 - Present</td>
								<td>Bachelor</td>
								<td>MMU</td>
								<td>4.00 (Current)</td>
							</tr>
							<tr>
								<td>2018</td>
								<td>Bachelor</td>
								<td>MMU</td>
								<td>4.0</td>
							</tr>
							<tr>
								<td>2017</td>
								<td>Bachelor</td>
								<td>MMU</td>
								<td>4.0%</td>
							</tr>
						</table>
					</li>
					</ul>
				</div>


				<div class="section" id="sectionExperience">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>EXPERIENCE</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<div>	
						<div class="title">ABC Tutor at 'MMU'</div>
						<div class="time right">May 2018 - July 2019</div>
						</div>
						<div>
						<div class="link right">www.mmu.edu.my</div>
						<div class="text">Describe your Responsibility</div>
						</div>
					</li>
					<li>
						<div>	
						<div class="title">ABC Tutor at 'MMU'</div>
						<div class="time right">Dec 2019</div>
						</div>
						<div>
						<div class="link right">www.mmu.edu.my</div>
						<div class="text">Describe your Responsibility.</div>
						</div>
					</li>
					</ul>
				</div>


				<div class="section" id="sectionProjects">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>PROJECTS</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<div>		
						<div class="title">Project Title</div>
						<div class="time right">Ongoing</div>
						</div>
						<div>
						<div class="text">Solar system in Augmented Reality(AR).</div>
						</div>
					</li>
					
					
					<li>
						<div>		
						<div class="title">Project Title</div>
						<div class="time right">Feb 2019</div>
						</div>
						<div>
						<div class="link right">github.com/solarsystem2019/mmu</div>
						</div>
						<div>
						<div class="text">Solar system in Augmented Reality(AR).</div>
						</div>
					</li>
					<li>
						<div>		
						<div class="title">Project Title</div>
						<div class="time right">Feb 2019</div>
						</div>
						<div>
						<div class="link right">github.com/solarsystem2019/mmu</div>
						</div>
						<div>
						<div class="text">Solar system in Augmented Reality(AR).</div>
						</div>
					</li>
					
					</ul>
				</div>

			
				<div class="section" id="sectionSkills">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>TECHNICAL SKILLS</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<strong><span class="skillCategory">Programming languages</span> :</strong>
						C++, Python, Java *
					</li>
					<li>
						<strong><span class="skillCategory">Web App</span> :</strong>
						HTML, CSS, Javascript
					</li>
					<li>
						<strong><span class="skillCategory">Database </span> :</strong>
						mySQL
					</li>
			
					<li>
						<strong><span class="skillCategory">Operating System</span> :</strong>
						Windows, Linux
					</li>
					</ul>
				</div>


				<div class="section" id="sectionResponsibility">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>Positions of Responsibility</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
						<li>MMU Head, ABC 2019 (the annual ABX of Multimedia University)</li>
						<li>SRC representative, MMU CYBERJAYA, 2019</li>
					</ul>
				</div>


				<div class="section" id="sectionAchievements">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>ACHIEVEMENTS</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<span class="title">MMU Hackaton Contest 2019 : </span>
						<span class="text">Secured 1st position in the contest.</span>
					</li>
					<li>
						<span class="title">MMU Hackaton Contest 2019  : </span>
						<span class="text">Secured 1st position in the contest..</span>
					</li>
					<li>
						<span class="title">MMU Hackaton Contest 2019 : </span>
						<span class="text">Secured 1st position in the contest.</span>
					</li>
					<li>
						<span class="title">MMU Hackaton Contest 2019  : </span>
						<span class="text">Secured 1st position in the contest.:</span>
						<ul
						</ul>
					</li>
					</ul>
				</div>

			
				<div class="section" id="sectionCourses">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>CORE UNITS</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<div class="row">
						<div class="col-sm-6">
							<li>Computer Network</li>
							<li>Computer Security</li>
							<li>Computational Method</li>
						</div>
						<div class="col-sm-6">
							<li>Programming Fundamentals</li>
							<li>Software Testing</li>

						</div>
					</div>
					</ul>
				</div>
				<div class="section" id="sectionCurricular">
					<div class="section-title ruled rule-above">
						<hr class="hr-above">
						<h4><strong>EXTRACURRICULARS</strong></h4>
						<hr class="hr-below">
					</div>
					<ul>
					<li>
						<span class="title">Oracle workshop : </span>
						<span class="text">Attended a 7-days workshop on oracle development program.</span>
					</li>
					<li>
						<span class="title">Oracle workshop : </span>
						<span class="text">Attended a 7-days workshop on oracle development program.</span>
					</li>
					</ul>
				</div>

			</div>
			
		</div>

	</div>
	<button class="btn btn-block btn-success" onclick="window.print()">PRINT AS PDF</button>
</div>


<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<?php include 'footer.php' ?>
</body>

</html>