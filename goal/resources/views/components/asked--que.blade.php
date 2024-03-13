<style>
    /* ask_qe */
/* .ask_qe{border:1px solid red;} */
.ask_qe_one> img{width:285px; height:auto;}
.ask_qe_one> h2{font-size:65px; position:relative; left:225px; line-height:65px; margin-top:65px;}

.ask_qe_two{padding-top:145px;}
.ask_qe_two_list_holder{max-width:fit-content; height:auto; position:relative; left:55px; margin-bottom:15px; cursor:pointer;}
.ask_qe_two_list{width:100%; height:auto; padding:32px 38px; border-radius:18px;
    box-shadow: 0px 0px 14px 5px rgba(0,0,0,0.09);
    -webkit-box-shadow: 0px 0px 14px 5px rgba(0,0,0,0.09);
    -moz-box-shadow: 0px 0px 14px 5px rgba(0,0,0,0.09); transition:0.4s ease;}
.ask_qe_two_list> div:nth-child(1){display:flex; justify-content:space-between; align-items:center;}
.ask_qe_two_list> div:nth-child(1)> h3{font-size:20px; margin-bottom:0px;}
.ask_qe_two_list> div:nth-child(2){max-height:0px; overflow:hidden; transition:0.4s ease;}
.ask_qe_two_list> div:nth-child(2)> p{margin-top:25px; max-width:400px;}

.slick-slider{ max-width:655px !important;}

.multiple-items{position:relative;}
.multiple-items button:nth-child(1){position:absolute; left:750px; top:430px; transform:rotate(-90deg);}
.multiple-items button:nth-child(3){position:absolute; right:-110px; top:305px; transform:rotate(270deg);}
.slick-prev:before, .slick-next:before{font-size:85px !important; color:red !important;}

.slick-current .ask_qe_two_list{box-shadow: 0px 15px 14px 5px rgba(0,0,0,0.05);
    -webkit-box-shadow: 0px 15px 14px 5px rgba(0,0,0,0.05);
    -moz-box-shadow: 0px 15px 14px 5px rgba(0,0,0,0.05);}

.slick-slide.slick-active:nth-child(2){border:1px solid red !important;}
.ask_qe_two_list > div:nth-child(1)> span> img{transition:0.4s ease;}
.ask_qe_two_list:hover > div:nth-child(1)> span> img{transform: rotateX(190deg);}
.ask_qe_two_list:hover .ask_qe_two_list_ct{max-height:fit-content !important; transition:0.4s ease;}
</style>



<div class="container-fluid ask_qe p-0" style="display:none;">
        <div class="row p-0 m-0">
            <div class="col-5 ask_qe_one">
                <img src="{{URL::to('img/quotes.jpg')}}" alt="">
                <h2>frequently<br> asked<br> questions</h2>
            </div>
            <div class="col-7 ask_qe_two multiple-items">
                <!--  -->
                <div class="ask_qe_two_list_holder">
                    <div class="ask_qe_two_list">
                        <div>
                            <h3>How to Book PTE Academic exam?</h3>
                            <span><img src="{{URL::to('img/arrow.png')}}" alt=""></span>
                        </div>
                        <div class="ask_qe_two_list_ct">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus eligendi cum, illum vitae id itaque nam dolores, repudiandae, nesciunt ullam veritatis laborum magnam eum explicabo distinctio nostrum voluptatem sequi. Exercitationem obcaecati dolorem magnam minus, omnis eveniet laborum corporis minima, a provident laudantium quis hic doloremque!</p>
                        </div>
                    </div>
                </div>
                <!--  -->

                <!--  -->
                <div class="ask_qe_two_list_holder">
                    <div class="ask_qe_two_list">
                        <div>
                            <h3>What is the validity of the voucher?</h3>
                        </div>
                    </div>
                </div>
                <!--  -->

                <!--  -->
                <div class="ask_qe_two_list_holder">
                    <div class="ask_qe_two_list">
                        <div>
                            <h3>Can I use this voucher out of India for booking?</h3>
                        </div>
                    </div>
                </div>
                <!--  -->

                <!--  -->
                <div class="ask_qe_two_list_holder">
                    <div class="ask_qe_two_list">
                        <div>
                            <h3>Can I get a refund for my voucher?</h3>
                        </div>
                    </div>
                </div>
                <!--  -->

                <!--  -->
                <div class="ask_qe_two_list_holder">
                    <div class="ask_qe_two_list">
                        <div>
                            <h3>Can I get a refund for my voucher?</h3>
                        </div>
                    </div>
                </div>
                <!--  -->

                <!--  -->
                <div class="ask_qe_two_list_holder">
                    <div class="ask_qe_two_list">
                        <div>
                            <h3>Can I get a refund for my voucher?</h3>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>




<!-- google cdn ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
<script>
$('.multiple-items').slick({
vertical: true,
verticalSwiping: true,
slidesToShow: 4,
slidesToScroll: 1
});
</script>