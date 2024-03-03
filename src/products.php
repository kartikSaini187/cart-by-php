<?php
session_start();

include_once ('header.php') ;
include_once ('config.php') ;

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
	
	<div id="main">
		<div id="products">

		<?php
				foreach ($product as $item)
				{
				  $html = "<form action='' method='POST'>
								<div id=".$item["id"]." class='product'>
									<img src='images/".$item["image"]."'>
									<h3 class='title'>
										<a href='#'>
											Product - ".$item["id"]."
										</a>
									</h3>
									<span>
										Price: ".$item['price']."
									</span>
									<input type='submit' class='add-to-cart' name=".$item["id"]." value='Add To Cart'/>
								</div>
							</form>";
					echo $html;
				}
			?>
			
		</div>
	</div>
	<div> 
		
	</div>
<?php include 'footer.php'?>