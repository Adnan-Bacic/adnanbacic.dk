import React from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';
import '@popperjs/core';
import '@fortawesome/fontawesome-free/css/all.css';
import './styles/main.scss';

import Router from './router/Router';

const App = () => {
  return (
    <Router />
  );
};

export default App;
