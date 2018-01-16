<?php
function display_title (){
	echo "Home Page";
}

function display_content(){

require "nav.php"; 
?>
<section class="hero is-warning is-bold is-fullheight">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">Tuitt</h1>
		</div>
	</div>
</section>



<?php	
}

require "template.php";
?>