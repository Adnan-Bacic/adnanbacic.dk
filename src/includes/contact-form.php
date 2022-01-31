<?php
$validFeedback = 'Fine! :)';
$invalidFeedback = 'Please fill out this field';
?>
<!--Mail from webpage-->
	<div class="row mx-auto col-xl-12 col-md-12 col-sm-12 pb-5" data-aos="fade-up">
		<div class="bg-dark text-light col-12 pt-3 rounded">
			<form class="needs-validation px-3 py-3" method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" novalidate>
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label for="validationDefault01">Name</label>
						<input type="text" class="form-control" id="validationDefault01" placeholder="Name" name="name" required>
						<div class="valid-feedback">
							<?php echo $validFeedback ?>
						</div>
						<div class="invalid-feedback">
							<?php echo $invalidFeedback ?>
						</div>
					</div>

					<div class="form-group col-12">
						<label for="validationDefault02">E-mail address</label>
						<input type="email" class="form-control" id="validationDefault02" placeholder="E-mail adress" name="email" required>
						<div class="valid-feedback">
							<?php echo $validFeedback ?>
						</div>
						<div class="invalid-feedback">
							<?php echo $invalidFeedback ?>
						</div>
					</div>
					
					<div class="col-md-12 mb-3">
						<label for="validationDefault03">Subject</label>
						<input type="text" class="form-control" id="validationDefault03" placeholder="Subject" name="subject" autocomplete="off" required>
						<div class="valid-feedback">
							<?php echo $validFeedback ?>
						</div>
						<div class="invalid-feedback">
							<?php echo $invalidFeedback ?>
						</div>
					</div>

					<div class="form-group col-12">
						<label for="validationDefault04">Message</label>
						<textarea class="mail-input form-control" id="validationDefault04" rows="3" placeholder="Message" name="message" required></textarea>
						<div class="valid-feedback">
							<?php echo $validFeedback ?>
						</div>
						<div class="invalid-feedback">
							<?php echo $invalidFeedback ?>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<!--
					<div class="custom-file col-8">
						<input type="file" class="custom-file-input" id="customFile" name="file">
						<label class="custom-file-label" for="customFile">Vælg fil</label>
						<div class="valid-feedback">
							Fint! :)
						</div>
						<div class="invalid-feedback">
							Udfyld venligst dette felt
						</div>
					</div>
					-->
					<button class="btn-main" type="submit" name="submit">Send</button>
				</div>
				<?php
					if(isset($_SESSION['mail-feedback'])){
						echo $_SESSION['mail-feedback'];
						unset($_SESSION['mail-feedback']);
					}
				?>
			</form>
			<?php include 'includes/mail.php' ?>
		</div>
	</div>
<!--End mail from web-->