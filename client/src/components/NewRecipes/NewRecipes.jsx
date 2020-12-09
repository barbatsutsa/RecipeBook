import React, { Component } from "react";
import Items from "./NewRecipesItems/Items";
import NewRecipesItem from "./NewRecipesItems/NewRecipesItem";
import "./style.css";


class NewRecipes extends Component {

  constructor(props) {
    super(props);
    this.state = {
      cards: Items,
    };
  }

  render() {
    const cards = this.state.cards;
  
    return (
      <>
      <div className="wrap">
      <h2 className="title">Новые рецепты</h2>
        <div className="main">
          {cards.map((item) => (
            <NewRecipesItem
              item={item}
              key={item.id}
            />
          ))}
        </div>
        </div>
      </>
    );
  }
}

export default NewRecipes;