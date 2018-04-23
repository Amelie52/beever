	<header>
	<nav class="classic_nav grid-2-1">
		<div>
			<ul class="unstyled txtleft">
				<div class="logo_titre">
					<a href="../controler/c_index.php" title="Home"><img src="../photos/logo_beever.svg" alt="logo beever">Beever</a>
				</div>
				<li><a href="../controler/c_list_cur_projects.php">Current project</a></li>
				<li><a href="../controler/c_list_fund_projects.php">Funded project</a></li>
				<li><a href="../controler/c_about.php">About Beever</a></li>
			</ul>
		</div>

		<div>
			<ul class="unstyled txtright">
				<li><a href="../controler/c_crea_project.php" class="right">CREATE A NEW PROJECT</a></li>
				<li><a href="../controler/c_profile.php" class="right" title="account"><i class="fa fa-user" aria-hidden="true"></i> </a></li>
				<li><a href="../controler/c_myfavorite.php?id=<?php echo $user_id ?>" class="right" title="favourites"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</nav>
	
	<nav class="mobile_nav">
		<div class="title_mobile">
			<h1>Beever</h1>
			<i class="fa fa-sort-desc fa-2x" aria-hidden="true"></i>
		</div>
		<div class="w100 menu">
			<ul class="unstyled">
				<li><a href="../controler/c_index.php">Home</a></li>
				<li><a href="../controler/c_list_cur_projects.php">Current project</a></li>
				<li><a href="../controler/c_list_fund_projects.php">Project financed</a></li>
				<li><a href="../controler/c_about.php">About Beever</a></li>
			</ul>
		</div>

		<div class="w100 scdMenu">
			<div class="">
				<button onclick="window.location.href='../controler/c_crea_project.php'" class="btnCreaProj">CREATE A NEW PROJECT</button>
				<a href="../controler/c_profile.php" title="account"><i class="fa fa-user" aria-hidden="true"></i></a>
				<a href="../controler/c_myfavorite.php?id=<?php echo $user_id ?>" class="right" title="favourites"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
			</div>
		</div>
	</nav>
</header>
	