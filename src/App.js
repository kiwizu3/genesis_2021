import React, { useState, useMemo } from "react";
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import { Index } from "./pages";
import { About } from "./pages/about";
import { UserContext } from "./UserContext";

function AppRouter() {
  const [user, setUser] = useState(null);

  const value = useMemo(() => ({ user, setUser }), [user, setUser]);

  return (
    <Router>
      <div className="container-fluid mt-3">
        <div className="row">
          <div className="col-12">

            <nav className="navbar navbar-expand-lg navbar-light bg-light">
              <div className="container-fluid">
                <Link className="navbar-brand" to="/">Genesis</Link>
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span className="navbar-toggler-icon"></span>
                </button>
                <div className="collapse navbar-collapse" id="navbarNav">
                  <ul className="navbar-nav">
                    {/* <li className="nav-item">
                      <Link className="nav-link active" to="/">Home</Link>
                    </li> */}
                    <li className="nav-item">
                      <Link className="nav-link" to="/about/">About</Link>
                    </li>
                    <li className="nav-item">
                      <Link className="nav-link" to="/about/">Login</Link>
                    </li>
                  </ul>
                  <span class="navbar-text">
                    Navbar text with an inline element
      </span>
                </div>
              </div>
            </nav>
          </div>
          <div className="col-12">
            <div className="card p-4 shadow border-0 mt-4">
              <div>
                {/* <nav>
                  <ul>
                    <li>
                      <Link to="/">Home</Link>
                    </li>
                    <li>
                      <Link to="/about/">About</Link>
                    </li>
                  </ul>
                </nav> */}
                <UserContext.Provider value={value}>
                  <Route path="/" exact component={Index} />
                  <Route path="/about/" component={About} />
                </UserContext.Provider>
              </div>
            </div>
          </div>
        </div>
      </div>

    </Router>
  );
}

export default AppRouter;
