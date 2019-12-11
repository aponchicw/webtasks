<html>
<head>
	<style>
		.cards{display:flex;flex-wrap:wrap;width:700px;margin-left:auto;margin-right:auto;}
		.cards .card{width:250px;border:1px solid red;border-radius:5px;display:flex;margin:10px;}
		.menu {display:block;width:700px;margin-left:auto;margin-right:auto;}
		.card .title{font-size:20px;font-weight:bold;}
		.card .price{color:green;}
		.card .description{display:flex;flex-direction:column;}
		.card .price{flex-grow:1;}
		.card .year{font-weight:bold;font-size:18px;}
	</style>
</head>
<body>

<div class="cards">
<?php

$cars = [["maker"=>"Toyota","model"=>"Carina","year"=>2001,"price"=>20000,"image"=>"https://a.d-cd.net/cea52es-480.jpg"],["maker"=>"Toyota","model"=>"Camry","year"=>2005,"price"=>30000,"image"=>"https://d8a6a33f-3369-444b-9b5f-793c13ff0708.selcdn.net/media/common/car_slider_item_v3/tradeins.space/uploads/photo/1603802/ca9292a4fd25e8b05fd4c99bc694b5e2.png?v27"],["maker"=>"Audi","model"=>"A8","year"=>1986,"price"=>12000,"image"=>"http://www.theautohost.com/_contentPages/vehicleContentPages/audi/2017/A8%20L/images/2017-Audi-A8L-exterior-grille.jpg"],
	["maker"=>"Audi","model"=>"A6","year"=>2005,"price"=>30000,"image"=>"https://www.cstatic-images.com/car-pictures/xl/USC60AUC021B021001.png"],
	["maker"=>"BMW","model"=>"X5","year"=>2007,"price"=>17000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],["maker"=>"BMW","model"=>"X5","year"=>2015,"price"=>19000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],["maker"=>"BMW","model"=>"Model 7","year"=>2014,"price"=>22000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],
	["maker"=>"Lada","model"=>"Granta","year"=>2017,"price"=>7000,"image"=>"http://www.kolesa.ru/uploads/2017/06/Lada-Granta-restyle-front1-1600x0-c-default.jpg"]
	];

/* Write your code here */
$carMaker = "";
$byYear = "";
$byPrice = "";

if(isset($_GET['maker'])){
		if(isset($_GET['by'])){
			if($_GET['by'] == "old"){
				fillByMakerAndYear($cars, 2019, $_GET['maker']);
			}
			else if($_GET['by'] == "expensive"){
				fillByMakerAndPrice($cars, 20000, $_GET['maker']);
			}
		}
		else{
			fill($_GET['maker'], $cars);
		}
}
else if(isset($_GET['year'])){
	fillByYear($cars, 2019);
}

else if(isset($_GET['price'])){
	fillByPrice($cars, 20000);
}

function fill($myMaker, $array){
	for($i = 0; $i < count($array); $i++){
		$makerAndModel = $array[$i]['maker']." ".$array[$i]['model'];
		if($array[$i]['maker'] == $myMaker){
			echo "<div class = 'card'>
					<img width = 120px height = 100px src = " . $array[$i]['image'] . ">
					<div class = 'description'>
						<div class = 'title'>" . $makerAndModel .  "</div>
						<div class = 'price'>" . $array[$i]['price'] . '$' ."</div>
						<div class = 'year'>" . $array[$i]['year'] . ' years' . "</div>
					</div>
					</div>";
		}
	}
}

function fillByYear($array, $year){
	for($i = 0; $i < count($array); $i++){
		$makerAndModel = $array[$i]['maker']." ".$array[$i]['model'];
		if($array[$i]['year'] <= $year - 7){
			echo "<div class = 'card'>
					<img width = 120px height = 100px src = " . $array[$i]['image'] . ">
					<div class = 'description'>
					<div class = 'title'>" . $makerAndModel .  "</div>
					<div class = 'price'>" . $array[$i]['price'] . '$' . "</div>
					<div class = 'year'>" . $array[$i]['year'] . ' years' . "</div>
					</div>
					</div>";
		}
	}
}

function fillByPrice($array, $price){
	for($i = 0; $i < count($array); $i++){
		$makerAndModel = $array[$i]['maker']." ".$array[$i]['model'];
		if($array[$i]['price'] >= $price){
			echo "<div class = 'card'>
					<img width = 120px height = 100px src = " . $array[$i]['image'] . ">
					<div class = 'description'>
					<div class = 'title'>" . $makerAndModel .  "</div>
					<div class = 'price'>" . $array[$i]['price']  . '$' ."</div>
					<div class = 'year'>" . $array[$i]['year'] . ' years' . "</div>
					</div>
					</div>";
		}
	}
}

function fillByMakerAndYear($array, $year, $myMaker){
	for($i = 0; $i < count($array); $i++){
		$makerAndModel = $array[$i]['maker']." ".$array[$i]['model'];
		if($array[$i]['year'] <= $year - 7 && $array[$i]['maker'] == $myMaker){
			echo "<div class = 'card'>
					<img width = 120px height = 100px src = " . $array[$i]['image'] . ">
					<div class = 'description'>
					<div class = 'title'>" . $makerAndModel .  "</div>
					<div class = 'price'>" . $array[$i]['price']  . '$' ."</div>
					<div class = 'year'>" . $array[$i]['year'] . ' years' . "</div>
					</div>
					</div>";
		}
	}
}

function fillByMakerAndPrice($array, $price, $myMaker){
	for($i = 0; $i < count($array); $i++){
		$makerAndModel = $array[$i]['maker']." ".$array[$i]['model'];
		if($array[$i]['price'] >= $price && $array[$i]['maker'] == $myMaker){
			echo "<div class = 'card'>
					<img width = 120px height = 100px src = " . $array[$i]['image'] . ">
					<div class = 'description'>
					<div class = 'title'>" . $makerAndModel .  "</div>
					<div class = 'price'>" . $array[$i]['price']  . '$' ."</div>
					<div class = 'year'>" . $array[$i]['year'] . ' years' . "</div>
					</div>
					</div>";
		}
	}
}

?>
</div>
<div class="menu">
	<a href="task3.php">Home</a>|<a href="task3.php?maker=Toyota">Toyota</a>|
	<a href="task3.php?maker=BMW">BMW</a>|
	<a href="task3.php?maker=Audi">Audi</a>|<a href="task3.php?maker=Lada">Lada</a>
	<a href="task3.php?year=old">Old cars (More than 7 years)</a>|<a href="task3.php?price=expensive">Expensive cars (more than 20.000$)</a>
</div>

</body>
</html>
