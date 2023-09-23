<?php 
	error_reporting(1);
	ob_start();
	session_start();
	include("lib/config.php");

	$sql = "SELECT * FROM `maquin_homebanner` WHERE `title` IN ('First Slider' ,'Slider text','Third Slider','four')";
	 $resp_slider=$db_cms->select_query($sql);

    $sql="SELECT * FROM `maquin_contents`";
    $resp_content=$db_cms->select_query($sql);

    $sql="SELECT * FROM `maquin_smart`"; 
    $resp_smart=$db_cms->select_query($sql);
    

   	$sql="SELECT * FROM `maquin_category` ";
    $resp_cate=$db_cms->select_query($sql);

    $sql="SELECT * FROM `maquin_imagecontent`";
    $resp_imgcon=$db_cms->select_query($sql);
   
    ?>
	<?php include_once('includes/header.php'); ?>

	<!-- ------------banner------------------ -->
	<div class="loader"></div>
	<?php 
	include_once('maq_banner.php'); ?>

	<!-- ------------banner end------------------ -->
<div class="clear"></div>
<div class="machinery_sec">
	<div class="wrapper">
		<h1><?=$resp_content[0]['home_title'] ?></h1>
		<p><?=get_symbol($resp_content[0]['home_content']) ?></p>
		<h3><?=get_symbol($resp_smart[0]['title'])?></h3>
	</div>
</div>
<div class="clear"></div>
	<!--/-------------------slider start----------------------------------->

<?php 
	include_once('maq_slider.php'); ?>
	
	<!--/-------------------slider end----------------------------------->
	<div class="clear"></div>
	<div class="machines_list">
		<h3>INVENTARIO DE MAQUINARIA</h3>
		<p>Selecciona tu categoría:</p>
	</div>

	<div class="inventory">
	<div class="wrapper">
		<div class="row">
			<div class="col-sm-12">
				<?php foreach ($resp_cate as $cat) { 
					$home_content=stripslashes($cat['description']);
					if (strlen($home_content)>300){ 
					$home_content=substr($home_content,0,300).'...';
				}
				?>
					
				
				<div class="col-sm-4" style="margin-top: 7px;">
					<div class="inv_head">
						<a href="catalogo.php?product_cat=<?=$cat['id']?>"><?=utf8_encode($cat['title'])?></a>
					</div>
					<div class="inv_bg">
					<a href="catalogo.php?product_cat=<?=$cat['id']?>"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $cat['image'];?>"></a>
						<div class="inv_graybg">
							<p><a href="catalogo.php?product_cat=<?=$cat['id']?>"><?=get_symbol($home_content)?></a></p>
						</div>
					</div>

				</div>
			<?php } ?>
				<!-- <div class="col-sm-4">
					<div class="inv_head">
						CRANES
					</div>
					<div class="inv_bg">
					<img src="images/bomba-de-concreto-en-venta.jpg" alt="machinery_img">
						<div class="inv_graybg">
							<p>Titan - Articulated - All Terrain - Drag - Canastilla - Cranes Broca</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="inv_head">
						CRANES
					</div>
					<div class="inv_bg">
					<img src="images/bomba-de-concreto-en-venta.jpg" alt="machinery_img">
						<div class="inv_graybg">
							<p>Titan - Articulated - All Terrain - Drag - Canastilla - Cranes Broca</p>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	</div>
	<div class="clear"></div>
	<!--/-------------------slider end----------------------------------->

	<div class="flg" style="background: url(<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[0]['image'];?>); background-repeat: no-repeat; ">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-12">
					<div class="col-sm-6">
						<img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[1]['image'];?>" alt="machinery_img">
						<img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[3]['image'];?>" alt="machinery_img" width="96%">
						<div>
						 <a href="https://www.maquinariajr.com.mx/subasta" class="flg_link"><button type="button" class=" flg_btn btn btn-outline-warning "><span style="padding-left: 7px;">CLICK AQUÍ</span></button> </a>
						</div>
					</div>
					<div class="col-sm-6 flg_right">
						<img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[2]['image'];?>" alt="machinery_img">
						<img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[4]['image'];?>" alt="machinery_img" width="96%">
						<div>
						 <a href="https://www.maquinariajr.com.mx/subasta" class="flg_link"><button type="button" class=" flg_btn btn btn-outline-warning "><span style="padding-left: 7px;">CLICK AQUÍ</span></button> </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div style="margin-top:40px;"></div>

<div class="blackaqua" style="background: url(<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[5]['image'];?>); background-repeat: no-repeat; ">
	<div class="fullwidth_wrapper">
    <ul>
    <li><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[6]['image'];?>" alt="camion-pipa-de-agua"></li>
    <li>
    <div class="blackaqua_img1"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[7]['image'];?>" alt="fabricacion-de-camiones-pipa-y-volteo"></div>
    <div class="blackaqua_img2"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[9]['image'];?>" alt="camion-pipa-de-agua.png"></div>
    </li>
    <li class="last"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[8]['image'];?>" alt="Fabricacion-camiones-de-volteo"></li>
    </ul>
    <div class="aquabtn"><a href="https://www.maquinariajr.com.mx/pipas_de_agua_jr"><img src="images/camiones-pipa-de-agua.png" alt="camiones-pipa-de-agua" /></a></div>
    </div>
</div>
<div class="home_testi" style="background: url(<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[10]['image'];?>); background-repeat: no-repeat; ">
	<div class="fullwidth_wrapper">
    <div class="testititle"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[11]['image'];?>" alt="Testimonial" /></div>
    <h3><?=utf8_encode($resp_imgcon[11]['mtitle'])?></h3>
    <div class="home_testi_col3">
    	<p><?=get_symbol($resp_imgcon[11]['content'])?></p>
        <div class="checkit"><a href="https://www.maquinariajr.com.mx/testimoniosjr">COMPRUÉBALO</a></div>
    </div>
    <div class="home_testi_col4">
    	<iframe src="<?php echo get_symbol($resp_imgcon[11]['ylink']);?>" allowfullscreen="1" frameborder="0" ></iframe>

    </div>
    <div class="clear"></div>
    </div>
</div>
<div class="guarantee">
	<div class="fullwidth_wrapper">
    <div class="guarantee_left"><a href="https://www.maquinariajr.com.mx/certificacion"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[12]['image'];?>" alt="certificate" /></a></div>
    <div class="guarantee_right"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[13]['image'];?>" alt="guarantee" /></div>
    <div class="clear"></div>
    </div>
</div>
<div class="machinery" style="background: url(<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[14]['image'];?>); background-repeat: no-repeat; ">
	<div class="fullwidth_wrapper">
	<div class="machinery_left"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[15]['image'];?>" alt="machinery-hunters" /></div>
    <div class="machinery_right">
    	<div class="macinery_title"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[16]['image'];?>" alt="machinery" /></div>
        <div class="machinery_click"><a href="https://www.maquinariajr.com.mx/certificacion"><img src="images/camiones-pipa-de-agua.png" alt="Click" /></a></div>
        <div class="macinery_fb"><a href="https://www.maquinariajr.com.mx/certificacion"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[17]['image'];?>" alt="machinery fb" /></a></div>
    </div>
    <div class="clear"></div>
    </div>
</div>
<div class="become_exp"><p>CONVIÉRTETE EN UN EXPERTO MIRANDO A:</p></div>	
<div class="our_channel" style="background: url(<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[18]['image'];?>); background-repeat: no-repeat; ">
	<div class="our_channel_main"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[19]['image'];?>" alt="Maquinaria-Pesada" /></div>
    <a href="https://www.youtube.com/user/maquinariajr"><img src="images/click-aqui-para-ver-maquinaria-pesada.png" height="89" alt="Click Here" /></a>
    <ul>
    <li class="animation_1"><a href="https://www.youtube.com/user/maquinariajr"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[20]['image'];?>" alt="subscribe" /></a></li>
    <li class="animation_2"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[21]['image'];?>" alt="Our Channel" /></li>
    <li class="animation_3"><img src="<?php echo $sitepath;?>webupload/thumb/banner/<?php print $resp_imgcon[22]['image'];?>" alt="Youtube" /></li>
    </ul>
</div>


<?php 
	include_once('includes/footer.php'); 
	
	?>  
</div>
</body>
</html>