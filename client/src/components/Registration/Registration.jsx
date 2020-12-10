import React from "react";
import { Link } from "react-router-dom";
import "./style.css";

class Registration extends React.Component {
    render() {
        return (
            <div className="">
                <div className="header-registration">
                    <h1 className="logo">Книга рецептов</h1>
                    <nav className="nav-registration">
                        <li className="nav-item-list"><Link to="/" className="nav-item">Главная </Link></li>
                    </nav>
                    <nav className="nav-registration">
                        <li className="nav-item-list"><Link to="/registration" className="nav-item">Регистрация</Link></li>
                        <li className="nav-item-list"><Link to="/avtorization" className="nav-item">Вход</Link></li>
                    </nav>
                </div>
                <div className="wrap-registration">
                    <div className="categories"></div>
                    <div className="main">
                        <h2 className="title">Регистрация</h2>
                        <div className="main">
                            <form name="registration" className="form">
                                <input type="text" size="40" name="Name" className="name input"></input>
                                <input type="email" size="40" name="email" className="email input"></input>
                                <input type="pasword" size="40" name="pasword" className="password input"></input>
                                <button className="btn">Регистрация</button>
                                <div className="text">Уже есть аккаунт?  <Link to="avtorization" className="text-link">Войти</Link></div>
                            </form>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        );
    };
};

export default Registration;