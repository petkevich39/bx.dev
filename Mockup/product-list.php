<?php include_once 'header.php';?>

<section class="bg-gray">
	<div class="container">
		<div class="row bx-motos">
			<div class="col-12 text-center">
				<br/><br/><br/><br/><br/><br/>
				<div class="ff-normal-24">Your Best Value Proposition</div>
				<br/>
				<div class="ff-normal-18">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit,
					sed do eiusmod tempor incididunt ut labore<br/>et dolore magna aliqua.
					Ut enim ad minim veniam,
				</div>
				<br/><br/><br/>
			</div>
			<?for ($i=0;$i < 3;$i++){?>
			<div class="col-12 col-md-6 col-lg-4">
				<div><img src="./img/moto_1.png" alt="moto_1" title="moto_1"/></div>
				<div class="ff-normal-24">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
				<div class="bx-link"><a class="ff-normal-14 underline" href="detail.php">Learn More</a> </div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div><img src="./img/moto_2.png" alt="moto_2" title="moto_2"/></div>
				<div class="ff-normal-24">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
				<div class="bx-link"><a class="ff-normal-14 underline" href="detail.php">Learn More</a> </div>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<div><img src="./img/moto_3.png" alt="moto_3" title="moto_3"/></div>
				<div class="ff-normal-24">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
				<div class="bx-link"><a class="ff-normal-14 underline" href="detail.php">Learn More</a> </div>
			</div>
			<?}?>
		</div>
	</div>
</section>



<?include_once 'footer.php';?>
