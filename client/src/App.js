import React from "react";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import NewRecipesPage from "./pages/NewRecipesPage";
import MainPage from "./pages/MainPage";
import RegistrationPage from "./pages/RegistrationPage";
import "./index.css";


function App() {
    return (
        <React.StrictMode>
            <Router>
                <Switch>
                <Route exact path="/" component={MainPage} />
                <Route path="/newrecipes" component={NewRecipesPage} />
                <Route path="/registration" component={RegistrationPage} />
                </Switch>
            </Router>
        </React.StrictMode>
    );
};

export default App;