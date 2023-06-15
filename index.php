<!doctype html>
<html>
<head>
	<title>School Plaza</title>
	<link rel="icon" type="image/x-icon" href="/images/favicon.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="school-plaza">
			<div style="text-align: center;">
				<h1>Solid Plaza</h1>
				<p>One stop for all school necessities</p>
			</div>
		</div>
		<img src="images/school-plaza.png" class="school-plaza-img">
	</div>
	<div class="leave-space">
	</div>

<form action="/action.php" method="post">
	<table width="100%" class ="main-table">
		<thead>
			<td>
				<div style="border-bottom: 1px solid black;">Categories</div>
			</td>
			<td>
				<div style="margin-left: 8px;   border-bottom: 1px solid black; padding-left: 1.1em;">New Products</div>
			</td>
		</thead>
		<tr>
			<td>
				<table class="items">
				<?php
				$items = array(
					"School Bags",
					"Water Bottle",
					"Lunch Box",
					"Compass Box",
					"Stationary",
					"Files & Folders",
					"Books",
					"Colors"
				);

				foreach ($items as $item) {
					echo '<tr><td><a href="#">' . $item .'</a></td></tr>';
				}
				?>
				</table>
			</td>
			<td style="display: table; margin: 0 auto;">
				<table><tr>
					<?php
					class BagInfo {
						public $name;
						public $url;
						public $price;

						function __construct($bagname, $bagurl, $bagprice) {
							$this->name = $bagname;
							$this->url = $bagurl;
							$this->price = $bagprice;
						}
					};

					$bags = array(
						new BagInfo("Girls Pink Bag", "images/girls-pink-bag.jpg", "399"),
						new BagInfo("Fast Travel Bag", "images/fasttravel-black-bag.jpg", "692"),
						new BagInfo("Pagwin Blue Bag", "images/pagwin-blue-bag.jpg", "699"),
						new BagInfo("Micky Mouse Bag", "images/micky-mouse-bag.jpg", "215")
						);
					$loopback = true;
					$j = 0; $total_page = 4;

					while ($loopback) {
						echo "<tr>";
						for ($i = 0; $i < $total_page; $i++, $j++) {
							if ($j >= count($bags))
							{
								$loopback = false;
								break;
							}
							echo '<td><table class="displaybag">
								<tr>
									<td><img src="'.$bags[$j]->url.'" width="200px" height="200px"></td>
								</tr>
								<tr>
									<td>'.$bags[$j]->name .' <br>$'.$bags[$j]->price.'<br>
									<div style="line-height: 1.5em;">
										<input type="radio"> Add to cart<br>
										<input value="0" name="quantity'. $j . '" style="width: 5em;"> Quantity
									</div>
								</tr>
							</table></td>';
						}
						echo "</tr>";
					}
					?>
				</tr></table>
			</td>

		</tr>
	</table>
	<div class="submitbutton">
		<input type="submit" value="Purchase" style="">
	</div>
</form>

</body>
</html>