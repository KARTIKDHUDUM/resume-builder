<!DOCTYPE html>
<html lang=”en”>
<head>
	<title>Resume Builder</title>
	<link rel="stylesheet" type="text/css" href="resumeform.css" media="all">
</head>
<body>
	<div id="form_container">
		<form id="resumeform" class="resume" action="build.php" method="post">
			<div id="formdescription">
				<h1><br>Esteemed Technology, Ahmedabad<br><br></h1>
				<h2><br>Training & Placement Cell</h2>
				<hr>
			</div>
			<ol>
			<div class="center">

				<li id="fullname">
				<h3>Name</h3>


							<label>Full Name*</label>
							<input type="text" name="full_name" placeholder="First+Last" size="50" maxlength="60" value=""/><br>
							<br>
							<label>Resume Title</label>
							<input type="text" name="resume_title" placeholder="Resume Title" size="50" maxlength="50" value=""/><br>


				</li><br>
				<li class="contactdetails">
				<h3>Contact Details</h3>
					<label>Mobile No *:</label>

						<input type="number" name="mobile" placeholder="10 digit Number" size="50" maxlength="10" value=""/><br>
						<p>Enter your 10 digit mobile number(excluding +91)</p>
					<br>
					<label>Email ID*:</label>
					<span>
						<input type="email" name="email" placeholder="e.g.esteemed@gmail.com" size="50" maxlength="150" value=""/><br>
						<p>Enter your email id</p>
					</span><br>

					<label>Permanent Address*:</label>
					<span>
						<textarea rows="4" cols="5" name="address"></textarea><br>
						<p>Enter your address for future communication</p>
					</span>
				</li><br>
			</div>
				<li class="careerobjective">
					<h3>Profile</h3><br>
						<textarea name="profile_info" maxlength="5000" value=""></textarea>
						<p>Give your career objective in few words</p>
				</li><br>
				<li id="markscorner">
					<h3>Education Qualification</h3>

					<div class="data">

							<label>Master Dergee*</label>
							<input type="text" name="master" size="30" maxlength="250" value=""/><br>
							<p>Enter the Degree name in which you are studying</p><br>

							<label>College Name*</label>
							<input type="text" name="master_college" size="30" maxlength="250" value=""/><br>
							<p>Enter the university to which your college is affiliated</p>	<br>

							<label>Year of Completion</label>
							<input type="number" name="master_completion" size="30" maxlength="4" value=""/><br>
							<p>Expected Year of Completion</p><hr>

					</div>

					<div class="data">

							<label>Bechlor Dergee*</label>
							<input type="text" name="bechlor" size="30" maxlength="250" value=""/><br>
							<p>Enter the Degree name in which you are studying</p><br>

							<label>College Name*</label>
							<input type="text" name="bachlor_college" size="30" maxlength="250" value=""/><br>
							<p>Enter the university to which your college is affiliated</p>	<br>

							<label>Year of Completion</label>
							<input type="number" name="bechlor_complrtion" size="30" maxlength="4" value=""/><br>
							<p>Expected Year of Completion</p><hr>

					</div>

					<div class="data">
							<label>Class 12*</label>
							<input type="text" name="class_12" size="30" maxlength="250" value=""/><br>
							<p>Enter the School name in which you studied Class 12</p><br>

							<label>Board Name*</label>
							<input type="text" name="board_name" size="30" maxlength="250" value=""/><br>
							<p>Enter the university/board to which your affiliated</p>


							<label>Year of Completion</label>
							<input type="number" name="completion_12" size="30" maxlength="4" value=""/><br>
							<p>Year of Completion</p>
						</span><br><hr>
					</div>

					<div class="data">
							<label>Class 10*</label>
							<input type="text" name="class_10" size="30" maxlength="250" value=""/>
							<p>Enter the School name in which you studied Class 10</p><br>

							<label>University/Board Name*</label>
							<input type="text" name="schoolboard" size="30" maxlength="250" value=""/>
							<p>Enter the university/board to which your Class 10 is affiliated</p>


							<label>Year of Completion</label>
							<input type="number" name="completion_10" size="30" maxlength="4" value=""/><br>
							<p>Year of Completion</p>
						</span>
					</div>
				</li><br>
				<li id="technicalexperience">
				<h3>Technical Experience</h3>
					<h5>Projects:</h5>
					<div class="projects">
						<label>Project Title</label><br>
						<input type="text" name="project1" maxlength="250" value=""/><br>
						<label>Project Description</label>
						<textarea name="project1abstract" maxlength="10000" value=""></textarea><br>

						<label>Project Title</label><br>
						<input type="text" name="project2" maxlength="250" value=""/><br>
						<label>Project Description</label>
						<textarea name="project2abstract" maxlength="10000" value=""></textarea><br>

						<label>Project Title</label><br>
						<input type="text" name="project3" maxlength="250" value=""/><br>
						<label>Project Description</label><br>
						<textarea name="project3abstract" maxlength="10000" value=""></textarea><br>

						<label>Project Title</label><br>
						<input type="text" name="project4" maxlength="250" value=""/><br>
						<label>Project Description</label>
						<textarea name="project4abstract" maxlength="10000" value=""></textarea><br>

					</div>
				</li>
				<li id="technicalskills">
				<h3>Technical Skills</h3>
				<h5>Technical Skills</h5>
				<div class="technicalskills">
					<label>Programming languages</label>
					<input type="text" name="programming_language" maxlength="1500" value=""/><br>
					<p>Programming Languages in which you are proficient</p>
					<label>Web Technologies</label>
					<input type="text" name="web" maxlength="1500" value=""/><br>
					<p>Web Technologies in which you are proficient</p>
					<label>Tools & Frameworks</label>
					<input type="text" name="framework" maxlength="1500" value=""/><br>
					<p>Tools & Frameworks in which you are proficient</p>
					<label>Operating Systems</label>
					<input type="text" name="os" maxlength="1500" value=""/><br>
					<p>Operating Systems in which you are proficient</p>
				</div>
				</li>
				<li id="extracurricular">
				<h3>Extra Curricular Actiities</h3>
					<h5>Extra Curricular Actiities</h5>

					<div class="projects">
						<textarea name="extra_activity" maxlength="5000" value=""></textarea>
					</div>

				</li><br>
				<li id="personaldetails">
				<h3>Personal Details</h3>
					<h5>Personal Details</h5>
					<div class="data">
					<label>Father's Name</label>
						<input type="text" name="fathername" size="30" maxlength="50" value=""/><br>
						<p>Enter Your Father's Name</p><br>
					</div>
					<label>Gender</label>
					<div class="gender">
						<input type="radio" name="gender" value="Male"/>
						<label>Male</label><br>
						<input type="radio" name="gender" value="Female"/>
						<label>Female</label><br><br>
					</div>
					<div class="data">
						<label>Date Of Birth&nbsp;&nbsp;&nbsp;</label>
						<input type="text" name="dob" size="30" maxlength="50" value=""/><br><br>

					</div>
					<div class="data">
						<label>Nationality</label>
						<input type="text" name="nationality" size="30" maxlength="50" value=""/><br>
						<p>citizen of?</p>

						<label>Marital Status</label>
						<input type="text" name="maritalstatus" size="30" maxlength="50" value=""/><br>
						<p>Single/Married/...</p>

						<label>Languages Known</label>
						<input type="text" name="languagesknown" size="30" maxlength="1000" value=""/><br>
						<p>languages in which you are proficient</p>
					</div>
				</li><br>
				<li id="declaration">
				<h3>Declaration</h3>
					<span>
					<input type="checkbox" name="declaration" value="I hereby declare that the information furnished above is true to the best of my knowledge and belief"/>
					<label>I hereby declare that the information furnished above is true to the best of my knowledge and belief.</label>
					</span>
				</li>


					<input id="saveForm" class="buttons" type="submit" name="submit" value="Submit" />
				<hr>
			</ol>


			<div class="footer">
			Designed & Developed by <a href="http://esteemedtechnologies.com/" target="_blank">Esteemed Technologies</a>
			</div>
		</form>
	</div>

</body>
</html>
