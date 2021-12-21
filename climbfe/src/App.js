import React from 'react';
import {BrowserRouter as Router, Switch, Route} from 'react-router-dom';

import Navbar from './pages/Navbar';

import Home from './pages/Home';
import Products from './pages/Products';

import axios from 'axios';
axios.defaults.baseURL = "http://localhost:8000/";

function App() {
  return (
    <div className="App">
        <Router>

          <Navbar />

          <Switch>

            <Route path="/home" component={Home} />
            <Route path="/products" component={Products} />

          </Switch>
        </Router>
    </div>
  );
}

export default App;
