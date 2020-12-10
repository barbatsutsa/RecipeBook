import React, { Component } from "react";
/* import { Link } from "react-router-dom"; */
import "../style.css";


class NewRecipesItem extends Component {
  constructor(props) {
    super(props);
    this.state = {
      item: this.props.item,
    };
  }

  render() {
    return (
      <div className="card__container" key={this.props.item.id}>
        <div className="card">
          <div className="card__photo">
            <img
              className="card__img"
              src={`${this.state.item.mainImg}`}
              alt="Deluxe"
            ></img>
          </div>
          <div className="card__wrp">
            <div className="card__title">
              {`${this.props.item.title} `}
            </div>
            <div className="card__text">
              <div className="desc">{this.props.item.desc}</div>
              <div className="ingredients">{this.props.item.ingredients}</div>
            </div>
          </div>
        </div>
      </div>
    );
  };
}

export default NewRecipesItem;