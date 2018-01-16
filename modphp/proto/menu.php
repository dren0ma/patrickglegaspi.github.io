<?php
//get item list from json file
$string = file_get_contents("assets/items.json");
$items = json_decode($string, true);

function display_title(){
	echo "Menu Page";
}

function display_content(){

	require "nav.php"; 

	
	global $items;
	$categories = array_unique(array_column($items,'category'));
	
	$filter = 'All';
	if(isset($_GET['category'])){
		$filter = $_GET['category'];
	}

	// $filter = isset($_GET['category']) ? $_GET['category'] : 'All';   if/else ternary
	
	echo "<form><select name='category'><option>All</option>";
	foreach ($categories as $category) {
		if ($filter == $category) {
			echo "<option selected>$category</option>";
		}
		else {
			echo "<option>$category</option>";
		}
		// echo $filter == $category ? "<option selected>$category</option>" : "<option>$category</option>";   if/else ternary
	}
	echo "</select><button class='btn'>Search</button></form>";

	//foreach item iteration
	echo "<div class='row'>";
	foreach ($items as $index => $item) {
		if ($filter == 'All' || $item['category'] == $filter) {
			echo "<div class='col-xs-4 item_display'><img src='".$item['img']."'>";
			echo "<h5>".$item['name']."</h5>";
			echo "Price: Php".$item['price']."<br>";
			
			if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin'){
				echo "<button class='btn btn-primary render_modal_body' data-toggle='modal' data-target='#myModal' data-index='$index'>Edit / Delete</button>";
			}
			else if (isset($_SESSION['username'])){
				echo "<button class='btn btn-success'>Add to Cart</button>";
			}
			echo "</div>";
		}
	} 

	echo "</div>";//foreach item
			//modal
	echo "<div id='myModal' class='modal fade' role='dialog'>
		<div class='modal-dialog'>
			<div class='modal-content'>
				<div class='modal-header'>
					<button type='button' class='close' data-dismiss='modal'>&times;</button>
					<h4 class='modal-title'>Modal Header</h4>
				</div>
			
				<div class='modal-body' id='modal-body'>
				</div>
				
				<div class='modal-footer'>
				</div>
			</div>
		</div>
	</div>"; //modal close
}	//function close display_content()

require "template.php";

?>

<script type="text/javascript">
	$('.render_modal_body').click(function(){
//ajax post request
		var index = $(this).data('index');
	//url
		// $.post('render_modal_body.php',
	//variable (key-value pair)
		// {index: index},
	//callback/return data
		// function(data){
			// $('#modal-body').html(data);
		// })

		$.ajax ({
			method: 'post',
			url: 'render_modal_body.php',
			data: {
				index: index
			},
			success: function(data){
				$("#modal-body").html(data);
			}
		})
	});
</script>
