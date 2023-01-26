<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
?>


<html>
<style>

.photo_grid {
	display: grid;
	grid-template-columns: auto auto;
	width: 90%;
}

figure {
	grid-column: auto;
	width: inherit;
	padding: 1rem;
	margin: 1rem;
	text-align: center;
}

figcaption {
	padding: 1rem;
	margin: 1rem;
}

img {
	border-radius: 2rem;
	padding: 1rem;
	width: inherit;
}
</style>
	<head>
		<title><?php echo $DEFAULT_TITLE; ?> How to Use BioGator</title>
		<?php
		$activateJQuery = false;
		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = true;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="<?php echo $CLIENT_ROOT; ?>/index.php">Home</a> &gt;&gt;
			<b>How to Use BioGator</b>
		</div>
		<!-- This is inner text! -->
		<div id="innertext">
			<h1>How to Use BioGator</h1><br />

			<div class="photo_grid">
				
					<figure>
						<img src="<?php echo $CLIENT_ROOT; ?>/images/BioGator2.jpg" alt = "Joe Martinez, graduate student, examining the moth collection in the Florida Museum of Natural History."" />
						<figcaption>Joe Martinez, graduate student, examining the moth collection in the Florida Museum of Natural History. Martinez is identifying moths sampled during BioGator surveys and looking for specimens previously collected on the UF campus.</figcaption>
					</figure>
				
				
					<figure >
						<img src="<?php echo $CLIENT_ROOT; ?>/images/BioGator_Survey_leps.jpeg" alt = "Photo of undergraduate and graduate students sampling moths for the BioGator project."  />
						<figcaption >Photo of undergraduate and graduate students sampling moths for the BioGator project. The bucket in the image is a blacklight trap, used to sample insects, placed near Lake Alice on the UF campus in Gainesville.</figcaption>
					</figure>
				
			</div>
			<div style="margin:10px">
				<a name="checklists"></a>	
				<h2>Using Checklists</h2>
				<div style = "margin:10px">
                    You can easily find lists of species known from particular conservation areas using BioGator. 
                    First, click on "<a href="<?php echo $CLIENT_ROOT; ?>/checklists/index.php" target="_blank">Checklists</a>" 
					in the main menu. This will take you to a page with all checklists 
                    currently supported in BioGator. Click on "Lake Alice" and you will be taken to a page that 
                    aggregates all existing biodiversity records from the Lake Alice Campus Conservation Area. 
                    These records include both specimens in natural history museums and photographs or other 
                    observations from community science platforms such as <a href="https://www.inaturalist.org/" target="_blank" >iNaturalist</a> 
					and <a href="https://ebird.org/home" target="_blank" >eBird</a>.<br>

                    To filter a checklist to a particular taxon, type the scientific name in the Search box at 
                    the upper right. For example, searching for "Aves" will generate a list of all known bird 
                    species.
				</div>

				<a name="poorlyexplored"></a>	
				<h2>Find out which campus conservation areas are poorly explored!</h2>
					<div style = "margin:10px">
					If you navigate to checklists for different conservation areas, you can make comparisons 
					between these to determine, for instance, which has the fewest documented species of reptiles 
					or fungi. If you compare the checklist for a specific checklist against that for "UF Main Campus" 
					(available in the drop-down menu under "Checklists" in the main menu), you can determine those 
					species for a group (e.g., reptiles) that are known from campus but have yet to be documented 
					in a specific conservation area. With this in hand, you can figure out which species would be 
					great finds to add to the checklist of that conservation area!
					</div>

				<a name="checklistimage"></a>	
				<h2>Customized Checklist with Images</h2>
					<div style = "margin:10px">
					It is possible to create a custom checklist with images for any group of organisms in BioGator. 
					If you navigate to a checklist and search for a taxon (example: "Aves") and click the box for 
					"Display as images" and then click "Build List," you will generate a list of all of the species 
					with an image of each species. You can also click the box for "Common names" to generate a page 
					with common (i.e., non-scientific) names for each species.<br>

					To the right of "Build List", there is a small icon for "Print in Browser." If you click this, 
					it will generate a new webpage. If you choose to print this webpage, you should have an option 
					to "Save as PDF." Using this tool, you can create customized checklists with images and common 
					names for any taxon in a checklist in BioGator (e.g., the birds of McCarty Woods).
					</div>

				<a name="mapsearch"></a>	
				<h2>Finding records with Map Search</h2>
					<div style = "margin:10px">
					You can use "<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank">Map Search</a>" 
					to find records of a specific taxon in the state of Florida. 
					If you click on "Map Search" (available in the drop-down menu under "Search" in the main menu), 
					it will open a new webpage with a map. In the top left, click on the icon in the "Open Search 
					Panel" to expand a search box. You can, for example, search for all records of the frog genus 
					<i>Acris</i> in Marion County by typing "Acris" in the text box for "Taxa:" and "Marion" in the text 
					box for "County:". This will generate a new webpage that opens in map view with all records in 
					BioGator mapped. If you again click on the icon in "Open Search Panel", you will find a tab 
					titled "Records and Taxa" that allows you to explore the details for all specimen and observation 
					data that were returned by your query. You can download these data as CSV or KML by clicking on 
					the icons under "Records". In the "Collections" and "Taxa List" tabs, you can reset the symbology 
					used on the map by species or data source.
					</div>

				<a name="images"></a>	
				<h2>Finding images of Florida and UF Campus Biodiversity</h2>
					<div style = "margin:10px">
					You can use "<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" target="_blank">Search Images</a>" 
					to find images of biodiversity from Florida. This will open a page where you can search by 
					scientific names or common names (if in the portal). You can, for example, find images of 
					mollusks from observation data, by searching the scientific name "Mollusca" and selecting 
					the image type "Image Vouchered Observations."
					</div>
			</div>

		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>
