<!DOCTYPE html>
<html lang="en">
<head>
    <title>celpip</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- style -->
     <link rel="stylesheet" href="{{URL::to('/front-end-style/style.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/pte_voucher.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/pte.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/ielts.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/duolingo.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/celpip.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/responsive.css')}}">
     <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
  integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
  integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* .hm_section_seven> div> div> a> span{font-size:20px !important;} */
        .ask_qe_one> img{display:none;}
        .main{height:auto !important;}
        .hm_one_animate {right: 162px; bottom:-32px !important;}
        .hm_section_one_holder p{max-width:935px; }
        .hm_section_one_holder h2{font-size:96px !important;}
        @media screen and (max-width:1400px){
            .hm_one_animate {right: 155px;}
        }
        @media screen and (max-width:1200px){}
        @media screen and (max-width:992px){
            .pte_s_three .one h2 {font-size: 55px; line-height: 62px;}
            .pte_s_three> div:nth-child(1){margin-top:125px;}
            .celpip_section_2> div {
    padding-top: 0 !important;
}
.pte_s_three {
    margin-top: -165px;
}
        }
        @media screen and (max-width:768px){
            .celpip_section_2> div{padding-top:0px !important}
            .pte_s_three {margin-top: -145px;}

            .pte_s_three> div:nth-child(1) {margin-top: 85px;}
            
        }
        @media screen and (max-width:576px){
            .pte_s_three {
    margin-top: -80px;
}
.pte_s_three> div:nth-child(1) {
    margin-top: 0px !important;
}
.pte_s_three .one h2 {
    font-size: 34px;
    line-height: 39px;
}
        }




        /* ielts_test_main */
.ielts_test_main{padding-top:105px;}
.ielts_test_main .holder_info{max-width:600px; height:auto; padding-right:55px; margin:auto; display:flex;}
.ielts_test_main .holder_info> .left{width:70px; height:auto; margin-top:5px; margin-right:12px;}
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


<x-top_one_section_animation_round head="Practice with best AI-driven CELPIP Mock Test Platform" title="Now It's easy to appear for CELPIP Exam, Practice easily with a great UI Interface and get Instant accurate results. Get sample answers to compare and improve your weak areas. Appear one free CELIPIP mock test online and check where you are standing. Get updated, latest, and optimized practice tests and improve success chances in the CELPIP test." />

    <!-- section two -->
    <div class="container pt-2 celpip_section_2">
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

        
        
    </div>
    <!-- section three end -->



    
    <!-- ielts test -->
    <div class="container ielts_test_head">
        <div class="row">
            <div class="col-12">
                <h2>Types of CELPIP Test</h2>
                <p>At present, there are two versions available for this test. Each version has a different target audience but the same objective, to testify to the English proficiency of a candidate who wants to move to Canada.</p>
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
                            <h2>CELPIP - General Test</h2>
                            <p>Evaluates test taker’s English speaking, reading, listening, and writing skills and is used for permanent residence applications and professional designations.</p>
                            <div class="holder_bx">
                                <h2>listening</h2>
                                <h2>Reading</h2>
                                <h2>writing</h2>
                                <h2>speaking</h2>
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
                            <h2>CELPIP - General LS Test</h2>
                            <p>Evaluates test taker’s English speaking and listening skills and is used for citizenship applications and professional designation.</p>
                            <div class="holder_bx">
                                <h2>listening</h2>
                                <h2>Speakingg</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ielts text end -->



    <x-asked_que/>
    <x-footer/>










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