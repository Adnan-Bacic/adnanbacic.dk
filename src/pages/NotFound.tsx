import React from 'react';

const NotFound = () => {
  return (
    <>
      <section
        className="container-fluid"
        data-aos="fade-up"
      >
        <main
          role="main"
        >
          <div
            className="row"
          >
            <div
              className="col-12 text-center"
              title="404"
            >
              <i
                className="far fa-file-code customFA"
              />
            </div>
          </div>
          <div
            className="row"
          >
            <div
              className="col-12 mt-5 mb-5"
            >
              <h1
                className="text-center"
              >
                404
                <br />
                {' '}
                Page not found
              </h1>
            </div>
          </div>
          <div
            className="row"
          >
            <div
              className="col-12 text-center"
            >
              <button
                id="backbtn"
                className="btn-main"
              >
                Go to last page
              </button>
            </div>
            <div
              className="col-12 text-center"
            >
              <a
                href="index.php"
              >
                <button
                  className="btn-main"
                >
                  Go to frontpage
                </button>
              </a>
            </div>
          </div>
        </main>
      </section>
    </>
  );
};

export default NotFound;
