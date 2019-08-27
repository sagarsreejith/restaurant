<style>
    a.gotop {
        background: rgba(0, 0, 0, 0.5) url(assets/images/top.png) no-repeat scroll -1px -1px;
        border: 1px solid #3b3b3b;
        display: block;
        height: 36px;
        margin-top: -18px;
        position: absolute;
        right: 10px;
        text-align: center;
        top: 50%;
        width: 35px;
    }
    
  
    
    .book[data-book="book-1"] .front:before {
        background: url(assets/images/menu-cover.png);
        position: absolute;
        content: "";
        width: 100%;
        left: 3px;
        right: 0px;
        background-size: 100%;
        background-repeat: no-repeat;
        top: -6px;
        height: 100%;
    }
    
    .area-title h2:after {
        background: rgba(0, 0, 0, 0) url((assets/images/red.png) no-repeat scroll center center / contain;
        bottom: 0;
        content: "";
        height: 30px;
        left: 0;
        position: absolute;
        width: 100%;
    }
    .header .main-menu{
        background:transparent !important;
    }
    .header .sticky {
    position: fixed;
    width: 100%;
    top: 0;
    animation: fadeInDown 0.8s both 0s;
    background: linear-gradient(5deg,#7a2c3d,#6f1e30) !important;
}

.box-icon-svg{
    max-width:280px;
    margin-right:auto;
    margin-left:auto;
    text-align:center
}
.box-icon-svg .icon-inner{
    position:absolute;
    left:50%;
    top:50%;
    transform:translate(-50%,-50%)
}
.box-icon-svg svg{
    -webkit-filter:drop-shadow(0 5px 0 #8b2b41);
    filter:drop-shadow(0 5px 0 #8b2b41)
}
.box-icon-svg-inner{
    position:relative;
    display:inline-block
}
.box-icon-svg-inner:hover{
    /* -webkit-transition: all 0.3s ease-in-out; */
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    /* transition: all 0.3s ease-in-out; */
}
.box-icon-svg-text{
    line-height:1.8em;
    color:rgba(55,56,62,.7)
}
*+.box-icon-svg-caption{
    margin-top:15px
}
*+.box-icon-svg-text{
    margin-top:18px
}
.icon-white i{
    font-size: 18px;
    color: #fff;
}
.icon-box:hover {
    -webkit-box-shadow: 0 4px 40px 0 rgba(22, 52, 75, 0.08);
    -moz-box-shadow: 0 4px 40px 0 rgba(22, 52, 75, 0.08);
    box-shadow: 0 4px 40px 0 rgba(22, 52, 75, 0.08);
    transform: translateY(-5px);
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.parallax{
height:450px;
}
.ui_inner__selection input[type=radio]:checked + label{
    background:none;
}
#offer{
    max-height: 550px;
    width: 100%;
    padding: 10px 0;
}
#offer .ui {
  width: 100%;
  position: relative;
 
 
}
#offer .ui_fruit {
    position: absolute;
    z-index: 34;
    right: -93px;
    pointer-events: none;
    top: 235px;
}
#offer .ui_fruit img {
  width: 344px;
}

#offer .ui_inner {
    height: 340px;
    background-image: -webkit-linear-gradient(45deg, #ffffff 0%, #f3f3f3 100%);
    padding: 40px;
   box-shadow: 0px 2px 40px 0px #dbd6d6, 0px 6px 26px 0px #ffffff, 0px 3px 0px -2px #ad455c inset, 0px 22px 60px 70px #f1d4b4 inset, 0px 8px 18px -7px #ffffff00, 30px 13px 30px 28px #ffffff inset;
}
#offer .ui_inner .sb {
    overflow: hidden;
    left: -39px;
    position: absolute;
    -webkit-animation: spin 14s infinite linear;
    animation: spin 14s infinite linear;
    top: 110px;
}
#offer .ui_inner .sb img {
  width: 300px;
  opacity: 0;
  -webkit-transition: all 0.15s 0s;
  transition: all 0.15s 0s;
}
#offer .ui_inner__selection label .m,
#offer .ui_inner__selection label .s,
#offer .ui_inner__selection label .l,
#offer .ui_inner__selection label .h {
  background: #fff;
  position: absolute;
  right: -130px;
  cursor: pointer;
  width: 130px;
  color: #752637;
  padding: 20px;
  font-size: 14px;
  z-index: 4;
  font-family: 'Bad Script', cursive;
  top: 0;
  text-align: center;
  -webkit-transition: all .2s;
  transition: all .2s;
}
#offer .ui_inner__selection label .m:hover,
#offer .ui_inner__selection label .s:hover,
#offer .ui_inner__selection label .l:hover,
#offer .ui_inner__selection label .h:hover {
  background: #b26c7b;
  padding: 20px 20px 20px 30px;
}
#offer .ui_inner__selection label .m,
#offer .ui_inner__selection label .s,
#offer .ui_inner__selection label .l,
#offer .ui_inner__selection label .h {
  border-radius: 255px 15px 205px 35px/35px 225px 35px 255px;
}
#offer .ui_inner__selection label .l {
  top: 0px;
  border-radius: 265px 35px 185px 14px/8px 235px 12px 255px;
  width: 126px;
  right: -119px;
  box-shadow: 0px 1px 0px 0px rgba(255, 255, 255, 0.06) inset;
}
#offer .ui_inner__selection label .l:before {
  content: '';
  display: block;
  background: #f1f1f1;
  height: 100px;
  width: 10px;
  position: ABSOLUTE;
  LEFT: -3PX;
  top: 0px;
}
#offer .ui_inner__selection label .s {
  top: 63px;
  border-radius: 195px 35px 155px 3px/19px 265px 25px 235px;
  width: 127px;
  right: -123px;
}
#offer .ui_inner__selection label .s:before {
  content: '';
  display: block;
  background: #f1f1f1;
  height: 100px;
  width: 10px;
  position: ABSOLUTE;
  LEFT: -6PX;
  top: 0px;
}
#offer .ui_inner__selection label .h {
  top: 187px;
  border-radius: 195px 9px 177px 3px/49px 275px 65px 235px;
  width: 127px;
  right: -123px;
}
#offer .ui_inner__selection label .h:before {
  content: '';
  display: block;
  background: #f1f1f1;
  height: 100px;
  width: 10px;
  position: ABSOLUTE;
  LEFT: -6PX;
  top: 0px;
}
#offer .ui_inner__selection label .m {
  top: 127px;
  border-radius: 265px 15px 205px 1px/0px 225px 35px 245px;
  right: -125px;
  box-shadow: 0px 1px 0px 0px rgba(255, 255, 255, 0.06) inset;
}
#offer .ui_inner__selection label .m:before {
  content: '';
  display: block;
  background: #f1f1f1;
  height: 100px;
  width: 10px;
  position: ABSOLUTE;
  LEFT: -5PX;
  top: 0px;
}
#offer .ui_inner__selection input[type="radio"] {
  display: none;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .selected {
    background: #752637 !important;
    color: #fff;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .sb img {
  opacity: 0.3;
  -webkit-transition: all 1s 0.2s;
  transition: all 1s 0.2s;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left {
  opacity: 1;
  left: -100px;
  -webkit-transition: all 0.5s 0.35s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  transition: all 0.5s 0.35s cubic-bezier(0.175, 1.605, 0.455, 0.92);
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__right h2 {
  opacity: 1;
  left: 0px;
  -webkit-transition: all 0.5s 0.4s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  transition: all 0.5s 0.4s cubic-bezier(0.175, 1.605, 0.455, 0.92);
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__right h3 {
  opacity: 1;
  left: 0px;
  -webkit-transition: all 0.5s 0.45s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  transition: all 0.5s 0.45s cubic-bezier(0.175, 1.605, 0.455, 0.92);
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider {
  pointer-events: all;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__right p {
  opacity: 1;
  left: 0px;
  -webkit-transition: all 0.5s 0.5s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  transition: all 0.5s 0.5s cubic-bezier(0.175, 1.605, 0.455, 0.92);
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__right input {
  position: relative;
  opacity: 1;
  left: 0px;
  -webkit-transition: all 0.5s 0.55s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  transition: all 0.5s 0.55s cubic-bezier(0.175, 1.605, 0.455, 0.92);
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__right .add {
  position: relative;
  opacity: 1;
  left: 0px;
  -webkit-transition: all 0.5s 0.6s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  transition: all 0.5s 0.6s cubic-bezier(0.175, 1.605, 0.455, 0.92);
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(1) {
  left: -60px;
  top: 201px;
  opacity: 0;
  -webkit-transform: rotate(793deg) !important;
          transform: rotate(793deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(2) {
  left: -33px;
  top: 201px;
  opacity: 0;
  -webkit-transform: rotate(994deg) !important;
          transform: rotate(994deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(3) {
  left: 100px;
  top: 159px;
  opacity: 0;
  -webkit-transform: rotate(1118deg) !important;
          transform: rotate(1118deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(4) {
  left: -229px;
  top: 207px;
  opacity: 0;
  -webkit-transform: rotate(1145deg) !important;
          transform: rotate(1145deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(5) {
  left: 80px;
  top: -8px;
  opacity: 0;
  -webkit-transform: rotate(1104deg) !important;
          transform: rotate(1104deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(6) {
  left: -105px;
  top: 217px;
  opacity: 0;
  -webkit-transform: rotate(1008deg) !important;
          transform: rotate(1008deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(7) {
  left: -66px;
  top: -81px;
  opacity: 0;
  -webkit-transform: rotate(629deg) !important;
          transform: rotate(629deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(8) {
  left: -151px;
  top: -25px;
  opacity: 0;
  -webkit-transform: rotate(687deg) !important;
          transform: rotate(687deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(9) {
  left: -32px;
  top: 42px;
  opacity: 0;
  -webkit-transform: rotate(929deg) !important;
          transform: rotate(929deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(10) {
  left: 147px;
  top: 162px;
  opacity: 0;
  -webkit-transform: rotate(846deg) !important;
          transform: rotate(846deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(11) {
  left: -198px;
  top: 98px;
  opacity: 0;
  -webkit-transform: rotate(1199deg) !important;
          transform: rotate(1199deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(12) {
  left: 4px;
  top: -43px;
  opacity: 0;
  -webkit-transform: rotate(1064deg) !important;
          transform: rotate(1064deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(13) {
  left: -13px;
  top: -84px;
  opacity: 0;
  -webkit-transform: rotate(653deg) !important;
          transform: rotate(653deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(14) {
  left: -201px;
  top: -110px;
  opacity: 0;
  -webkit-transform: rotate(1073deg) !important;
          transform: rotate(1073deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(15) {
  left: 121px;
  top: 34px;
  opacity: 0;
  -webkit-transform: rotate(656deg) !important;
          transform: rotate(656deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(16) {
  left: -7px;
  top: 113px;
  opacity: 0;
  -webkit-transform: rotate(750deg) !important;
          transform: rotate(750deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(17) {
  left: 111px;
  top: -153px;
  opacity: 0;
  -webkit-transform: rotate(1010deg) !important;
          transform: rotate(1010deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(18) {
  left: -100px;
  top: 86px;
  opacity: 0;
  -webkit-transform: rotate(917deg) !important;
          transform: rotate(917deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(19) {
  left: 137px;
  top: 102px;
  opacity: 0;
  -webkit-transform: rotate(664deg) !important;
          transform: rotate(664deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(20) {
  left: 3px;
  top: 180px;
  opacity: 0;
  -webkit-transform: rotate(781deg) !important;
          transform: rotate(781deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(21) {
  left: 123px;
  top: 115px;
  opacity: 0;
  -webkit-transform: rotate(602deg) !important;
          transform: rotate(602deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(22) {
  left: 30px;
  top: 191px;
  opacity: 0;
  -webkit-transform: rotate(936deg) !important;
          transform: rotate(936deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(23) {
  left: 210px;
  top: 125px;
  opacity: 0;
  -webkit-transform: rotate(807deg) !important;
          transform: rotate(807deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(24) {
  left: 40px;
  top: 77px;
  opacity: 0;
  -webkit-transform: rotate(1075deg) !important;
          transform: rotate(1075deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(25) {
  left: -39px;
  top: -106px;
  opacity: 0;
  -webkit-transform: rotate(943deg) !important;
          transform: rotate(943deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(26) {
  left: 64px;
  top: 179px;
  opacity: 0;
  -webkit-transform: rotate(756deg) !important;
          transform: rotate(756deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(27) {
  left: -64px;
  top: -100px;
  opacity: 0;
  -webkit-transform: rotate(1078deg) !important;
          transform: rotate(1078deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(28) {
  left: 17px;
  top: 145px;
  opacity: 0;
  -webkit-transform: rotate(1121deg) !important;
          transform: rotate(1121deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(29) {
  left: 22px;
  top: -101px;
  opacity: 0;
  -webkit-transform: rotate(1056deg) !important;
          transform: rotate(1056deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(30) {
  left: -57px;
  top: 57px;
  opacity: 0;
  -webkit-transform: rotate(827deg) !important;
          transform: rotate(827deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(31) {
  left: -40px;
  top: -156px;
  opacity: 0;
  -webkit-transform: rotate(849deg) !important;
          transform: rotate(849deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(32) {
  left: -39px;
  top: 168px;
  opacity: 0;
  -webkit-transform: rotate(1174deg) !important;
          transform: rotate(1174deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(33) {
  left: 137px;
  top: -182px;
  opacity: 0;
  -webkit-transform: rotate(834deg) !important;
          transform: rotate(834deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(34) {
  left: -63px;
  top: -161px;
  opacity: 0;
  -webkit-transform: rotate(885deg) !important;
          transform: rotate(885deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(35) {
  left: 108px;
  top: 193px;
  opacity: 0;
  -webkit-transform: rotate(747deg) !important;
          transform: rotate(747deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(36) {
  left: -114px;
  top: 155px;
  opacity: 0;
  -webkit-transform: rotate(856deg) !important;
          transform: rotate(856deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(37) {
  left: 195px;
  top: 75px;
  opacity: 0;
  -webkit-transform: rotate(927deg) !important;
          transform: rotate(927deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(38) {
  left: -62px;
  top: 98px;
  opacity: 0;
  -webkit-transform: rotate(872deg) !important;
          transform: rotate(872deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(39) {
  left: 75px;
  top: -173px;
  opacity: 0;
  -webkit-transform: rotate(1050deg) !important;
          transform: rotate(1050deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(40) {
  left: -33px;
  top: -127px;
  opacity: 0;
  -webkit-transform: rotate(1106deg) !important;
          transform: rotate(1106deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(41) {
  left: 230px;
  top: -159px;
  opacity: 0;
  -webkit-transform: rotate(715deg) !important;
          transform: rotate(715deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(42) {
  left: 222px;
  top: 40px;
  opacity: 0;
  -webkit-transform: rotate(1135deg) !important;
          transform: rotate(1135deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(43) {
  left: 175px;
  top: 37px;
  opacity: 0;
  -webkit-transform: rotate(780deg) !important;
          transform: rotate(780deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(44) {
  left: -180px;
  top: -221px;
  opacity: 0;
  -webkit-transform: rotate(784deg) !important;
          transform: rotate(784deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(45) {
  left: 195px;
  top: 48px;
  opacity: 0;
  -webkit-transform: rotate(789deg) !important;
          transform: rotate(789deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(46) {
  left: -65px;
  top: -90px;
  opacity: 0;
  -webkit-transform: rotate(858deg) !important;
          transform: rotate(858deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(47) {
  left: -140px;
  top: 178px;
  opacity: 0;
  -webkit-transform: rotate(1043deg) !important;
          transform: rotate(1043deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(48) {
  left: 49px;
  top: 43px;
  opacity: 0;
  -webkit-transform: rotate(709deg) !important;
          transform: rotate(709deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(49) {
  left: -62px;
  top: -138px;
  opacity: 0;
  -webkit-transform: rotate(639deg) !important;
          transform: rotate(639deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(50) {
  left: 0px;
  top: 118px;
  opacity: 0;
  -webkit-transform: rotate(951deg) !important;
          transform: rotate(951deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(51) {
  left: 228px;
  top: 152px;
  opacity: 0;
  -webkit-transform: rotate(1126deg) !important;
          transform: rotate(1126deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(52) {
  left: 91px;
  top: 184px;
  opacity: 0;
  -webkit-transform: rotate(1038deg) !important;
          transform: rotate(1038deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(53) {
  left: 85px;
  top: -95px;
  opacity: 0;
  -webkit-transform: rotate(931deg) !important;
          transform: rotate(931deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(54) {
  left: 93px;
  top: 92px;
  opacity: 0;
  -webkit-transform: rotate(853deg) !important;
          transform: rotate(853deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(55) {
  left: -197px;
  top: -90px;
  opacity: 0;
  -webkit-transform: rotate(1182deg) !important;
          transform: rotate(1182deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(56) {
  left: 90px;
  top: -57px;
  opacity: 0;
  -webkit-transform: rotate(1096deg) !important;
          transform: rotate(1096deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(57) {
  left: 99px;
  top: 7px;
  opacity: 0;
  -webkit-transform: rotate(1097deg) !important;
          transform: rotate(1097deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(58) {
  left: -66px;
  top: 102px;
  opacity: 0;
  -webkit-transform: rotate(737deg) !important;
          transform: rotate(737deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(59) {
  left: 191px;
  top: 197px;
  opacity: 0;
  -webkit-transform: rotate(787deg) !important;
          transform: rotate(787deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(60) {
  left: 138px;
  top: -8px;
  opacity: 0;
  -webkit-transform: rotate(722deg) !important;
          transform: rotate(722deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(61) {
  left: 111px;
  top: 224px;
  opacity: 0;
  -webkit-transform: rotate(919deg) !important;
          transform: rotate(919deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(62) {
  left: 23px;
  top: 15px;
  opacity: 0;
  -webkit-transform: rotate(1049deg) !important;
          transform: rotate(1049deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(63) {
  left: -215px;
  top: 55px;
  opacity: 0;
  -webkit-transform: rotate(607deg) !important;
          transform: rotate(607deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(64) {
  left: -187px;
  top: -50px;
  opacity: 0;
  -webkit-transform: rotate(671deg) !important;
          transform: rotate(671deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(65) {
  left: 76px;
  top: 13px;
  opacity: 0;
  -webkit-transform: rotate(1046deg) !important;
          transform: rotate(1046deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(66) {
  left: 175px;
  top: -42px;
  opacity: 0;
  -webkit-transform: rotate(875deg) !important;
          transform: rotate(875deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(67) {
  left: -109px;
  top: -14px;
  opacity: 0;
  -webkit-transform: rotate(745deg) !important;
          transform: rotate(745deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(68) {
  left: 173px;
  top: -50px;
  opacity: 0;
  -webkit-transform: rotate(656deg) !important;
          transform: rotate(656deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(69) {
  left: 114px;
  top: 117px;
  opacity: 0;
  -webkit-transform: rotate(970deg) !important;
          transform: rotate(970deg) !important;
}
#offer .ui_inner__selection input[type="radio"]:checked + label .ui_inner__slider .slide_inner__left .firework .firework_part:nth-of-type(70) {
  left: -180px;
  top: 39px;
  opacity: 0;
  -webkit-transform: rotate(699deg) !important;
          transform: rotate(699deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(1) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(984deg) !important;
          transform: rotate(984deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(2) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1045deg) !important;
          transform: rotate(1045deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(3) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(923deg) !important;
          transform: rotate(923deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(4) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(751deg) !important;
          transform: rotate(751deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(5) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(842deg) !important;
          transform: rotate(842deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(6) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(723deg) !important;
          transform: rotate(723deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(7) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(805deg) !important;
          transform: rotate(805deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(8) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(818deg) !important;
          transform: rotate(818deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(9) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(996deg) !important;
          transform: rotate(996deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(10) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(611deg) !important;
          transform: rotate(611deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(11) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1078deg) !important;
          transform: rotate(1078deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(12) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1129deg) !important;
          transform: rotate(1129deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(13) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(939deg) !important;
          transform: rotate(939deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(14) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1072deg) !important;
          transform: rotate(1072deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(15) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(807deg) !important;
          transform: rotate(807deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(16) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(788deg) !important;
          transform: rotate(788deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(17) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(669deg) !important;
          transform: rotate(669deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(18) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(850deg) !important;
          transform: rotate(850deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(19) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(666deg) !important;
          transform: rotate(666deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(20) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(881deg) !important;
          transform: rotate(881deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(21) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(725deg) !important;
          transform: rotate(725deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(22) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(781deg) !important;
          transform: rotate(781deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(23) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1018deg) !important;
          transform: rotate(1018deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(24) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(697deg) !important;
          transform: rotate(697deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(25) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1194deg) !important;
          transform: rotate(1194deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(26) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1138deg) !important;
          transform: rotate(1138deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(27) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(777deg) !important;
          transform: rotate(777deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(28) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1186deg) !important;
          transform: rotate(1186deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(29) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(735deg) !important;
          transform: rotate(735deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(30) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1184deg) !important;
          transform: rotate(1184deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(31) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(972deg) !important;
          transform: rotate(972deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(32) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1177deg) !important;
          transform: rotate(1177deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(33) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1082deg) !important;
          transform: rotate(1082deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(34) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(988deg) !important;
          transform: rotate(988deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(35) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1096deg) !important;
          transform: rotate(1096deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(36) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1004deg) !important;
          transform: rotate(1004deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(37) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(814deg) !important;
          transform: rotate(814deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(38) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(622deg) !important;
          transform: rotate(622deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(39) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1098deg) !important;
          transform: rotate(1098deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(40) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1026deg) !important;
          transform: rotate(1026deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(41) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(944deg) !important;
          transform: rotate(944deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(42) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1089deg) !important;
          transform: rotate(1089deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(43) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(755deg) !important;
          transform: rotate(755deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(44) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(869deg) !important;
          transform: rotate(869deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(45) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(764deg) !important;
          transform: rotate(764deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(46) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(655deg) !important;
          transform: rotate(655deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(47) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1070deg) !important;
          transform: rotate(1070deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(48) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1063deg) !important;
          transform: rotate(1063deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(49) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(754deg) !important;
          transform: rotate(754deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(50) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(905deg) !important;
          transform: rotate(905deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(51) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(921deg) !important;
          transform: rotate(921deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(52) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1127deg) !important;
          transform: rotate(1127deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(53) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1039deg) !important;
          transform: rotate(1039deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(54) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(679deg) !important;
          transform: rotate(679deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(55) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(991deg) !important;
          transform: rotate(991deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(56) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(632deg) !important;
          transform: rotate(632deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(57) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(672deg) !important;
          transform: rotate(672deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(58) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(793deg) !important;
          transform: rotate(793deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(59) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1187deg) !important;
          transform: rotate(1187deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(60) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1048deg) !important;
          transform: rotate(1048deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(61) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(780deg) !important;
          transform: rotate(780deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(62) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1123deg) !important;
          transform: rotate(1123deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(63) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(978deg) !important;
          transform: rotate(978deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(64) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1052deg) !important;
          transform: rotate(1052deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(65) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1118deg) !important;
          transform: rotate(1118deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(66) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1080deg) !important;
          transform: rotate(1080deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(67) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1073deg) !important;
          transform: rotate(1073deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(68) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(1065deg) !important;
          transform: rotate(1065deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(69) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(765deg) !important;
          transform: rotate(765deg) !important;
}
#offer .ui_inner__selection input[type="checkbox"]:checked + label .add .firework_part:nth-of-type(70) {
  left: 277px;
  top: -186px;
  opacity: 1;
  -webkit-transform: rotate(813deg) !important;
          transform: rotate(813deg) !important;
}
#offer .ui_inner .ui_inner__slider {
  pointer-events: none;
}
#offer .ui_inner .ui_inner__slider .slide_inner {
  position: absolute;
  top: 54px;
  text-align: right;
}
#offer .ui_inner .ui_inner__slider .slide_inner__left {
  display: inline-block;
  width: 42%;
  opacity: 0;
  position: absolute;
  left: -220px;
  top: 100px;
  -webkit-transition: all 0.5s 0s cubic-bezier(0.175, 1.605, 0.455, 0.92);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left img {
  width: 100%;
  z-index: 8;
  position: Relative;
  -webkit-filter: drop-shadow(-4px 6px 6px rgba(0, 0, 0, 0.2));
          filter: drop-shadow(-4px 6px 6px rgba(0, 0, 0, 0.2));
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework {
  position: relative;
  left: 130px;
  top: -150px;
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part {
  position: absolute;
  border-radius: 10px;
  background: Red;
  -webkit-transition: left 0.99s 0.36s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.36s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.99s 0.55s, -webkit-transform 0.6s 0.36s;
  transition: left 0.99s 0.36s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.36s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.99s 0.55s, -webkit-transform 0.6s 0.36s;
  transition: left 0.99s 0.36s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.36s, top 0.99s 0.36s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.99s 0.55s;
  transition: left 0.99s 0.36s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.36s, top 0.99s 0.36s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.99s 0.55s, -webkit-transform 0.6s 0.36s;
  left: 0;
  top: 0;
  opacity: 1;
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(1) {
  background: #deba46;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(2) {
  background: #de4660;
  height: 10px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(3) {
  background: #dead46;
  height: 9px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(4) {
  background: #de7046;
  height: 9px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(5) {
  background: #de7f46;
  height: 14px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(6) {
  background: #de9e46;
  height: 14px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(7) {
  background: #de6646;
  height: 12px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(8) {
  background: #de9946;
  height: 15px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(9) {
  background: #de5946;
  height: 9px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(10) {
  background: #de4a46;
  height: 14px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(11) {
  background: #de7346;
  height: 8px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(12) {
  background: #ded346;
  height: 15px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(13) {
  background: #de4f46;
  height: 5px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(14) {
  background: #de6146;
  height: 9px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(15) {
  background: #de466a;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(16) {
  background: #de5446;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(17) {
  background: #deb746;
  height: 10px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(18) {
  background: #de7a46;
  height: 10px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(19) {
  background: #de8746;
  height: 7px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(20) {
  background: #ded146;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(21) {
  background: #de8c46;
  height: 8px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(22) {
  background: #de5946;
  height: 12px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(23) {
  background: #de6b46;
  height: 13px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(24) {
  background: #de466d;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(25) {
  background: #ded346;
  height: 11px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(26) {
  background: #de5246;
  height: 8px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(27) {
  background: #de4668;
  height: 7px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(28) {
  background: #de4663;
  height: 15px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(29) {
  background: #de9e46;
  height: 14px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(30) {
  background: #de5446;
  height: 5px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(31) {
  background: #dec646;
  height: 7px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(32) {
  background: #de4653;
  height: 11px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(33) {
  background: #dea546;
  height: 14px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(34) {
  background: #de5f46;
  height: 15px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(35) {
  background: #de4668;
  height: 14px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(36) {
  background: #de466f;
  height: 13px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(37) {
  background: #de4649;
  height: 8px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(38) {
  background: #de4672;
  height: 10px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(39) {
  background: #dea346;
  height: 7px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(40) {
  background: #de4665;
  height: 12px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(41) {
  background: #de7d46;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(42) {
  background: #dea846;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(43) {
  background: #deb746;
  height: 11px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(44) {
  background: #de4659;
  height: 7px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(45) {
  background: #de4677;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(46) {
  background: #de4679;
  height: 9px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(47) {
  background: #ded346;
  height: 5px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(48) {
  background: #de6e46;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(49) {
  background: #debf46;
  height: 5px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(50) {
  background: #dea546;
  height: 13px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(51) {
  background: #debf46;
  height: 5px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(52) {
  background: #dea846;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(53) {
  background: #de5746;
  height: 14px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(54) {
  background: #de6e46;
  height: 12px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(55) {
  background: #deb746;
  height: 15px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(56) {
  background: #de4659;
  height: 8px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(57) {
  background: #debf46;
  height: 8px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(58) {
  background: #de4660;
  height: 13px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(59) {
  background: #de465e;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(60) {
  background: #de4656;
  height: 10px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(61) {
  background: #de8546;
  height: 14px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(62) {
  background: #de466a;
  height: 14px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(63) {
  background: #de4d46;
  height: 11px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(64) {
  background: #deb246;
  height: 5px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(65) {
  background: #de9146;
  height: 13px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(66) {
  background: #de4677;
  height: 7px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(67) {
  background: #de464e;
  height: 12px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(68) {
  background: #de9e46;
  height: 9px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(69) {
  background: #de4677;
  height: 5px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__left .firework_part:nth-of-type(70) {
  background: #deba46;
  height: 6px;
  width: 5px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
}
#offer .ui_inner .ui_inner__slider .slide_inner__right {
  display: inline-block;
  width: 70%;
  padding: 0px 40px 0px 0px;
  text-align: left;
  position: relative;
  z-index: 1;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .hid {
  display: none;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right h2 {
  margin: 0px 0px 10px 0px;
 
  color: #752637;
  font-size: 32px;
  position: relative;
  opacity: 0;
  left: -90px;
  -webkit-transition: all 0.5s 0.2s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  transition: all 0.5s 0.2s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  padding:30px 0;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right h3 {
  margin: 0px 0px 10px 0px;
 
  color: #ae334d;
  font-size: 20px;
  position: relative;
  opacity: 0;
  left: -90px;
  -webkit-transition: all 0.5s 0.25s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  transition: all 0.5s 0.25s cubic-bezier(0.175, 1.605, 0.455, 0.92);
}
#offer .ui_inner .ui_inner__slider .slide_inner__right h3 span {
  font-size: 11px;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right p {
  margin: 0;
  font-family: 'Bad Script', cursive;
  line-height: 22px;
  color: #9e9da7;
  font-size: 12px;
  position: relative;
  opacity: 0;
  left: -90px;
  -webkit-transition: all 0.5s 0.3s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  transition: all 0.5s 0.3s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  padding-right:70px;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right input {
  margin: 20px 0px;
  padding: 10px;
  outline: none;
  border-radius: 255px 15px 205px 35px/35px 225px 35px 255px;
  font-family: 'Satisfy', cursive;
  border: 3px solid #e8e8e8;
  color: #de467c;
  width: 55px;
  text-align: Center;
  position: relative;
  opacity: 0;
  left: -40px;
  -webkit-transition: all 0.5s 0.35s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  transition: all 0.5s 0.35s cubic-bezier(0.175, 1.605, 0.455, 0.92);
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add {
  cursor: pointer;
  display: inherit;
  margin: 20px 0px;
  padding: 10px 20px;
  margin-left: 10px;
  border-radius: 255px 15px 205px 35px/35px 225px 35px 255px;
  font-family: 'Amatic SC', cursive;
  background: #de467c;
  color: white;
  width: 25px;
  text-align: Center;
  text-decoration: none;
  position: relative;
  opacity: 0;
  left: -40px;
  -webkit-transition: all 0.5s 0.4s cubic-bezier(0.175, 1.605, 0.455, 0.92);
  transition: all 0.5s 0.4s cubic-bezier(0.175, 1.605, 0.455, 0.92);
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add input {
  display: none;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework {
  position: absolute;
  left: 0px;
  top: 0px;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part {
  position: absolute;
  border-radius: 10px;
  left: 0;
  top: 0;
  opacity: 1;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(1) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 42px;
  top: 10px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.91s 0.0125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.0125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0125s;
  transition: left 0.91s 0.0125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.0125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0125s;
  transition: left 0.91s 0.0125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.0125s, top 0.99s 0.0125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.91s 0.0125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.0125s, top 0.99s 0.0125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0125s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(2) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 43px;
  top: 11px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.32s 0.025s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.025s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.025s;
  transition: left 0.32s 0.025s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.025s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.025s;
  transition: left 0.32s 0.025s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.025s, top 0.99s 0.025s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.32s 0.025s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.025s, top 0.99s 0.025s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.025s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(3) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 41px;
  top: 20px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.49s 0.0375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.0375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0375s;
  transition: left 1.49s 0.0375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.0375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0375s;
  transition: left 1.49s 0.0375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.0375s, top 0.99s 0.0375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.49s 0.0375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.0375s, top 0.99s 0.0375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0375s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(4) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 50px;
  top: 11px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.38s 0.05s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.05s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.05s;
  transition: left 1.38s 0.05s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.05s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.05s;
  transition: left 1.38s 0.05s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.05s, top 0.99s 0.05s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.38s 0.05s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.05s, top 0.99s 0.05s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.05s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(5) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 50px;
  top: 13px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.97s 0.0625s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.0625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0625s;
  transition: left 0.97s 0.0625s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.0625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0625s;
  transition: left 0.97s 0.0625s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.0625s, top 0.99s 0.0625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.97s 0.0625s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.0625s, top 0.99s 0.0625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0625s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(6) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 40px;
  top: 14px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.3s 0.075s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.075s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.075s;
  transition: left 1.3s 0.075s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.075s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.075s;
  transition: left 1.3s 0.075s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.075s, top 0.99s 0.075s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.3s 0.075s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.075s, top 0.99s 0.075s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.075s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(7) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 43px;
  top: 10px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.38s 0.0875s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.0875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0875s;
  transition: left 0.38s 0.0875s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.0875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0875s;
  transition: left 0.38s 0.0875s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.0875s, top 0.99s 0.0875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.38s 0.0875s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.0875s, top 0.99s 0.0875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.0875s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(8) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 45px;
  top: 12px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.86s 0.1s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.1s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1s;
  transition: left 0.86s 0.1s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.1s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1s;
  transition: left 0.86s 0.1s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.1s, top 0.99s 0.1s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.86s 0.1s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.1s, top 0.99s 0.1s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(9) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 42px;
  top: 13px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1s 0.1125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.1125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1125s;
  transition: left 1s 0.1125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.1125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1125s;
  transition: left 1s 0.1125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.1125s, top 0.99s 0.1125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1s 0.1125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.1125s, top 0.99s 0.1125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1125s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(10) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 41px;
  top: 14px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.63s 0.125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.125s;
  transition: left 1.63s 0.125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.125s;
  transition: left 1.63s 0.125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.125s, top 0.99s 0.125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.63s 0.125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.125s, top 0.99s 0.125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.125s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(11) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 44px;
  top: 11px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.1s 0.1375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.1375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1375s;
  transition: left 1.1s 0.1375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.1375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1375s;
  transition: left 1.1s 0.1375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.1375s, top 0.99s 0.1375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.1s 0.1375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.1375s, top 0.99s 0.1375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1375s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(12) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 45px;
  top: 19px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.46s 0.15s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.15s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.15s;
  transition: left 0.46s 0.15s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.15s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.15s;
  transition: left 0.46s 0.15s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.15s, top 0.99s 0.15s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.46s 0.15s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.15s, top 0.99s 0.15s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.15s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(13) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 46px;
  top: 16px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.32s 0.1625s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.1625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1625s;
  transition: left 1.32s 0.1625s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.1625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1625s;
  transition: left 1.32s 0.1625s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.1625s, top 0.99s 0.1625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.32s 0.1625s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.1625s, top 0.99s 0.1625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1625s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(14) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 44px;
  top: 19px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.32s 0.175s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.175s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.175s;
  transition: left 0.32s 0.175s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.175s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.175s;
  transition: left 0.32s 0.175s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.175s, top 0.99s 0.175s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.32s 0.175s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.175s, top 0.99s 0.175s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.175s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(15) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 40px;
  top: 15px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.39s 0.1875s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.1875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1875s;
  transition: left 1.39s 0.1875s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.1875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1875s;
  transition: left 1.39s 0.1875s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.1875s, top 0.99s 0.1875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.39s 0.1875s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.1875s, top 0.99s 0.1875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.1875s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(16) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 41px;
  top: 11px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.92s 0.2s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.2s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2s;
  transition: left 0.92s 0.2s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.2s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2s;
  transition: left 0.92s 0.2s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.2s, top 0.99s 0.2s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.92s 0.2s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.2s, top 0.99s 0.2s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(17) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 49px;
  top: 16px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.43s 0.2125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.2125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2125s;
  transition: left 1.43s 0.2125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.2125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2125s;
  transition: left 1.43s 0.2125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.2125s, top 0.99s 0.2125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.43s 0.2125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.2125s, top 0.99s 0.2125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2125s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(18) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 50px;
  top: 17px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.61s 0.225s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.225s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.225s;
  transition: left 1.61s 0.225s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.225s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.225s;
  transition: left 1.61s 0.225s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.225s, top 0.99s 0.225s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.61s 0.225s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.225s, top 0.99s 0.225s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.225s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(19) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 44px;
  top: 12px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1s 0.2375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.2375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2375s;
  transition: left 1s 0.2375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.2375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2375s;
  transition: left 1s 0.2375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.2375s, top 0.99s 0.2375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1s 0.2375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.2375s, top 0.99s 0.2375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2375s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(20) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 46px;
  top: 16px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.55s 0.25s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.25s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.25s;
  transition: left 0.55s 0.25s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.25s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.25s;
  transition: left 0.55s 0.25s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.25s, top 0.99s 0.25s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.55s 0.25s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.25s, top 0.99s 0.25s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.25s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(21) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 43px;
  top: 16px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.26s 0.2625s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.2625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2625s;
  transition: left 1.26s 0.2625s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.2625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2625s;
  transition: left 1.26s 0.2625s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.2625s, top 0.99s 0.2625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.26s 0.2625s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.2625s, top 0.99s 0.2625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2625s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(22) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 45px;
  top: 14px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.65s 0.275s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.275s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.275s;
  transition: left 0.65s 0.275s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.275s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.275s;
  transition: left 0.65s 0.275s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.275s, top 0.99s 0.275s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.65s 0.275s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.275s, top 0.99s 0.275s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.275s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(23) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 46px;
  top: 16px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.7s 0.2875s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.2875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2875s;
  transition: left 0.7s 0.2875s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.2875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2875s;
  transition: left 0.7s 0.2875s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.2875s, top 0.99s 0.2875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.7s 0.2875s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.2875s, top 0.99s 0.2875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.2875s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(24) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 42px;
  top: 19px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.76s 0.3s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.3s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3s;
  transition: left 0.76s 0.3s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.3s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3s;
  transition: left 0.76s 0.3s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.3s, top 0.99s 0.3s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.76s 0.3s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.3s, top 0.99s 0.3s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(25) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 43px;
  top: 19px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.05s 0.3125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.3125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3125s;
  transition: left 1.05s 0.3125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.3125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3125s;
  transition: left 1.05s 0.3125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.3125s, top 0.99s 0.3125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.05s 0.3125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.3125s, top 0.99s 0.3125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3125s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(26) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 47px;
  top: 16px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.82s 0.325s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.325s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.325s;
  transition: left 0.82s 0.325s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.325s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.325s;
  transition: left 0.82s 0.325s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.325s, top 0.99s 0.325s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.82s 0.325s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.325s, top 0.99s 0.325s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.325s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(27) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 49px;
  top: 15px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.47s 0.3375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.3375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3375s;
  transition: left 1.47s 0.3375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.3375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3375s;
  transition: left 1.47s 0.3375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.3375s, top 0.99s 0.3375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.47s 0.3375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.3375s, top 0.99s 0.3375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3375s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(28) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 40px;
  top: 20px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.55s 0.35s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.35s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.35s;
  transition: left 1.55s 0.35s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.35s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.35s;
  transition: left 1.55s 0.35s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.35s, top 0.99s 0.35s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.55s 0.35s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.35s, top 0.99s 0.35s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.35s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(29) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 48px;
  top: 10px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.88s 0.3625s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.3625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3625s;
  transition: left 0.88s 0.3625s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.3625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3625s;
  transition: left 0.88s 0.3625s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.3625s, top 0.99s 0.3625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.88s 0.3625s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.3625s, top 0.99s 0.3625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3625s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(30) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 50px;
  top: 19px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.52s 0.375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.375s;
  transition: left 0.52s 0.375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.375s;
  transition: left 0.52s 0.375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.375s, top 0.99s 0.375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.52s 0.375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.375s, top 0.99s 0.375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.375s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(31) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 43px;
  top: 20px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.38s 0.3875s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.3875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3875s;
  transition: left 1.38s 0.3875s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.3875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3875s;
  transition: left 1.38s 0.3875s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.3875s, top 0.99s 0.3875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.38s 0.3875s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.3875s, top 0.99s 0.3875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.3875s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(32) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 47px;
  top: 16px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.37s 0.4s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.4s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4s;
  transition: left 1.37s 0.4s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.4s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4s;
  transition: left 1.37s 0.4s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.4s, top 0.99s 0.4s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.37s 0.4s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.4s, top 0.99s 0.4s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(33) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 41px;
  top: 14px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.27s 0.4125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.4125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4125s;
  transition: left 1.27s 0.4125s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.4125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4125s;
  transition: left 1.27s 0.4125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.4125s, top 0.99s 0.4125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.27s 0.4125s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.4125s, top 0.99s 0.4125s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4125s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(34) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 49px;
  top: 10px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.39s 0.425s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.425s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.425s;
  transition: left 1.39s 0.425s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.425s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.425s;
  transition: left 1.39s 0.425s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.425s, top 0.99s 0.425s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.39s 0.425s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.425s, top 0.99s 0.425s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.425s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(35) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 49px;
  top: 17px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.31s 0.4375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.4375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4375s;
  transition: left 0.31s 0.4375s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.4375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4375s;
  transition: left 0.31s 0.4375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.4375s, top 0.99s 0.4375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.31s 0.4375s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.4375s, top 0.99s 0.4375s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4375s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(36) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 49px;
  top: 20px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.05s 0.45s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.45s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.45s;
  transition: left 1.05s 0.45s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.45s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.45s;
  transition: left 1.05s 0.45s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.45s, top 0.99s 0.45s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.05s 0.45s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.45s, top 0.99s 0.45s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.45s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(37) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 44px;
  top: 18px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 1.11s 0.4625s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.4625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4625s;
  transition: left 1.11s 0.4625s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.4625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4625s;
  transition: left 1.11s 0.4625s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.4625s, top 0.99s 0.4625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 1.11s 0.4625s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.4625s, top 0.99s 0.4625s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4625s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(38) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 43px;
  top: 18px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.51s 0.475s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.475s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.475s;
  transition: left 0.51s 0.475s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.475s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.475s;
  transition: left 0.51s 0.475s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.475s, top 0.99s 0.475s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.51s 0.475s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.475s, top 0.99s 0.475s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.475s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(39) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 47px;
  top: 18px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.86s 0.4875s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.4875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4875s;
  transition: left 0.86s 0.4875s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.4875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4875s;
  transition: left 0.86s 0.4875s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.4875s, top 0.99s 0.4875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.86s 0.4875s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.4875s, top 0.99s 0.4875s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.4875s;
}
#offer .ui_inner .ui_inner__slider .slide_inner__right .add .firework_part:nth-of-type(40) {
  background: #de467c;
  height: 5px;
  width: 5px;
  opacity: 0;
  left: 41px;
  top: 16px;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  -webkit-transition: left 0.63s 0.5s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.5s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.5s;
  transition: left 0.63s 0.5s cubic-bezier(0.23, 1, 0.32, 1), top 0.99s 0.5s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.5s;
  transition: left 0.63s 0.5s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.5s, top 0.99s 0.5s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s;
  transition: left 0.63s 0.5s cubic-bezier(0.23, 1, 0.32, 1), transform 0.6s 0.5s, top 0.99s 0.5s cubic-bezier(0.33, 1, 0.32, 1), opacity 0.3s 0.2s, -webkit-transform 0.6s 0.5s;
}

@-webkit-keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes spin {
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

</style>
<?php echo get_header(); ?>

    <?php echo get_partial('content_top'); ?>
            
        <?php if ($this->alert->get()) { ?>
            <div id="notification">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $this->alert->display(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
                <div class="main_bg">
                    <div id="page-content" class="icon_sec">
                        <div class="container top-spacing-10">
                            
                                            
                            <div class="col-md-6 col-lg-3 icon-box">
                            
                                <div class="box-icon-svg">
                                <div class="box-icon-svg-inner">
                                    <svg width="60" height="60" viewBox="0 0 93 93" fill="none" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M90 45C90 69.8528 69.8528 90 45 90C20.1472 90 0 69.8528 0 45C0 20.1472 22.5 19 45 4.00001C67.5 -11 90 20.1472 90 45Z" fill="#6f1e31"></path>
                                    </svg><span class="icon-lg-2 icon-inner icon-white"><i class="fa fa-search"></i></span>
                                </div>
                                <div class="box-icon-svg-caption">
                                    <h4><?php echo lang('text_step_one'); ?></h4>
                                   
                                </div>
                                </div>
                            
                            </div>
                            <div class="col-md-6 col-lg-3 wow-outer">
                            
                                <div class="box-icon-svg">
                                <div class="box-icon-svg-inner">
                                    <svg width="60" height="60" viewBox="0 0 93 93" fill="none" xmlns="https://www.w3.org/2000/svg">
                                    <path d="M90 45C90 69.8528 69.8528 90 45 90C20.1472 90 0 69.8528 0 45C0 20.1472 22.5 19 45 4.00001C67.5 -11 90 20.1472 90 45Z" fill="#6f1e31"></path>
                                    </svg><span class="icon-lg-2 icon-inner icon-white">  <i class="fa fa-mouse-pointer"></i></span>
                                </div>
                                <div class="box-icon-svg-caption">
                                    <h4><?php echo lang('text_step_two'); ?></h4>
                                
                                </div>
                                </div>
                        
                            </div>
                                <div class="col-md-6 col-lg-3 wow-outer">
                                
                                    <div class="box-icon-svg">
                                    <div class="box-icon-svg-inner">
                                        <svg width="60" height="60" viewBox="0 0 93 93" fill="none" xmlns="https://www.w3.org/2000/svg">
                                        <path d="M90 45C90 69.8528 69.8528 90 45 90C20.1472 90 0 69.8528 0 45C0 20.1472 22.5 19 45 4.00001C67.5 -11 90 20.1472 90 45Z" fill="#6f1e31"></path>
                                        </svg><span class="icon-lg-2 icon-inner icon-white"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                    <div class="box-icon-svg-caption">
                                        <h4><?php echo lang('text_step_three'); ?></h4>
                                       
                                    </div>
                                    </div>
                                
                                </div>
                                <div class="col-md-6 col-lg-3">
                                
                                    <div class="box-icon-svg">
                                    <div class="box-icon-svg-inner">
                                        <svg width="60" height="60" viewBox="0 0 93 93" fill="none" xmlns="https://www.w3.org/2000/svg">
                                        <path d="M90 45C90 69.8528 69.8528 90 45 90C20.1472 90 0 69.8528 0 45C0 20.1472 22.5 19 45 4.00001C67.5 -11 90 20.1472 90 45Z" fill="#6f1e31"></path>
                                        </svg><span class="icon-lg-2 icon-inner icon-white"><i class="fa fa-heart"></i></span>
                                    </div>
                                    <div class="box-icon-svg-caption">
                                        <h4><?php echo lang('text_step_four'); ?></h4>
                                        
                                    </div>
                                    </div>
                                
                                </div>
                     
                        </div>
                    </div>

                </div>


       
                <section class="about" id="about">
                <div class="object-right object_right_img animated fadeIn ">
                            <img class="img-responsive img1 " src="assets/images/02.png" alt="">
                        </div>
                    <div class="">
                       
                        <div >  <img class="img-responsive book-menu_img " src="assets/images/abtt.png" style="position:absolute;opacity: 0.9;"> </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                   
                                </div>
                            </div>

                            <div class="book-menu mt-40">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 ">
                                        <div class="section-title1 text-center">
                                        <div class="title-separator">
                                            <!-- <img src="assets/images/food_icon.png"> -->
                                            <h2 class="h2_sttt"> <span class="text-orange  padin_rt">About</span>Us</h2>
                                        </div>

                                        <span style="      color: #7e3545;
    font-weight: 800;
    font-size: 15px;
">Whatever your occasion, We makes it one to remember!</span>
                                    </div>
                                        </div>
                                        <div class="col-md-7 col-sm-12 col-md-offset-right-1 ">
                                            <p>
                                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. We provide you with daily self-made bread, sourdough pizza, roasted fish-meat-vegetables and many more. Lorem ipsum dolor sit amet, 

                                            </p>
                                        </div>
                                    </div>
                                </div>
                </section>
                <div class="clearfix"></div>
                <section class="gallery white-bg page-section-ptb" id="gallery">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                            <div class="title-separator">
                                <!-- <img src="assets/images/food_icon.png"> -->
                                <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Our</span>Gallery</h2>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="isotope-filters">
                                    <button data-filter="" class="active">All</button>
                                    <button data-filter=".Arabic"> Arabic Sweets</button>
                                    <button data-filter=".Mamoul">Mamoul</button>
                                    <button data-filter=".Fresh">Fresh Sweets</button>
                                    <button data-filter=".Manakeesh">Manakeesh</button>
                                    <button data-filter=".Sandwiches">Sandwiches</button>
                                    <button data-filter=".Appetizer"> Appetizer</button>
                                    <button data-filter=".emb"> Embains</button>

                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="isotope popup-gallery columns-4">
                        <div class="grid-item fresh">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/07.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Cheese Pasta </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/07.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item Arabic mexican">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/08.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Cheese Pasta </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/08.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item Mamoul">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/02.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#">Diamond</a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/02.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item   Mamoul">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/09.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#">Mann Wa Salwa</a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/09.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item mexican">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/04.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Cheese Pasta </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/04.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item  Mamoul ">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/05.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Cheese Pasta </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/05.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item Sandwiches ">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/06.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Bassma </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/06.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="grid-item Appetizer">
                                <div class="galllery-item gal_img">
                                    <span><img class="img-responsive" src="assets/images/gallery/10.png" alt=""></span>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h3><a href="#"> Cheese Pasta </a> </h3>
                                            <a class="portfolio-img" href="assets/images/gallery/10.png"><i class="fa fa-expand"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                          
                        </div>
                    </div>
                </section>

                <div claass="clearfix"></div>

                <section class="our-menu2 page-section-pt parallax pb-30 bg-overlay-black-70 " style="background-image: url(assets/images/bg_banner.jpg);">

                    <div class=" parallax bg-overlay-black-70" style="background-image: url(assets/images/icon/slider_image1.jpg);background-repeat:no-repeat;">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="col-md-offset-2 col-md-8 banner_sec">
                                        <div id="offer" style="max-height:500px;width:100%">
                                                                                        <div class="ui">
                                                <div class="ui_inner">
                                                    <div class="ui_fruit">
                                                    <img src="assets/images/icon/abt_bggg.png">
                                                    </div>
                                                
                                                    <div class="ui_inner__selection">
                                                    <input checked="checked" id="lovely" name="selection" type="radio">
                                                    <label for="lovely">
                                                        <div class="selected l">Offer</div>
                                                        <div class="ui_inner__slider">
                                                        <div class="sb">
                                                            <img src="assets/images/icon/starburst2.png">
                                                        </div>
                                                        <div class="slide">
                                                            <div class="slide_inner">
                                                            <div class="slide_inner__left">
                                                                <img src="assets/images/icon/baklawa_sweet_1.png">
                                                            
                                                            </div>
                                                            <div class="slide_inner__right">
                                                                <h2>Offer Sweets</h2>
                                                                <h3>$4.99 <span> Pack of 10</span></h3>
                                                                <p>Pie cupcake caramels marshmallow ice cream icing. Brownie biscuit candy macaroon dessert ice cream halvah. Cheesecake sweet roll marzipan brownie lollipop gummies.</p>
                                                                
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </label>
                                                    <input id="super" name="selection" type="radio">
                                                    <label for="super">
                                                        <div class="selected s">Happy Hours</div>
                                                        <div class="ui_inner__slider">
                                                        <div class="sb">
                                                        <img src="assets/images/icon/starburst2.png">
                                                        </div>
                                                        <div class="slide">
                                                            <div class="slide_inner">
                                                            <div class="slide_inner__left">
                                                            <img src="assets/images/icon/baklawa_sweet_1.png">
                                                            
                                                            </div>
                                                            <div class="slide_inner__right">
                                                                <h2>Happy Hours</h2>
                                                                <h3>$4.99 <span> Pack of 10</span></h3>
                                                                <p>Pie cupcake caramels marshmallow ice cream icing. Brownie biscuit candy macaroon dessert ice cream halvah. Cheesecake sweet roll marzipan brownie lollipop gummies.</p>
                                                            
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </label>
                                                    <input id="mega" name="selection" type="radio">
                                                    <label for="mega">
                                                        <div class="selected m">Eid Offer</div>
                                                        <div class="ui_inner__slider">
                                                        <div class="sb">
                                                        <img src="assets/images/icon/starburst2.png">
                                                        </div>
                                                        <div class="slide">
                                                            <div class="slide_inner">
                                                            <div class="slide_inner__left">
                                                            <img src="assets/images/icon/baklawa_sweet_1.png">
                                                                <div class="firework">
                                                            
                                                                </div>
                                                            </div>
                                                            <div class="slide_inner__right">
                                                                <h2>Eid Offer</h2>
                                                                <h3>$4.99 <span> Pack of 10</span></h3>
                                                                <p>Pie cupcake caramels marshmallow ice cream icing. Brownie biscuit candy macaroon dessert ice cream halvah. Cheesecake sweet roll marzipan brownie lollipop gummies.</p>
                                                                
                                                            
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </label>
                                                    <input id="huge" name="selection" type="radio">
                                                    <label for="huge">
                                                        <div class="selected h">Special Sweets</div>
                                                        <div class="ui_inner__slider">
                                                        <div class="sb">
                                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/starburst2.png">
                                                        </div>
                                                        <div class="slide">
                                                            <div class="slide_inner">
                                                            <div class="slide_inner__left">
                                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/cupcake4.png">
                                                                <div class="firework">
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="slide_inner__right">
                                                                <h2>Special Sweets</h2>
                                                                <h3>$9.99 <span> Pack of 10</span></h3>
                                                                <p>Pie cupcake caramels marshmallow ice cream icing. Brownie biscuit candy macaroon dessert ice cream halvah. Cheesecake sweet roll marzipan brownie lollipop gummies.</p>
                                                            
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </label>
                                                    </div>
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

        
           
                <div class="clearfix"></div>


                

                <section class="map_sec">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-center">
                            <div class="title-separator">
                                <!-- <img src="assets/images/food_icon.png"> -->
                                <h2 class="h2_sttt"> <span class="text-orange  padin_rt">Our</span>Locations</h2>
                            </div>

                        </div>
                    </div>
                    <div class="content-wrap">

                        <div id="map_home" class="slideInUp" style="height:500px; width:100%"></div>
                    </div>
                    <div class="clearfix"></div>
                 
                 </div>
                </section>

                <div claass="clearfix"></div>

                <?php echo get_footer(); ?>
                    <div class="clearfix"></div>
                    <script>
                        // $(function() {

                        //   $('a[href*=#]:not([href=#])').click(function() {
                        //     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        //       var target = $(this.hash);
                        //       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        //       if (target.length) {
                        //         $('html,body').animate({
                        //           scrollTop: target.offset().top
                        //         }, 1500);
                        //         return false;
                        //       }
                        //     }
                        //   });

                        // });

                        $(document).ready(function() {
                            if(getCookie('order_type') === ""){
                                document.cookie = "order_type=1; path=/";
                            }
                            $('#main-header .navbar-nav a').on('click', function() {
                                $('#main-header .navbar-nav').find('li.active').removeClass('active');
                                $(this).parent('li').addClass('active');
                            });

                            initMapHome();
                            $("#order_now").click(function() {
                                $("body").css("padding-right:0");
                            });
                            $('#order_now').on('shown.bs.modal', function() {
                                $("body.modal-open").removeAttr("style");
                            });

                            $("#testimonial-slider").owlCarousel({
                                items: 1,
                                itemsDesktop: [1000, 1],
                                itemsDesktopSmall: [979, 1],
                                itemsTablet: [768, 1],
                                pagination: true,
                                transitionStyle: "backSlide",
                                autoPlay: true
                            });
                        });
                    </script>
                    <script>
                        /* When the user clicks on the button,
                        toggle between hiding and showing the dropdown content */
                        function myFunction() {
                            document.getElementById("myDropdown").classList.toggle("show");
                        }

                        function filterFunction() {

                            var input, filter, ul, li, a, i;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            div = document.getElementById("myDropdown");
                            a = div.getElementsByTagName("a");
                            for (i = 0; i < a.length; i++) {
                                txtValue = a[i].textContent || a[i].innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    a[i].style.display = "";
                                } else {
                                    a[i].style.display = "none";
                                }
                            }
                        }

                        $("#order_now").click(function() {
                            $(".js-example-templating").select2("close");
                        });

                        function initMapHome() {
                            var broadway = {
                                info: '<strong>Zalatimo Sweets</strong><br>\
                                Sharq, KIPCO Tower<br> Kuwait City<br>\
    	<a href="https://www.google.com/maps/dir//KIPCO+Tower,+Al+Kuwayt/@29.3757712,47.9436413,12.7z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3fcf84966d43bf01:0xb0f7d549868e3803!2m2!1d47.9868396!2d29.3757397" target="_blank">Get Directions<img src="assets/images/directions.png" width="15"></a>',
                                lat: 29.3757,
                                long: 47.9868,
                            }

                            var belmont = {
                                info: '<strong>Zalatimo Sweets</strong><br>\
                                Ground Floor, Building 25, Marina Crescent<br> Salmiya<br>\
    	<a href="https://www.google.com/maps/place/Marina+Crescent/@29.3439534,48.0604649,16.15z/data=!4m8!1m2!2m1!1sGround+Floor,+Building+25,+Marina+Crescent,+kuwait!3m4!1s0x3fcf9d9950d2a1c1:0xb80aaf80bf2223b4!8m2!3d29.3411726!4d48.0655611" target="_blank">Get Directions<img src="assets/images/directions.png" width="15"></a>',
                                lat: 29.3439534,
                                long: 48.0633999,
                            }

        //                     var sheridan = {
        //                         info: '<strong>Chipotle on Sheridan</strong><br>\r\
    	// 6600 N Sheridan Rd<br> Chicago, IL 60626<br>\
    	// <a href="https://goo.gl/maps/QGUrqZPsYp92" target="_blank">Get Directions<img src="assets/images/directions.png" width="15"></a>',
        //                         lat: 29.14583,
        //                         long: 48.09472,
        //                     }

                            var locations = [
                                [broadway.info, broadway.lat, broadway.long, 0],
                                [belmont.info, belmont.lat, belmont.long, 1],
                                // [sheridan.info, sheridan.lat, sheridan.long, 2],
                            ]

                            var map = new google.maps.Map(document.getElementById('map_home'), {
                                zoom: 12,
                                center: new google.maps.LatLng(29.3759, 47.9774),
                                mapTypeControlOptions: {
                                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.HYBRID]
                                }, // here´s the array of controls
                                //disableDefaultUI: true, // a way to quickly hide all controls
                                mapTypeControl: false,
                                scaleControl: true,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                            })

                            var infowindow = new google.maps.InfoWindow({})

                            var marker, i

                            for (i = 0; i < locations.length; i++) {
                                marker = new google.maps.Marker({
                                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                    icon: "assets/images/restaurant_mapmarker13.png",
                                    map: map,
                                })

                                google.maps.event.addListener(
                                    marker,
                                    'click', (function(marker, i) {
                                        return function() {
                                            infowindow.setContent(locations[i][0])
                                            infowindow.open(map, marker)
                                        }
                                    })(marker, i)
                                )
                            }
                        }
                    </script>
               


                     
<script type="text/javascript">
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

$(window).scroll(function () {
   "use strict";
    var topOfWindow = $(window).scrollTop();

    function _checkOffset(className) {
        return function () {
            var $this = $(this),
                imagePos = $this.offset().top;

            $this.toggleClass(className, (imagePos < topOfWindow + 900));
        };
    }
    
    $('.img1').each(_checkOffset('animated bounceInRight'));
	$('.book-menu_img').each(_checkOffset('animated bounceInLeft'));
    $('.banner_sec').each(_checkOffset('animated tada'));
    $('#map_home').each(_checkOffset('animated fadeIn'));
    $('.gal_img').each(_checkOffset('animated fadeIn'));
	$('.contact-form').each(_checkOffset('animated fadeInLeft'));
	$('.contact-map').each(_checkOffset('animated fadeInRight'));
});

</script>