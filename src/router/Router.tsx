import React from 'react';
import { BrowserRouter as RouterContainer, Switch, Route } from 'react-router-dom';

import * as Pages from '../pages';
import * as Includes from '../includes';
// import * as Components from '../components';

const Router = () => {
  return (
    <>
      <RouterContainer>
        <Includes.Navbar />
        <Switch>
          <Route
            exact
            path="/"
            component={Pages.Home}
          />
          <Route
            exact
            path="/about"
            component={Pages.About}
          />
          <Route
            exact
            path="/contact"
            component={Pages.Contact}
          />
          <Route
            path="*"
            component={Pages.NotFound}
          />
        </Switch>
        <Includes.Footer />
      </RouterContainer>
    </>
  );
};

export default Router;
