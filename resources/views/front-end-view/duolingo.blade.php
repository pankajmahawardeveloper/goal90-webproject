<!DOCTYPE html>
<html lang="en">
<head>
    <title>duolingo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- style -->
     <link rel="stylesheet" href="{{URL::to('/front-end-style/style.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/pte.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/ielts.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/duolingo.css')}}">
     <link rel="stylesheet" href="{{URL::to('/front-end-style/responsive.css')}}">
     <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
    integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .hm_section_seven> div> div> a> span{font-size:20px !important;}
        .ask_qe_one> img{display:none;}
        .main{height:auto !important}
        .hm_one_animate {right: 162px;}
        .hm_section_one_holder p{max-width:935px;}
        @media screen and (max-width:1200px){.pte_s_three_ielts .holder{width:100%;} .pte_s_three_ielts img{width:100%}}
        @media screen and (max-width:992px){
            .pte_s_three .one h2{font-size: 55px; line-height: 62px;}
            .pte_s_three {margin-top: -127px;}

            .pte_s_three> div:nth-child(1) {margin-top: 88px;}
            .pte_s_three> .three h3{margin-top:0;}
            .pte_s_three_ielts .holder {margin-top: 0px;}
            .break {max-width: 255px;}

            .packages_ct .bx_2 ul{padding:12px 7px !important;}
            .packages_ct .holder a {max-width: 145px;}

            .break {max-width: 345px;}
        
        }
        @media screen and (max-width:767px){
            .pte_s_three .one h2 {
    font-size: 52px;}

    .pte_s_three> .three .row{flex-direction: column-reverse;}
    .pte_s_three> .three .row h3, .pte_s_three_ielts .holder h2{margin-top:25px; text-align:center; max-width:100%;}
    .pte_s_three> .three .row p, .pte_s_three_ielts .holder p{text-align:center; max-width:100%;}
    
    .pte_s_three{padding-bottom: 10px !important;}
        }

        @media screen and (max-width:575px){
            .row.packages_ct {
    max-width: 325px;
}

.break{margin-top: 0px !important;}
.pte_s_three_ielts {
    margin-top: 50px;}

.pte_s_three {
    margin-top: -60px;
}

.pte_s_three> div:nth-child(1) {
    margin-top: 0;
}

.pte_s_three .one h2 {
    font-size: 37px;
    line-height: 39px;
}
        }
    </style>
</head>
<body>

<x-header/>

<div class="main">


<x-top_one_section_animation_round head="Practice with Best Duolingo Mock Test Platform" title="Practice your Duolingo mock test online anytime anywhere in the comfort of your home. Be prepared before the actual exam and stand a chance of achieving your Duolingo score on the first attempt." />

    <!-- section two -->
    <div class="container mt-5 pt-2">
        <div class="row">
            <div class="col-12">
                <img src="{{URL::to('img/institute_bg.jpg')}}" alt=""style="width:100%;">
            </div>
        </div>
    </div>
    <!-- section two end -->


    <!-- section three -->
    <div class="pte_s_three container-fluid">
        <div class="container">
            <div class="row one">
                <div class="col-12">
                    <h2>Features of the Duolingo English Test</h2>
                    <p>It is easier in comparison with other English proficiency exams to help achieve your dream.</p>
                    <div class="break">
                        <div class="br_left"></div>
                        <div class="br_center"></div>
                        <div class="br_right"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="holder three">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Easy Scoring of exam</h3>
                        <p>The online PTE mock test provides you the advantage when you appear for the PTE exam. The mock test is set with 55 questions to combine with Speaking, Writing, Reading, and Listening.</p>
                    </div>
                    <div class="col-md-6"><img src="{{URL::to('img/Group609.png')}}" alt="" style="max-width:100%;"></div>
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
                    <div class="col-md-6"><img src="{{URL::to('img/Group606.png')}}" alt=""></div>
                    <div class="col-md-6">
                        <div class="holder">
                            <h2>Duolingo subscore report</h2>
                            <p>This exam tests your ability to read and write for the Literacy subscore. While Comprehension tests your Reading and Listening ability. For the Conversation, your Listening and Speaking abilities are checked. Lastly, Production test your Writing and Speaking abilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="pte_six_main container">
            <div class="row">
                <div class="col-12 ielts_pte_six_main">
                    <div class="left">
                        <button class="pte_s_six_pte_six_main_left_btn_active">Virtual Speaking Partner</button>
                        <button>Virtual Speaking Partner</button>
                    </div>
                    <div class="center">
                        <div class="tp"></div>
                        <div class="md"></div>
                        <div class="bt"></div>
                    </div>
                    <div class="right"><img src="{{URL::to('img/Group 605.png')}}" alt=""></div>
                </div>
            </div>
        </div> -->
        
    </div>
    <!-- section three end -->


    <div class="container packages_main">
        <div class="row">
            <div class="col-12">
                <h2 style="text-align:center" style="font-family:semi_bold;">Practice free with the Duolingo mock test</h2>
                <p style="text-align:center">Duolingo test packages are available for you at easy and affordable rates where you don't have to spend much before going for a real exam.</p>
            </div>
        </div>
        <div class="break">
            <div class="break_left"></div>
            <div class="break_center"></div>
            <div class="break_right"></div>
        </div>

        <div class="row packages_ct">
            <!-- one -->
            <div class="col-md-4 col-sm-6 my-2">
                <div class="holder">
                    <div class="bx_1" style="background-color: rgb(233 64 43 / 10%); text-align:center;">
                        <span>Trail pack</span>
                        <h4 style="font-family:semi_bold;">Free</h4>
                        <span class="tax" style="visibility:hidden;">+18% (gst)</span>
                    </div>
                    <!-- ////////// -->
                    <div class="bx_2">
                        <ul>
                            <li><span>1</span>Scored mock test</li>
                            <li><span>6</span>Months Validity</li>
                        </ul>
                    </div>
                    <a href="#">
                        <button>buy now</button>
                    </a>
                </div>
            </div>

            <!-- two -->
            <div class="col-md-4 col-sm-6 my-2">
                <div class="holder">
                    <div class="bx_1" style="background-color: rgb(51 149 255 / 10%); text-align:center;">
                        <span>Silver test kit</span>
                        <h4 style="font-family:semi_bold;">inr 1500</h4>
                        <span class="tax">+18% (gst)</span>
                    </div>
                    <!-- ////////// -->
                    <div class="bx_2">
                        <ul>
                            <li><span>5</span>Scored mock test</li>
                            <li><span>6</span>Months Validity</li>
                        </ul>
                    </div>
                    <a href="#">
                        <button>buy now</button>
                    </a>
                </div>
            </div>

            <!-- three -->
            <div class="col-md-4 col-sm-6 my-2">
                <div class="holder">
                    <div class="bx_1" style="background-color:rgb(151 71 255 / 10%); text-align:center;">
                        <span>gold test kit</span>
                        <h4 style="font-family:semi_bold;">inr 3000</h4>
                        <span class="tax">+18% (gst)</span>
                    </div>
                    <!-- ////////// -->
                    <div class="bx_2">
                        <ul>
                            <li><span>15</span>Scored mock test</li>
                            <li><span>6</span>Months Validity</li>
                        </ul>
                    </div>
                    <a href="#">
                        <button>buy now</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

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