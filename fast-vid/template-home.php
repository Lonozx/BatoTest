<?php
/*
Template Name: Шаблон главной страницы
*/
get_header();
?>

<main>
        <section>
            <div class="headings">
                <h2 class="poppins-semibold h2">What We Can do</h2>
                <p class="poppins-regular h3">Excepteur sint occaecat cupidatat non proident</p>
            </div>
            <div class="items-shack">
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/tack.svg" alt="">
                    <p class="poppins-semibold">Web Development</p>
                    <p class="h4 poppins-regular" >Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/piece.svg" alt="">
                    <p class="poppins-semibold">Search Engine Optimization</p>
                    <p class="h4 poppins-regular" >Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula ipsum</p>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() ?>/images/screen.svg" alt="">
                    <p class="poppins-semibold">Web Design</p>
                    <p class="h4 poppins-regular" >Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus.</p>
                </div>
            </div>
        </section>
        
        <section>
            <div class="headings">
                <h2 class="poppins-semibold h2"><?php the_field('home') ?></h2>
                <p class="poppins-regular h3">Excepteur sint occaecat cupidatat non proident</p>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="item">
                        
                        <!-- <p class="poppins-semibold">Web Development</p> -->
                        <p class="h4 poppins-regular" >Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri() ?>/images/Russel.png" alt="">
                            <div>
                                <p class="poppins-semibold">Dianne Russell</p>
                                <p class="poppins-light h5">Marketing Coordinator</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                        
                        <!-- <p class="poppins-semibold">Web Development</p> -->
                        <p class="h4 poppins-regular" >Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri() ?>/images/Robert.png" alt="">
                            <div>
                                <p class="poppins-semibold">Robert Johnson</p>
                                <p class="poppins-light h5">Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                        
                        <!-- <p class="poppins-semibold">Web Development</p> -->
                        <p class="h4 poppins-regular" >Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri() ?>/images/Floyd.png" alt="">
                            <div>
                                <p class="poppins-semibold">Floyd Miles</p>
                                <p class="poppins-light h5">President of Sales</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                        
                        <!-- <p class="poppins-semibold">Web Development</p> -->
                        <p class="h4 poppins-regular" >Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri() ?>/images/Robert.png" alt="">
                            <div>
                                <p class="poppins-semibold">Robert Johnson</p>
                                <p class="poppins-light h5">Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                        
                        <!-- <p class="poppins-semibold">Web Development</p> -->
                        <p class="h4 poppins-regular" >Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri() ?>/images/Floyd.png" alt="">
                            <div>
                                <p class="poppins-semibold">Floyd Miles</p>
                                <p class="poppins-light h5">President of Sales</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                        
                        <!-- <p class="poppins-semibold">Web Development</p> -->
                        <p class="h4 poppins-regular" >Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <div class="avatar">
                            <img src="<?php echo get_template_directory_uri() ?>/images/Russel.png" alt="">
                            <div>
                                <p class="poppins-semibold">Dianne Russell</p>
                                <p class="poppins-light h5">Marketing Coordinator</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            <!-- <div class="items-shack">
                <div class="item">
                    
                    <p class="h4 poppins-regular" >Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <div class="avatar">
                        <img src=".<?php echo get_template_directory_uri() ?>/images/Russel.png" alt="">
                        <div>
                            <p class="poppins-semibold">Dianne Russell</p>
                            <p class="poppins-light h5">Marketing Coordinator</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="" alt="">
                    <p class="poppins-semibold">Web Development</p>
                    <p class="h4 poppins-regular" >Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>
                <div class="item">
                    <img src="" alt="">
                    <p class="poppins-semibold">Web Development</p>
                    <p class="h4 poppins-regular" >Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>
            </div> -->
        </section>
        <section class="horizontal">
            <div class="first">
                <div class="headings">
                    <h2 class="poppins-semibold h2">Frequently Asked Question</h2>
                    <p class="poppins-regular h3">Excepteur sint occaecat cupidatat non proident</p>
                </div>
                <div class="quote">
                <div class="question">
                    <div class="plus">
                        <p class="poppins-regular">Sed ut perspiciatis unde omnis iste natus ?</p>
                    </div>
                    <div class="answer">
                        <p class="poppins-regular grey">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                    </div>
                    
                </div>
                
                <div class="question">
                    <div class="plus">
                    <p class="poppins-regular">Temporibus autem quibusdam et aut ?</p>
                </div>
                <div class="answer">
                        <p class="poppins-regular grey">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                    </div>
                </div>
                
                <div class="question">
                    <div class="plus">
                    <p class="poppins-regular"> Sed ut perspiciatis unde omnis iste natus ?</p>
                </div>
                 <div class="answer ">
                        <p class="poppins-regular grey">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.</p>
                    </div>
                </div>
            </div>
            </div>
            <div>
                <img style="width: 590px" src="<?php echo get_template_directory_uri() ?>/images/Image.png" alt="">
            </div>
        </section>
        <section style="width: 100vw; position: relative;">
            <div class="grow" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/growbackground.png);" >
                <h2 class="poppins-semibold">Grow Your Company Faster
                    Than Ever Before</h2>
                    <button class="poppins-semibold pop">Contact Us</button>
            </div>
        </section> 
        <section class="popup">
            <div class="contact-form">
                <form action="contact">
                    <div class="head-con">
                    <h2 class="poppins-extrabold cont">Contact Us</h2>
                    <img class="cross" src="<?php echo get_template_directory_uri() ?>/images/cross.svg" alt="">
                    </div>
                    <div class="name">
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Second Name">
                </div>
                <div class="info">
                    <input type="text" placeholder="Your email">
                    <input type="text" placeholder="Company name (optional)">
                    <input type="text" placeholder="Enqiry">
                    <div class="checked">
                    <input type="checkbox"> <span class="agreement">I agree to the Terms of Use and Privacy Policy</span>
                </div>
                </div>
                <input type="submit" value="Send" class="button-sub">
                </form>
            </div>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="/js/script.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      "@0.75": {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      "@1.50": {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });
</script>
<script>
    let pop = document.querySelector('.pop');
    let cross = document.querySelector('.cross');
let popup = document.querySelector('.popup');

pop.addEventListener('click', (e)=>{
    console.log('check');
    popup.classList.add('open');
    
})
cross.addEventListener('click', (e)=>{
    console.log('check');
    popup.classList.remove('open');
    
})

</script>
<?php get_footer(); ?>