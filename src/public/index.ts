import { load } from './core/loader';
import {registerComponent} from "./core/get-component";
import CardSliderBlock from "./blocks/CardSliderBlock";
import CollapseBlock from "./components/CollapseBlock";
import MobileMenu from "./components/MobileMenu";
import {ExampleBlock} from "./blocks/ExampleBlock";
import StorySliderBlock from "./blocks/StorySliderBlock";
import OurValueItemBlock from "./blocks/OurValueItemBlock";
import LocationItemBlock from "./blocks/LocationItemBlock";
import ContactFormBlock from "./blocks/ContactFormBlock";
import BackToTop from './blocks/BackTotop';
import Member from './blocks/Member';
import Locations from './blocks/Location';
import ViewMapModal from './blocks/ViewMapModal';
import CreatePostForm from './blocks/CreatePostFormBlock';
import ListPost from './blocks/ListPost';
import CardSwiperBlock from './blocks/CardSwiper';

registerComponent('rocket-example', ExampleBlock)
registerComponent('collapse-block', CollapseBlock)
registerComponent('mobile-menu', MobileMenu)
registerComponent('card-slider', CardSliderBlock)
registerComponent('story-slider', StorySliderBlock)
registerComponent('our-value-item', OurValueItemBlock)
registerComponent('location-item', LocationItemBlock)
registerComponent('contact-form', ContactFormBlock)
registerComponent('back-to-top', BackToTop)
registerComponent('member', Member)
registerComponent('locations', Locations)
registerComponent('view-map', ViewMapModal)
registerComponent('create-post-form', CreatePostForm)
registerComponent('list-post', ListPost)
registerComponent('card-swiper', CardSwiperBlock)

document.addEventListener('DOMContentLoaded', function () {
  const containers = document.querySelectorAll("[class^='wp-block-rocket']")
  containers.forEach(container => {
    load(container as HTMLElement)
  })
})