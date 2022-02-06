<section id="hero">
    <div class="container">
        <div class="hero hero__row row d-flex align-items-center justify-content-md-center text-center text-md-start">
            
            <div class="hero__bubble__col col-lg-5 col-xl-6 text-white order-last order-lg-first d-none d-lg-block">
                
                <div class="hero__images">
                    <div class="hero__images-l">

                        <div class="hero__images-l-img hero__images-img">
                            <img src="@asset('/images/03-LP-Head-Nick.png')" alt="" >
                        </div>
                        <div class="hero__images-l-img hero__images-img">
                            <img src="@asset('/images/05-LP-Head-Alex.png')" alt="" >
                        </div>

                    </div>
                    <div class="hero__images-r">
                    
                        <div class="hero__images-r-img hero__images-img">
                            <img src="@asset('/images/04-LP-Head-James.png')" alt="" >
                        </div>

                    </div>
                </div>

            </div>
        
            <div class="hero__col col-lg-7 col-xl-6 text-white text-center text-lg-end">
                
                <!-- card podcast -->
                <div class="hero-wrapper">
                    <h1 class="hero__title border-secondary d-inline-block green-top-border">
                        <div class="text-start text-white hero__title--small gotham-bold">The</div>
                        <div class="text-secondary hero__title--main gotham-bold text-start">NO BOUNDARIES</div>
                        <div class="text-end hero__title--small gotham-bold pb-4">Podcast</div>
                       
                        <article class="hero-article green-top-border text-center text-md-start">
                            <span class="hero-article--small d-block gotham-normal">with</span>
                            <p class="hero-article--big gotham-medium mt-2 mt-md-2">NICK KYRGIOS,  ALEX BABANINE,<br class="d-none d-md-block">& JAMES FRAWLEY</p>
                            <p class="hero-article--small hero-article--small-available text-uppercase gotham-normal mt-4 mt-md-4-5">
                                Available on <i>Spotify, Apple Podcast, and YouTube</i></p>
                        </article>
                        <div class="d-flex">
                            <button class="mx-auto ms-md-auto btn me-md-0 btn-secondary mt-md-4">BROWSE EPISODES <i class="ms-3 fas fa-chevron-right"></i></button>
                        </div>
                    </h1>
                    
                </div>
                <!-- end card podcast -->

                <!-- display on mobile only -->
                <div data-slick='{
                        "arrows": false, 
                        "slidesToShow": 1, 
                        "slidesToScroll": 1, 
                        "fade" : true, 
                        "autoplay" : true, 
                        "autoplaySpeed" : 1000,
                        "mobileFirst" : true,
                        "responsive" : [{
                            "breakpoint": 576,
                            "settings": {
                                "slidesToShow":3,
                                "fade": false
                            }
                        }]
                    }' class="d-lg-none myslick">

                        <div class="hero__images-l-img hero__images-img">
                            <img src="@asset('/images/03-LP-Head-Nick.png')" class="mx-auto" alt="slide-image" >
                        </div>

                        <div class="hero__images-l-img hero__images-img">
                            <img src="@asset('/images/05-LP-Head-Alex.png')" class="mx-auto" alt="slide-image" >
                        </div>
                        
                        <div class="hero__images-r-img hero__images-img">
                            <img src="@asset('/images/04-LP-Head-James.png')" class="mx-auto" alt="slide-image" >
                        </div>


                </div>
                <!-- end display on mobile -->

            </div>
        </div>
    </div>
</section>



<!-- HARD HITTER -->
<section id="hard-hitter" class="mt-lg-5">
    <div class="container hardhitter hardhitter__container">
        <div class="row hardhitter__row">
            <div class="col hardhitter__col">

            
                    <div class="hardhitter__col-main text-center">
                        <h2 class="gotham-bold">Hard Hitters</h2>
                        <div class="separator my-3"></div>
                        <article class="text-start text-md-center">
                        More often than not, hard-hitting truths prove unpalatable to groupthink, pushing those who stand by them to either retract or suffer cancellation. But would that stop Nick Kyrgios, Alex Babanine, and James Frawley from doling out those hard-to-hears? Fat chance. 
                        <br><br>
                        The No Boundaries Podcast is your ultimate go-to for witty banter, out-of-the-box unfiltered opinions, and late-night vibey chats between three best mates. It doesn't matter if they're tackling serious issues, their shenanigans growing up together, sports, or just genuine discussions about life's ups and downs, there are plenty to take away and admire when this tennis triumvirate start to talk. 
                        <br><br>
                        <strong class="text-center">No nonsense. No holds barred. No boundaries. </strong>

                        </article>

                    </div>

            </div>
        </div>
    </div>
</section>
<!-- END HARD HITTER -->


<!-- MEET THE GUYS -->
<section id="meet-the-guys" class="mtg">
    <div class="container">
        <div class="row">
            <div class="col">

                    <section>
                        <h2 class="text-secondary text-center">Meet The Guys</h2>
                        <div class="separator"></div>    
                        <div class="mtg mtg__dsc">

                            <div class="guy">
                                <div id="guy-name" class="guy__name bebas"></div>
                                <article id="guy-desc" class="guy__description "></article>
                                <div class="soc">
                                    <ul class="text-secondary" id="soc__links"></ul>
                                </div>
                            </div>

                            
                            <div class="mtg__img">
                            <svg class="mtg__img-img" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1116 605">
                                <image class="" width="1116" height="605" xlink:href="@asset('images/07-Team-Photo.png')"></image> 
                                <a class="theguy" id="user_a" xlink:href="#">
                                    <rect x="0" y="0" fill="#fff" opacity="0" width="354" height="593"></rect>
                                </a>
                                <a class="theguy" id="user_b" xlink:href="#">
                                    <rect x="357" y="1" fill="#fff" opacity="0" width="369" height="592"></rect>
                                </a>
                                <a class="theguy" id="user_c" xlink:href="#">
                                    <rect x="728" y="2" fill="#fff" opacity="0" width="388" height="593"></rect>
                                </a>
                            </svg>
                                <!-- <img src="@asset('images/07-Team-Photo.png')" class="mtg__img-img" alt=""> -->
                            </div>

                        </div>
                    </section>

            </div>
        </div>
    </div>
</section>
<!-- END MEET THE GUYS -->



<!-- EPISODES -->
<section id="episodes" class="">
     <div class="container episodes__container">
         <div class="row episodes__row">
             <div class="col episodes__col ">
                    
                    <section class="episodes episodes__section bg-secondary pb-2 pb-md-5">

                        <div class="episodes__section-content">
                            
                            <!-- 1 heading -->
                            <div class="episodes__section__heading d-flex flex-column flex-md-row justify-content-md-between">
                                <div class="mb-2 mb-md-0">
                                    <h3 class="gotham-bold">Episodes</h3>
                                </div>

                                <div>
                                    <!-- Facebook icon -->
                                    <div class="form-group has-search">
                                        <i class="fas fa-search form-control-feedback text-white"></i>
                                        <input type="text" class="form-control btn-dark-green border-white rounded-pill" placeholder="Search Episodes">
                                    </div>
                                </div>
                            </div>

                            <!-- 2 latest episode -->
                            <div class="episodes__section__latest d-lg-flex justify-content-lg-between align-items-lg-center row row-cols-md-2 pt-5 pb-1">
                                <div class="cols">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/mzh_oeVGHWU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="cols episodes__section__latest-description">
                                    
                                        <h4 class="bebas text-uppercase h4">eP #8 Novak Djokovic Visa CANCELLED </h4>

                                        <div class="separator"></div>

                                        <article>
                                            On this episode, Nick Alex & James sit down to discuss the issues around the new turn in the Djokovic saga with the latest news coming out that his visa has been cancelled (pending a final hearing). The boys voice their opinions on the matter, what maybe can be done differently and how Australians we feel with the handling of this whole situation, we hope that you enjoy the episode.
                                            <br><br>
                                            <div class="media-links">
                                                <p><a href="https://spoti.fi/3zZnX0W"><i class="fab fa-spotify me-3"></i></i>SPOTIFY</a></p>
                                                <p><a href="https://apple.co/3GBlX1t"><i class="fas fa-podcast me-3"></i>APPLE PODCAST</a></p>
                                            </div>
                                            
                                        </article>

                                </div>
                            </div>

                            <!-- 3 list of episodes -->
                            <div class="episodes__section__sliders">
                                <div>
                                    <section class="youtube-slick rounded-pill bg-dark vh-50">

                                    </section>
                                </div>

                                <button class="mb-1 mb-md-0 mx-auto ms-md-auto me-md-0 d-block btn btn-light text-uppercase">See More <i class="ms-3 fas fa-chevron-right"></i></button>

                            </div>

                        </div>
                        
                    </section>

             </div>
         </div>
     </div>
</section>
<!-- END EPISODES -->


<!-- CONTACT -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-last">
                <section>
                            
                        <!-- contact form -->
                        <form action="">
                            <section class="main-fields">
                                <div class="mb-3">
                                    <label for="name_field" class="form-label d-none">Name</label>
                                    <input type="text" class="form-control" id="name_field" placeholder="Name">
                                </div>
                                <div class="mb-3">
                                    <label for="contact_field" class="form-label d-none">Contact Number</label>
                                    <input type="text" class="form-control" id="contact_field" placeholder="Contact Number">
                                </div>
                                <div class="mb-3">
                                    <label for="email_field" class="form-label d-none">Email Address</label>
                                    <input type="email" class="form-control" id="email_field" placeholder="E-mail Address">
                                </div>
                                <div class="mb-3 mb-md-0">
                                    <label for="message_field" class="form-label d-none">Message</label>
                                    <textarea class="form-control" id="message_field" rows="5" placeholder="Message"></textarea>
                                </div>
                            </section>
                            <div class="col-12 mt-4">
                                <button class="d-block btn btn-secondary mx-auto ms-md-auto me-md-0" type="submit">SUBMIT ENQUIRY <i class="ms-3 fas fa-chevron-right"></i></button>
                            </div>
                        </form>

                </section>
            </div>
            <div class="col-md-6">
                <section class="mt-4 mt-md-0 h-100">
                        <!-- contact details -->
                        <div class="text-center text-md-start contact__card card text-white bg-primary border-white d-flex justify-content-evenly">
                            <div class="contact__card-header card-header">
                                <h2 class="h2 text-secondary">Contact</h2>
                            </div>

                            <h5 class="contact__card-title card-title gotham-medium">For podcast guest bookings, sponsorship <br>or to simply reach out to us:</h5>

                            <p class="contact__card-text card-text gotham-medium">
                                <img class="contact__card-icons me-md-3" src="@asset('/images/01-Phonecall-Icon.png')" alt="">  
                                0123  456  789</p>
                                <p class="contact__card-text card-text gotham-medium">
                                    <img class="contact__card-icons me-md-3" src="@asset('/images/02-Email-Envelope-Icon.png')" alt=""> 
                                    hi@noboundariespodcast.com.au</p>
                                    
                            

                            </div>
                        </div>
                        <!-- end contact details -->
                        
                </section>
            </div>
        </div>
    </div>
</section>
<!-- END CONTACT -->




