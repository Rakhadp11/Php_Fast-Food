<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive food website design tutorial </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="slide/glider.css">
    <link rel="stylesheet" href="slide/produk.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="search/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><img src="images/logo-f.png" width="58px" alt=""></a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#special">special</a>
        <a href="#popular">popular</a>
        <a href="#gallery">gallery</a>
        <a href="#hot">hot <i class="fa-solid fa-fire"></i></a>
        <a href="#review">review</a>
        <a href="#order">order</a>
    </nav>

    <div class="icon">
        <a href="#"><i class="fa-solid fa-magnifying-glass fa-2x" id="cart" ></i>
            <a href="#"><i class="fa-solid fa-cart-shopping fa-2x" id="cart"></i>
            <a href="#"><i class="fa-solid fa-user fa-2x" id="cart" ></i>
    </div>

</header>

<div class="wrapper">
    <div class="search-input">
      <a href="" target="_blank" hidden></a>
      <input type="text" placeholder="Type to search..">
      <div class="autocom-box">
        <!-- here list are inserted from javascript -->
      </div>
      <div class="icon"> <a href="index.php"><i class="fa-solid fa-x"></i></a></div>
    </div>
  </div>

  <script src="search/script.js"></script>
  <script src="search/suggestions.js"></script>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Premium Homemade Food</h3>
        <p>he food available is made homemade with quality ingredients and has a distinctive taste, this shop has been established since 2020 with an online store concept with an emphasis on convenience</p>
        <a href="#popular" class="btn">order now</a>
    </div>

    <div class="image">
        <img src="images/pizza.jpg" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- speciality section starts  -->

<section class="speciality" id="special">

    <h1 class="heading"> our <span>special menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="image" src="images/s-img-1.jpg" alt="">
            <div class="content">
                <img src="images/s-1.png" alt="">
                <h3>tasty burger</h3>
                <p>The food available is made homemade with quality ingredients and has a distinctive taste</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-2.jpg" alt="">
            <div class="content">
                <img src="images/s-2.png" alt="">
                <h3>tasty pizza</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-3.jpg" alt="">
            <div class="content">
                <img src="images/s-3.png" alt="">
                <h3>cold ice-cream</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-4.jpg" alt="">
            <div class="content">
                <img src="images/s-4.png" alt="">
                <h3>cold drinks</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-5.jpg" alt="">
            <div class="content">
                <img src="images/s-5.png" alt="">
                <h3>tasty sweets</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-6.jpg" alt="">
            <div class="content">
                <img src="images/s-6.png" alt="">
                <h3>healty breakfast</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
            </div>
        </div>

    </div>

</section>

<!-- speciality section ends -->

<!-- popular section starts  -->

<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular</span> foods </h1>

    <div class="box-container">

        <div class="box">
            <span class="price"> IDR 40.000 </span>
            <img src="images/piza-pp.png" alt="">
            <h3>Pizza Paperoni</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> IDR 50.000 </span>
            <img src="images/p-1.jpg" alt="">
            <h3>Burger Boom</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> IDR 35.000 </span>
            <img src="images/pigo.jpg" alt="">
            <h3>Pizza Goreng</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> IDR 40.000 </span>
            <img src="images/kebab-jmb.jpg" alt="">
            <h3>Kebab Super</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> IDR 20.000 </span>
            <img src="images/p-5.jpg" alt="">
            <h3>Cold Drink</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> IDR 30.000 </span>
            <img src="images/p-4.jpg" alt="">
            <h3>Cake Desert</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#" class="btn">order now</a>
        </div>

    </div>

</section>

<!-- popular section ends -->

<!-- steps section starts  -->

<div class="step-container">

    <h1 class="heading">how it <span>works</span></h1>

    <section class="steps">

        <div class="box">
            <img src="images/step-1.jpg" alt="">
            <h3>choose your favorite food</h3>
        </div>
        <div class="box">
            <img src="images/step-2.jpg" alt="">
            <h3>free and fast delivery</h3>
        </div>
        <div class="box">
            <img src="images/step-3.jpg" alt="">
            <h3>easy payments methods</h3>
        </div>
        <div class="box">
            <img src="images/step-4.jpg" alt="">
            <h3>and finally, enjoy your food</h3>
        </div>
    
    </section>

</div>

<!-- steps section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>tasty food</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                <a href="#" class="btn">ordern now</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

 <!--==Slider============================================-->
 <section class="product-slider" id="hot">
    <!--==heading====================-->
    <h4 class="product-slider-heading">PRODUK HOT DEAL</h4>

    <div class="glider-contain">
        <div class="glider">

          <!--1================================-->
        <div class="swiper-slide">
            <!--box----------------------->
            <div class="product-box">
                <!--==offer==-->
                <span class="product-box-offer">-20%</span>
                <!--img-container****************-->
                <div class="product-img-container">
     
                <!--img=============-->
                <div class="product-img">
                <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14">
                    <img alt="" class="product-img-front" src="image/piza-pp.png"/>
                    <img alt="" class="product-img-back" src="image/piza-s2.png"/>
                </a>
                </div>
                </div>
                <!--text***************************-->
                <div class="product-box-text">
                     <!--category-->
                     <div class="product-category">
                        <span>HOT DEAL</span>
                    </div>
                    <!--tile--->
                    <a href="http://demo47.askas8.se/sv/front-brake-assy-37-5-12-14" class="product-title">
                        Pizza Papperoni Reguler
                    </a>
                </div>
            </div>
            </div>

            <!--2================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-15%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="image/piza-dc.png"/>
                        <img alt="" class="product-img-back" src="image/piza-dc2.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>HOT DEAL</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            Pizza Double Cheese 
                        </a>
                    </div>
        
                </div>
                </div>
                <!--3================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-30%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="image/piza-s.png"/>
                        <img alt="" class="product-img-back" src="image/piza-s2.png"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>HOT DEAL</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            Pizza Sausage Mini
                        </a>
                    </div>
        
                </div>
                </div>
                <!--6================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-10%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="image/kebab-moza.jpg"/>
                        <img alt="" class="product-img-back" src="image/kebab-jmb3.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>HOT DEAL</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            Kebab Jumbo Cheeese
                        </a>
                    </div>
        
                </div>
                </div>
                <!--4================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-20%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="image/kebab-jmb.jpg"/>
                        <img alt="" class="product-img-back" src="image/kebab-jmb2.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>HOT DEAL</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            Kebab Mini Cheese
                        </a>
                    </div>
        
                </div>
                </div>
                <!--5================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-60%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="image/pigo.jpg"/>
                        <img alt="" class="product-img-back" src="image/pigo-pd.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>HOT DEAL</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            Pizza Goreng
                        </a>
                    </div>
        
                </div>
                </div>

                <!--2================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-15%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="image/piza-dc.png"/>
                        <img alt="" class="product-img-back" src="image/piza-dc2.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>HOT DEAL</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            Pizza Double Cheese Mini
                        </a>
                    </div>
        
                </div>
                </div>

                <!--3================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-30%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="image/piza-s.png"/>
                        <img alt="" class="product-img-back" src="image/piza-s2.png"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>HOT DEAL</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            Pizza Sausage Mini
                        </a>
                    </div>
        
                </div>
                </div>
                <!--6================================-->
            <div class="swiper-slide">
                <!--box----------------------->
                <div class="product-box">
                    <!--==-->
                    <span class="product-box-offer">-10%</span>
        
                    <!--img-container****************-->
                    <div class="product-img-container">
         
                    <!--img=============-->
                    <div class="product-img">
                    <a href="#">
                        <img alt="" class="product-img-front" src="image/kebab-moza.jpg"/>
                        <img alt="" class="product-img-back" src="image/kebab-jmb3.jpg"/>
                    </a>
                    </div>
                    </div>
        
                    <!--text***************************-->
                    <div class="product-box-text">
                         <!--category-->
                         <div class="product-category">
                            <span>HOT DEAL</span>
                        </div>
                        <!--tile-->
                        <a href="#" class="product-title">
                            Kebab Jumbo Cheeese
                        </a>
                    </div>
        
                </div>
                </div>

                
        </div>
      
        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
      </div>
    <!--btns=========================-->
    <div class="slider-btns">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="slider-container">
    <!-- Swiper -->
    <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        
            
    </div>
    </div>
    </div>
    </section>
    <!--slider-end-------->
     <!--==JS-Swiper====================================-->
     <script src="slide/glider.js"></script>
     <!--==script=======================================-->
     <script>
         /*Initialize Swiper*/
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          autoplay: {
          delay: 6000,
          disableOnInteraction: false,
        },
          navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
          breakpoints: {
            360: {
              slidesPerView: 1.5,
              spaceBetween: 20,
            },
            540: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            1200: {
              slidesPerView: 4,
              spaceBetween: 40,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
          },
        });
     </script>
     
     <script>
        new Glider(document.querySelector('.glider'), {
  slidesToScroll: 1,
  slidesToShow: 5.5,
  draggable: true,
  dots: '.dots',
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  }
});
     </script>


<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> our customers <span>reviews</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic1.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>
        <div class="box">
            <img src="images/pic2.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>
        <div class="box">
            <img src="images/pic3.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- order section starts  -->

<section class="order" id="order">

    <h1 class="heading"> <span>order</span> now </h1>

    <div class="row">
        
        <div class="image">
            <img src="image/contact-us.jpg" alt="">
        </div>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>

            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="food name">
            </div>

            <textarea placeholder="address" name="" id="" cols="30" rows="10"></textarea>

            <input type="submit" value="order now" class="btn">

        </form>

    </div>

</section>

<!-- order section ends -->


<section class="footer">

    <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pinterest</a>
        <a href="#" class="btn">linkedin</a>
    </div>

    <h1 class="credit"> created by <span> mr. web designer </span> | all rights reserved! </h1>

</section>

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>




<!-- custom js file link  -->
<script src="app.js"></script>


</body>
</html>