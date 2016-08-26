<div class="row post-related">
	<div class="small-12 columns">
		<p>Related posts</p>
	</div>
	<?php foreach(range(0,3) as $i) : ?>
		<div class="small-6 medium-3 columns">
			<a href="#" class="card">
				<img class="" src="http://lorempixel.com/g/400/260/" />
				<div class="card-section text-uppercase">
					<?php 
						$input = array('<i class="icon-desktop"></i>',
									   '<i class="icon-newspaper"></i>',
									   '<i class="icon-user"></i>');
						echo $input[array_rand($input, 1)];
					?>
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