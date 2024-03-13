<style>
    /* pte_s_three buy_now_timing */
.buy_now_timing{margin-top:125px !important;}
.buy_now_timing h3{font-size:32px; max-width:365px;}
.buy_now_timing p{font-size:16px; max-width:475px;}

/* .buy_now_timing> div> div> div:nth-child(2){} */
.buy_now_timing> div> div> div:nth-child(2)> div{width:100%; position:relative; max-width:435px; margin-left:auto; display:flex; justify-content:space-between; align-items:center; margin-top:2px;}
.buy_now_timing> div> div> div:nth-child(2)> div::before{content:''; width:155px; height:155px; background:url('../img/circle.png') no-repeat; background-size:contain; position:absolute; top:0px; left:65px; opacity:0.8;}
.buy_now_timing> div> div> div:nth-child(2)> div:nth-last-child(1)::before{content:''; display:none;}
.buy_now_timing> div> div> div:nth-child(2)> div .left{display:flex; z-index:2; justify-content:space-between; align-items:center; width:65%; border:1px solid #E9402B; padding:22px; border-radius:18px; background:url('../img/pte_vc_btn.png') no-repeat; background-position:center; background-size:cover;}
.buy_now_timing> div> div> div:nth-child(2)> div .left img{width:17px; height:auto; margin-right:8px;}

.buy_now_timing> div> div> div:nth-child(2)> div .inner_right{display:flex; justify-content:space-between; align-items:center;}

.buy_now_timing> div> div> div:nth-child(2)> div .right a{text-decoration:none; text-transform:capitalize; background-color:#BB2A18; color:#fff; padding:4px 28px; padding-bottom:6px; border-radius:25px; display:block; font-size:15px;}
@media screen and (max-width:767px){
    .buy_now_timing h3{text-align:center; max-width:100%;}
    .buy_now_timing p{max-width:100%; text-align:center;}
    .buy_now_timing> div> div> div:nth-child(2)> div{max-width:100%;}

    .buy_now_timing .right {padding-left: 11px;}
    .buy_now_timing .right> a {font-size: 11px !important;  padding: 12px 20px !important; padding-bottom: 12px !important;}
    .buy_now_timing {
    margin-top: 32px !important;
}
}

</style>


<div class="holder buy_now_timing">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>PTE Full-length Mock Test with Answers</h3>
                        <p>The online PTE mock test provides you the advantage when you appear for the PTE exam. The mock test is set with 55 questions to combine with Speaking, Writing, Reading, and Listening.</p>
                    </div>
                    <div class="col-md-6">
                        <!--  -->
                        <div>
                            <div class="left">
                                <div class="inner_left">text-1</div>
                                <div class="inner_right">
                                    <img src="{{URL::to('img/clock.png')}}" alt="">
                                    <span>2h:00</span>
                                </div>
                            </div>
                            <div class="right"><a href="#">buy now</a></div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <div>
                            <div class="left">
                                <div class="inner_left">text-1</div>
                                <div class="inner_right">
                                    <img src="{{URL::to('img/clock.png')}}" alt="">
                                    <span>2h:00</span>
                                </div>
                            </div>
                            <div class="right"><a href="#">buy now</a></div>
                        </div>
                        <!--  -->
                        <!--  -->
                        <div>
                            <div class="left">
                                <div class="inner_left">text-1</div>
                                <div class="inner_right">
                                    <img src="{{URL::to('img/clock.png')}}" alt="">
                                    <span>2h:00</span>
                                </div>
                            </div>
                            <div class="right"><a href="#">buy now</a></div>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>