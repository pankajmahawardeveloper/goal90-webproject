<!DOCTYPE html>
<html lang="en">
<head>
    <title>Goal90 - about</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- about style -->
    <link rel="stylesheet" href="{{URL::to('front-end-style/style.css')}}">
    <link rel="stylesheet" href="{{URL::to('front-end-style/about.css')}}">
    <link rel="stylesheet" href="{{URL::to('front-end-style/responsive.css')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        @font-face { font-family:extra_light; src: url({{URL::to('/fonts/PPMORI-EXTRALIGHT.OTF')}}); }
        @font-face { font-family:extra_light_italic; src: url({{URL::to('/fonts/PPMORI-EXTRALIGHTITALIC.OTF')}}); }
        @font-face { font-family:regular; src: url({{URL::to('/fonts/PPMORI-REGULAR.OTF')}}); }
        @font-face { font-family:semi_bold; src: url({{URL::to('/fonts/PPMORI-SEMIBOLD.OTF')}}); }
        @font-face { font-family:semi_bold_italic; src: url({{URL::to('/fonts/PPMORI-SEMIBOLDITALIC.OTF')}}); }
        @font-face { font-family:regular_italic; src: url({{URL::to('/fonts/PPMORI-REGULARITALIC.OTF')}}); }
        .hm_section_seven, .ft_tp_line{display:none}
    </style>
</head>
<body>

    <!-- header component -->
    <x-header/>
    <!-- header component end -->

    <div class="about-wrapper">


        <section class="ab_section_one about_head pb-5">
            <h2>Our mission is to simplify<br> the education industry</h2>
            <p>Gurully Technologies is an EdTech company, which develops in-house educational softwares for exams like PTE, IELTS, DUOLINGO and CELPIP. We have been in this industry since last 6 years, pioneering in catering first class services to our institutes and students across 40+ countries.</p>
            <div class="head_banner">
                <img src="{{URL::to('img/about_banner.jpg')}}" alt="">
            </div>
        </section>


        <section class="ab_section_two container-fluid mt-5">
            <div class="row justify-content-end">
                <div class="col-md-3 col-sm-12"><h2>Believe.<br> Achieve.<br> Celebrate.</h2></div>
                <div class="col-md-5 col-sm-12 mt-md-5">
                    <p>Gurully combines the mock test platform with the real-time experience for the student to excel for the real test.</p>
                    <div class="ab_s_t_devider">
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
                </div>
            </div>
        </section>


        <section class="ab_section_three ab_gallery container mt-5">
            <div class="row">
                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>
                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>
                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>

                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>
                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>
                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>

                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>
                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>
                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>

                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>
                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>
                <div class="col-lg-4 col-sm-6"><img src="{{URL::to('img/about_gallery/gl.jpg')}}" alt=""></div>
            </div>
        </section>


    </div>

    <x-footer/>


    <!-- <div class="space" style="height:500px;></div> -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</html>