<div class="container">
	<ol class="breadcrumb">
		<li>
			<a href="<?=base_url()?>students">Home</a>
		</li>
		
		<li class="active">Professors</li>
	</ol>
</div>
<div class="container-fluid">
	<h1 class="text-center title">Professors by Department</h1>
	<br><br>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="course-container">
				<a href="<?=base_url()?>students/professor_by_department/<?=$ITs_link->course_id?>">
					<img src="<?=asset_url()?>img/BSIT.jpg" alt="" class="img-responsive course-img center-block">
					<div class="overlay center-block">
						<h2 class="text-center title"><i class="fa fa-cloud-upload"></i><br>Bachelor of Science in Information Technology</h2>
						<span><i class="fa fa-user-o"></i>&nbsp;&nbsp;<?=$ITs?></span>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="course-container">
				<a href="<?=base_url()?>students/professor_by_department/<?=$CSs_link->course_id?>">
					<img src="<?=asset_url()?>img/BSCS.jpg" alt="" class="img-responsive course-img center-block">
					<div class="overlay center-block">
						<h2 class="text-center title"><i class="fa fa-code"></i><br>Bachelor of Science in Computer Science</h2>
						<span class="center-block"><i class="fa fa-user-o"></i>&nbsp;&nbsp;<?=$CSs?></span>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="course-container">
				<a href="<?=base_url()?>students/professor_by_department/<?=$CEs_link->course_id?>">
					<img src="<?=asset_url()?>img/CE.jpg" alt="" class="img-responsive course-img center-block">
					<div class="overlay center-block">
						<h2 class="text-center title"><i class="fa fa-rocket"></i><br>Bachelor of Science in Civil Engineering</h2>
						<span class="center-block"><i class="fa fa-user-o"></i>&nbsp;&nbsp;<?=$CEs?></span>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="course-container">
				<a href="<?=base_url()?>students/professor_by_department/<?=$BSEDs_link->course_id?>">
					<img src="<?=asset_url()?>img/BSED.jpg" alt="" class="img-responsive course-img center-block">
					<div class="overlay center-block">
						<h2 class="text-center title"><i class="fa fa-institution"></i><br>Bachelor in Secondary Education</h2>
						<span class="center-block"><i class="fa fa-user-o"></i>&nbsp;&nbsp;<?=$BSEDs?></span>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="course-container">
				<a href="<?=base_url()?>students/professor_by_department/<?=$BEEDs_link->course_id?>">
					<img src="<?=asset_url()?>img/BEED.jpg" alt="" class="img-responsive course-img center-block">
					<div class="overlay center-block">
						<h2 class="text-center title"><i class="fa fa-puzzle-piece"></i><br>Bachelor in Elementary Education</h2>
						<span class="center-block"><i class="fa fa-user-o"></i>&nbsp;&nbsp;<?=$BEEDs?></span>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="course-container">
				<a href="<?=base_url()?>students/professor_by_department/<?=$BLISs_link->course_id?>">
					<img src="<?=asset_url()?>img/BLISS.jpg" alt="" class="img-responsive course-img center-block">
					<div class="overlay center-block">
						<h2 class="text-center title"><i class="fa fa-book"></i><br>Bachelor in Libary and Information Science</h2>
						<span class="center-block"><i class="fa fa-user-o"></i>&nbsp;&nbsp;<?=$BLISs?></span>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>