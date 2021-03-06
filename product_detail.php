<?php include "head.php";?>

<body class="animsition">

	<!-- Header -->
	<?php include "header.php";?>
<?php 
//include "common/dl.php";
$id=$_GET['id'];
$mobile=getProduct($id);
$images=getImagesByPid($mobile['id']);
$products=getProductsByCid($mobile['cid']);
$featuresList=getFeaturesListByCid($mobile['cid']);
$featuresValues=getFeaturesValuesByPid($mobile['id']);
$category=getCategory($mobile['cid']);
$Pimage=getImagesByPid($mobile['id'])[0];
$categories=getCategories();

?>
	

	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.php" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="product.php" class="s-text16">
			Electronics
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="#" class="s-text16">
			<?php echo $category['name'];?>
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
				<?php echo $mobile['name'];?>
		</span>
	</div>

		<!-- Header Mobile -->
		

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">

			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"><ul class="slick3-dots" role="tablist" style=""><li class="slick-active" role="presentation"><img src=" images/thumb-item-01.jpg "><div class="slick3-dot-overlay"></div></li><li role="presentation" class=""><img src=" images/thumb-item-02.jpg "><div class="slick3-dot-overlay"></div></li><li role="presentation" class=""><img src=" images/thumb-item-03.jpg "><div class="slick3-dot-overlay"></div></li></ul></div>

					<div class="slick3 slick-initialized slick-slider slick-dotted">
						<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1503px;"><div class="item-slick3 slick-slide slick-current slick-active" data-thumb="images/thumb-item-01.jpg" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 501px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
							<div class="wrap-pic-w">
								<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">
							</div>
						</div><div class="item-slick3 slick-slide" data-thumb="images/thumb-item-02.jpg" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11" style="width: 501px; position: relative; left: -501px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease;">
							<div class="wrap-pic-w">
								<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">
							</div>
						</div><div class="item-slick3 slick-slide" data-thumb="images/thumb-item-03.jpg" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12" style="width: 501px; position: relative; left: -1002px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease;">
							<div class="wrap-pic-w">
								<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">
							</div>
						</div></div></div>

						

						
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?php echo $mobile['name'];?>					
				</h4>

				<span class="m-text17">
					&#8377; <?php echo $mobile['price'];?>
				</span>

				
				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						
					</div>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Fetaures
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<table class="table table-striped table-bordered">
							<tr>
								<th>Features</th>
								<th>Values</th>
							</tr>
							<?php for($i=0;$i<count($featuresList);$i++) { ?>
							<tr>
								<td><?php echo $featuresList[$i]['name']; $id=$featuresList[$i]['id'];?></td>
								<td><?php echo $featuresValues[$i]['value'];?></td>
							</tr>
							<?php }?>
						</table>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<?php foreach($products as $product) { ?>
						
					<?php if($mobile['id']!=$product['id']) { ?>		
					<div class="item-slick2 p-l-15 p-r-15">
						
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<?php $image=getImagesByPid($product['id'])[0] ?>
								<img style="height: 250px;" src="images/<?php echo $image['url']; ?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product_detail.php?id=<?php echo $product['id']; ?>" class="block2-name dis-block s-text3 p-b-5">
									<?php echo $product['name']; ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									&#8377; <?php echo $product['price']; ?>
								</span>
							</div>
						</div>
					</div>
				<?php }
					}
				?>
				</div>
			</div>

		</div>
	</section>


	<!-- Footer -->
	<?php include "footer.php"; ?>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<?php include "body.php";?>