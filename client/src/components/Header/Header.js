import React from "react";
import { Link } from "react-router-dom";
import "./style.css";

class Header extends React.Component {
    render() {
        return (
            <div className="header">
                <h1 className="logo">Книга рецептов</h1>
                <nav className="nav">
                    <li className="nav-item-list"><Link to="/"className="nav-item">Главная </Link></li>
                    <li className="nav-item-list"><Link to="/"className="nav-item">Избранное</Link></li>
                    <li className="nav-item-list"><Link to="/"className="nav-item">Добавить рецепт</Link></li>
                </nav>
                <Link to="/"className="account">Мой аккаунт</Link>
            </div>
        );
    };
};

export default Header;