import React from "react";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import NewRecipesPage from "./pages/NewRecipesPage";
import MainPage from "./pages/MainPage";
import "./index.css";


function App() {
    return (
        <React.StrictMode>
            <Router>
                <Switch>
                <Route exact path="/" component={MainPage} />
                <Route exact path="/newrecipes" component={NewRecipesPage} />
                </Switch>
            </Router>
        </React.StrictMode>
    );
};

export default App;