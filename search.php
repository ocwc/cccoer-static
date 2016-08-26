<?php include('inc/header.php'); ?>

<div class="subheading-bluebg">
</div>

<!-- original content goes in this container -->
<div class="off-canvas-content subheading-narrow" data-off-canvas-content>
	<div class="row align-center">
		<div class="small-12 columns post-title-container">
			<h1 class="post-title u-color-white">Search Results - <i>resources</i></h1>
		</div>
	</div>
	<div class="post-content post-content-archive post-content-left-meta row">

		<form class="small-12 columns search-form">
		  <div class="row align-center">
		    <div class="medium-5 medium-offset-1 columns">
		      <label>Search CCCOER Archives
		        <input type="text" placeholder="Enter search keywords (e.g. Textbooks, OER)">
		      </label>
		    </div>
		    <div class="shrink columns">
		    	<label>&nbsp;</label>
		        <input type="submit" value="Search" class="button green">
		    </div>
		  </div>
		</form>

		<div class="small-12 medium-1 columns"></div>
		<div class="small-12 medium-11 columns post-content-body">
			<?php 
				$input = array('The AVU Peace Management and Conflict Resolution (PMCR) MOOC',
				'URJCx: Abiertos al Conocimiento',
				'Online Education Resources are online at MIT',
				'Center for Open Education at Hokkaido University',
				'Online Education',
				'New Webinar',
				'The AVU Peace Management and Conflict Resolution (PMCR) MOOC and a much longer title, just in case');
			?>

			<?php foreach(range(0,9) as $i) : ?>
			<div class="post-excerpt">
				<div class="post-share post-excerpt-share text-center hide-for-small-only">
					<span class="post-share-text">Share</span>

					<a href="#"><img src="/images/icons/icon-fb2.svg" /></a><br />
					<a href="#"><img src="/images/icons/icon-tw2.svg" /></a><br />
					<a href="#"><img src="/images/icons/icon-mail2.svg" /></a>
				</div>

				<h2 class="post-excerpt-title"><a href="#"><?php echo $input[array_rand($input, 1)]; ?></a></h2>
				<div class="post-excerpt-meta text-uppercase">Thursday, May 12 2016</div>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. [..]
				</p>

			</div>
			<?php endforeach; ?>

			<?php include('partials/_pagination.php'); ?>
		</div>
	</div>
<!-- </div> -->
<?php include('inc/footer.php'); ?>	