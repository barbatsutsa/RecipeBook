import React from "react";
import Header from "../components/Header/Header";
import Categories from "../components/Сategories/Сategories";
import NewRecipes from "../components/NewRecipes/NewRecipes"

const NewRecipesPage = () => {
    return (
        <>
            <Header />
            <div className="wrp-main">
                <Categories />
                <NewRecipes />
            </div>

        </>
    );
};

export default NewRecipesPage;