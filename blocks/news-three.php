<?php 
  require_once "functions/functions.php";
  $news = getNews(3,'');
  ?>
  
<div class="blog" id="blog">
			<div class="container">
				<div class="possible-top">
					<h3>НОВИНИ</h3>
					<img class="img-responsive line-grid" src="images/li-1.png" alt=""/> 
				</div>
                
			<div class="blog-bottom">

				  <?php for($i = 0; $i < count($news); $i++) {

				  	if($i == 1)

				  	echo  ' <div class="blog-bottom">
					<div class="col-md-6 post-grid">
						<h3 class="the-blog">'.$news[$i]["title"].'</h3>
							<img class="img-responsive line-post" src="images/li-5.png" alt=""/> 
						<p>'.$news[$i]["intro_text"].'</p>	
						<a href="#new?id='.$news[$i]["id"].'" class="base-line"> Детальніше...</a>
					</div>
					<div class="col-md-6">
						<div class="col-md-8">
							<img class="img-responsive blog-picture" src="'.$news[$i]["avatar"].'.jpg">
						</div>
						<div class="col-md-4 blog-date">
							<h6>'.$news[$i]["day"].'</h6>
							<label>'.$news[$i]["year"].'</label>
						</div>
							<div class="clearfix"> </div>
					</div>
						<div class="clearfix"> </div>
				</div>';
				
                else

                 echo  '  <div class="blog-bottom">
					<div class="col-md-6">
						<div class="col-md-4 blog-date">
							<h6>'.$news[$i]["day"].'</h6>
							<label>'.$news[$i]["year"].'</label>
						</div>
						<div class="col-md-8">
							<img class="img-responsive line-post" src="'.$news[$i]["avatar"].'.jpg">
						</div>
							<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 post-grid">
						 <h3>'.$news[$i]["title"].'</h3>
						<img class="img-responsive line-post" src="images/li-4.png" alt=""/> 
						<p>'.$news[$i]["intro_text"].'</p>	
						<a href="#new?id='.$news[$i]["id"].'" class="base-line"> Детальніше...</a>
					</div>
					<div class="clearfix"> </div>
				</div>';
				  }
?>

              

		<div class="clearfix"> </div>
			</div>
		</div>
		</div>