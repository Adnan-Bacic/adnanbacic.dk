import React from 'react';
import { Link } from 'react-router-dom';

const Navbar = () => {
  return (
    <>
      <header>
        <nav
          className="navbar navbar-expand-lg navbar-light bg-dark"
        >
          <div
            className="container-fluid"
          >
            <Link
              to="/"
              className="navbar-brand text-light"
            >
              Adnan Bacic
            </Link>
            <button
              className="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span
                className="navbar-toggler-icon"
              />
            </button>
            <div
              className="collapse navbar-collapse"
              id="navbarSupportedContent"
            >
              <ul
                className="navbar-nav ms-auto mb-2 mb-lg-0"
              >
                <li
                  className="nav-item dropdown"
                >
                  <a
                    className="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Projects
                  </a>
                  <ul
                    className="dropdown-menu"
                    aria-labelledby="navbarDropdown"
                  >
                    <li>
                      <a
                        className="dropdown-item"
                        href="#"
                      >
                        Action
                      </a>
                    </li>
                    <li>
                      <a
                        className="dropdown-item"
                        href="#"
                      >
                        Another action
                      </a>
                    </li>
                    <li>
                      <a
                        className="dropdown-item"
                        href="#"
                      >
                        Something else here
                      </a>
                    </li>
                  </ul>
                </li>
                <li
                  className="nav-item"
                >
                  <Link
                    to="/about"
                    className="nav-link text-light"
                  >
                    About
                  </Link>
                </li>
                <li
                  className="nav-item"
                >
                  <Link
                    to="/contact"
                    className="nav-link text-light"
                  >
                    Contact
                  </Link>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    </>
  );
};

export default Navbar;
