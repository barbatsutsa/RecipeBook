import React from "react";
import "./style.css";

class Сategories extends React.Component {
    render() {
        return (
            <div className="сategories">
                <h3 className="сategories-title">Категории</h3>
                <nav className="nav-сategories">
                  <li className="nav-сategories-item-list"><a className="nav-сategories-item">Новые рецепты</a></li>
                  <li className="nav-сategories-item-list"><a className="nav-сategories-item">Первые блюда</a></li>
                  <li className="nav-сategories-item-list"><a className="nav-сategories-item">Вторые блюда</a></li>
                  <li className="nav-сategories-item-list"><a className="nav-сategories-item">Салаты</a></li>
                  <li className="nav-сategories-item-list"><a className="nav-сategories-item">Закуски</a></li>
                </nav>
            </div>
        );
    };
}
export default Сategories;