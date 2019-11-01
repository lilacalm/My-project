	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	  <h5 class="my-0 mr-md-auto font-weight-normal">Tibb</h5>
	  <nav class="my-2 my-md-0 mr-md-3">
	    <a class="p-2 text-dark" href="#">Əsas</a>
	    <a class="p-2 text-dark" href="#">Əlaqə</a>
	  </nav>

	<?php
	if ($_COOKIE['user'] =='Yes'):
	?>
	  <a class="btn btn-outline-primary" href="./auth.php">
	  	kabinet
	  </a>

	  <?php else: ?>
	  <a class="btn btn-outline-primary" href="./auth.php" onclick="bEnter()">Daxil ol</a>
	<?php endif; ?>
	</div>
