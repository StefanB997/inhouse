<?php
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    include('includes/general.php');
    $sql = 'select * from posts';

    $query = $db->query($sql);
    $posts = $query->fetchAll(PDO::FETCH_ASSOC);
		
?>
<?php
	$current = "search";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/search.css">
    <link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
	<?php include('includes/header.php')?>
	<section>
		<div class="search-bar-container">
			<div class="search-bar-holder">
  				<input type="text" placeholder="Search..">
				<button type="submit" id="search-but"><i class="fa fa-search"></i></button>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				  Филтер
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Филтер:</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<label>
				      		<h6>Квадратура</h6>
				      	Од:
							<select>
							  <option label="20">20</option>
							  <option label="50">50</option>
							  <option label="80">80</option>
							  <option label="100">100</option>
							</select>
				      	До:
				      	<select>
							  <option label="140">140</option>
							  <option label="220">220</option>
							  <option label="330">330</option>
							  <option label="400">400</option>
							</select>
				      	</label>
				      	<hr>
				      	<label>
				      		<h6>Дворно Место</h6>
				      		Од:
							<select>
							  <option label="20">20</option>
							  <option label="50">50</option>
							  <option label="80">80</option>
							  <option label="100">100</option>
							</select>
				      	До:
				      	<select>
							  <option label="140">140</option>
							  <option label="220">220</option>
							  <option label="330">330</option>
							  <option label="400">400</option>
							</select>
				      	</label>
				      	<hr>
				      	<label>
				      		<h6>Година На Градба</h6>
				      		Од:
							<select>
							  <option label="1950">1950</option>
							  <option label="1960">1960</option>
							  <option label="1970">1970</option>
							  <option label="1980">1980</option>
							</select>
				      	До:
				      	<select>
							  <option label="2000">2000</option>
							  <option label="2010">2010</option>
							  <option label="2015">2015</option>
							  <option label="2018">2018</option>
							</select>
				      	</label>
				      	<hr>
				      	<label>
				      		<h6>Цена</h6>
				      		Од:
							<select>
							  <option label="1000">20</option>
							  <option label="2000">50</option>
							  <option label="3000">80</option>
							  <option label="4000">100</option>
							</select>
				      	До:
				      	<select>
							  <option label="10000">140</option>
							  <option label="15000">220</option>
							  <option label="20000">330</option>
							  <option label="30000">400</option>
							</select>
				      	</label>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary">Барај</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="listing-container">
			<?php
		 	foreach($posts as $key => $post) {
				if($key % 4 == 0) {
					echo '<div class="row">';
				    }
				echo '<div class="list-item">';
				echo '<a href="item.php?id='. $post['id'] .'"><div class="item-container">';
				echo '<div class="item-img">';
				echo '<img src="postpics/'.$post['img_1'].'">';
				echo "</div>";
				echo "<div class = 'item-list-desc'>";
				echo '<p> Локација: ' .$post["address"].'</p>';
				echo '<p> Година: ' .$post["year_built"].'</p>';
				echo '<p> Квадратура: ' .$post["sqmeter"].'</p>';
				echo '<p><h5>Цена: '.$post["price"].'</h5>';
				echo "</div>";
				echo "</a>";
				echo "</div>";
				echo "</div>";
				if($key % 4 == 3) {
					echo '</div>';
				} 			
			 } ?>
		</div>

	</section>
    <div class="footer-clean">
        <?php include('includes/footer.php'); ?>
    </div>
    <script>
    	$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>