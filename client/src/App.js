import React from "react";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Header from "./components/Header/Header";
import NewRecipes from "./components/NewRecipes/NewRecipes";
import Categories from "./components/Сategories/Сategories"
import "./index.css";


function App() {
    return (
        <React.StrictMode>
            <Router>
                <Header />
                <div className="wrp-main">
                    <Categories />
                    <NewRecipes />
                </div>
                <Switch>
                </Switch>
            </Router>
        </React.StrictMode>
    );
};

export default App;