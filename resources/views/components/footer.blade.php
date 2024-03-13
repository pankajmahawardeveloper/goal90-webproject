<style>
    /* hm section seven */
.hm_sv_br{display:flex; justify-content:space-between; align-items:center;}
.hm_sv_br> .left, .hm_sv_br> .right{width:8px; height:8px; background-color:#000; border-radius:50%;}
.hm_sv_br> .center{width:100%; height:2px; background-color:#868686;}

.hm_section_seven{margin-top:85px !important;}
.hm_section_seven h2{font-size:85px; max-width:530px; margin:auto;}
.hm_section_seven> div> div> span{max-width:505px; margin:auto; display:block; padding-top:10px; padding-bottom:25px;}
.hm_section_seven> div> div> a{margin-left:165px; max-width:225px;}
.hm_section_seven> div> div> a> div{border:1px solid #000;}
.hm_section_seven> div> div> a img{max-width:50px;}
.hm_section_seven> div> div> a> span{font-size:18px;}
/* hm section seven end */





/* footer */
/* top line **********/
.ft_tp_line img{width:100%; position:relative; margin-top:-200px; z-index:-1;}

/* footer style */
/* .footer{border:1px solid red;} */
.footer h2{font-size:16px; text-transform:capitalize; color:#000; font-family:semi_bold; margin-bottom:22px;}
.footer a{font-size:15px; color:#000; text-transform:capitalize;}
.footer svg{width:12px; height:12px; border-radius:50%; padding:5px; border:1px solid rgba(0, 0, 0, 0.1); margin-right:5px; transition:0.4s ease;}
.ft_links{max-width:185px; padding-left:5px;}
.ft_links a{display:block; margin-top:10px; transition:0.4s ease;}
.ft_links a:hover{color:red;}

.i_h{margin-top:32px;}
.sc> a{display:flex; align-items:center;}
.payment_image{max-width:205px; position:relative; left:-12px; top:-10px;}
.s_i{margin-left:5px;}
.s_i> a> svg:hover{border:1px solid #E9402B;}


.ft{width:100%; height:auto; padding:0px 45px;}
.ft_divider{width:100%; height:auto; display:flex; justify-content:space-between; align-items:center;}
.ft_divider_left, .ft_divider_right{width:8px; height:8px; background-color:#000; border-radius:100%;}
.ft_divider_center{width:100%; height:2px; background-color:#939393;}

.ft_info{width:100%; height:auto; display:flex; justify-content:space-between; align-items:center; padding:10px 0px;}
.ft_info> span:nth-child(1){color:#000; text-transform:capitalize; font-size:14px;}
/* .ft_info> span:nth-child(2){border:1px solid;} */
.ft_info> span:nth-child(2)> ul{display:flex; align-items:center; margin-bottom:0px;}
.ft_info> span:nth-child(2)> ul> li{margin-left:22px;}
.ft_info> span:nth-child(2)> ul li a{color:#000; text-transform:capitalize; font-size:14px; display:inline-block;}




/* footer end */
</style>





<!-- section seven -->
<section class="container hm_section_seven">
        <div class="row p-0 m-0">
            <div class="col-lg-8 m-auto">
                <div class="hm_sv_br">
                    <div class="left"></div>
                    <div class="center"></div>
                    <div class="right"></div>
                </div>
                <h2 class="mt-5">Take Free<br> Scored Mock<br> Test Now</h2>
                <span>Practice with 12000+ real exam questions</span>
                <a href="#" class="a_btn">
                    <div class="ar_btn"><img src="{{URL::to('/img/right_arrow.jpg')}}" alt=""></div>
                    <span>FREE MOKE TEST</span>
                </a>
            </div>
        </div>
    </section>
    <!-- section seven end -->

<div class="ft_tp_line container-fluid p-0 pb-5">
        <div class="row p-0 m-0">
            <div class="col-12 p-0"><img src="{{URL::to('img/ft_line.jpg')}}" alt=""></div>
        </div>
    </div>

    <!-- footer -->
    <section class="container-fluid footer mt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 my-md-0 my-sm-4 my-4">
                    <!--  -->
                    <h2>Quick links</h2>
                    <div class="ft_links">
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{url('/about')}}">about us</a>
                        <a href="{{url('/celpip')}}">celpip</a>
                        <a href="{{url('/duolingo')}}">duolingo</a>
                        <a href="{{url('/ielts')}}">ielts</a>
                        <a href="{{url('/institute')}}">institute</a>
                        <a href="{{url('/pte-voucher')}}">pte voucher</a>
                        <a href="{{url('/pte')}}">pte</a>
                    </div>
                    <!--  -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-md-0 my-sm-4 my-4">
                    <!--  -->
                    <h2>Products</h2>
                    <div class="ft_links">
                        <a href="#">about us</a>
                        <a href="#">career</a>
                        <a href="#">refer & earn</a>
                        <a href="#">help & support</a>
                    </div>
                    <!--  -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-md-0 my-sm-4 my-4">
                    <!--  -->
                    <h2>Student Helpline</h2>
                    <div class="ft_links">
                        <div class="sc">
                            <a href="#"><i class="fa-solid fa-phone"></i> (+91) 95120-40070</a>
                        </div>
                        <div class="sc">
                            <a href="#"><i class="fa-regular fa-envelope"></i> (+91) 95120-40070</a>
                        </div>
                        <h2 class="i_h">Institute Helpline</h2>
                        <div class="sc">
                            <a href="#"><i class="fa-regular fa-envelope"></i> (+91) 95120-40070</a>
                        </div>
                    </div>
                    <!--  -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-md-0 my-sm-4 my-4">
                    <!--  -->
                    <h2>Connect with us</h2>
                    <div class="s_i">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <h2 class="i_h">Secure payments</h2>
                    <img class="payment_image" src="{{URL::to('img/payment.png')}}" alt="">
                    <!--  -->
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->

    <section class="ft">
        <div class="ft_divider">
            <div class="ft_divider_left"></div>
            <div class="ft_divider_center"></div>
            <div class="ft_divider_right"></div>
        </div>
        <div class="ft_info">
            <span>2023. All rights to Gurully Technologies</span>
            <span>
                <ul>
                    <li><a href="#">Terms and conditions</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </span>
        </div>
    </section>

    