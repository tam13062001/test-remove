import * as React from "react";
import {Example} from "../components/Example";
import CardSlider from "../components/CardSlider";
import CollapseBlock from "../components/CollapseBlock";

export function getComponent(container: HTMLElement) {
  const classList = container.classList
  switch (true) {
    case classList.contains('wp-block-rocket-card-slider'):
      return CardSlider
    case classList.contains('wp-block-rocket-collapse-block'):
      return CollapseBlock
    case classList.contains('wp-block-rocket-example'):
      return (props: any) => React.cloneElement(<Example />, props)
    default:
      return (props: any) => React.createElement('div', {
        dangerouslySetInnerHTML: {
          __html: props.children
        }
      })
  }
}