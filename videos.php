<?php require_once('config.php') ?>

<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php $videos = getPublishedVideos(); ?>

<?php require_once('includes/head_section.php') ?>
<title>LifeBlog | Home </title>
</head>
<body>
  <!-- container - wraps whole page -->
  <div class="container">
    <!-- navbar -->
    <?php include('includes/navbar.php') ?>
    <!-- // navbar -->

    <!-- banner -->
    <?php include('includes/banner.php') ?>

    <!-- Page content -->
    <p align="center"><iframe id="player" width="560px" height="315px" src=
    "<?php echo 'https://www.youtube.com/embed/' . $videos[0]['id'] ?>" frameborder="0" allow="autoplay; 
     encrypted-media" allowfullscreen></iframe><p>
		
    <div class="content">
      <h2 class="content-title">Other videos</h2>
      <hr>

      <?php foreach ($videos as $video): ?>
        <button style='background:white;border:none;' onclick="changePlayer($video)">
	<div class="post" style="border:0;margin-left:0px;">
        <img src="<?php echo 'https://img.youtube.com/vi/' . $video['id'] . '/maxresdefault.jpg' ?>" class="post_image" style="width:260px;height:146px;" alt="">


	  <a href="#changed">
	    <div class="post_info">
	      <h3>Video Title</h3>
		<div class="info">
		  <span>Video description</span>
		</div>
	    </div>
	  </a>
	</div>
        </button>
      <?php endforeach ?>

    </div>
    <!-- // Page content -->

		<!-- footer -->
		<?php include('includes/footer.php') ?>