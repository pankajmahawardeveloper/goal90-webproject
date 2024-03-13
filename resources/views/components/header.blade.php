<style>

    @font-face { font-family:extra_light; src: url({{URL::to('/fonts/PPMORI-EXTRALIGHT.OTF')}}); }
    @font-face { font-family:extra_light_italic; src: url({{URL::to('/fonts/PPMORI-EXTRALIGHTITALIC.OTF')}}); }
    @font-face { font-family:regular; src: url({{URL::to('/fonts/PPMORI-REGULAR.OTF')}}); }
    @font-face { font-family:semi_bold; src: url({{URL::to('/fonts/PPMORI-SEMIBOLD.OTF')}}); }
    @font-face { font-family:semi_bold_italic; src: url({{URL::to('/fonts/PPMORI-SEMIBOLDITALIC.OTF')}}); }
    @font-face { font-family:regular_italic; src: url({{URL::to('/fonts/PPMORI-REGULARITALIC.OTF')}}); }

    
    body.body_class{overflow:hidden;}
    ul{list-style: none !important;}
    a{text-decoration: none !important;}

    /* cursor start */
    .cursor-dot,
.cursor-dot-outline {
  pointer-events: none;
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 50%;
  opacity: 0;
  transform: translate(-50%, -50%);
  transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
  z-index: 100000;
}

.cursor-dot {
  width: 8px;
  height: 8px;
  background-color: #dc5656;
}

.cursor-dot-outline {
  width: 40px;
  height: 40px;
  background-color: rgba(229, 128, 128, 0.5);
}
    /* cursor end */


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
.lg> a img{width:100%; height:auto; position:relative; top:1px;}
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
/* mobile header */
.sm_header{ padding:5px 8px; position: fixed; top:5px; width:100%;}
.sm_header_container{display:flex; justify-content:space-between; align-items:center; border:1px solid red; padding:5px 20px; border-radius:100px;
    box-shadow: 0px 0px 18px -3px rgba(0,0,0,0.25);
    -webkit-box-shadow: 0px 0px 18px -3px rgba(0,0,0,0.25);
    -moz-box-shadow: 0px 0px 18px -3px rgba(0, 0, 0, 0.25); background:#fff;}
.sm_header_container .lg{width:40px;}

.sm_header_container .hb{width:45px; height:45px; cursor: pointer;}
.sm_header_container .hb> div{width:100%; height:100%; display: flex; flex-direction: column; justify-content: space-between; padding:11px 10px; border-radius:50%; transition:.4s ease;}
.sm_header_container .hb> div.hb_bg{background:rgba(0,0,0,.1);}
.sm_header_container .hb> div> .hb_line{width:100%; height:5px; background:#E9402B; border-radius:25px; position:relative; transition:.4s ease;}
.sm_header_container .hb> div> .hb_line:nth-child(2).hb_line_active{opacity:0; transition:.4s ease;}
.sm_header_container .hb> div> .hb_line:nth-child(1).hb_line_active{top: 9px; transform: rotate(50deg); transition:.4s ease;}
.sm_header_container .hb> div> .hb_line:nth-child(3).hb_line_active{bottom: 9px; transform: rotate(132deg); transition:.4s ease;}

.mb_menu_main {display: flex; justify-content: space-between;}
.mb_menu_main> div:nth-child(1){padding-right:22px;}

.sm_header_one{width:120px;}
.sm_header{display:none;}


/* mobile right side navigation */
.right_nav_toggle{border-left:1px solid #dadada; width:100%; max-width: 255px; position:fixed; right:-100%; z-index: 100; background:#fff; top:0; height:100vh; display:none; transition:.4s ease;}
.right_nav_toggle.right_nav_toggle_active{right:0%;}
.right_nav_toggle> div{padding-top:95px;}
.right_nav_toggle ul{padding:0px; padding-left:15px;}
/* .right_nav .right_nav_holder> .header_three{border:1px solid;} */
.right_nav_toggle .right_nav_holder> .header_three{padding:12px 15px; background: #f1f1f1;}
.right_nav_toggle .right_nav_holder> .header_three> a{display:block;}
.right_nav_toggle .right_nav_holder> .header_three> a:nth-child(1){margin-right:4px;}
.right_nav_toggle .right_nav_holder> .header_three> a> button{border-radius:5px;}
.right_nav_toggle .right_nav_holder> .pr{padding:12px 15px;}
.right_nav_toggle ul li{margin-bottom:10px;}
.right_nav_toggle ul li a{color:#000; text-transform:capitalize;}

/* responsive */
@media screen and (max-width:1131px){
    .header_one {padding-right: 20px;}
    .header_one_break {left: 165px;}
    .lg {margin: 0px 25px;}
}
@media screen and (max-width:1024px){
    .header{display:none;}
    .sm_header{display:block;}
    .right_nav_toggle{display:block;}

    /* cursor */
    .cursor-dot-outline, .cursor-dot{display:none;}
}
@media screen and (min-width:769px){
    .right_nav_toggle .right_nav_holder> .header_three{display:none;}
}
@media screen and (max-width:768px){
    .mb_menu_main> div:nth-child(1){display:none;}
    .sm_header_container .lg{position: relative; left: -28px;}
}
@media screen and (min-width:577px){
    .right_nav_toggle> .right_nav_holder> .pr{display:none !important;}
}
@media screen and (max-width:576px){
    .sm_header_container .lg{position: relative; left: -15px;}

    .sm_header> .sm_header_container> .pr{display:none !important;}
.right_nav_toggle> .right_nav_holder> .pr{display:block !important;}
}
</style>

<div class="cursor-dot-outline"></div>
<div class="cursor-dot"></div>

<!-- header -->
<div class="header">
    <div class="header_holder">
        <div class="header_one_break"></div>
        <div class="header_one"><img src="{{URL::to('/img/category.jpg')}}" alt=""> <span>products</span> <img src="{{URL::to('/img/products_drop_down.jpg')}}" alt=""></div>
        <div class="header_two">
            <div class="left_nav">
                <ul>
                    <li><a href="{{ url('/institute') }}">institute software</a></li>
                    <li><a href="#">blog</a></li>
                </ul>
            </div>
            <div class="lg"><a href="{{ url('/') }}"><img src="{{URL::to('img/lg.jpg')}}" alt=""></a></div>
            <div class="right_nav">
                <ul>
                    <li><a href="{{ url('/pte-voucher') }}">PTE Voucher</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
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


<!-- small header -->
<div class="sm_header" style="z-index:1000;">
    <div class="sm_header_container">
        <div class="pr">
            <!--  -->
                <div class="header_one sm_header_one"><img src="{{URL::to('/img/category.jpg')}}" alt=""> <span>products</span> <img src="{{URL::to('/img/products_drop_down.jpg')}}" alt=""></div>
            <!--  -->
        </div>
        <div class="lg"><a href="{{url('/')}}"><img src="{{URL::to('img/lg.jpg')}}" alt=""></a></div>
        <div class="mb_menu_main">
            <div class="header_three">
                <a href="#"><button>login</button></a>
                <a href="#"><button>sign up</button></a>
            </div>

            <div class="hb">
                <div>
                    <div class="hb_line"></div>
                    <div class="hb_line"></div>
                    <div class="hb_line"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- small header right navigation -->
<div class="right_nav_toggle">
    <div class="right_nav_holder">
        <ul>
            <li><a href="{{ url('/institute') }}">institute software</a></li>
            <li><a href="#">blog</a></li>
            <li><a href="{{ url('/pte-voucher') }}">PTE Voucher</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
        </ul>
        <div class="header_three">
            <a href="#"><button>login</button></a>
            <a href="#"><button>sign up</button></a>
        </div>
        <div class="pr">
            <!--  -->
                <div class="header_one sm_header_one"><img src="{{URL::to('/img/category.jpg')}}" alt=""> <span>products</span> <img src="{{URL::to('/img/products_drop_down.jpg')}}" alt=""></div>
            <!--  -->
        </div>
    </div>
</div>



<script>
    // hamburger
    let hb = document.getElementsByClassName('hb')[0];
    let right_nav_toggle = document.getElementsByClassName('right_nav_toggle')[0];
    let body = document.getElementsByTagName('body')[0];
    hb.addEventListener('click', function(){
        let bg = this.querySelectorAll('div')[0];
        let line = this.querySelectorAll('div> .hb_line');
        for(let a=0; a<line.length; a++){
            bg.classList.toggle('hb_bg');
            line[a].classList.toggle('hb_line_active');
            right_nav_toggle.classList.toggle('right_nav_toggle_active');
            body.classList.toggle('body_class');
        }
    })

    // cursor
    var cursor = {
    delay: 8,
    _x: 0,
    _y: 0,
    endX: (window.innerWidth / 2),
    endY: (window.innerHeight / 2),
    cursorVisible: true,
    cursorEnlarged: false,
    $dot: document.querySelector('.cursor-dot'),
    $outline: document.querySelector('.cursor-dot-outline'),
    
    init: function() {
        // Set up element sizes
        this.dotSize = this.$dot.offsetWidth;
        this.outlineSize = this.$outline.offsetWidth;
        
        this.setupEventListeners();
        this.animateDotOutline();
    },
    
//     updateCursor: function(e) {
//         var self = this;
        
//         console.log(e)
        
//         // Show the cursor
//         self.cursorVisible = true;
//         self.toggleCursorVisibility();

//         // Position the dot
//         self.endX = e.pageX;
//         self.endY = e.pageY;
//         self.$dot.style.top = self.endY + 'px';
//         self.$dot.style.left = self.endX + 'px';
//     },
    
    setupEventListeners: function() {
        var self = this;
        
        // Anchor hovering
        document.querySelectorAll('a').forEach(function(el) {
            el.addEventListener('mouseover', function() {
                self.cursorEnlarged = true;
                self.toggleCursorSize();
            });
            el.addEventListener('mouseout', function() {
                self.cursorEnlarged = false;
                self.toggleCursorSize();
            });
        });
        
        // Click events
        document.addEventListener('mousedown', function() {
            self.cursorEnlarged = true;
            self.toggleCursorSize();
        });
        document.addEventListener('mouseup', function() {
            self.cursorEnlarged = false;
            self.toggleCursorSize();
        });
  
  
        document.addEventListener('mousemove', function(e) {
            // Show the cursor
            self.cursorVisible = true;
            self.toggleCursorVisibility();

            // Position the dot
            self.endX = e.pageX;
            self.endY = e.pageY;
            self.$dot.style.top = self.endY + 'px';
            self.$dot.style.left = self.endX + 'px';
        });
        
        // Hide/show cursor
        document.addEventListener('mouseenter', function(e) {
            self.cursorVisible = true;
            self.toggleCursorVisibility();
            self.$dot.style.opacity = 1;
            self.$outline.style.opacity = 1;
        });
        
        document.addEventListener('mouseleave', function(e) {
            self.cursorVisible = true;
            self.toggleCursorVisibility();
            self.$dot.style.opacity = 0;
            self.$outline.style.opacity = 0;
        });
    },
    
    animateDotOutline: function() {
        var self = this;
        
        self._x += (self.endX - self._x) / self.delay;
        self._y += (self.endY - self._y) / self.delay;
        self.$outline.style.top = self._y + 'px';
        self.$outline.style.left = self._x + 'px';
        
        requestAnimationFrame(this.animateDotOutline.bind(self));
    },
    
    toggleCursorSize: function() {
        var self = this;
        
        if (self.cursorEnlarged) {
            self.$dot.style.transform = 'translate(-50%, -50%) scale(0.75)';
            self.$outline.style.transform = 'translate(-50%, -50%) scale(1.5)';
            self.$outline.style.backgroundColor = 'rgba(0,0,0,0.1)';
        } else {
            self.$dot.style.transform = 'translate(-50%, -50%) scale(1)';
            self.$outline.style.transform = 'translate(-50%, -50%) scale(1)';
            self.$outline.style.backgroundColor = 'rgba(229, 128, 128, 0.5)';
        }
    },
    
    toggleCursorVisibility: function() {
        var self = this;
        
        if (self.cursorVisible) {
            self.$dot.style.opacity = 1;
            self.$outline.style.opacity = 1;
        } else {
            self.$dot.style.opacity = 0;
            self.$outline.style.opacity = 0;
        }
    }
}

cursor.init();
</script>