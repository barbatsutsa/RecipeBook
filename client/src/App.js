import React from "react";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Header from "./components/Header/Header";
import NewRecipes from "./components/NewRecipes/NewRecipes";


function App() {
    return (
        <React.StrictMode>
            <Router>
                <Header />
                <NewRecipes />
                <Switch>

                </Switch>
            </Router>
        </React.StrictMode>
    );
};

export default App;