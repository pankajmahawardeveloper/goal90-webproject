<style>
    .header{width:100%; height:auto; padding:5px; position:fixed; top:0; padding-top:12px; z-index:1000;}
.header_holder{max-width:1500px; height:auto; margin:auto; position:relative; background-color:#fff; display:flex; justify-content:space-between; align-items:center; padding:12px 25px; border-radius:100px;
    box-shadow: 0px 0px 18px -3px rgba(0,0,0,0.25);
    -webkit-box-shadow: 0px 0px 18px -3px rgba(0,0,0,0.25);
    -moz-box-shadow: 0px 0px 18px -3px rgba(0,0,0,0.25);}
.header_one_break{width:2px; height:12px; background-color:#767676; position:absolute; top:50%; transform:translateY(-50%); left:215px;}

/* header_one */
.header_one{display:flex; justify-content:space-between; align-items:center; padding-right:92px;}
.header_one img:nth-child(1){width:14px;}
.header_one img:nth-child(3){width:18px; position:relative; top:3px;}
.header_one> span{font-size:17px; text-transform:capitalize; padding:0px 5px; position:relative; top:2px;}
/* header_one end */

/* header_two */
.header_two{display:flex; justify-content:space-between; align-items:center;}
.left_nav> ul, .right_nav> ul{display:flex; justify-content:space-between; padding:0px; margin:0px;}
.left_nav> ul li, .right_nav> ul li{padding:0px 16px;}
.left_nav> ul li a, .right_nav> ul li a{color:#000; text-transform:capitalize; font-weight:500; transition:0.4s ease; display:block; font-size:16px; color:rgb(58, 58, 58);}
.left_nav> ul li a:hover, .right_nav> ul li a:hover{color:#E9402B;}

.lg{width:100%; max-width:58px; height:auto; margin:0px 72px;}
.lg> img{width:100%; height:auto; position:relative; top:1px;}
/* header_two end */


/* header_three */
.header_three{display:flex; justify-content:space-between; align-items:center;}
.header_three> a{display:inline-block; margin-right:12px;}
.header_three> a:nth-child(2){margin-right:0px;}
.header_three> a:nth-child(1)> button{background:none; color:#000; transition:0.2s ease; border-top:1px solid #E9402B; border-right:1px solid #E9402B; border-left:3px solid #E9402B; border-bottom:3px solid #E9402B;}
.header_three button{outline:none; border:2px solid #E9402B; text-transform:capitalize; font-size:17px; background-color:#E9402B; color:#fff; padding:3px 25px; padding-bottom:2px; border-radius:100px;}
.header_three> a:nth-child(1)> button:hover{border-left:1px solid #E9402B; border-bottom:1px solid #E9402B;}
/* header_three end */

/* /////////////////////////////// -- mobile header */
.sm_header_one{width:120px;}
</style>


<!-- header -->
<div class="header" style="display:none;">
        <div class="header_holder">
            <div class="header_one_break"></div>
            <div class="header_one"><img src="{{URL::to('/img/category.jpg')}}" alt=""> <span>products</span> <img src="{{URL::to('/img/products_drop_down.jpg')}}" alt=""></div>
            <div class="header_two">
                <div class="left_nav">
                    <ul>
                        <li><a href="#">institute software</a></li>
                        <li><a href="#">blog</a></li>
                    </ul>
                </div>
                <div class="lg"><img src="{{URL::to('img/lg.jpg')}}" alt=""></div>
                <div class="right_nav">
                    <ul>
                        <li><a href="#">PTE Voucher</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>
            </div>

            <div class="header_three">
                <a href="#"><button>login</button></a>
                <a href="#"><button>sign up</button></a>
            </div>
        </div>
    </div>
    <!-- header end -->