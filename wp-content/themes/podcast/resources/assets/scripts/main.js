// import external dependencies
import 'jquery';

import 'default-passive-events';

//import slick
import 'slick-carousel/slick/slick.min';

/* font awesome */
// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';

import { faSearch, faChevronRight, faPodcast } from '@fortawesome/free-solid-svg-icons';
import { faSpotify } from '@fortawesome/free-brands-svg-icons';

// add the imported icons to the library
library.add(faSearch);
library.add(faPodcast);
library.add(faChevronRight);
library.add(faSpotify);

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


  //append doms
  const gname = document.getElementById('guy-name');
  const gdesc = document.getElementById('guy-desc');

  function showProfile(i){
    const guyObject = getGuyData(i.getAttribute('id')); 
    doGuyData( guyObject );
  }

  function getGuyData(id){
    return guys[id];
  }


  function doGuyData(obj){
    //name
    gname.innerHTML = obj.name;
    gdesc.innerHTML = obj.desc;
    loopSocial( obj.social );
  }

  function loopSocial(soc){
    soc.forEach( item => {
        var username = item.user;  
        var link = item.link;  
        var icon = item.iconlink;  
        console.log(item);
        addToUserSocial(username,link,icon);
    });
  }

  function addToUserSocial (u,l,i) {
    console.log('username',u);
    console.log('link',l);
    console.log('icon',i);

    const soclinks = document.getElementById('soc__links');
    soclinks.innerHTML = "";
    var li = document.createElement('li'); 
    var a = document.createElement('a'); 
    a.href = l;
    a.innerText = u;
    a.setAttribute('target', '_blank');
    li.append(a);
    soclinks.appendChild(li);
  }


  //User
  const guys = {
    'user_a' : {
      'name': 'James Frawley',
      'desc' : `At the 2015 Malaysian Open, James Frawley, who was then only 21,  made his ATP main draw debut in the doubles draw, pairing with Nick Kyrgios. In October 2016, Frawley achieved his career high ATP singles ranking of 606. He also holds a career high ATP doubles ranking of 735 acquired by the end of the same month. Frawley is currently at 920 at the ATP ranking.
      `,
      'social' : [
                  { 'link' : `https://instagram.com`, 'user' : '@james_frawley_', 'iconlink' : '#test'},
                ],
    },

    'user_b' : {
      'name' : 'Nick Kyrgios',
      'desc' : `The former World No. 1 junior broke into the ATP Top 50 at the young age of 19 in 2015. In the same year, he was able to make it to the Australian Open QF, becoming the youngest quarter-finalist at his home Grand Slam event, a recognition formerly held by Andrei Cherkasov back in 1990.
      <br><br>
      By 2016, he reached the No. 13 spot. In 2014 at Wimbledon, he shocked the crowd as he bested Rafael Nadal who then ranked No. 1; Kyrgios was at 144. He went on to beat Federer in Madrid in 2015 and Djokovic in 2017, Acapulco. He bagged the 1st ATP Masters 1000 final in 2017 in Cincinnati and the 2nd of 3 ATP 500 titles in 2019 in Acapulco.`,
      'social' : [
        { 'link' : `https://instagram.com`, 'user' : '@k1ngkyrg1os', 'iconlink' : '#'},
      ],
    },

    'user_c' : {
      'name' : 'Alex Babanine',
      'desc': `Growing up, Alex had taken interest in a lot of sports including basketball, football, and karate. But he got a head start with tennis at 4 years old when his mother enrolled him in PeeWee Tennis. 
      <br><br>
      Years into the sport, Alex found himself as the highest-ranked Victorian junior for his birth year in 2010. The year after, he travelled to Europe as he participated in the Junior International Tennis Federation tour. In 2012, he entered the Junior Australian Boys Open. That same year, he finished 173rd in the Junior ITF ranking.
      <br><br>
      On the 20th of August, Babanine recorded an ATP Singles Ranking of 1359. The following year on July 15th, he recorded an ITF Singles Ranking of 1327.
      `,
      'social' : [
        { 'link' : `https://instagram.com`, 'user' : '@alexbabanine', 'iconlink':  '#'},
      ],
    }
  }

} );
