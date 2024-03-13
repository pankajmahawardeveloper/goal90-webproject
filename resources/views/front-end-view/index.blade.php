<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
    <link rel="stylesheet" href="{{URL::to('/front-end-style/style.css')}}">
    <link rel="stylesheet" href="{{URL::to('/front-end-style/responsive.css')}}">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- fonts -->
    <style>
        .hm_section_four_two {
            scroll-behavior: smooth;
        }
        


        body{font-family:regular;}

        .hm_ct_main_holder::after{content:''; background:url('{{URL::to('/img/plus.png')}}') no-repeat; background-size:contain; position:absolute; top:50%; left:48%; transform:translate(-50%, -50%); width:255px; height:255px;}

    </style>
    <!-- fonts end -->
</head>
<body>



<x-header />

  

  <main>
    
  
  <x-top_one_section_animation_round head="One stop solution for your preparation" title="An awesome platform for all your requirements such as: PTE, IELTS, DUOLINGO and CELPIP with precisely curated Mock tests and updated study material.v" />

    <!-- section two -->
    <section class="hm_section_two">
        <div class="hm_section_two_holder" style="background:url('{{URL::to('/img/kids-being-part-sunday-school 1.jpg')}}');  background-position:center; background-repeat:no-repeat; background-size:cover;"></div>
    </section>
    <!-- section two end -->



    <!-- section three -->
    <section class="hm_section_three container">
        <div class="hm_section_three_holder row">
            <div class="col-12">
                <h2>Select Your Path</h2>
                <p>Choose your English proficiency exam to fulfill your dream of Overseas Education and Immigration purpose with the Mock Test and Practice Test.</p>
                <div class="hm_section_three_break">
                    <div class="three_break_left"></div>
                    <div class="three_break_center"></div>
                    <div class="three_break_right"></div>
                </div>
            </div>
            
            <div class="container hm_section_three_bx">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <div class="three_bx_holder">
                            <div>
                            <h3>Duolingo</h3>
                            <p>The Duolingo English Test is a modern English proficiency assessment for today’s international students.</p>
                            </div>
                            <a href="#">
                                <div class="ar_btn"><img src="{{URL::to('/img/products_drop_down.jpg')}}" alt=""></div>
                                <span>Explore</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <div class="three_bx_holder">
                            <div>
                            <h3>PTE</h3>
                            <p>Prepare with scored PTE mock test, section-wise test & question-wise practice test to achieve your desired score.</p>
                            </div>
                            <a href="#">
                                <div class="ar_btn"><img src="{{URL::to('/img/products_drop_down.jpg')}}" alt=""></div>
                                <span>Explore</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <div class="three_bx_holder">
                            <div>
                            <h3>ielts</h3>
                            <p>For real-time exam experience, practice on our platform to access your skill and proficiency in CD-IELTS.</p>
                            </div>
                            <a href="#">
                                <div class="ar_btn"><img src="{{URL::to('/img/products_drop_down.jpg')}}" alt=""></div>
                                <span>Explore</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-sm-12">
                        <div class="three_bx_holder">
                            <div>
                            <h3>celpip</h3>
                            <p>Get updated, latest, and optimized practice tests and improve your chances of success in the CELPIP test.</p>
                            </div>
                            <a href="#">
                                <div class="ar_btn"><img src="{{URL::to('/img/products_drop_down.jpg')}}" alt=""></div>
                                <span>Explore</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section three end -->



    <!-- section four -->
    <section class="hm_section_four container-fluid" style="background:url('{{URL::to('/img/section_fr_bg.jpg')}}'); background-position:center; background-repeat:no-repeat; background-size:cover; background-attachment:fixed;">
    <!-- <div class="scroll_range">
        <input type="range" id="range" value="0">
    </div> -->
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-12 hm_section_four_one">
                    <div>
                        <img src="{{URL::to('/img/shape_u.png')}}" alt="">
                        <h2>Your future guide</h2>
                    </div>
                    <div>
                        <h3>Design<br> your<br> success</h3>
                        <p>We simplified the search for the mock test and practice test platform
                            to succeed in your journey. We offer PTE mock test, CD - IELTS mocktest, DUOLINGO practice test and CELPIP practice test to prepare your
                            self for any exam.
                        </p>
                    </div>
                </div>
                <div class="col-xl-7 col-md-12 hm_section_four_two">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 frm">
                                <div class="hm_section_four_two_bx">
                                    <span>1.</span>
                                    <h2>Start by signing up for free</h2>
                                    <div>
                                        <img src="{{URL::to('/img/lg.jpg')}}" alt="">
                                        <h3>create an account</h3>
                                        <form action="#">
                                            <select name="" id="">
                                                <option value="">select products</option>
                                                <option value="">select products</option>
                                                <option value="">select products</option>
                                                <option value="">select products</option>
                                                <option value="">select products</option>
                                            </select>
                                            <input type="text" name="nm" placeholder="Name">
                                            <input type="password" name="ps" placeholder="Password">
                                        </form>
                                        <span>By creating this account, you agree to our <a href="#">privacy policy</a> and <a href="#">terms of use.</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 white"><div class="hm_section_four_two_bx">
                                <span>2.</span>
                                <h2>Attempt your mock test</h2>
                                <img src="{{URL::to('/img/Mask_group_white.png')}}" alt="">
                            </div></div>
                            <div class="col-6 black"><div class="hm_section_four_two_bx">
                                <span>3.</span>
                                <h2>Check your results</h2>
                                <img src="{{URL::to('/img/Mask_group_black.png')}}" alt="">
                            </div></div>
                            <div class="col-6 black"><div class="hm_section_four_two_bx">
                                <span>4.</span>
                                <h2>Check sample answers</h2>
                                <img src="{{URL::to('/img/Mask_group_black.png')}}" alt="">
                            </div></div>
                            <div class="col-6 white"><div class="hm_section_four_two_bx">
                                <span>5.</span>
                                <h2>Get guidance from our tutors</h2>
                                <img src="{{URL::to('/img/Mask_group_white.png')}}" alt="">
                            </div></div>
                            <div class="col-6 white"><div class="hm_section_four_two_bx">
                                <span>6.</span>
                                <h2>Achieve your target</h2>
                                <img src="{{URL::to('/img/Mask_group_white.png')}}" alt="">
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section four end -->



    <!-- section five -->
    <div class="hm_section_five container-fluid" style="background:rgba(0,0,0,0.2) url('{{URL::to('/img/12-01 1.jpg')}}'); background-position:center; background-repeat:no-repeat; background-size:cover; background-blend-mode:darken;">
        <div class="container">
            <div class="row">
                <div class="col-9 m-auto"><h2>The backbone for all your practice platform</h2></div>
                <div class="col-8 m-auto mt-2"><p>For ambitious institutes and students around the world, Gurully makes education as simple, borderless, and easy to practice. We generate thousands of mock test results for PTE, CD - IELTS, DUOLINGO and CELPIP each year.</p></div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 hm_ct_main_holder">

                            <div class="hm_ct_main">
                                <div class="hm_ct">
                                    <h3>6k</h3>
                                    <p>Mock Test result generated every day</p>
                                </div>
                                <div class="hm_ct">
                                    <h3>1000+</h3>
                                    <p>Mock Test result generated every day</p>
                                </div>
                            </div>
                            <div class="hm_ct_main">
                                <div class="hm_ct">
                                    <h3>12k+</h3>
                                    <p>Mock Test result generated every day</p>
                                </div>
                                <div class="hm_ct">
                                    <h3>1500+</h3>
                                    <p>Mock Test result generated every day</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section five end -->





    <!-- section six -->
    <section class="container-fluid hm_section_six p-0">
        <img class="hm_bg_shape" src="{{URL::to('img/hm_bg_shape.jpg')}}" alt="">
        <div class="row m-0">
            <div class="col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="hm_quotes" src="{{URL::to('img/quotes.jpg')}}" alt="">
                <h2>What our<br> students say</h2>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12"><div class="ts_vid_holder">
                <!-- <video width="45px" src=""></video> -->
                <video width="415" height="240" controls>
                    <source src="{{URL::to('img/testimonial_video/REVUELTOS- Animation without Sound.mp4')}}" type="video/mp4">
                    <source src="{{URL::to('img/testimonial_video/REVUELTOS- Animation without Sound.mp4')}}" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <span>This was a very good way to help me in my preparations. It simulated exam conditions and helped me and realized areas i need to work more.</span>
            </div></div>
            <div class="col-lg-4 col-md-6 col-sm-12"><div class="hm_ts">
                <span><img src="{{URL::to('img/testimonial_img/ts.jpg')}}" alt="">Manan Bhavsar</span>
                <!-- start -->
                <div class="hm_ts_holder">
                    <div class="hm_ts_bx">
                        <div><img src="{{URL::to('img/testimonial_img/ts.jpg')}}" alt="">Manan Bhavsar</div>
                        <span>india</span>
                    </div>
                    <div class="hm_ts_bx hm_ts_bx_active">
                        <div><img src="{{URL::to('img/testimonial_img/ts.jpg')}}" alt="">Manan Bhavsar</div>
                        <span>india</span>
                    </div>
                    <div class="hm_ts_bx">
                        <div><img src="{{URL::to('img/testimonial_img/ts.jpg')}}" alt="">Manan Bhavsar</div>
                        <span>india</span>
                    </div>
                </div>
                <!-- end -->
                <span><img src="{{URL::to('img/testimonial_img/ts.jpg')}}" alt="">Manan Bhavsar</span>
            </div></div>
        </div>
    </section>
    <!-- section six end -->



    <div class="hm_ts_slider mt-5">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="hm_sl_holder">
                    <div>
                        <img src="{{URL::to('img/testimonial_img/ts.jpg')}}" alt="">
                        <span>Manan Bhavsar</span>
                        <span>india</span>
                    </div>
                    <p>This was a very good way to help me in my preparations. It simulated exam conditions and helped me and realized areas i need to work more.</p>
                </div>
            </div>
            <div class="item">
                <div class="hm_sl_holder">
                    <div>
                        <img src="{{URL::to('img/testimonial_img/ts.jpg')}}" alt="">
                        <span>Manan Bhavsar</span>
                        <span>india</span>
                    </div>
                    <p>This was a very good way to help me in my preparations. It simulated exam conditions and helped me and realized areas i need to work more.</p>
                </div>
            </div>
            <div class="item">
                <div class="hm_sl_holder">
                    <div>
                        <img src="{{URL::to('img/testimonial_img/ts.jpg')}}" alt="">
                        <span>Manan Bhavsar</span>
                        <span>india</span>
                    </div>
                    <p>This was a very good way to help me in my preparations. It simulated exam conditions and helped me and realized areas i need to work more.</p>
                </div>
            </div>
            <div class="item">
                <div class="hm_sl_holder">
                    <div>
                        <img src="{{URL::to('img/testimonial_img/ts.jpg')}}" alt="">
                        <span>Manan Bhavsar</span>
                        <span>india</span>
                    </div>
                    <p>This was a very good way to help me in my preparations. It simulated exam conditions and helped me and realized areas i need to work more.</p>
                </div>
            </div>
            <div class="item">
                <div class="hm_sl_holder">
                    <div>
                        <img src="{{URL::to('img/testimonial_img/ts.jpg')}}" alt="">
                        <span>Manan Bhavsar</span>
                        <span>india</span>
                    </div>
                    <p>This was a very good way to help me in my preparations. It simulated exam conditions and helped me and realized areas i need to work more.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1339:{
            items:5
        }
    }
})
        })
    </script>




    



    <x-Footer/>

    









    <!-- space -->
    <!-- <div class="space" style="height:500px;"></div> -->
    <!-- space end -->



    <script>
        const anim_round_text = document.querySelector('.anim_round_text> p');
        anim_round_text.innerHTML = anim_round_text.innerText.split('').map((char, i)=>`<span style="transform:rotate(${i * 7}deg)">${char}</span>`).join('')

        // form scroll
        let hm_section_four_two = document.querySelector('.hm_section_four_two');
        window.addEventListener('scroll', function(){
            let w_y = window.scrollY;
            let top = hm_section_four_two.offsetTop;
            let bottom = hm_section_four_two.offsetHeight + top;
            if(w_y >= top && w_y <= bottom){
                hm_section_four_two.scrollTop = 829;
                console.log('done');
            }
        })

    </script>
        









  </main>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</html>