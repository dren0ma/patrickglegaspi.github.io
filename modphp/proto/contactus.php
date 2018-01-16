<?php
function display_title (){
	echo "Home Page";
}

function display_content(){

require "nav.php";
?>
<div class="columns">
		<div class="column">
		</div>
		<div class="column is-3">
			<?php require "sidebar.php"; ?>
		</div>
		
	</div>
	


<?php	
}

require "template.php";
?>