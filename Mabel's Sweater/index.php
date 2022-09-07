<?php
require('parts/header.php');

?>

<?php
if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null) {

	$sql = "SELECT * FROM users WHERE id=" . $_SESSION["user_id"];
	$result = mysqli_query($conn, $sql);
	$user = $result->fetch_assoc();
?>

	<h2 class="hello">Hello, <?php echo $user['username'] ?>!</h2>
	<a class="logout" href="logout.php" style="margin-left: calc(50% - 22px); text-decoration: none;">Logout</a>

<?php
} else {
?>

	<!-- <h2>Hello!</h2> -->

<?php }
?>

<?php
require('parts/top.php');
?>

<main>

	<div class="main-page">
		<div class="heart">
			<img src="/asstes/img/heart.svg">
		</div>

		<div class="sms">
			<img src="/asstes/img/sms.svg">
		</div>

		<div class="arrov">
			<img src="/asstes/img/arrov.svg">
		</div>

		<div class="main-photo">
			<div class="bg">
				<img src="/asstes/img/bg.svg">
			</div>
			<div class="frame">
				<img src="/asstes/img/frame.svg">
			</div>
			<div class="photo">
				<img src="/asstes/img/photo.png">
			</div>
		</div>

		<div class="shine">
			<img src="/asstes/img/shine.svg">
		</div>

		<div class="v">
			<img src="/asstes/img/v.svg">
		</div>

		<div class="flourish">
			<img src="/asstes/img/flourish.svg">
		</div>

		<div class="headline">
			<h2>
				Let’s find your <br />perfect sweater
			</h2>
		</div>

		<div class="v1">
			<img src="/asstes/img/v1.svg">
		</div>

		<div class="bg1">
			<img src="/asstes/img/bg1.svg">
		</div>

		<button class="btn">Explore</button>

	</div>

	<div class="about-about">



		<div class="about">

			<div class="frame-new1">
				<img src="/asstes/img/Frame-new.svg">
			</div>

			<div class="frame-new2">
				<img src="/asstes/img/Frame-new.svg">
			</div>


			<div class="about-item1">
				<img src="/asstes/img/about/diamond.svg">
				<h3 class="diam">Special hand-made sweaters</h3>
			</div>

			<div class="about-item2">
				<img src="/asstes/img/about/delivery.svg">
				<h3 class="del">Fast free delivery</h3>
			</div>

			<div class="about-item3">
				<img src="/asstes/img/about/certificate.svg">
				<h3 class="cert">Certificated natural materials</h3>
			</div>
		</div>

	</div>

	<div class="new-new">

		<div class="new">

			<div class="katja">
				<h2>new</h2>
			</div>


			<img class="left-top" src="/asstes/img/about/left-top.svg">
			<img class="title-top" src="/asstes/img/about/title-top.svg">
			<img class="top-right" src="/asstes/img/about/top-right.svg">
			<img class="under-title" src="/asstes/img/about/under-title.svg">
			<img class="arrow-bottom" src="/asstes/img/about/arrow-bottom.svg">
			<!-- <img class="arrow-left" src="/asstes/img/about/arrow-left.svg">
			<img class="arrow-right" src="/asstes/img/about/arrow-right.svg"> -->

			<!-- слайдер -->
			<div class="wraper">
				<div class="slider">
					<div class="slider_item">
						<div class="brown">
							<div class="light-brown">
								<div class="background">
									<img class="foto" src="/asstes/img/about/first.png">
								</div>
								<h4>Gray.SW</h4>
								<h5>$50</h5>
								<a href="#"><img class="cart" src="/asstes/img/about/cart.svg"></a>
							</div>
						</div>
					</div>

					<div class="slider_item">
						<div class="brown">
							<div class="light-brown">
								<div class="background">
									<img class="foto" src="/asstes/img/about/second.png">
								</div>
								<h4>White.SW</h4>
								<h5>$75</h5>
								<a href="#"><img class="cart" src="/asstes/img/about/cart.svg"></a>
							</div>
						</div>
					</div>

					<div class="slider_item">
						<div class="brown">
							<div class="light-brown">
								<div class="background">
									<img class="foto" src="/asstes/img/about/third.png">
								</div>
								<h4>Fluffy.SW</h4>
								<h5>$60</h5>
								<a href="#"><img class="cart" src="/asstes/img/about/cart.svg"></a>
							</div>
						</div>
					</div>

					<div class="slider_item">
						<div class="brown">
							<div class="light-brown">
								<div class="background">
									<img class="foto" src="/asstes/img/about/second.png">
								</div>
								<h4>Snow.SW</h4>
								<h5>$85</h5>
								<a href="#"><img class="cart" src="/asstes/img/about/cart.svg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="card1">
				<div class="brown">
					<div class="light-brown">
						<div class="background">
							<img class="first" src="/asstes/img/about/first.png">
						</div>
						<h4>Gray.SW</h4>
						<h5>$50</h5>
						<a href="#"><img class="cart" src="/asstes/img/about/cart.svg"></a>
					</div>
				</div>
			</div>

			<div class="card2">
				<div class="brown">
					<div class="light-brown">
						<div class="background">
							<img class="second" src="/asstes/img/about/second.png">
						</div>
						<h4>White.SW</h4>
						<h5>$75</h5>
						<a href="#"><img class="cart" src="/asstes/img/about/cart.svg"></a>
					</div>
				</div>
			</div>

			<div class="card3">
				<div class="brown">
					<div class="light-brown">
						<div class="background">
							<img class="third" src="/asstes/img/about/third.png">
						</div>
						<h4>Fluffy.SW</h4>
						<h5>$60</h5>
						<a href="#"><img class="cart" src="/asstes/img/about/cart.svg"></a>
					</div>
				</div>
			</div> -->
		</div> 

			<section class="main-discover">

				<div class="top-discover">

					<div class="top-discover-img">
						<img src="/asstes/img/Discover/discover-top.png">
					</div>

					<div class="top-discover-text">
						<h2>Discover</h2>
					</div>

				</div>

				<div class="about-collection">

					<div class="main-collection">

						<div class="winter-collection">
							<div class="frame-heart">
								<img src="/asstes/img/Discover/frame-heart.svg">
							</div>

							<div class="img-collection winter">
								<img src="/asstes/img/Discover/winter.png">
							</div>

							<div class="item-collection winter">

								<h3>winter collection</h3>

								<h4>heavy yarn, extra warm material</h4>

								<div class="item-button">

									<div class="button-bg1">
										<img src="/asstes/img/Discover/bg2.svg">
									</div>

									<button class="btn1">Explore</button>

									<div class="frame-winter">
										<img src="/asstes/img/Discover/Frame-winter.svg">
									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="main-collection">
						<div class="autumn-collection">

							<div class="autumn-frame1">
								<img src="/asstes/img/Discover/autumn-frame1.svg">
							</div>

							<div class="autumn-frame2">
								<img src="/asstes/img/Discover/autumn-frame2.svg">
							</div>

							<div class="autumn-frame3">
								<img src="/asstes/img/Discover/autumn-frame3.png">
							</div>

							<div class="img-collection autumn">
								<img src="/asstes/img/Discover/autumn.png">
							</div>

							<div class="item-collection autumn">

								<h3>autumn collection</h3>

								<h4>Thin yarn, fall colours</h4>

								<div class="item-button2">

									<div class="button-bg2">
										<img src="/asstes/img/Discover/bg2.svg">
									</div>

									<button class="btn2">Explore</button>

								</div>

							</div>

						</div>

					</div>

					<div class="main-collection">

						<div class="home-collection">

							<div class="home-frame1">
								<img src="/asstes/img/Discover/hone-frame1.svg">
							</div>

							<div class="home-frame2">
								<img src="/asstes/img/Discover/hone-frame2.svg">
							</div>

							<div class="home-frame3">
								<img src="/asstes/img/Discover/hone-frame3.png">
							</div>

							<div class="item-collection home">

								<h3>home collection</h3>

								<h4>cozy fabric, warm and fluffy texture</h4>

								<div class="item-button">

									<div class="button-bg3">
										<img src="/asstes/img/Discover/bg2.svg">
									</div>

									<button class="btn3">Explore</button>

								</div>

							</div>

							<div class="img-collection home">
								<img src="/asstes/img/Discover/home.png">
							</div>

						</div>

					</div>

				</div>

			</section>

		</div>
	</div>
</main>

<?php
require('parts/bottom.php');
?>
<?php
require('parts/footer.php');
?>