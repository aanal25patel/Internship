<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Welcome to Aanal's Blog</title>
<!-- <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" /> -->
<!-- <link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" /> -->
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

</div> -->


<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Welcome to Aanal's Blog</a></h1>
			<!-- <p>Template design by <a href="http://www.freecsstemplates.org">FCT</a></p> -->
		</div>
	</div>
</div>


<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/Aanal's Blog.png" width="900" height="410" alt="" /></div><br>
		<div id="content">

			<?php
                include 'Benford_Law.php';

            ?>

			<?php
                include 'LTU.php';

            ?>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>SearCh Here:</h2>
					<div id="search" >
						<form method="get" action="#">
							<div>
								<input type="text" name="s" id="search-text" value="" />
								<input type="submit" id="search-submit" value="" />
							</div>
						</form>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>
					<h2>About &nbsp; Me</h2>
					<p>Hello there, I am <strong>Aanal Patel</strong>, a 3rd-year enthusiastic learner, pursuing Computer Science and Engineering at one of the well-known colleges of GTU, BITS EDU CAMPUS, Varnama.

I am eager to learn new things that interest me, I believe in good teamwork, I am hardworking, and try not to procrastinate planned things.</p>
				</li>
				<li>
					<h2>Categories of Blogs</h2>
					<ul>
						<li><a href="#">Travel Blogs</a></li>
						<li><a href="#">Food Blogs</a></li>
						<li><a href="#">Music Blogs</a></li>
						<li><a href="#">Lifestyle Blogs</a></li>
						<li><a href="#">Sports Blogs</a></li>
						<li><a href="#">Fashion Blogs</a></li>
					</ul>
				</li>
				<li>
					<h1><a href="Contact.php">Contact &nbsp; Me</a></h1>
					
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>

</body>
</html>
