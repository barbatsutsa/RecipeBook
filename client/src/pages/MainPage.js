import React from "react";
import Header from "../components/Header/Header";
import Categories from "../components/Сategories/Сategories";


const MainPage = () => {
    return (
        <>
            <Header />
            <div className="wrp-main">
                <Categories />
               
            </div>

        </>
    );
};

export default MainPage;