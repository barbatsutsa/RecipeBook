import React from "react";
import "./style.css";

class Header extends React.Component {
    render() {
        return (
            <div className="header">
                <h1 className="logo">Книга рецептов</h1>
                <nav className="nav">
                    <li className="nav-item-list"><a className="nav-item">Главная </a></li>
                    <li className="nav-item-list"><a className="nav-item">Избранное</a></li>
                    <li className="nav-item-list"><a className="nav-item">Добавить рецепт</a></li>
                </nav>
                <a className="account">Мой аккаунт</a>
            </div>
        );
    };
};

export default Header;