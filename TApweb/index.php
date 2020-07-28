

<!DOCTYPE html>
<html>
<head>
	<title>SELAMAT DATANG</title>
	<style type="text/css">
		body
{
	margin: 0;
	padding: 0;
	background: darkgray;

}

.slidershow
{	
	width: 1370px;
	height: 600px;
	overflow: hidden;
}

.middle
{	

	position: absolute;
	top: 53%;
	left: 50%;
	transform: translate(-50%,-50%);
}

.navigation
{
	position: absolute;
	bottom: 20px;
	left: 50%;
	transform: translate(-50%);
	display: flex;
}

.bar
{
	width: 50px; 
	height: 10px;
	border:2px solid #000;
	margin: 6px;
	cursor: pointer;
	transition: 0.4s;
}

.bar:hover
{
	background: #fff;
}

input[name="r"]
{
	position: absolute;
	visibility: hidden;


}

.slides
{
	width: 500%;
	height: 100%;
	display: flex;
}

.slide
{
	width: 20%;
	transition: 0.6s;
}

.slide img
{
	width: 100%;
	height: 100%;
}

#r1:checked ~.s1
{
	margin-left: -0%;
}


#r2checked ~.s1
{
	margin-left: -20%;
}

#r3:checked ~ .s1
{
	margin-left: -40%;
}

#r4:checked ~ .s1
{
	margin-left: -60%;
}

#r5:checked ~ .s1
{
	margin-left: -80%;
}
	</style>
</head>
<body>
<p>klik<a href="isi/index.php">disini</a>untuk melihat galeri</p>	
<div class="slidershow middle">
	<div class="slides">
		<input type="radio" name="r" id="r1" checked>
			<input type="radio" name="r" id="r2">
				<input type="radio" name="r" id="r3">
					<input type="radio" name="r" id="r4">
						<input type="radio" name="r" id="r5">

		<div class="slide s1">
			<img src="8.jpg" alt="">

		</div>
		<div class="slide">
			<img src="3.jpg" alt="">

		</div>

		<div class="slide">
			<img src="6.jpg" alt="">

		</div>

<div class="slide">
			<img src="7.jpg" alt="">

		</div>

		<div class="slide">
			<img src="2.jpg" alt="">

		</div>
	</div>

	<div class="navigation">
		<label for="r1" class="bar"></label>
		<label for="r2" class="bar"></label>
		<label for="r3" class="bar"></label>
		<label for="r4" class="bar"></label>
		<label for="r5" class="bar"></label>
	</div>

</div>

</body>
</html>