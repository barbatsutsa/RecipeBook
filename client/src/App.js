import React from "react";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Header from "./components/Header/Header";


function App() {
    return (
        <React.StrictMode>
            <Router>
                <Header />
                <Switch>

                </Switch>
            </Router>
        </React.StrictMode>
    );
};

export default App;