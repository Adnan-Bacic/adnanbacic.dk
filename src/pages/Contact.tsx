import React from 'react';
import { ContactForm } from '../components'

const Contact = () => {
  return (
    <>
      <section className="container">
		<main role="main">
		<div className="row">
			<div className="col-12 text-center pt-5">
				<h1>How can i be contacted?</h1>
			</div>
		</div>

		<div className="row">
			<div className="col-12 text-center">
				<p>If you want to contact me you can do so on the following E-mail address:</p>
				<div className="font-weight-bold">ab-one@adnanbacic.dk</div>
				<br />
				<p>You can also contact me directly from here:</p>
			</div>
		</div>
		<ContactForm></ContactForm>
		</main>		
</section>
    </>
  );
};

export default Contact;
