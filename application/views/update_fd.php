		<div id="wrapper">
			<section>
				<div class="col">
		      		<h3><i class="fa fa-upload"></i> <?php echo $subhead; ?></h3>

		      		<?php if ($message != 'Form validation error.') { ?>
				      			<p style="color:red"><?php echo $message; ?></p>
		      		<?php } ?>

					<?php echo form_open(base_url().'update/fd'); ?>
						<p>
					        <label for="url"><h4>FD Salaries URL</h4></label> 
					        <input style='width: 650px' id="url" type="url" name="url" />
					        <?php echo form_error('url'); ?>
						</p>

						<p>
					        <br>
					        <?php echo form_submit( 'submit', 'Submit'); ?>
						</p>

					<?php echo form_close(); ?>
				</div>
			</section>