<?php  
 $connect = mysqli_connect("localhost", "root", "", "testing");  
 $sql = "SELECT * FROM tbl_video LIMIT 3";  
 $result = mysqli_query($connect, $sql);  
 $video_id = '';  
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/tab-ico.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    Local Hiphop Music Channel
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <?php include '../../includes/link/css_link.php'?>
</head>
<body>
	<?php include '../../includes/navbar-user.php' ?>

<style>
	.card {
		background-color:rgba(255, 255, 255, 0.3)
	}
	.card-title {
		color: white;
	}
	.card-text {
		color: white;
	}
	#loadMore{
		background-color:rgba(255, 255, 255, 0.3)
	}
	.btn-success:hover{
		
	}
</style>

	<div class="section row" style="background-color: black;">
		<!-- Latest News-->
		<div class="container main-content col-lg-8 col-md-8 col-xs-8" id="load_data_table" style="margin-left: 50px;">
			<br>
			<br>
			<div class="heading row">
				<img src="../../assets/img/ico.png" style="height: 50px;"><h1 style="color: white;">atest News</h1>
			</div>
				<?php  
				while($row = mysqli_fetch_array($result))  
				{  
				?>  

				<div class="card">
				<div class="inner">
				<img src="../../assets/img/news6.jpg" class="card-img-top " style="height: 300px;object-fit: cover;">
				</div>
				<div class="card-body">
				<h5 class="card-title"><?php echo $row["video_title"]; ?> </h5>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. <button type="button" class="btn btn-secondary">Read more</button></p> 
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				</div>
				</div>



				<?php  
				$video_id = $row["video_id"];  
				}  
				?>  
				<div id="remove_row">  
				<div><button type="button" name="btn_more" data-vid="<?php echo $video_id; ?>" id="btn_more" class="btn btn-success form-control">Load More</button></div>  
				</div>  
		</div>
		<!-- End Latest News -->	
	</div>

	<!-- Sidebar -->
	<div id="sidebar" class="w-25" style="position: absolute; right: 0; top: 0; width: 200px; padding: 10px;">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<!-- Latest Release -->
		<h3 align="Center" style="margin: 0px; color: #ffffff;">Latest Release</h3>
			<div class="ad column" style="margin-top: 0px;margin-bottom: 30px;">
				<div class="ad row" style="margin-top: 15px">
					<div class="ad-image col-sm-4" >
					<img src="../../assets/img/clr.jpg" alt="Thumbnail Image" class="rounded-circle img-raised">
					</div>
					<div class="ad-about col-sm-8" style="padding: 0px">
					<p class="" style="margin-bottom: 0px;color: #ffffff; ">CLR</p>
					<div class="typography-line" style="padding-left: 0px; margin-bottom: 0px;color: #ffffff;">"A STARVING ARTIST"</div>
					<button class="btn btn-primary btn-icon btn-round" type="button" style="margin: 0px">
					<i class='fas fa-headphones' style='font-size:22px'></i>
					</button>
					</div>
				</div>

				<div class="ad row" style="margin-top: 15px">
					<div class="ad-image col-sm-4">
					<img src="../../assets/img/waiian.jpg" alt="Thumbnail Image" class=" rounded-circle img-raised">
					</div>
					<div class="ad-about col-sm-8" style="padding: 0px">
					<p class="" style="margin-bottom: 0px; color: #ffffff;">Waiian</p>
					<div class="typography-line" style="padding-left: 0px; margin-bottom: 0px; color: #ffffff;">"SOLO MISSION"</div>
					<button class="btn btn-primary btn-icon btn-round" type="button" style="margin: 0px">
					<i class='fas fa-headphones' style='font-size:22px'></i>
					</button>
					</div>
				</div>
			</div>
		<!-- End Latest Release -->

		<!-- Popular News -->
		<h3 align="Center" style="color: white;">Popular News</h3>
			<div class="card" style="width: 18rem; margin-bottom: 15px;">
				<div class="card-body" style="background-image: url('../../assets/img/news6.jpg');background-size: cover;">
					<div class="container" style="background-color:rgba(255, 255, 255, 0.3)">
					<h5 class="card-title">Card title</h5>
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
					</div>
				</div>
			</div>
			<div class="card" style="width: 18rem; margin-bottom: 15px;">
				<div class="card-body" style="background-image: url('../../assets/img/news6.jpg');background-size: cover;">
					<div class="container" style="background-color:rgba(255, 255, 255, 0.3)">
					<h5 class="card-title">Card title</h5>
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
					</div>
				</div>
			</div>
			<div class="card" style="width: 18rem; margin-bottom: 15px;">
				<div class="card-body" style="background-image: url('../../assets/img/news6.jpg');background-size: cover;">
					<div class="container" style="background-color:rgba(255, 255, 255, 0.3)">
					<h5 class="card-title">Card title</h5>
					<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<a href="#" class="card-link">Card link</a>
					<a href="#" class="card-link">Another link</a>
					</div>
				</div>
			</div>
		<!-- End Popular News -->

		<h3 align="Center" style="color: white;">Local Merch</h3>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style=" margin-bottom: 15px;" >
				<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner">
				<div class="carousel-item active">
				<img src="../../assets/img/tshirt/1.1.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="../../assets/img/tshirt/1.2.jpg" class="d-block w-100" alt="...">
				</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
			</div>
		<!-- footer -->	
		<?php include '../../includes/footer.php' ?>
		<!-- end footer -->
	</div>
	<!-- End Sidebar -->

    <?php include '../../includes/link/js_link.php'?>

<script>
			function fixMe(id) {
		    var e = $(id);
		    var lastScrollTop = 0;
		    var firstOffset = e.offset().top;
		    var lastA = e.offset().top;
		    var isFixed = false;
		    $(window).scroll(function(event){
		        if (isFixed) {
		            return;
		        }
		        var a = e.offset().top;
		        var b = e.height();
		        var c = $(window).height();
		        var d = $(window).scrollTop();
		        if (b <= c - a) {
		            e.css({position: "fixed"});
		            isFixed = true;
		            return;
		        }           
		        if (d > lastScrollTop){ // scroll down
		            if (e.css("position") != "fixed" && c + d >= a + b) {
		                e.css({position: "fixed", bottom: 0, top: "auto"});
		            }
		            if (a - d >= firstOffset) {
		                e.css({position: "absolute", bottom: "auto", top: lastA});
		            }
		        } else { // scroll up
		            if (a - d >= firstOffset) {
		                if (e.css("position") != "fixed") {
		                    e.css({position: "fixed", bottom: "auto", top: firstOffset});
		                }
		            } else {
		                if (e.css("position") != "absolute") {
		                    e.css({position: "absolute", bottom: "auto", top: lastA});
		                }               
		            }
		        }
		        lastScrollTop = d;
		        lastA = a;
		    });
		}
			fixMe("#sidebar");
</script>

<script>  
	 $(document).ready(function(){  
	      $(document).on('click', '#btn_more', function(){  
	           var last_video_id = $(this).data("vid");  
	           $('#btn_more').html("Loading...");  
	           $.ajax({  
	                url:"load_data.php",  
	                method:"POST",  
	                data:{last_video_id:last_video_id},  
	                dataType:"text",  
	                success:function(data)  
	                {  
	                     if(data != '')  
	                     {  
	                          $('#remove_row').remove();  
	                          $('#load_data_table').append(data);  
	                     }  
	                     else  
	                     {  
	                          $('#btn_more').html("No Data");  
	                     }  
	                }  
	           });  
	      });  
	 });  
</script>


</body>
</html>