<!DOCTYPE html>
<html lang="en">
<head>
    <title>ielts</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- style -->
     <link rel="stylesheet" href="{{URL::to('/front-end-style/style.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/responsive.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/pte.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/ielts.css')}}">
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
        .pte_s_six_pte_six_main_left_btn_active{border-top: 1px solid red !important; border-left: 1px solid red !important; border-bottom: 8px solid red !important; border-right: 8px solid red !important; background: url(../img/pte_vc_btn_hover.png) no-repeat !important; background-size: cover !important; background-position: center !important;}
        .ask_qe_one> img{display:none;}
        .main{height:auto !important;}
        .hm_one_animate {right: 162px;}
        .hm_section_one_holder p{max-width:935px;}
        /* .ask_qe_one> img{display:none;} */

        @media screen and (max-width:1400px){
            .pte_s_three_ielts img{display:block; margin-left:auto;}
            .pte_s_three_ielts .holder{width:100%}
            .pte_s_three_ielts img, .pte_six_main.container img, .pte_s_three> .three img{width:100%;}
        }

        @media screen and (max-width:1199px){
            .pte_six_main.container{max-width: 945px !important;}
            .pte_s_three_ielts .holder{width:100%}
            .break.mt-5.pt-5{padding-top: 0px !important; padding-bottom: 65px; max-width:335px;}
            .pte_s_three_ielts{margin-top:0px;}
        }

        @media screen and (max-width:991px){
            .pte_six_main.container{max-width: 710px !important;}
            .pte_s_three> .three h3, .pte_s_three_ielts .holder{margin-top:12px;}
            .col-12.ielts_pte_six_main .right{max-width: 280px;}
            .ielts_pte_six_main .left> button{padding: 9px 27px;}
            .pte_s_three .one h2 {font-size: 55px; line-height: 62px;}
            .pte_s_three {margin-top: -125px;}
            .pte_s_three> div:nth-child(1) {margin-top: 85px;}
        }

        @media screen and (max-width:767px){
            .pte_s_three> .three img{max-width:100%}
            .pte_s_three_ielts .row{flex-direction: column-reverse;}
            .pte_s_three_ielts .row h2, .pte_s_three_ielts .row p, .pte_s_three> .three h3, .pte_s_three> .three p{text-align:center; max-width:100%;}
            .pte_s_three> .three h3, .pte_s_three_ielts .holder {margin-top: 24px;}
            .pte_six_main.container {max-width: 520px !important;}
            .col-12.ielts_pte_six_main{display:block;}
            .col-12.ielts_pte_six_main .center{display:none;}
            .col-12.ielts_pte_six_main .right {max-width: 100%;}
            .ielts_pte_six_main> .left{display:flex; flex-direction: row; justify-content: center;}
            .ielts_pte_six_main .left> button {padding: 8px 18px; font-size: 14px; margin: 15px 5px;}
            .pte_s_three> .three{margin-top:0px;}
            .pte_s_three .one h2 {font-size: 34px; line-height: 39px;}
            .pte_six_main {padding-top: 0px !important;}
            .pte_s_three_ielts {margin-bottom: 45px;}
        }


        /* ielts_test_main */
.ielts_test_main{padding-top:105px;}
.ielts_test_main .holder_info{max-width:600px; height:auto; padding-right:55px; margin:auto; display:flex;}
.ielts_test_main .holder_info> .left{width:155px; height:auto; margin-top:5px; margin-right:12px;}
.ielts_test_main .holder_info> .left> img{width:100%; height:auto;}
.ielts_test_main .holder_info .holder_bx{display:flex; align-items:center;}
.ielts_test_main .holder_info .holder_bx h2{font-size:12px; text-transform:uppercase; margin-right:8px; padding:12px; border-radius:10px; border:1px solid #dfdfdf;}
.ielts_test_main_bg{padding:205px 0px;}
.ielts_test_main> div> div> div{display:flex; align-items:center; justify-content:center;}

.ielts_test_main .holder_info_right{margin:auto;}

/* ielts_test_head */
/* .ielts_test_head{border:1px solid red;} */
.ielts_test_head h2{font-size:85px; text-align:center; margin-top:85px;}
.ielts_test_head p{text-align:center; max-width:1000px; margin:auto; margin-top:22px; margin-bottom:22px;}
.ielts_test_head .center{max-width:500px; margin:auto; display:flex; align-items:center; justify-content:center;}
.ielts_test_head .center> div:nth-child(1), .ielts_test_head .center> div:nth-child(3){width:6px; height:6px; border-radius:50%; background-color:#000;}
.ielts_test_head .center> div:nth-child(2){width:100%; height:1px; background-color:#000;}

@media screen and (max-width:1399px){
    .ielts_test_main .holder_info{max-width: 100%; padding: 32px 15px;}
    .ielts_test_head h2 {font-size: 65px;}
}
@media screen and (max-width:991px){
    .ielts_test_main .holder_info .holder_bx {flex-wrap: wrap;}
}
@media screen and (max-width:767px){
    .ielts_test_main> div:nth-child(1)>div{flex-direction: column-reverse;}
    .ielts_test_head h2 {font-size: 32px;}
}
        
    </style>
</head>
<body>

<x-header/>

<div class="main">


<x-top_one_section_animation_round head="Practice with The Best Ielts Mock Test Platform" title="Living up your dreams is easy as gurully.com offers the world’s most information-rich and updated free ielts mock test & practice test online for every CD IELTS aspirant. We promise you a better score and career." />

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
                    <p>Computer Delivered IELTS is not like any other test. It grills you deeply and testifies your abilities at various scales. To ace in the test, you need a bit more than the commitment and the right sort of study materials. Gurully offers everything that it takes to be a successful test taker. With help of our IELTS practice test & mock test, success in CD - IELTS is a sure thing. The real-time practice platform with the updated content will give you a boost to your preparation.</p>
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
                        <h3>CD - IELTS Section-wise Practice Test</h3>
                        <p>Each section-wise practice test for CD – IELTS is more of pre-preparation material to prepare for the exam. This will give you the extra practice for the exam day.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="break mt-5 pt-5">
            <div class="br_left"></div>
            <div class="br_center"></div>
            <div class="br_right"></div>
        </div>

        <div class="pte_s_three_ielts">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="holder">
                            <h2>Question-wise Practice</h2>
                            <p>The question bank is updated with the latest prediction file repeated questions to overcome the fear of real-exam on monthly basis. We have added 4500+ questions for the practice.</p>
                        </div>
                    </div>
                    <div class="col-md-6"><img src="{{URL::to('img/Group 608.png')}}" alt=""></div>
                </div>
            </div>
        </div>

        <div class="break mt-5 pt-5">
            <div class="br_left"></div>
            <div class="br_center"></div>
            <div class="br_right"></div>
        </div>

        <div class="pte_six_main container">
            <div class="row">
                <div class="col-12">
                    <h2 style="text-align:center">Have you improved with your practice?</h2>
                    <p style="text-align:center">See your results and reports for improvements.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ielts_pte_six_main">
                    <div class="left">
                        <button class="pte_s_six_pte_six_main_left_btn_active">Virtual Speaking Partner</button>
                        <button>Sample Answer & Result</button>
                    </div>
                    <div class="center">
                        <div class="tp"></div>
                        <div class="md"></div>
                        <div class="bt"></div>
                    </div>
                    <div class="right"><img src="{{URL::to('img/Group 605.png')}}" alt=""></div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- section three end -->
    <script>
        let pte_btn_left_btn_one = document.querySelectorAll('.pte_six_main .left > button')[0];
        let pte_btn_left_btn_two = document.querySelectorAll('.pte_six_main .left > button')[1];
        let pte_right_img_show_holder = document.querySelectorAll('.pte_six_main .right > img')[0];
        pte_btn_left_btn_one.addEventListener('click',function(){
            this.classList.add('pte_s_six_pte_six_main_left_btn_active')
            pte_btn_left_btn_two.classList.remove('pte_s_six_pte_six_main_left_btn_active')
            pte_right_img_show_holder.src = "https://img.freepik.com/free-vector/travel-landing-page-template-with-photo_23-2148367303.jpg";
        })
        pte_btn_left_btn_two.addEventListener('click',function(){
            this.classList.add('pte_s_six_pte_six_main_left_btn_active')
            pte_btn_left_btn_one.classList.remove('pte_s_six_pte_six_main_left_btn_active')
            pte_right_img_show_holder.src = "https://themewagon.com/wp-content/uploads/2022/04/image-6-1.png";
        })
        
    </script>

    <!-- ielts test -->
    <div class="container ielts_test_head">
        <div class="row">
            <div class="col-12">
                <h2>Types of CD IELTS Test</h2>
                <p>Computer delivered IELTS comes with two variants, IELTS Academic and IELTS General. Both the exam fulfill the different purposes of the aspirant. One works for the student who is planning to study and later is for the aspirant who is planning to settle abroad.</p>
                <div class="center">
                    <div class="tp"></div>
                    <div class="md"></div>
                    <div class="bt"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="ielts_test_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="holder_info">
                        <div class="left"><img src="{{URL::to('img/r_arrow.png')}}" alt=""></div>
                        <div class="right">
                            <h2>IELTS Academic</h2>
                            <p>Suitable for aspirants who are seeking to secure a seat in an English-speaking country for higher education or professional registration. The test has been designed to assess a candidate’s hold over academic language and analyze whether or not the candidate is suitable to study in an English-speaking environment.</p>
                            <div class="holder_bx">
                                <h2>listening</h2>
                                <h2>listening</h2>
                                <h2>listening</h2>
                                <h2>listening</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ielts_test_main_bg" style="background:url('{{URL::to('img/Rectangle 313.jpg')}}') no-repeat; background-position:center; background-size:cover;"></div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 ielts_test_main_bg" style="background:url('{{URL::to('img/Rectangle 313.jpg')}}') no-repeat; background-position:center; background-size:cover;"></div>
                <div class="col-md-6">
                    <div class="holder_info holder_info_right">
                        <div class="left"><img src="{{URL::to('img/r_arrow.png')}}" alt=""></div>
                        <div class="right">
                            <h2>IELTS Academic</h2>
                            <p>Suitable for aspirants who are seeking to secure a seat in an English-speaking country for higher education or professional registration. The test has been designed to assess a candidate’s hold over academic language and analyze whether or not the candidate is suitable to study in an English-speaking environment.</p>
                            <div class="holder_bx">
                                <h2>listening</h2>
                                <h2>listening</h2>
                                <h2>listening</h2>
                                <h2>listening</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ielts text end -->


    <x-asked_que/>
    <x-Footer/>







</div>













    <!-- <div class="space" style="height:100vh"></div> -->

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