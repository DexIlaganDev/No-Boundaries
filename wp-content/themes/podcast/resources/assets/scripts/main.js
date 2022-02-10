// import external dependencies
import 'jquery';

import 'default-passive-events';

//import slick
import 'slick-carousel/slick/slick.min';

/* font awesome */
// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';

import { faSearch, faChevronRight, faPodcast, faLongArrowAltRight, faLongArrowAltLeft } from '@fortawesome/free-solid-svg-icons';
import { faSpotify } from '@fortawesome/free-brands-svg-icons';

// add the imported icons to the library
library.add(faSearch);
library.add(faPodcast);
library.add(faChevronRight);
library.add(faSpotify);
library.add(faLongArrowAltRight);
library.add(faLongArrowAltLeft);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();
/* end font awesome */

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());


//Test Dex
jQuery( document ).ready( () => {
  /* eslint-disable */
  
  jQuery('.myslick').slick();

  //click events
  const theguys = document.querySelectorAll('.theguy');
  theguys.forEach( item => {
    item.addEventListener("click", function(e){
      e.preventDefault();
      showProfile(item);
    });
  });


  //full user guys slick 
  jQuery('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed : 6000,
    infinite: true,
    speed: 1000,
    fade: true,
    cssEase: 'linear',
    pauseOnHover : false,
    pauseOnFocus : false,
    adaptiveHeight: true,
    nextArrow : '.mtg__next',
    prevArrow : '.mtg__previous',
  })

  // On before slide change
  jQuery('.slider-for').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    console.log(nextSlide);
  });

} );
