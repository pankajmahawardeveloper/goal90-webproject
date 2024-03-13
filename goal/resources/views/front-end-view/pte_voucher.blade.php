<!DOCTYPE html>
<html lang="en">
<head>
    <title>PTE - Voucher</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
    <link rel="stylesheet" href="{{URL::to('/front-end-style/style.css')}}">
    <link rel="stylesheet" href="{{URL::to('/front-end-style/pte_voucher.css')}}">
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
        .hm_one_animate {right: 162px;}
        .slick-prev:before,
    .slick-next:before {
      color: #000;
    }
    </style>
</head>
<body>

    <x-header />

    <!-- section one -->
    <div class="hm_section_one pte_v_one">
        <div class="container hm_section_one_holder">
            <div class="row">
                <div class="col-12">
                    <h2>Buy PTE Academic voucher<br> online at Best Rate</h2>
                    <p>Gurully provides genuine PTE vouchers to book exams in India at the cheapest rate. Avail these vouchers to save on PTE exam booking and get an instant voucher after payment.</p>
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

    <div class="container mt-5 pt-2">
        <div class="row">
            <div class="col-12">
                <img src="{{URL::to('img/institute_bg.jpg')}}" alt="" style="width:100%;">
            </div>
        </div>
    </div>

    <div class="container vc">
        <div class="row">
            <div class="col-lg-6"><img src="{{URL::to('img/voucher.jpg')}}" alt=""></div>
            <div class="col-lg-6">
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




    <x-asked--que/>
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