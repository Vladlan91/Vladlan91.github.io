<?php 
  require_once "functions/functions.php";
   $news = getNews(1);
  ?>
<div class="news">
<div class="container">
				<div class="team-top">
				<h3>НОВИНИ</h3>
					<img class="img-responsive line-grid" src="images/li-1.png" alt=""/> 
					</div>
   
   <div class="container">


            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <?php for($i = 0; $i < count($news); $i++) {
                  echo  '<h2 class="section-heading">'.$news[$i]["title"].'</h2>
                    <h1 class="lead">'.$news[$i]["intro_text"].'</h1>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="'.$news[$i]["avatar"].'.jpg">
                </div>
            </div>
            <h1 class="lead"> '.$news[$i]["full_text"].'</h1>
               
                   <div class="bottom-blog">
					    <span class="john"> дата публікації <b>'.$news[$i]["day"].'</b></span> <span class="john"> <b>'.$news[$i]["year"].'</b></span><br>
						<span class="john"> автор <b>'.$news[$i]["avtor"].'</b></span>
						
				  </div>';
				  }
?>
</div>
</div>