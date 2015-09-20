
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="Jacinto's Resume Website" content="">
		<meta name="Jacinto Chen" content="Jacinto Chen">

		<title>Jacinto Chen Portfolio</title>

		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

		<!-- Custom styles for this template -->
		<style type="text/css">
			body {
				padding-top: 50px;
			}

			.navbar-brand {
				font-size: 200%;
			}

			.bg-img {
				background-image: url('images/front.jpg');
				background-size: cover;
				background-position: center;
				width: 100%;
			}

			#educationBar {
				background-color: #eeeeee;
				padding-top: 35px;
				padding-bottom: 10px;
			}

			#majorBMB {
				font-size: 200%;
			}

			.marginTop30px {
				margin-top: 30px;
			}
			.marginTop40px {
				margin-top:40px;
			}
			.marginTop50px {
				margin-top: 50px;
			}
			.marginTop60px {
				margin-top: 60px;
			}

			.marginTop100px {
				margin-top: 100px;
			}

			#skills {
				background-color: #A5D2DA;
			}
			#skillsTitle {
				padding-top: 60px;
				padding-bottom: 30px;
			}

			.iconList li {
				padding: 0 0 40px 20px;
				display: block;
				position: relative;
				font-size: 1.9em;
				font-weight: bold;
			}

			.iconList li:before {
				font-family: 'Glyphicons Halflings';
				position: absolute;
				left: -10px;
				top: 3px;
				font-size: 80%;
				content:"\e239";
				color: #5cb85c;
			}

			#csPop {
				font-size: 75%;
				font-weight: bold;
				margin-top: 5px;
			}

			.popover {
				min-width: 500px;
			}
			.popover-title {
				font-size: 2em;
			}
			.popover-content {
				font-size: 1.2em;
			}

			.progressTitle {
				font-size: 1.5em;
				font-weight: bold;
				padding: 0px;
				margin-bottom: 3px;
				margin-top: 20px;
			}

			.csLabel {
				font-size: 3em;
			}

			#skillList {
				font-size: 2.5em;
				font-weight: bold;
				color: black;
			}

			#skillList>li.active>a, #skillList>li.active>a:focus, #skillList>li.active>a:hover {
				background-color: #5cb85c;
			}
			
			#skillPanel {
				padding-bottom: 100px;
			}

			.secondList {
				margin-left: 2.5em;
			}

			#contact {
				background-color: #222222;
				padding-top: 60px;
				padding-bottom: 60px;
			}

			.contactLabel {
				color: white;
			}

			#submit {
				font-size: 150%;
				padding-left: 30px;
				padding-right: 30px;
			}

		</style>

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body data-spy="scroll" data-target=".navbar-collapse">

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Jacinto</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#educationBar">Resume</a></li>
						<li><a href="#skills">Talent</a></li>
						<li><a href="personal.html">Personal</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container-fluid contentContainer bg-img">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1>The sky is the limit</h1>
				</div>
			</div>
		</div>

		<div class="container-fluid" id="educationBar">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h1 class="text-center"><span class="glyphicon glyphicon-education"></span> Education &#45; University of California, Berkeley</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p class="text-center" id="majorBMB">Molecular &amp; Cellular Biology &lpar;<abbr title="Biochemistry &amp; Molecular Biology">BMB</abbr>&rpar;  <span class="glyphicon glyphicon-plus"></span> 
					<a tabindex="0" class="btn btn-lg btn-success" id="csPop" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-html="true" title="Computer Science Course" data-content="CS61A - Structure and Interpretation of Computer Programs <br> CS61B - Data Structures <br> CS9A - Matlab for Programmers <br> MCBC148 - Microbial Genomics and Genetics">CS Courses</a>
					</p>
				</div>
			</div>
		</div>

		<!--JOBS container start here!!-->
		<div class="container-fluid" id="job">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 marginTop40px" id="resume">
					<h1><span class="glyphicon glyphicon-book"></span> Jobs &amp; Experience</h1>
				</div>
			</div>

			<!--1st row for jobs-->
			<div class="row">
				<div class="col-md-5 col-md-offset-1 marginTop50px">
					<div class="media">
						<div class="media-left">
							<img class="media-object img-rounded" src="images/temp.jpg" alt="TEMP" width="140" height="140">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Lygos</h4>
							<h4 class="pull-left">Research Associate II</h4><h4 class="pull-right">Sept 13 &#45; Jan 15</h4>
							<div class="clearfix"></div>
							<p>Undertook many projects ranging from molecular cloning, strain evolution, cellulosic sugar analysis, assisting SOP development of CRISPR, ion exchange chromatography, fabrication for scale&#45;up, equipment maintenance, and lab management.</p>
						</div>
					</div>
				</div>

				<div class="col-md-5 marginTop50px">
					<div class="media">
						<div class="media-left">
							<img class="media-object img-rounded" src="images/temp.jpg" alt="TEMP" width="140" height="140">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Energy Biosciences Institue</h4>
							<h4 class="pull-left">Undergraduate Researcher</h4><h4 class="pull-right">Jan 12 &#45; Jun 13</h4>
							<div class="clearfix"></div>
							<p>Under the guidance of Professor John Dueber. Investigated how synthetic scaffolds improve product titer by observing synthetic complex formation of oligomers and regulated enzyme degradation in E. coli.</p>
						</div>
					</div>
				</div>
			</div>

			<!--2nd row for jobs-->
			<div class="row">
				<div class="col-md-5 col-md-offset-1 marginTop50px">
					<div class="media">
						<div class="media-left">
							<img class="media-object img-rounded" src="images/temp.jpg" alt="TEMP" width="140" height="140">
						</div>
						<div class="media-body">
							<h4 class="media-heading">University of California, Berkeley-SynBERC</h4>
							<h4 class="pull-left">Mentor</h4><h4 class="pull-right">Apr &#45; Aug 12</h4>
							<div class="clearfix"></div>
							<p>Mentored a community college student in developing essential skills needed to become an independent researcher and facilitating his transfer to a four year university</p>
						</div>
					</div>
				</div>

				<div class="col-md-5 marginTop50px">
					<div class="media">
						<div class="media-left">
							<img class="media-object img-rounded" src="images/temp.jpg" alt="TEMP" width="140" height="140">
						</div>
						<div class="media-body">
							<h4 class="media-heading">University of California, San Francisco &#45; HHMI</h4>
							<h4 class="pull-left">Laboratory Assistant</h4><h4 class="pull-right">Jan 09 &#45; Aug 11</h4>
							<div class="clearfix"></div>
							<p>Under the guidance of Prof. Wendell Lim. Investigated the characteristics of biocircuits containing fast-acting (protein-protein interaction) and slow-acting (transcription) circuits. Engineered a methylation Sensor in S.cerevisiae for detection of methyl Halide production in microbes. Regulated gene expression by means of a synthetic chromatin system in S. cerevisiae.</p>
						</div>
					</div>
				</div>
			</div>

			<!--AWARDS=====================-->
			<div class="row marginTop60px">
				<div class="col-md-10 col-md-offset-1">
					<h1><span class="glyphicon glyphicon-star"></span> Awards</h1>
				</div>
			</div>
			<div class="row marginTop30px">
				<div class="col-md-10 col-md-offset-1">
					<div class="media">
						<div class="media-left">
							<img class="media-object img-rounded" src="images/temp.jpg" alt="TEMP" width="140" height="140">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Best New Application and Best Poster &lpar;Runner up&rpar;</h4>
							<p>International Genetically Engineered Machine Competition <br>
							Projec Title&#58; &quot;Synthetic Chromatin: Design Principles of Cellular Memory&quot;</p>
						</div>
					</div>					
				</div>
			</div>

			<!--Filler div class-->
			<div class="row marginTop40px"></div>
		</div>


		<!--SKILLS container============================-->
		<div class="container-fluid contentContainer marginTop60px" id="skills">
			<div class="row" id="skillsTitle">
					<div class="col-md-10 col-md-offset-1">
						<h1 class="text-left"><span class="glyphicon glyphicon-grain"></span> Talent</h1>
					</div>
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2">

					<!--NAV TABS for Skills================-->
					<ul class="nav nav-pills nav-justified" id="skillList">
						<li class="active"><a href="#csSkills" data-toggle="tab">Tech</a></li>
						<li><a href="#bSkills" data-toggle="tab">Biology</a></li>
						<li><a href="#hSkills" data-toggle="tab">Personal</a></li>
					</ul>

					<!-- Tab panels that contains the content-->
					<div class="tab-content" id="skillPanel">
						<div class="tab-pane fade in active" id="csSkills">
							<div class="row">
								<div class="col-sm-5 marginTop40px">
									<p class="csLabel text-center"><span class="label label-success">Web Design</span></p>

									<p class="progressTitle">BootStrap</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 60%"></div>
									</div>
									<p class="progressTitle">CSS3</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 40%"></div>
									</div>
									<p class="progressTitle">HTML5</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 40%"></div>
									</div>									
									<p class="progressTitle">JavaScript</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 20%"></div>
									</div>
									<p class="progressTitle">PhotoShop</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 20%"></div>
									</div>
									<p class="progressTitle">Illustrator</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 30%"></div>
									</div>	
																	
								</div>

								<div class="col-sm-5 col-sm-offset-1 marginTop40px">
									<p class="csLabel text-center"><span class="label label-success">Programming</span></p>

									<p class="progressTitle">Android</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 90%"></div>
									</div>
									<p class="progressTitle">Java</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 75%"></div>
									</div>	
									<p class="progressTitle">Python</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 70%"></div>
									</div>					
									<p class="progressTitle">C++</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 30%"></div>
									</div>
									<p class="progressTitle">PHP</p>
									<div class="progress">
										<div class="progress-bar progress-bar-success" style="width: 20%"></div>
									</div>
									<p class="progressTitle">My Android App &#45; Play Store Link</p>
									<div>
										<p>
											<span class="glyphicon glyphicon glyphicon-heart" style="color:red; font-size: 150%;"></span>
											<a href="https://play.google.com/store/apps/details?id=com.jacintochen.currencyexchange&hl=en"
											style="font-size: 150%; font-weight: bold; margin-left: 10px;">Exchange</a>
										</p>
										
									</div>


								</div>

							</div>
						</div>
						<div class="tab-pane fade" id="bSkills">
							<div class="row marginTop60px">
								<div class="col-sm-4">
									<ul class="list-unstyled iconList">
										<li>PCR</li>
										<li>RT-PCR</li>
										<li>Western Blot</li>
										<li>Protein Purification</li>
										<li>Microscopy</li>
										<li>Tissue Culture</li>
									</ul>
								</div>

								<div class="col-sm-4">
									<ul class="list-unstyled iconList">
										<li>Molecular Cloning</li>
										<li>Yeast &amp; Bacteria</li>
										<li>CRISPR</li>
										<li>High Through Screening</li>
										<li>Live Cell Flow Cytometry</li>
										<li>Chromatography</li>
									</ul>
								</div>

								<div class="col-sm-4">
									<ul class="list-unstyled iconList">
										<li>ELISA</li>
										<li>HPLC</li>
										<li>Organic Chemistry</li>
										<li>Bioinformatics</li>
										<li>Fabrication</li>
										<li>Lab Management</li>
									</ul>
								</div>

							</div>

						</div>
						<div class="tab-pane fade" id="hSkills">
							<div class="row marginTop40px">
								<div class="col-md-8 col-md-offset-2">
									<ul class="list-unstyled">
										<li><h1>Hobby &#45; <a href="personal.html">Pictures</a></h1></li>
										<li>
											<ul class="list-inline secondList">
												<li>3D Modeling</li>
												<li>3D Printing</li>
												<li>Maker</li>
												<li>Gardening</li>
											</ul>
										</li>
										<li><h1>Look Ma, I&#39;m On The News</h1></li>
										<ul class="list-unstyled secondList">
											<li><p><strong>Lygos</strong></p></li>
											<li><a href="http://goo.gl/BGKaQX">Life-science startups find new life in used equipment</a></li>
											<li><p><strong>iGEM</strong></p></li>
											<li><a href="http://goo.gl/agp3jc">High school biowizards break new ground in winnng competition</a></li>
											<li><a href="http://goo.gl/hF3zSD">English&#44; Algebra&#44; Phys Ed &#46;&#46;&#46; and Biotech</a></li>
											<li><a href="http://goo.gl/kxUT9P">Students do cutting&#45;edge biotech work</a></li>
											<li><a href="http://goo.gl/5AsXTW">Local teens prepare for MIT competition</a></li>
											<li><a href="http://goo.gl/bUBxAN">UCSF&#45;led high school team wins national honors for genetic engineering</a></li>
										</ul>
										<li></li>
										<li><h1>Adventures &#45; Pictures</h1></li>
										<ul class="list-inline secondList">
											<li>Panama</li>
											<li>South Korea</li>
											<li>China</li>
											<li>Hong&#45;Kong</li>
											<li>Mexico</li>
											<li>Japan</li>
										</ul>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>




			<!--Clear all floats that would happen.-->
			<div class="clearfix"></div>

			<!--Contact Section=========-->
			<div class="container-fluid" id="contact" >
				<div class="row text-center">
					<h1 class="contactLabel">Contact Me</h1>
					<p class="lead contactLabel"><span class="glyphicon glyphicon-road" style="padding-right: 10px;"></span> Located in San Francisco Bay Area</p>
				</div>
				<form class="form-horizontal" role="form" method="post" action="">
					<div class="form-group">
						<label for="name" class="col-sm-2 col-sm-offset-1 control-label contactLabel">Name</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="name" name="name" placeholder="First &amp; Last Name" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label col-sm-offset-1 contactLabel">Email</label>
						<div class="col-sm-6">
							<input type="email" class="form-control" id="email" name="email" placeholder="example&#64;domain.com" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 col-sm-offset-1 control-label contactLabel">message</label>
						<div class="col-sm-6">
							<textarea class="form-control" placeholder="I would love to hear from you." rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 col-sm-offset-1 control-label contactLabel">2 &#43; 3 &#61; &#63;</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="human" name="human" placeholder="I am not a robot">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-success">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
						</div>
				</form>
			</div>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

		<script>
			//A script that measure window height and set that divider to that minimum height
			$(".contentContainer").css("min-height", $(window).height());

			// Popout function for cs course button
			$(function(){
				$('#csPop').popover();
			});
		</script>
	</body>
</html>
