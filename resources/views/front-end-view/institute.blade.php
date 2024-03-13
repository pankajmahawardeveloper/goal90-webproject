<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- institute style -->
    <link rel="stylesheet" href="{{URL::to('front-end-style/institute.css')}}">
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
        .hm_section_seven, .ft_tp_line{display:none !important;}
    </style>
</head>
<body>

<x-header/>
    
    <section class="in_section_one container-fluid">
        <div class="row justify-content-end">
            <div class="col-3 position-relative">
                <h2>Institute software solutions for PTE Practice</h2>
                <div class="one_info">
                    <p>Gurully is providing revolutionary online practice software for coaching institutes across the globe. The real-time environment for the mock test in your institute’s laboratory gives the student complete practice for the exam. We are one of the best PTE practice test software providers to the institutes. More than 1500 institutes and their trainers have trusted us. Quality platform and best customer support are our USP.</p>
                    <div class="in_counter">
                        <div class="container">
                            <div class="row position-relative">
                                <img class="plus_center" src="{{URL::to('img/plus_black.png')}}" alt="">
                                <div class="col-6 ct_tp">
                                    <h4><span>6</span>k</h4>
                                    <p>Mock Test result generated every day</p>
                                </div>
                                <div class="col-6 ct_right ct_tp">
                                    <h4><span>1000</span>+</h4>
                                    <p>Signup every day</p>
                                </div>
                                <div class="col-6 ct_bt">
                                    <h4><span>12</span>k+</h4>
                                    <p>Latest Question bank</p>
                                </div>
                                <div class="col-6 ct_right ct_bt">
                                    <h4><span>1500</span>+</h4>
                                    <p>Partners around the globe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="in_head_devider institute_line">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="container institue_bg">
        <div class="row">
            <div class="col-12"><img src="{{URL::to('img/institute_bg.jpg')}}" alt=""></div>
        </div>
    </div>


    <div class="in_form container-fluid mt-5">
        <div class="if_container">
            <h2>talk to us</h2>
            <div class="dv">
                <div class="dv_left"></div>
                <div class="dv_right"></div>
            </div>
        </div>
        <form action="{{route('submit_form')}}" method="POST" class="ins_form">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input_holder">
                            <!-- <span>name</span> -->
                            <input type="text" name="fnm" id="nm" class="nm" placeholder="full name" value="{{ old('fnm') }}">
                            @error('fnm')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input_holder">
                            <!-- <span>name</span> -->
                            <input type="text" name="inm" id="nm" class="nm" placeholder="Institute name" value="{{ old('inm') }}">
                            @error('inm')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input_holder">
                            <!-- <span>name</span> -->
                            <input type="email" name="em" id="nm" class="nm" placeholder="email" value="{{ old('em') }}">
                            @error('em')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input_holder">
                            <!-- <span>name</span> -->
                            <input type="number" name="ph" id="nm" class="nm" placeholder="phone" value="{{ old('ph') }}">
                            @error('ph')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input_holder">
                            <!-- <span>name</span> -->
                            <input type="text" name="ct" id="nm" class="nm" placeholder="country" value="{{ old('ct') }}">
                            @error('ct')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input_holder">
                            <!-- <span>name</span> -->
                            <input type="text" name="st" id="nm" class="nm" placeholder="no. of students" value="{{ old('st') }}">
                            @error('st')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input_holder">
                            <!-- <span>name</span> -->
                            <input type="text" name="url" id="nm" class="nm" placeholder="institute facebook page or website url" value="{{ old('url') }}">
                            @error('url')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="input_holder input_holder_flex">
                            <div class="input_holder_inner">
                                <!-- <span>name</span> -->
                                <textarea name="in_msg" id="in_msg" class="in_msg" cols="30" rows="4" placeholder="message">{{ old('in_msg') }}</textarea>
                                @error('in_msg')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input_holder_inner">
                                <button type="submit"><span><img src="{{URL::to('img/in_submit_arrow.png')}}" alt=""></span></button>
                            </div>
                        </div>
                        <div class="input_holder in_check" style="display:none;">
                            <input type="checkbox">
                            <span>I agree to the privacy policy</span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <section class="in_four">
        <!-- <div class="in_fr_row">
            <span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span><span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span> <span>take a free moke test</span>
        </div> -->
        <div class="in_fr_right">
            <div class="in_fr_lf">
                <h2>
                    <span>Unified</span>
                    <span>Mock test</span>
                    <span>Platform</span>
                </h2>
            </div>
            <div class="in_fr_rg">
                <p>We bring you a unified platform for your PTE, CD - IELTS, DUOLINGO and CELPIP needs. Our Gurully platform delivers updated mock tests and practice tests to simplify your teaching methods. Our LMS helps the trainers to train their students in right manner.</p>
                <div class="in_fr_rg_deviver">
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        <div class="in_fr_four container mt-5">
                <div class="in_fr_four_bx row">
                    <div class="col-md-3 col-sm-6">
                        <div class="in_fr_four_bx_info">
                            <h4>Duolingo</h4>
                            <a href="{{url('/duolingo')}}"><span><span class="explore"><img src="{{URL::to('img/r_arrow.png')}}" alt=""></span> <p>explore</p></span></a>
                        </div>
                        <img src="{{URL::to('img/four_bx/one.png')}}" alt="">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="in_fr_four_bx_info">
                            <h4>Pte</h4>
                            <a href="{{url('/pte')}}"><span><span class="explore"><img src="{{URL::to('img/r_arrow.png')}}" alt=""></span> <p>explore</p></span></a>
                        </div>
                        <img src="{{URL::to('img/four_bx/two.png')}}" alt="">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="in_fr_four_bx_info">
                            <h4>ielts</h4>
                            <a href="{{url('/ielts')}}"><span><span class="explore"><img src="{{URL::to('img/r_arrow.png')}}" alt=""></span> <p>explore</p></span></a>
                        </div>
                        <img src="{{URL::to('img/four_bx/three.png')}}" alt="">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="in_fr_four_bx_info">
                            <h4>celpip</h4>
                            <a href="{{url('/celpip')}}"><span><span class="explore"><img src="{{URL::to('img/r_arrow.png')}}" alt=""></span> <p>explore</p></span></a>
                        </div>
                        <img src="{{URL::to('img/four_bx/four.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="in_fr_sr_head container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>The best way to teach your student with Gurully Software</h2>
                            <div class="in_fr_sr_head_ct">
                                <p>Gurully gives you a detailed analysis of each student’s performance and progress. It helps you to provide valuable feedback on your student’s test results.</p>
                                <div class="line"><div class="dt"></div><div class="dt_line"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container sr_three_bx">
                <div class="row sr_three_bx_ct_main_reverse">
                    <div class="col-md-6 sr_three_bx_ct_main">
                        <div class="sr_three_bx_ct">
                            <div class="arrow"><img src="{{URL::to('img/r_arrow.png')}}" alt=""></div>
                            <div class="sr_three_bx_ct_holder">
                                <h2>Easy management of students</h2>
                                <p>Full access to your personalized admin panel to manage, create, and provide the practice materials to your students.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"><img src="{{URL::to('img/one_sr.jpg')}}" alt="" class="sr_three_bx_ct_bg"></div>
                </div>
            </div>

            <div class="container sr_three_bx mt-5">
                <div class="row">
                    <div class="col-md-6"><img src="{{URL::to('img/one_sr.jpg')}}" alt="" class="sr_three_bx_ct_bg"></div>
                    <div class="col-md-6 sr_three_bx_ct_main">
                        <div class="sr_three_bx_ct">
                            <div class="arrow"><img src="{{URL::to('img/r_arrow.png')}}" alt=""></div>
                            <div class="sr_three_bx_ct_holder">
                                <h2>Easy management of students</h2>
                                <p>Full access to your personalized admin panel to manage, create, and provide the practice materials to your students.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container sr_three_bx mt-5">
                <div class="row sr_three_bx_ct_main_reverse">
                    <div class="col-md-6 sr_three_bx_ct_main">
                        <div class="sr_three_bx_ct">
                            <div class="arrow"><img src="{{URL::to('img/r_arrow.png')}}" alt=""></div>
                            <div class="sr_three_bx_ct_holder">
                                <h2>Easy management of students</h2>
                                <p>Full access to your personalized admin panel to manage, create, and provide the practice materials to your students.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"><img src="{{URL::to('img/one_sr.jpg')}}" alt="" class="sr_three_bx_ct_bg"></div>
                </div>
            </div>
    </section>

    <x-footer/>


    <!-- <div class="space" style="width:100%; height:100vh;"></div> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</html>