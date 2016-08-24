<?php include('inc/header.php'); ?>

<div class="row text-center align-center subheading-nobg">
	<div class="small-12 columns">
		<h1 class="subheading-nobg-h1">Community of Practice for OER adoption</h1>
	</div>

	<div class="small-10 columns">
		<p class="subheading-p">Our mission is to expand access to education by promoting awareness and adoption of Open Educational Resources (OER).<br />
			Over 250 colleges have joined us and many more participate in our activities and use resources on the website.<br />
			Find out how to become a member of CCCOER at the Open Education Consortium.
		</p>

		<a href="#" class="button hollow text-uppercase">More about CCCOER</a>
	</div>
</div>


<!-- original content goes in this container -->
<div class="off-canvas-content" data-off-canvas-content>

	<div class="home-collage">
		<div class="row align-center">
			<div class="medium-3 columns">
				<a href="#" class="button hollow expanded white text-uppercase">View All Blogs</a>
			</div>
			<div class="medium-3 columns">
				<a href="#" class="button hollow expanded white text-uppercase">View All Webinars</a>
			</div>
			<div class="medium-3 columns">
				<a href="#" class="button hollow expanded white text-uppercase">View All Members</a>
			</div>
		</div>

		<div class="collage row">
			<?php foreach(range(0,11) as $i) : ?>
				<div class="small-6 medium-3 columns">
					<a href="#" class="card">
						<img class="" src="http://lorempixel.com/g/400/260/" />
						<div class="card-section text-uppercase">
							Member Highlights
						</div>
						<div class="card-white">
							<div class="card-title">
								<?php 
									$input = array('The AVU Peace Management and Conflict Resolution (PMCR) MOOC',
									'URJCx: Abiertos al Conocimiento',
									'Online Education Resources are online at MIT',
									'Center for Open Education at Hokkaido University',
									'Online Education',
									'New Webinar',
									'The AVU Peace Management and Conflict Resolution (PMCR) MOOC and a much longer title, just in case');

									echo $input[array_rand($input, 1)];
								?>
							</div>
							<div class="card-meta">12 hours ago</div>
						</div>
					</a>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row align-center">
			<div class="medium-3 columns">
				<a href="#" class="button hollow expanded white text-uppercase">Load More</a>
			</div>
		</div>
	</div>

	<div class="home-info">
		<div class="row">
			<div class="small-12 medium-6 columns home-info-tile">
				<h2 class="home-info-title">Learn</h2>
				<p>Use the links below to find open textbooks and open courseware for community college courses. Browse 750+ Open Textbooks by Subject Find 150+ peer and accessibility reviews of open textbooks at College Open Textbooks</p>
				<a href="#" class="button green-light no-radius text-uppercase">Learn more</a>
			</div>
			<div class="small-12 medium-6 columns home-info-tile">
				<h2 class="home-info-title">Plan</h2>
				<p>Attend our monthly educational outreach webinars featuring faculty who are engaged in open educational resource development and re-use. View the archived recordings and slides.</p>
				<a href="#" class="button green-light no-radius text-uppercase">Learn more</a>
			</div>
			<div class="small-12 medium-6 columns home-info-tile">
				<h2 class="home-info-title">OER Degrees</h2>
				<p>Many colleges promote the use of OER on their campuses by providing information and networking on their websites. If you would like your college website added, please contact us.</p>
				<a href="#" class="button green-light no-radius text-uppercase">Learn more</a>
			</div>
			<div class="small-12 medium-6 columns home-info-tile">
				<h2 class="home-info-title">Connect</h2>
				<p>Check out the Campus Promo Kit for help in promoting the use of OER on your campus and to provide training and tutorials for faculty on best practices for adoption and sharing of OER.</p>
				<a href="#" class="button green-light no-radius text-uppercase">Learn more</a>
			</div>
		</div>
	</div>

	<div class="home-social">
		<div class="row">
			<div class="small-12 columns text-center home-social-cta">
				<p class="text-uppercase">Tweet with us by using #CCCOER Hashtag</p>
			</div>

			<?php foreach(range(0,3) as $i) : ?>
				<div class="small-6 medium-3 columns">
					<div class="card-social">
						<div class="card-social-avatar clearfix">
							<img src="http://lorempixel.com/g/54/54/">
							<div>
								J Glapa-Grossklag<br />
								<a href="#">@JGlapaGrossklag</a>
							</div>
						</div>
						<p>New blog about the Open Education Global Conference 2017 in Cape Town: t.co/OvFXLqhcFs #oeglobal #OER @oeconsortium</p>
						<div class="card-social-meta">
							31 mins ago on Twitter
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="row align-center home-social-divider">
			<div class="small-2 columns">
				<hr />
			</div>
		</div>

		<div class="row align-center">
			<span class="text-upperace">Follow our social media pages</span>
		</div>
	</div>

	<div class="home-partners">
		<div class="row align-center">
			<div class="small-12 columns text-center home-partners-title">
				<p class="text-uppercase">Partners</p>
			</div>

			<div class="columns shrink">
				<img src="/images/Hewlett-Foundation-Logo.png" />
			</div>
			<div class="columns shrink">
				<img src="/images/Lumen-1.png" />
			</div>
			<div class="columns shrink">
				<img src="/images/ATD_logo.png" />
			</div>
			<div class="columns shrink">
				<img src="/images/sri-logo.png" />
			</div>
		</div>
	</div>

<!-- </div> -->
<?php include('inc/footer.php'); ?>	