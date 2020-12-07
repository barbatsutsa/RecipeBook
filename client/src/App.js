import React from "react";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Header from "./components/Header/Header";
import Categories from "./components/Сategories/Сategories"


function App() {
    return (
        <React.StrictMode>
            <Router>
                <Header />
                <Categories />
                <Switch>

                </Switch>
            </Router>
        </React.StrictMode>
    );
};

export default App;