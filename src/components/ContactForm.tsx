import React from 'react'

const ContactForm = () => {
    return(
        <>
        <div className="row mx-auto col-xl-12 col-md-12 col-sm-12 pb-5">
		<div className="bg-dark text-light col-12 pt-3 rounded">
        todo
			<form className="needs-validation px-3 py-3" method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" noValidate>
				<div className="form-row">
					<div className="col-md-12 mb-3">
						<label htmlFor="validationDefault01">Name</label>
						<input type="text" className="form-control" id="validationDefault01" placeholder="Name" name="name" required/>
						<div className="valid-feedback">
                            todo
						</div>
						<div className="invalid-feedback">
                        todo
						</div>
					</div>

					<div className="form-group col-12">
						<label htmlFor="validationDefault02">E-mail address</label>
						<input type="email" className="form-control" id="validationDefault02" placeholder="E-mail adress" name="email" required/>
						<div className="valid-feedback">
                        todo
						</div>
						<div className="invalid-feedback">
                        todo
						</div>
					</div>
					
					<div className="col-md-12 mb-3">
						<label htmlFor="validationDefault03">Subject</label>
						<input type="text" className="form-control" id="validationDefault03" placeholder="Subject" name="subject" autoComplete="off" required/>
						<div className="valid-feedback">
                        todo
						</div>
						<div className="invalid-feedback">
                        todo
						</div>
					</div>

					<div className="form-group col-12">
						<label htmlFor="validationDefault04">Message</label>
						<textarea className="mail-input form-control" id="validationDefault04" rows={3} placeholder="Message" name="message" required></textarea>
						<div className="valid-feedback">
                        todo
						</div>
						<div className="invalid-feedback">
                        todo
						</div>
					</div>
				</div>
				
				<div className="form-group">
					<button className="btn-main" type="submit" name="submit">Send</button>
				</div>
				
			</form>
		</div>
	</div>
        </>
    )
}

export default ContactForm