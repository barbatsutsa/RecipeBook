import React from "react";
import "./style.css";

class Registration extends React.Component {
    render() {
        return (
            <div className="">
                <div className="header-registration">
                    <h1 className="logo">Книга рецептов</h1>
                    <nav className="nav">
                        <li className="nav-item-list"><a className="nav-item">Главная </a></li>
                    </nav>
                    <nav className="nav">
                        <li className="nav-item-list"><a className="nav-item">Регистрация</a></li>
                        <li className="nav-item-list"><a className="nav-item">Вход</a></li>
                    </nav>
                </div>
                <div className="wrap">
                    <h2 className="title">Регистрация</h2>
                    <div className="main">
                        <form name="registration" className="form">
                            <input type="text" size="40" name="Name" className="name input"></input>
                            <input type="email" size="40" name="email" className="email input"></input>
                            <input type="pasword" size="40" name="pasword" className="password input"></input>
                            <button className="btn">Регистрация</button>
                        </form>
                    </div>
                </div>
            </div>
        );
    };
};

export default Registration;