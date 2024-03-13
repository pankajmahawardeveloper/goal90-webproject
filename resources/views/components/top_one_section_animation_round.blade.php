<style>
    /* section one */
    body{font-family:regular;}
.hm_section_one{margin-top:200px;}
.hm_section_one_holder, .hm_one_animate_holder{position:relative;}
.hm_one_animate_holder{width:180px; height:180px; border-radius:50%; background-color:#000;}
.hm_section_one_holder h2{font-size:99px; line-height:115px; text-transform:capitalize;}
.hm_section_one_holder p{max-width:832px; margin-top:32px; font-family:semi_bold; font-size:18px; padding-left:25px;}

.hm_one_animate{position:absolute; right:155px; bottom:25px;}

.anim_round_arrow> img:nth-child(1){width:132px;}
.anim_round_arrow> img{position:absolute; top:50%; left:50%; transform:translate(-50%, -50%);}

.anim_round_text{position:absolute; width:100%; height:100%; z-index:1; animation:rotate_text 10s linear infinite;}
.anim_round_text> p{color:#fff; margin-top:0; font-size:10px; text-transform:uppercase;}
@keyframes rotate_text {
    0%{transform:rotate(360deg);}
    100%{transform:rotate(0deg);}
}
.anim_round_text> p span{position:absolute; left:50%; top:5px; transform-origin:0 85px;}
.anim_round_text> p span:nth-child(16){visibility:hidden;}
.anim_round_text> p span:nth-child(33){visibility:hidden;}
.anim_round_text> p span:nth-last-child(1){visibility:hidden;}
/* section one end */


/* media queries */
@media screen and (max-width:1399px){
    .hm_section_one{margin-top: 125px;}
    .hm_section_one_holder h2{font-size: 82px !important;}
    .hm_section_one_holder p {max-width: 735px !important;}
}

@media screen and (max-width:1199px){
    .hm_section_one_holder h2{font-size: 68px !important; line-height: 78px !important;}
    .hm_section_one_holder p {max-width: 568px !important; padding-left:7px !important;}
    .hm_one_animate {right: 118px !important; bottom: -15px !important;}
}

@media screen and (max-width:992px){
    .hm_section_one_holder h2{font-size: 52px !important; line-height: 58px !important;}
    .hm_section_one_holder p {max-width: 450px !important; padding-left:7px !important;}
    .hm_one_animate {right: 55px !important;}
}

@media screen and (max-width:767px){
    .hm_section_one_holder h2{font-size: 40px !important; line-height: 45px !important;}
    /* .hm_section_one_holder p {max-width: 450px; padding-left:7px;} */
    .hm_one_animate {bottom: -74px !important; right: -193px !important; display:none !important;}
    /* .anim_round_arrow> img{transform: translate(-50%, -50%) rotate(-92deg);}*/
    main, .main{overflow:hidden !important;}

    .hm_section_one_holder p{margin-top:10px !important;}
}

@media screen and (max-width:576px){
    .hm_section_one_holder h2 {font-size: 35px !important;}
}

</style>


<!-- section one -->
<div class="hm_section_one">
        <div class="container hm_section_one_holder">
            <div class="row">
                <div class="col-12">
                    <h2>{{$head}}</h2>
                    <p>{{$title}}</p>
                    <div class="hm_one_animate">
                        <div class="hm_one_animate_holder">
                            <div class="anim_round_text"><p>free moke text - free moke text - free moke text -</p></div>
                            <div class="anim_round_arrow">
                                <img src="{{URL::to('/img/animate_arrow/arrow_bg.png')}}" alt="">
                                <img src="{{URL::to('/img/animate_arrow/arrow_right.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section one end -->