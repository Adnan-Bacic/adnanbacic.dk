import React from 'react';

const Home = () => {
  return (
    <>
	<section className="container-fluid">
		<div className="row hero-container">
			<div className="col-12">
				<div className="col-8 mx-auto">
					<div className="row">
						<div className="col-12" data-aos="fade-right">
							<p className="h1 text-light text-center font-weight-bold hero-title">I <span className="hero-focus">design</span> and <span className="hero-focus">build</span><br /> modern websites</p>
						</div>
					</div>
					<div className="row">
						<div className="col-12 mb-5" data-aos="fade-right">
							<p className="text-light text-center hero-subtitle">Frontend web developer</p>
						</div>
					</div>
					<div className="row">
						<div className="col text-center mb-5">
							<a href="contact.php">
								<button id="hero-btn-1" className="text-center mb-3 mr-5" data-aos="fade-right">Contact</button>
							</a>
							<a href="about.php">
								<button id="hero-btn-2" className="text-center mr-3" data-aos="fade-right">About</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
      <section
        className="container"
      >
        <main
          role="main"
        >
          <div
            className="row"
          >
            <div
              className="text-center mx-auto mt-5 col-12 mb-5"
            >
              <h1>Frontend developer from Denmark</h1>
            </div>
          </div>

          <div
            className="row mb-5"
          >
            <div
              className="col-lg-6 col-md-6"
              data-aos="fade-up"
            >
              <p>I am a frontend developer from Denmark. I have experience working mainly with web based technologies. These include Javascript, Javascript frameworks, PHP and more. I am always passionate about learning more and improving my skillset.</p>
            </div>
            <div
              className="col-lg-6 col-md-6"
              data-aos="fade-up"
            >
              <p>I can work independently as well as in teams. I always do my best to complete whichever task i am currently working with. Here you can see some of my work.</p>
            </div>
          </div>
        </main>

        <div
          className="row text-center pb-5"
        >
          <div
            className="col-lg-3 col-sm-12 mb-5"
            title="Javascript"
            data-aos="fade-up"
          >
            <a
              href="javascript.php"
            >
              <i
                className="fab fa-js-square customFA"
              />
            </a>
            <a
              href="javascript.php"
            >
              <button
                className="btn-main"
              >
                Javascript
              </button>
            </a>
          </div>

          <div
            className="col-lg-3 col-sm-12 mb-5"
            title="Vue"
            data-aos="fade-up"
          >
            <a
              href="vue.php"
            >
              <i
                className="fab fa-vuejs customFA"
              />
            </a>
            <a
              href="vue.php"
            >
              <button
                className="btn-main"
              >
                Vue
              </button>
            </a>
          </div>

          <div
            className="col-lg-3 col-sm-12 mb-5"
            title="React"
            data-aos="fade-up"
          >
            <a
              href="react.php"
            >
              <i
                className="fab fa-react customFA"
              />
            </a>
            <a
              href="react.php"
            >
              <button
                className="btn-main"
              >
                React
              </button>
            </a>
          </div>

          <div
            className="col-lg-3 col-sm-12 mb-5"
            title="React Native"
            data-aos="fade-up"
          >
            <a
              href="react-native.php"
            >
              <i
                className="fab fa-react customFA"
              />
            </a>
            <a
              href="react-native.php"
            >
              <button
                className="btn-main"
              >
                React Native
              </button>
            </a>
          </div>

          <div
            className="col-lg-3 col-sm-12 mb-5"
            title="PHP"
            data-aos="fade-up"
          >
            <a
              href="php.php"
            >
              <i
                className="fab fa-php customFA"
              />
            </a>
            <a
              href="php.php"
            >
              <button
                className="btn-main"
              >
                PHP
              </button>
            </a>
          </div>

          <div
            className="col-lg-3 col-sm-12 mb-5"
            title="Wordpress"
            data-aos="fade-up"
          >
            <a
              href="wordpress.php"
            >
              <i
                className="fab fa-wordpress customFA"
              />
            </a>
            <a
              href="wordpress.php"
            >
              <button
                className="btn-main"
              >
                Wordpress
              </button>
            </a>
          </div>

          <div
            className="col-lg-3 col-sm-12 mb-5"
            title="Angular"
            data-aos="fade-up"
          >
            <a
              href="angular.php"
            >
              <i
                className="fab fa-angular customFA"
              />
            </a>
            <a
              href="angular.php"
            >
              <button
                className="btn-main"
              >
                Angular
              </button>
            </a>
          </div>

          <div
            className="col-lg-3 col-sm-12 mb-5"
            title="npm"
            data-aos="fade-up"
          >
            <a
              href="npm.php"
            >
              <i
                className="fab fa-npm customFA"
              />
            </a>
            <a
              href="npm.php"
            >
              <button
                className="btn-main"
              >
                NPM
              </button>
            </a>
          </div>
        </div>
      </section>
    </>
  );
};

export default Home;
