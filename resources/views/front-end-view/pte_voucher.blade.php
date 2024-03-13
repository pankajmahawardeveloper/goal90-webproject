<!DOCTYPE html>
<html lang="en">
<head>
    <title>PTE - Voucher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
    <link rel="stylesheet" href="{{URL::to('/front-end-style/pte_voucher.css')}}">
    <link rel="stylesheet" href="{{URL::to('/front-end-style/responsive.css')}}">
    <link rel="stylesheet" href="{{URL::to('/front-end-style/style.css')}}">
    
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
    integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .hm_section_one_holder h2{font-size: 98px !important;}
        main{width:100%; height:auto;}
        .hm_one_animate {right: 162px;}
        .slick-prev:before,
    .slick-next:before {
      color: #000;
    }

    @media screen and (max-width:992px){
        .vc h2 br{display:none;}

        .vc h2 {
    font-size: 26px;
    line-height: 30px;
}

.vc> div> div:nth-child(2) {
    padding-left: 20px;
}

.vc p{max-width:100%;}

.by_pte_vc h2 {font-size: 48px;}

    .pte_right_img_show{left:0;}

    .pte_main {max-width: 700px;}

    .pte_right_img_show {width: 45%;}
    }

    .vc> div {padding: 0px;}

    @media screen and (max-width:767px){
        .vc h2 {margin-top: 19px;}
        .vc p {margin-top: 7px;}

        .by_pte_vc h2 {font-size: 35px;}

        .pte_main {
    max-width: 525px;
}

.pte_main_holder{display:block;}


.pte_btn_left {
    display: flex;
    justify-content: space-between;
    max-width: 100%;
}

.pte_btn_left> button{padding: 8px 5px; font-size: 13px; margin:0px 5px !important;}
.pte_center_break{display:none;}

.pte_right_img_show {
    width: 76%;
    position: static;
    margin: auto;
    margin-top: 45px;}

    .by_pte_vc {padding-bottom: 152px;}
    .pte_btn_left> button{background-size:cover !important;}

    .vc {
    margin-top: 48px;
}

    }



    @media screen and (max-width:575px){
        .by_pte_vc h2 {
    font-size: 28px;
}

.pte_right_img_show {
    width: 85%;}
    }


    </style>
</head>
<body>

    <x-header />
<main>
    <x-top_one_section_animation_round head="Buy PTE Academic voucher online at Best Rate" title="Gurully provides genuine PTE vouchers to book exams in India at the cheapest rate. Avail these vouchers to save on PTE exam booking and get an instant voucher after payment." />

    <div class="container mt-5 pt-2">
        <div class="row">
            <div class="col-12">
                <img src="{{URL::to('img/institute_bg.jpg')}}" alt="" style="width:100%;">
            </div>
        </div>
    </div>

    <div class="container vc">
        <div class="row">
            <div class="col-md-6"><img src="{{URL::to('img/voucher.jpg')}}" alt=""></div>
            <div class="col-md-6">
                <h2>What is PTE<br> Voucher code?</h2>
                <p>PTE Exam voucher is a perquisite discounted voucher by which you can book your exam at a lower price. It is an alphanumeric code that you can apply while you are booking the exam on the Pearson website.</p>
            </div>
        </div>
    </div>


    <div class="container-fluid by_pte_vc">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>How to Buy PTE Voucher on our Platform?</h2>
                    <p>Follow the below step to buy PTE academic voucher.</p>
                    <div class="br_holder">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pte_main">
            <div>
                <div class="pte_main_holder">
                    <div class="pte_btn_left">
                        <button class="pte_btn_left_btn_active">Fill-up your Details</button>
                        <button>Payment</button>
                        <button>Your PTE Voucher</button>
                        <img src="{{URL::to('img/pte_btn_shadow.png')}}" alt="" class="pte_btn_left_sd_one">
                        <img src="{{URL::to('img/pte_btn_shadow.png')}}" alt="" class="pte_btn_left_sd_two">
                    </div>
                    <div class="pte_center_break">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="pte_right_img_show">
                        <div class="pte_right_img_show_holder">
                            <img src="{{URL::to('img/one_sr.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let pte_btn_left_btn_one = document.querySelectorAll('.pte_btn_left> button')[0];
        let pte_btn_left_btn_two = document.querySelectorAll('.pte_btn_left> button')[1];
        let pte_btn_left_btn_three = document.querySelectorAll('.pte_btn_left> button')[2];
        let pte_right_img_show_holder = document.querySelectorAll('.pte_right_img_show_holder> img')[0];
        pte_btn_left_btn_one.addEventListener('click',function(){
            this.classList.add('pte_btn_left_btn_active')
            pte_btn_left_btn_two.classList.remove('pte_btn_left_btn_active')
            pte_btn_left_btn_three.classList.remove('pte_btn_left_btn_active')
            pte_right_img_show_holder.src = "https://img.freepik.com/free-vector/travel-landing-page-template-with-photo_23-2148367303.jpg";
        })
        pte_btn_left_btn_two.addEventListener('click',function(){
            this.classList.add('pte_btn_left_btn_active')
            pte_btn_left_btn_one.classList.remove('pte_btn_left_btn_active')
            pte_btn_left_btn_three.classList.remove('pte_btn_left_btn_active')
            pte_right_img_show_holder.src = "https://themewagon.com/wp-content/uploads/2022/04/image-6-1.png";
        })
        pte_btn_left_btn_three.addEventListener('click',function(){
            this.classList.add('pte_btn_left_btn_active')
            pte_btn_left_btn_one.classList.remove('pte_btn_left_btn_active')
            pte_btn_left_btn_two.classList.remove('pte_btn_left_btn_active')
            pte_right_img_show_holder.src = "https://images.template.net/157953/aesthetic-letterhead-design-template-e5p5q.jpg";
        })
        
    </script>




    <x-asked_que/>
    <x-Footer/>

</main>






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