<?php 
  require_once "functions/functions.php";
  $news = getNews(10,'');
  ?>
<div class="footer">
		<div class="footer-grid-bottom">
				<div class="container">
					<div class="col-md-4 bottom-footer-left">
						<h6>Про нас</h6>	
						<p>Ми молода, проте перспективна компанія, наша ціль - конкурентний, прибутковий український бізнес на ринку Європи. </p>
						<p>Наш інструмент - це ефективна концепція менеджменту, яка була винайдена в компанії <a class="base-line">TOYOTA </a>.</p>			
					</div>
					<div class="col-md-4 bottom-footer-right">
						<h6>Photo stream</h6>
						<div class="photo-left">

		<?php for($i = 0; $i < count($news); $i++) {

	    echo "<div class=\"photo-ten\">";
	    echo  '<a href="#new?id='.$news[$i]["id"].'"><img  src="'.$news[$i]["avatar"].'.jpg" alt="" /></a>
				  </div>';}
        ?>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-4 bottom-footer-left">
						<h6>Остані новини</h6>	
		<?php for($i = 0; $i < 2; $i++) {
	    echo  '<p>'.$news[$i]["title"].'</p>
						<a href="#new?id='.$news[$i]["id"].'" class="base-line"> Детальніше...</a>';}
        ?>
						</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-bottom">
				
	 		</div>
	 		<script type="text/javascript">
						$(document).ready(function() {
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				</div>