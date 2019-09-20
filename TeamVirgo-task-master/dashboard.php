<?php

session_start();
if (!isset($_SESSION['username'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>TeamVirgo</title>
</head>
<body>
		<section class="dashboardBody">
			<header>
				<div class="content-wrap">
					<div class="column-wide">
						<div class="teamVirgoFont">
							<h1>teamVirgo</h1>
						</div>
					</div>
				</div>
			</header>
		</section>
		<div><a clas href="logout.php">LOGOUT</a></div>
<div class="Welcome">
<h2>Welcome <?php echo $_SESSION['username'];?></h2>
<div class="work">
	<p2>What work would you like to create today?</p2>
	</div>

</body>
</html>
