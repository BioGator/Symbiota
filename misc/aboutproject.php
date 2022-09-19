<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
include_once('content/lang/misc/aboutproject.'.$LANG_TAG.'.php');
?>
<html>
	<head>
		<title>About BioGator</title>
		<?php
		$activateJQuery = false;
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="../index.php"><?php echo (isset($LANG['HOME'])?$LANG['HOME']:'Home'); ?></a> &gt;&gt;
			<b><?php echo (isset($LANG['ABOUT_PROJECT'])?$LANG['ABOUT_PROJECT']:'About the Project'); ?></b>
		</div>
		<!-- This is inner text! -->
		<div id="innertext" style="margin:10px 20px">
			<h1><?php echo (isset($LANG['ABOUT_PROJECT'])?$LANG['ABOUT_PROJECT']:'About BioGator'); ?>:</h1>

			<p>BioGator is a project made possible with support from UF Planning, Design & Construction and the UF Office of Sustainability. 
			The primary goal of BioGator is to provide a resource for students, staff, and faculty at the University of Florida to learn more about the species of animals, plants, and fungi known from the ~2,000 acres of the Gainesville campus. 
			We have used existing biodiversity data to create checklists for each of the <a href="/projects/index.php?pid=1">UF Campus Conservation Areas</a> and the <a href="/checklists/checklist.php?clid=34">entire Gainesville campus</a>.</p>
			<p>BioGator brings together data from museums, community science platforms, information from classes and student projects, as well as published and unpublished checklists of campus biodiversity. 
			To see a full list of the data sources for BioGator, see our <a href="/collections/index.php">list of sources here</a>.</p>
			<p>BioGator aggregates biodiversity data for the entire state of Florida. Thus, new checklists can be created for any UF property in Florida or for other points of interest. 
			At this time, BioGator includes eBird data only for UF Gainesville campus.</p>
			<p>Interested to learn more about how you can contribute to BioGator? Please contact Dr. David Blackburn at the Florida Museum of Natural History: dblackburn@ufl.edu</p>


		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>
