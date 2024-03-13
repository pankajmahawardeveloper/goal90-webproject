<!DOCTYPE html>
<html lang="en">
<head>
    <title>pte</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- style -->
     <link rel="stylesheet" href="{{URL::to('/front-end-style/pte.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/responsive.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/style.css')}}">
     <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
    integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* .hm_section_seven> div> div> a> span{font-size:20px !important;} */
        .main{height:auto !important;}
        .hm_one_animate {right: 162px !important;}
        .hm_section_one_holder p{max-width:935px !important;}

        @media screen and (max-width:1229px){
            .pte_s_five.container{max-width: 1140px !important;}
            .pte_s_five .holder .right_break {width: 100%; max-width: 728px;}
            .pte_s_five .holder> p{max-width: 890px;}
            .pte_six_main.container {max-width: 1140px !important;}
        }

        @media screen and (max-width:1199px){
            .pte_s_five.container {max-width: 960px !important;}

.pte_s_five h2 {
    max-width: 335px; font-size: 39px;}
    .pte_s_five .holder{top: 70px;}
    .pte_s_five .holder .right_break{max-width: 632px;}
    .pte_s_five .holder> p {max-width: 780px;}
    .pte_six_main.container {max-width: 960px !important;}
    .pte_s_four h2 {font-size: 75px;}

}

@media screen and (max-width:991px){
    .pte_s_three> .three h3{margin-top:0px;}
    .pte_s_four h2 {font-size: 62px;}

    .pte_s_five.container {max-width: 725px !important;}

    .pte_s_five .holder> .inner_holder> .bx h3 {font-size: 12px;}

    .pte_s_five .holder .right_break {max-width: 457px;}

    .pte_s_five h2 {
    max-width: 290px;
    font-size: 28px;
}

.pte_s_five .holder> .inner_holder> .bx h3{margin-bottom:0px !important;}
.pte_s_five .holder {top: 54px;}
.break {max-width: 465px;}

.pte_six_main.container {
    max-width: 720px !important;
}

.pte_s_six .pte_six_main .center{display:none;}
.pte_s_six .pte_six_main .left> button{padding: 12px 23px; font-size: 15px;}
}

@media screen and (max-width:767px){
    .pte_s_three .one h2 {font-size: 50px; line-height: 55px;}
    .reverse> div{flex-direction: column-reverse;}
    .pte_s_three> .three img{max-width:100%;}
    .pte_s_three> .three h3{margin-top:15px;}
    .pte_s_three> .three h3, .pte_s_three> .three p{max-width:100%; text-align:center;}
    .pte_s_four h2 {font-size: 35px; margin-bottom: 12px;}

    .fr_info> div> div{padding:12px}

    .pte_s_five.container {
    max-width: 538px !important;}

    .pte_s_three {margin-top: 47px}


.pte_s_five .holder{position:static;}

    .pte_s_five .holder .right_break {
    max-width: 457px;}

    .pte_s_five .holder .right_break {display:none;}

    .pte_s_five h2 {
    max-width: 100%; font-size:25px;}

    .pte_s_five .holder> p {
    margin-top: 0;
}
.pte_s_five .holder> .inner_holder{flex-wrap: wrap;}
.pte_s_five .holder> .inner_holder> div{width:50% !important;}
.pte_s_six{margin-top:32px;}

.pte_s_six video{width:100%}
.pte_s_six> div:nth-child(1) h2 {
    margin-top: 14px; text-align:center;
}

.pte_s_six> div:nth-child(1) p {
    text-align:center;
}

.pte_six_main.container {
    max-width: 540px !important;
}

.pte_six_main.container .row> div{display:block;}
.pte_six_main.container .row> div .left{flex-direction: row;}
.pte_six_main.container .row> div .left button{margin:2px;}
.pte_six_main.container .row> div .right{margin-top:12px;}
}


@media screen and (max-width:575px){
    .pte_s_three .one h2 {
    font-size: 37px;
    line-height: 42px;
}
.pte_s_five .holder> p {
    margin-top: 28px;
}

.pte_s_three{padding:55px 25px;}
}
    </style>
</head>
<body>

<x-header />
    

    <div class="main">


    <x-top_one_section_animation_round head="Practice with The Best PTE Mock Test Platform" title="Gurully is dedicated to provide best practice material for PTE with the ease of access in attempting PTE mock tests and practice tests. Also, it is mapped out keeping in mind the needs of student, which guarantees the best results." />

    <!-- section two -->
    <div class="container mt-5 pt-2">
        <div class="row">
            <div class="col-12">
                <img src="{{URL::to('img/institute_bg.jpg')}}" alt="" style="width:100%;">
            </div>
        </div>
    </div>
    <!-- section two end -->


    <!-- section three -->
    <div class="pte_s_three container-fluid">
        <div class="container">
            <div class="row one">
                <div class="col-12">
                    <h2>How you can use the material?</h2>
                    <p>See how PTE mock test and practice test can be utilized.</p>
                    <div class="break">
                        <div class="br_left"></div>
                        <div class="br_center"></div>
                        <div class="br_right"></div>
                    </div>
                </div>
            </div>
        </div>

        <x-buy_now_timing/>

        <div class="break mt-5 pt-5">
            <div class="br_left"></div>
            <div class="br_center"></div>
            <div class="br_right"></div>
        </div>

        <div class="holder three">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"><img src="{{URL::to('img/left_ct.png')}}" alt=""></div>
                    <div class="col-md-6">
                        <h3>Section-wise PTE Practice Test with Score</h3>
                        <p>This scored PTE practice test will help you to gauge your performance. The scoring in the online PTE section-wise practice test gives you an in-depth analysis of each question type and the areas to improve.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="break mt-5 pt-5">
            <div class="br_left"></div>
            <div class="br_center"></div>
            <div class="br_right"></div>
        </div>

        <div class="holder three">
            <div class="container reverse">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Question-wise Practice</h3>
                        <p>The question bank is updated with the latest prediction file repeated questions to overcome the fear of real-exam on monthly basis. We have added 4500+ questions for the practice.</p>
                    </div>
                    <div class="col-md-6"><img src="{{URL::to('img/Frame375.png')}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- section three end -->








    <!-- section four -->
    <div class="pte_s_four container">
        <div class="row">
            <div class="col-12">
                <h2>Features of Gurully’s PTE Practice Platform</h2>
                <p>This practice platform will guide you with the help of a free PTE mock test with real-time experience along with the instant result and analytics to check your performance.</p>
                <div class="break">
                    <div class="break_left"></div>
                    <div class="break_center"></div>
                    <div class="break_right"></div>
                </div>
                <div class="container fr_info">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="holder">
                                <h3>Best AI Technology for PTE evaluation</h3>
                                <p>Now get the latest in-built AI technologies that give you instant results for the PTE practice test which will help you to score 79+ score.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="holder">
                                <h3>Sample Answers for your PTE mock test</h3>
                                <p>Our PTE platform provides the mock test sample audio and answers for you to prepare for the PTE exam and compare to overcome your mistakes.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container fr_info">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="holder">
                                <h3>BPTE Study materials with vocabulary builder</h3>
                                <p>The vocabulary builder which comes with our PTE tutorial application helps you in your reading test and achieve your scores on the first attempt.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="holder">
                                <h3>Prediction files for extra preparation</h3>
                                <p>Go through the monthly prediction files of the PTE exams of the previous months which can help you to avoid any last minutes hicups and improve your score.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section four end -->







    <!-- section five -->
    <div class="pte_s_five container">
        <div class="row">
            <div class="col-12">
                <h2 style="color:#E9402B;">Advantage of Free PTE Mock Test Platform</h2>
                <div class="holder">
                    <div class="right_break">
                        <div class="left"></div>
                        <div class="center"></div>
                        <div class="right"></div>
                    </div>
                    <p>The platform provides a wide range of PTE study materials to practice with. To start with, the PTE question-wise will allow you to know the scoring pattern of the exam. The online PTE mock test free with a scorecard will help students to know where they stand and how to manage their time efficiently during exam day.</p>
                    <div class="inner_holder">
                        <div class="bx"><h3>Updated PTE<br> question banks</h3></div>
                        <div class="bx"><h3>Monthly predictive<br> practice questions</h3></div>
                        <div class="bx"><h3>Accurate and Instant<br> result for PTE test</h3></div>
                        <div class="bx"><h3>Full-scored mock test<br> and section-test</h3></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- section six -->
    <div class="pte_s_six container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <video width="320" height="240"  poster="{{URL::to('img/about_banner.jpg')}}" controls>
                    <source src="{{URL::to('img/testimonial_video/REVUELTOS- Animation without Sound.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                </div>
                <div class="col-md-6">
                    <h2>How to appear Free PTE Mock Test Online?</h2>
                    <p>Gurully’s practice platform provides you the opportunity to attempt one real-time full PTE mock test with answers and get your result evaluated instantly once you signup. Gain confidence by performing question-wise practice to master individual sections.</p>
                </div>
            </div>
        </div>

        <div class="pte_six_main container">
            <div class="row">
                <div class="col-12">
                    <div class="left">
                        <button class="pte_s_six_pte_six_main_left_btn_active">Instant Result</button>
                        <button>Sample Answers</button>
                        <button>Detail Analysis</button>
                    </div>
                    <div class="center">
                        <div class="tp"></div>
                        <div class="md"></div>
                        <div class="bt"></div>
                    </div>
                    <div class="right"><img src="{{URL::to('img/left_ct.png')}}" alt="" style="width:100%;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- section six end -->

    </div>

    <script>
        let pte_btn_left_btn_one = document.querySelectorAll('.pte_six_main .left > button')[0];
        let pte_btn_left_btn_two = document.querySelectorAll('.pte_six_main .left > button')[1];
        let pte_btn_left_btn_three = document.querySelectorAll('.pte_six_main .left > button')[2];
        let pte_right_img_show_holder = document.querySelectorAll('.pte_six_main .right > img')[0];
        pte_btn_left_btn_one.addEventListener('click',function(){
            this.classList.add('pte_s_six_pte_six_main_left_btn_active')
            pte_btn_left_btn_two.classList.remove('pte_s_six_pte_six_main_left_btn_active')
            pte_btn_left_btn_three.classList.remove('pte_s_six_pte_six_main_left_btn_active')
            pte_right_img_show_holder.src = "https://img.freepik.com/free-vector/travel-landing-page-template-with-photo_23-2148367303.jpg";
        })
        pte_btn_left_btn_two.addEventListener('click',function(){
            this.classList.add('pte_s_six_pte_six_main_left_btn_active')
            pte_btn_left_btn_one.classList.remove('pte_s_six_pte_six_main_left_btn_active')
            pte_btn_left_btn_three.classList.remove('pte_s_six_pte_six_main_left_btn_active')
            pte_right_img_show_holder.src = "https://themewagon.com/wp-content/uploads/2022/04/image-6-1.png";
        })
        pte_btn_left_btn_three.addEventListener('click',function(){
            this.classList.add('pte_s_six_pte_six_main_left_btn_active')
            pte_btn_left_btn_one.classList.remove('pte_s_six_pte_six_main_left_btn_active')
            pte_btn_left_btn_two.classList.remove('pte_s_six_pte_six_main_left_btn_active')
            pte_right_img_show_holder.src = "https://images.template.net/157953/aesthetic-letterhead-design-template-e5p5q.jpg";
        })
        
    </script>






    <x-asked_que/>
    <x-Footer/>

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
</body>
</html>