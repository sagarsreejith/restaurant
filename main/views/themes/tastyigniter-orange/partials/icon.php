
<style>

    /*FONTS*/
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700);
@import url(http://weloveiconfonts.com/api/?family=entypo|zocial);
.animated {
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
}

.animated.hinge {
  -webkit-animation-duration: 2s;
  -moz-animation-duration: 2s;
  -ms-animation-duration: 2s;
  -o-animation-duration: 2s;
  animation-duration: 2s;
}

@-webkit-keyframes flash {
  0%, 50%, 100% {
    opacity: 1;
  }
  25%, 75% {
    opacity: 0;
  }
}
@-webkit-keyframes flash {
  0%, 50%, 100% {
    opacity: 1;
  }
  25%, 75% {
    opacity: 0;
  }
}
@-moz-keyframes flash {
  0%, 50%, 100% {
    opacity: 1;
  }
  25%, 75% {
    opacity: 0;
  }
}
@-ms-keyframes flash {
  0%, 50%, 100% {
    opacity: 1;
  }
  25%, 75% {
    opacity: 0;
  }
}
@keyframes flash {
  0%, 50%, 100% {
    opacity: 1;
  }
  25%, 75% {
    opacity: 0;
  }
}
.flash {
  -webkit-animation-name: flash;
  -moz-animation-name: flash;
  -o-animation-name: flash;
  animation-name: flash;
}

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale(1);
  }
  10%, 20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
  }
  30%, 50%, 70%, 90% {
    -webkit-transform: scale(1.1) rotate(3deg);
  }
  40%, 60%, 80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
  }
}
@-moz-keyframes tada {
  0% {
    -webkit-transform: scale(1);
  }
  10%, 20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
  }
  30%, 50%, 70%, 90% {
    -webkit-transform: scale(1.1) rotate(3deg);
  }
  40%, 60%, 80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
  }
}
@-ms-keyframes tada {
  0% {
    -webkit-transform: scale(1);
  }
  10%, 20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
  }
  30%, 50%, 70%, 90% {
    -webkit-transform: scale(1.1) rotate(3deg);
  }
  40%, 60%, 80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
  }
}
@keyframes tada {
  0% {
    -webkit-transform: scale(1);
  }
  10%, 20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
  }
  30%, 50%, 70%, 90% {
    -webkit-transform: scale(1.1) rotate(3deg);
  }
  40%, 60%, 80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
  }
}
.tada {
  animation-name: tada;
}

body {
  background: #ecf0f1;
}

.demo {
  padding: 1em;
}

.demo-desc {
  background: #ecf0f1;
  margin-bottom: 1em;
  padding-left: 2em;
  padding-right: 2em;
  padding-top: 2em;
  line-height: 1.55em;
  font-family: sans-serif;
}
.demo-desc strong {
  font-weight: bold;
}
.demo-desc h1 {
  font-weight: bold;
  font-family: sans-serif;
  font-size: 2em;
  line-height: 1.45em;
  margin-bottom: .5em;
}
.demo-desc ul li {
  list-style: circle inside;
}
.demo-desc pre {
  margin-bottom: 2em;
  display: inline-block;
}
.demo-desc p code, .demo-desc li code {
  font-family: lucida sans, monospace;
  background: lightgray;
  font-size: .9em;
}
.demo-desc h2 {
  font-family: sans-serif;
  font-size: 1.4em;
  margin-top: 1em;
  margin-bottom: .5em;
}
.demo-desc a {
  text-decoration: none;
  color: #347EED;
}

em {
  font-style: italic;
}

pre {
  background: #cfd9db;
  padding: 1em;
  margin-top: .5em;
  margin-bottom: .5em;
  border-radius: 2px;
  font-size: 14px;
  width: 100%;
  font-family: lucida console, monospaced;
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.demo-demo {
  background: #347EED;
}
.demo-demo h1 {
  font-family: sans-serif;
  color: #fff;
  text-align: center;
  opacity: .3;
  font-size: 3em;
  margin-top: 3em;
  margin-bottom: 3em;
}

.text-shadow {
  font-family: sans-serif;
  font-size: 3em;
  margin-bottom: 2em;
  font-weight: bold;
  color: #ecf0f1;
  text-shadow: 0px 0px 0 #233140,-1px 1px 0 #233140,-2px 2px 0 #233140,-3px 3px 0 #233140,-4px 4px 0 #233140,-5px 5px 0 #233140,-6px 6px 0 #233140,-7px 7px 0 #233140,-8px 8px 0 #233140,-9px 9px 0 #233140,-10px 10px 0 #233140,-11px 11px 0 #233140,-12px 12px 0 #233140,-13px 13px 0 #233140,-14px 14px 0 #233140,-15px 15px 0 #233140,-16px 16px 0 #233140,-17px 17px 0 #233140,-18px 18px 0 #233140,-19px 19px 0 #233140,-20px 20px 0 #233140,-21px 21px 0 #233140,-22px 22px 0 #233140,-23px 23px 0 #233140,-24px 24px 0 #233140,-25px 25px 0 #233140,-26px 26px 0 #233140,-27px 27px 0 #233140,-28px 28px 0 #233140,-29px 29px 0 #233140,-30px 30px 0 #233140,-31px 31px 0 #233140,-32px 32px 0 #233140,-33px 33px 0 #233140,-34px 34px 0 #233140,-35px 35px 0 #233140,-36px 36px 0 #233140,-37px 37px 0 #233140,-38px 38px 0 #233140,-39px 39px 0 #233140,-40px 40px 0 #233140,-41px 41px 0 #233140,-42px 42px 0 #233140,-43px 43px 0 #233140,-44px 44px 0 #233140,-45px 45px 0 #233140,-46px 46px 0 #233140,-47px 47px 0 #233140,-48px 48px 0 #233140,-49px 49px 0 #233140,-50px 50px 0 #233140,-51px 51px 0 #233140,-52px 52px 0 #233140,-53px 53px 0 #233140,-54px 54px 0 #233140,-55px 55px 0 #233140,-56px 56px 0 #233140,-57px 57px 0 #233140,-58px 58px 0 #233140,-59px 59px 0 #233140,-60px 60px 0 #233140,-61px 61px 0 #233140,-62px 62px 0 #233140,-63px 63px 0 #233140,-64px 64px 0 #233140,-65px 65px 0 #233140,-66px 66px 0 #233140,-67px 67px 0 #233140,-68px 68px 0 #233140,-69px 69px 0 #233140,-70px 70px 0 #233140,-71px 71px 0 #233140,-72px 72px 0 #233140,-73px 73px 0 #233140,-74px 74px 0 #233140,-75px 75px 0 #233140,-76px 76px 0 #233140,-77px 77px 0 #233140,-78px 78px 0 #233140,-79px 79px 0 #233140,-80px 80px 0 #233140,-81px 81px 0 #233140,-82px 82px 0 #233140,-83px 83px 0 #233140,-84px 84px 0 #233140,-85px 85px 0 #233140,-86px 86px 0 #233140,-87px 87px 0 #233140,-88px 88px 0 #233140,-89px 89px 0 #233140,-90px 90px 0 #233140,-91px 91px 0 #233140,-92px 92px 0 #233140,-93px 93px 0 #233140,-94px 94px 0 #233140,-95px 95px 0 #233140,-96px 96px 0 #233140,-97px 97px 0 #233140,-98px 98px 0 #233140,-99px 99px 0 #233140,-100px 100px 0 #233140,-101px 101px 0 #233140,-102px 102px 0 #233140,-103px 103px 0 #233140,-104px 104px 0 #233140,-105px 105px 0 #233140,-106px 106px 0 #233140,-107px 107px 0 #233140,-108px 108px 0 #233140,-109px 109px 0 #233140,-110px 110px 0 #233140,-111px 111px 0 #233140,-112px 112px 0 #233140,-113px 113px 0 #233140,-114px 114px 0 #233140,-115px 115px 0 #233140,-116px 116px 0 #233140,-117px 117px 0 #233140,-118px 118px 0 #233140,-119px 119px 0 #233140,-120px 120px 0 #233140,-121px 121px 0 #233140,-122px 122px 0 #233140,-123px 123px 0 #233140,-124px 124px 0 #233140,-125px 125px 0 #233140,-126px 126px 0 #233140,-127px 127px 0 #233140,-128px 128px 0 #233140,-129px 129px 0 #233140,-130px 130px 0 #233140,-131px 131px 0 #233140,-132px 132px 0 #233140,-133px 133px 0 #233140,-134px 134px 0 #233140,-135px 135px 0 #233140,-136px 136px 0 #233140,-137px 137px 0 #233140,-138px 138px 0 #233140,-139px 139px 0 #233140,-140px 140px 0 #233140,-141px 141px 0 #233140,-142px 142px 0 #233140,-143px 143px 0 #233140,-144px 144px 0 #233140,-145px 145px 0 #233140,-146px 146px 0 #233140,-147px 147px 0 #233140,-148px 148px 0 #233140,-149px 149px 0 #233140,-150px 150px 0 #233140,-151px 151px 0 #233140,-152px 152px 0 #233140,-153px 153px 0 #233140,-154px 154px 0 #233140,-155px 155px 0 #233140,-156px 156px 0 #233140,-157px 157px 0 #233140,-158px 158px 0 #233140,-159px 159px 0 #233140,-160px 160px 0 #233140,-161px 161px 0 #233140,-162px 162px 0 #233140,-163px 163px 0 #233140,-164px 164px 0 #233140,-165px 165px 0 #233140,-166px 166px 0 #233140,-167px 167px 0 #233140,-168px 168px 0 #233140,-169px 169px 0 #233140,-170px 170px 0 #233140,-171px 171px 0 #233140,-172px 172px 0 #233140,-173px 173px 0 #233140,-174px 174px 0 #233140,-175px 175px 0 #233140,-176px 176px 0 #233140,-177px 177px 0 #233140,-178px 178px 0 #233140,-179px 179px 0 #233140,-180px 180px 0 #233140,-181px 181px 0 #233140,-182px 182px 0 #233140,-183px 183px 0 #233140,-184px 184px 0 #233140,-185px 185px 0 #233140,-186px 186px 0 #233140,-187px 187px 0 #233140,-188px 188px 0 #233140,-189px 189px 0 #233140,-190px 190px 0 #233140,-191px 191px 0 #233140,-192px 192px 0 #233140,-193px 193px 0 #233140,-194px 194px 0 #233140,-195px 195px 0 #233140,-196px 196px 0 #233140,-197px 197px 0 #233140,-198px 198px 0 #233140,200px 200px 0 transparent;
}
.text-shadow em {
  color: #FFEF35;
  display: inline-block;
  text-shadow: 0px 0px 0 #ff5350,1px 1px 0 #ff5350,2px 2px 0 #ff5350,3px 3px 0 #ff5350,4px 4px 0 #ff5350,5px 5px 0 #ff5350,6px 6px 0 #ff5350,7px 7px 0 #ff5350,8px 8px 0 #ff5350,9px 9px 0 #ff5350,10px 10px 0 #ff5350,11px 11px 0 #ff5350,12px 12px 0 #ff5350,13px 13px 0 #ff5350,14px 14px 0 #ff5350,15px 15px 0 #ff5350,16px 16px 0 #ff5350,17px 17px 0 #ff5350,18px 18px 0 #ff5350,19px 19px 0 #ff5350,20px 20px 0 #ff5350,21px 21px 0 #ff5350,22px 22px 0 #ff5350,23px 23px 0 #ff5350,24px 24px 0 #ff5350,25px 25px 0 #ff5350,26px 26px 0 #ff5350,27px 27px 0 #ff5350,28px 28px 0 #ff5350,29px 29px 0 #ff5350,30px 30px 0 #ff5350,31px 31px 0 #ff5350,32px 32px 0 #ff5350,33px 33px 0 #ff5350,34px 34px 0 #ff5350,35px 35px 0 #ff5350,36px 36px 0 #ff5350,37px 37px 0 #ff5350,38px 38px 0 #ff5350,39px 39px 0 #ff5350,40px 40px 0 #ff5350,41px 41px 0 #ff5350,42px 42px 0 #ff5350,43px 43px 0 #ff5350,44px 44px 0 #ff5350,45px 45px 0 #ff5350,46px 46px 0 #ff5350,47px 47px 0 #ff5350,48px 48px 0 #ff5350,49px 49px 0 #ff5350,50px 50px 0 #ff5350,51px 51px 0 #ff5350,52px 52px 0 #ff5350,53px 53px 0 #ff5350,54px 54px 0 #ff5350,55px 55px 0 #ff5350,56px 56px 0 #ff5350,57px 57px 0 #ff5350,58px 58px 0 #ff5350,59px 59px 0 #ff5350,60px 60px 0 #ff5350,61px 61px 0 #ff5350,62px 62px 0 #ff5350,63px 63px 0 #ff5350,64px 64px 0 #ff5350,65px 65px 0 #ff5350,66px 66px 0 #ff5350,67px 67px 0 #ff5350,68px 68px 0 #ff5350,69px 69px 0 #ff5350,70px 70px 0 #ff5350,71px 71px 0 #ff5350,72px 72px 0 #ff5350,73px 73px 0 #ff5350,74px 74px 0 #ff5350,75px 75px 0 #ff5350,76px 76px 0 #ff5350,77px 77px 0 #ff5350,78px 78px 0 #ff5350,79px 79px 0 #ff5350,80px 80px 0 #ff5350,81px 81px 0 #ff5350,82px 82px 0 #ff5350,83px 83px 0 #ff5350,84px 84px 0 #ff5350,85px 85px 0 #ff5350,86px 86px 0 #ff5350,87px 87px 0 #ff5350,88px 88px 0 #ff5350,89px 89px 0 #ff5350,90px 90px 0 #ff5350,91px 91px 0 #ff5350,92px 92px 0 #ff5350,93px 93px 0 #ff5350,94px 94px 0 #ff5350,95px 95px 0 #ff5350,96px 96px 0 #ff5350,97px 97px 0 #ff5350,98px 98px 0 #ff5350,99px 99px 0 #ff5350,100px 100px 0 #ff5350,101px 101px 0 #ff5350,102px 102px 0 #ff5350,103px 103px 0 #ff5350,104px 104px 0 #ff5350,105px 105px 0 #ff5350,106px 106px 0 #ff5350,107px 107px 0 #ff5350,108px 108px 0 #ff5350,109px 109px 0 #ff5350,110px 110px 0 #ff5350,111px 111px 0 #ff5350,112px 112px 0 #ff5350,113px 113px 0 #ff5350,114px 114px 0 #ff5350,115px 115px 0 #ff5350,116px 116px 0 #ff5350,117px 117px 0 #ff5350,118px 118px 0 #ff5350,119px 119px 0 #ff5350,120px 120px 0 #ff5350,121px 121px 0 #ff5350,122px 122px 0 #ff5350,123px 123px 0 #ff5350,124px 124px 0 #ff5350,125px 125px 0 #ff5350,126px 126px 0 #ff5350,127px 127px 0 #ff5350,128px 128px 0 #ff5350,129px 129px 0 #ff5350,130px 130px 0 #ff5350,131px 131px 0 #ff5350,132px 132px 0 #ff5350,133px 133px 0 #ff5350,134px 134px 0 #ff5350,135px 135px 0 #ff5350,136px 136px 0 #ff5350,137px 137px 0 #ff5350,138px 138px 0 #ff5350,139px 139px 0 #ff5350,140px 140px 0 #ff5350,141px 141px 0 #ff5350,142px 142px 0 #ff5350,143px 143px 0 #ff5350,144px 144px 0 #ff5350,145px 145px 0 #ff5350,146px 146px 0 #ff5350,147px 147px 0 #ff5350,148px 148px 0 #ff5350,149px 149px 0 #ff5350,150px 150px 0 #ff5350,151px 151px 0 #ff5350,152px 152px 0 #ff5350,153px 153px 0 #ff5350,154px 154px 0 #ff5350,155px 155px 0 #ff5350,156px 156px 0 #ff5350,157px 157px 0 #ff5350,158px 158px 0 #ff5350,159px 159px 0 #ff5350,160px 160px 0 #ff5350,161px 161px 0 #ff5350,162px 162px 0 #ff5350,163px 163px 0 #ff5350,164px 164px 0 #ff5350,165px 165px 0 #ff5350,166px 166px 0 #ff5350,167px 167px 0 #ff5350,168px 168px 0 #ff5350,169px 169px 0 #ff5350,170px 170px 0 #ff5350,171px 171px 0 #ff5350,172px 172px 0 #ff5350,173px 173px 0 #ff5350,174px 174px 0 #ff5350,175px 175px 0 #ff5350,176px 176px 0 #ff5350,177px 177px 0 #ff5350,178px 178px 0 #ff5350,179px 179px 0 #ff5350,180px 180px 0 #ff5350,181px 181px 0 #ff5350,182px 182px 0 #ff5350,183px 183px 0 #ff5350,184px 184px 0 #ff5350,185px 185px 0 #ff5350,186px 186px 0 #ff5350,187px 187px 0 #ff5350,188px 188px 0 #ff5350,189px 189px 0 #ff5350,190px 190px 0 #ff5350,191px 191px 0 #ff5350,192px 192px 0 #ff5350,193px 193px 0 #ff5350,194px 194px 0 #ff5350,195px 195px 0 #ff5350,196px 196px 0 #ff5350,197px 197px 0 #ff5350,198px 198px 0 #ff5350,200px 200px 0 transparent;
}

.shadow, .shadow-2, .shadow-3 {
  margin-bottom: 100px;
  padding: 2%;
  color: #ecf0f1;
  font-family: sans-serif;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmODU4MyIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2ZmNTM1MCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ff8583), color-stop(100%, #ff5350));
  background-image: -moz-linear-gradient(#ff8583, #ff5350);
  background-image: -webkit-linear-gradient(#ff8583, #ff5350);
  background-image: linear-gradient(#ff8583, #ff5350);
  font-weight: bold;
  font-size: 3em;
  text-shadow: 0px 0px 0 #c4504e,1px 1px 0 #c4504e,2px 2px 0 #c4504e,3px 3px 0 #c4504e,4px 4px 0 #c4504e,5px 5px 0 #c4504e,6px 6px 0 #c4504e,7px 7px 0 #c4504e,8px 8px 0 #c4504e,9px 9px 0 #c4504e,10px 10px 0 #c4504e,11px 11px 0 #c4504e,12px 12px 0 #c4504e,13px 13px 0 #c4504e,14px 14px 0 #c4504e,15px 15px 0 #c4504e,16px 16px 0 #c4504e,17px 17px 0 #c4504e,18px 18px 0 #c4504e,19px 19px 0 #c4504e,20px 20px 0 #c4504e,21px 21px 0 #c4504e,22px 22px 0 #c4504e,23px 23px 0 #c4504e,24px 24px 0 #c4504e,25px 25px 0 #c4504e,26px 26px 0 #c4504e,27px 27px 0 #c4504e,28px 28px 0 #c4504e,29px 29px 0 #c4504e,30px 30px 0 #c4504e,31px 31px 0 #c4504e,32px 32px 0 #c4504e,33px 33px 0 #c4504e,34px 34px 0 #c4504e,35px 35px 0 #c4504e,36px 36px 0 #c4504e,37px 37px 0 #c4504e,38px 38px 0 #c4504e,39px 39px 0 #c4504e,40px 40px 0 #c4504e,41px 41px 0 #c4504e,42px 42px 0 #c4504e,43px 43px 0 #c4504e,44px 44px 0 #c4504e,45px 45px 0 #c4504e,46px 46px 0 #c4504e,47px 47px 0 #c4504e,48px 48px 0 #c4504e,1px 1px 0 rgba(196, 80, 78, 0.98),2px 2px 0 rgba(196, 80, 78, 0.96),3px 3px 0 rgba(196, 80, 78, 0.94),4px 4px 0 rgba(196, 80, 78, 0.92),5px 5px 0 rgba(196, 80, 78, 0.9),6px 6px 0 rgba(196, 80, 78, 0.88),7px 7px 0 rgba(196, 80, 78, 0.86),8px 8px 0 rgba(196, 80, 78, 0.84),9px 9px 0 rgba(196, 80, 78, 0.82),10px 10px 0 rgba(196, 80, 78, 0.8),11px 11px 0 rgba(196, 80, 78, 0.78),12px 12px 0 rgba(196, 80, 78, 0.76),13px 13px 0 rgba(196, 80, 78, 0.74),14px 14px 0 rgba(196, 80, 78, 0.72),15px 15px 0 rgba(196, 80, 78, 0.7),16px 16px 0 rgba(196, 80, 78, 0.68),17px 17px 0 rgba(196, 80, 78, 0.66),18px 18px 0 rgba(196, 80, 78, 0.64),19px 19px 0 rgba(196, 80, 78, 0.62),20px 20px 0 rgba(196, 80, 78, 0.6),21px 21px 0 rgba(196, 80, 78, 0.58),22px 22px 0 rgba(196, 80, 78, 0.56),23px 23px 0 rgba(196, 80, 78, 0.54),24px 24px 0 rgba(196, 80, 78, 0.52),25px 25px 0 rgba(196, 80, 78, 0.5),26px 26px 0 rgba(196, 80, 78, 0.48),27px 27px 0 rgba(196, 80, 78, 0.46),28px 28px 0 rgba(196, 80, 78, 0.44),29px 29px 0 rgba(196, 80, 78, 0.42),30px 30px 0 rgba(196, 80, 78, 0.4),31px 31px 0 rgba(196, 80, 78, 0.38),32px 32px 0 rgba(196, 80, 78, 0.36),33px 33px 0 rgba(196, 80, 78, 0.34),34px 34px 0 rgba(196, 80, 78, 0.32),35px 35px 0 rgba(196, 80, 78, 0.3),36px 36px 0 rgba(196, 80, 78, 0.28),37px 37px 0 rgba(196, 80, 78, 0.26),38px 38px 0 rgba(196, 80, 78, 0.24),39px 39px 0 rgba(196, 80, 78, 0.22),40px 40px 0 rgba(196, 80, 78, 0.2),41px 41px 0 rgba(196, 80, 78, 0.18),42px 42px 0 rgba(196, 80, 78, 0.16),43px 43px 0 rgba(196, 80, 78, 0.14),44px 44px 0 rgba(196, 80, 78, 0.12),45px 45px 0 rgba(196, 80, 78, 0.1),46px 46px 0 rgba(196, 80, 78, 0.08),47px 47px 0 rgba(196, 80, 78, 0.06),48px 48px 0 rgba(196, 80, 78, 0.04),50px 50px 0 rgba(196, 80, 78, 0);
  display: inline-block;
  float: left;
  margin-right: 2%;
  box-shadow: 0px 0px 0 0px #233140,1px 1px 0 0.1px #233140,2px 2px 0 0.2px #233140,3px 3px 0 0.3px #233140,4px 4px 0 0.4px #233140,5px 5px 0 0.5px #233140,6px 6px 0 0.6px #233140,7px 7px 0 0.7px #233140,8px 8px 0 0.8px #233140,9px 9px 0 0.9px #233140,10px 10px 0 1px #233140,11px 11px 0 1.1px #233140,12px 12px 0 1.2px #233140,13px 13px 0 1.3px #233140,14px 14px 0 1.4px #233140,15px 15px 0 1.5px #233140,16px 16px 0 1.6px #233140,17px 17px 0 1.7px #233140,18px 18px 0 1.8px #233140,19px 19px 0 1.9px #233140,20px 20px 0 2px #233140,21px 21px 0 2.1px #233140,22px 22px 0 2.2px #233140,23px 23px 0 2.3px #233140,24px 24px 0 2.4px #233140,25px 25px 0 2.5px #233140,26px 26px 0 2.6px #233140,27px 27px 0 2.7px #233140,28px 28px 0 2.8px #233140,29px 29px 0 2.9px #233140,30px 30px 0 3px #233140,31px 31px 0 3.1px #233140,32px 32px 0 3.2px #233140,33px 33px 0 3.3px #233140,34px 34px 0 3.4px #233140,35px 35px 0 3.5px #233140,36px 36px 0 3.6px #233140,37px 37px 0 3.7px #233140,38px 38px 0 3.8px #233140,39px 39px 0 3.9px #233140,40px 40px 0 4px #233140,41px 41px 0 4.1px #233140,42px 42px 0 4.2px #233140,43px 43px 0 4.3px #233140,44px 44px 0 4.4px #233140,45px 45px 0 4.5px #233140,46px 46px 0 4.6px #233140,47px 47px 0 4.7px #233140,48px 48px 0 4.8px #233140,49px 49px 0 4.9px #233140,50px 50px 0 5px #233140,51px 51px 0 5.1px #233140,52px 52px 0 5.2px #233140,53px 53px 0 5.3px #233140,54px 54px 0 5.4px #233140,55px 55px 0 5.5px #233140,56px 56px 0 5.6px #233140,57px 57px 0 5.7px #233140,58px 58px 0 5.8px #233140,59px 59px 0 5.9px #233140,60px 60px 0 6px #233140,61px 61px 0 6.1px #233140,62px 62px 0 6.2px #233140,63px 63px 0 6.3px #233140,64px 64px 0 6.4px #233140,65px 65px 0 6.5px #233140,66px 66px 0 6.6px #233140,67px 67px 0 6.7px #233140,68px 68px 0 6.8px #233140,69px 69px 0 6.9px #233140,70px 70px 0 7px #233140,71px 71px 0 7.1px #233140,72px 72px 0 7.2px #233140,73px 73px 0 7.3px #233140,74px 74px 0 7.4px #233140,75px 75px 0 7.5px #233140,76px 76px 0 7.6px #233140,77px 77px 0 7.7px #233140,78px 78px 0 7.8px #233140,79px 79px 0 7.9px #233140,80px 80px 0 8px #233140,81px 81px 0 8.1px #233140,82px 82px 0 8.2px #233140,83px 83px 0 8.3px #233140,84px 84px 0 8.4px #233140,85px 85px 0 8.5px #233140,86px 86px 0 8.6px #233140,87px 87px 0 8.7px #233140,88px 88px 0 8.8px #233140,89px 89px 0 8.9px #233140,90px 90px 0 9px #233140,91px 91px 0 9.1px #233140,92px 92px 0 9.2px #233140,93px 93px 0 9.3px #233140,94px 94px 0 9.4px #233140,95px 95px 0 9.5px #233140,96px 96px 0 9.6px #233140,97px 97px 0 9.7px #233140,98px 98px 0 9.8px #233140,99px 99px 0 9.9px #233140,100px 100px 0 10px #233140,101px 101px 0 10.1px #233140,102px 102px 0 10.2px #233140,103px 103px 0 10.3px #233140,104px 104px 0 10.4px #233140,105px 105px 0 10.5px #233140,106px 106px 0 10.6px #233140,107px 107px 0 10.7px #233140,108px 108px 0 10.8px #233140,109px 109px 0 10.9px #233140,110px 110px 0 11px #233140,111px 111px 0 11.1px #233140,112px 112px 0 11.2px #233140,113px 113px 0 11.3px #233140,114px 114px 0 11.4px #233140,115px 115px 0 11.5px #233140,116px 116px 0 11.6px #233140,117px 117px 0 11.7px #233140,118px 118px 0 11.8px #233140,120px 120px 0 transparent;
}

.shadow-2 {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzkyYmFmNSIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzYzOWNmMSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #92baf5), color-stop(100%, #639cf1));
  background-image: -moz-linear-gradient(#92baf5, #639cf1);
  background-image: -webkit-linear-gradient(#92baf5, #639cf1);
  background-image: linear-gradient(#92baf5, #639cf1);
  text-shadow: 0px 0px 0 #347EED,-1px 1px 0 #347EED,-2px 2px 0 #347EED,-3px 3px 0 #347EED,-4px 4px 0 #347EED,-5px 5px 0 #347EED,-6px 6px 0 #347EED,-7px 7px 0 #347EED,-8px 8px 0 #347EED,-9px 9px 0 #347EED,-10px 10px 0 #347EED,-11px 11px 0 #347EED,-12px 12px 0 #347EED,-13px 13px 0 #347EED,-14px 14px 0 #347EED,-15px 15px 0 #347EED,-16px 16px 0 #347EED,-17px 17px 0 #347EED,-18px 18px 0 #347EED,-19px 19px 0 #347EED,-20px 20px 0 #347EED,-21px 21px 0 #347EED,-22px 22px 0 #347EED,-23px 23px 0 #347EED,-24px 24px 0 #347EED,-25px 25px 0 #347EED,-26px 26px 0 #347EED,-27px 27px 0 #347EED,-28px 28px 0 #347EED,-29px 29px 0 #347EED,-30px 30px 0 #347EED,-31px 31px 0 #347EED,-32px 32px 0 #347EED,-33px 33px 0 #347EED,-34px 34px 0 #347EED,-35px 35px 0 #347EED,-36px 36px 0 #347EED,-37px 37px 0 #347EED,-38px 38px 0 #347EED,-39px 39px 0 #347EED,-40px 40px 0 #347EED,-41px 41px 0 #347EED,-42px 42px 0 #347EED,-43px 43px 0 #347EED,-44px 44px 0 #347EED,-45px 45px 0 #347EED,-46px 46px 0 #347EED,-47px 47px 0 #347EED,-48px 48px 0 #347EED,-49px 49px 0 #347EED,-50px 50px 0 #347EED,-51px 51px 0 #347EED,-52px 52px 0 #347EED,-53px 53px 0 #347EED,-54px 54px 0 #347EED,-55px 55px 0 #347EED,-56px 56px 0 #347EED,-57px 57px 0 #347EED,-58px 58px 0 #347EED,-59px 59px 0 #347EED,-60px 60px 0 #347EED,-61px 61px 0 #347EED,-62px 62px 0 #347EED,-63px 63px 0 #347EED,-64px 64px 0 #347EED,-65px 65px 0 #347EED,-66px 66px 0 #347EED,-67px 67px 0 #347EED,-68px 68px 0 #347EED,-69px 69px 0 #347EED,-70px 70px 0 #347EED,-71px 71px 0 #347EED,-72px 72px 0 #347EED,-73px 73px 0 #347EED,-74px 74px 0 #347EED,-75px 75px 0 #347EED,-76px 76px 0 #347EED,-77px 77px 0 #347EED,-78px 78px 0 #347EED,-79px 79px 0 #347EED,-80px 80px 0 #347EED,-81px 81px 0 #347EED,-82px 82px 0 #347EED,-83px 83px 0 #347EED,-84px 84px 0 #347EED,-85px 85px 0 #347EED,-86px 86px 0 #347EED,-87px 87px 0 #347EED,-88px 88px 0 #347EED,-89px 89px 0 #347EED,-90px 90px 0 #347EED,-91px 91px 0 #347EED,-92px 92px 0 #347EED,-93px 93px 0 #347EED,-94px 94px 0 #347EED,-95px 95px 0 #347EED,-96px 96px 0 #347EED,-97px 97px 0 #347EED,-98px 98px 0 #347EED,100px 100px 0 transparent;
}

.shadow-3 {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Y1YjA0MyIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2YzOWMxMiIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #f5b043), color-stop(100%, #f39c12));
  background-image: -moz-linear-gradient(#f5b043, #f39c12);
  background-image: -webkit-linear-gradient(#f5b043, #f39c12);
  background-image: linear-gradient(#f5b043, #f39c12);
  text-shadow: 0px 0px 0 #e74c3c,-1px 1px 0 #e74c3c,-2px 2px 0 #e74c3c,-3px 3px 0 #e74c3c,-4px 4px 0 #e74c3c,-5px 5px 0 #e74c3c,-6px 6px 0 #e74c3c,-7px 7px 0 #e74c3c,-8px 8px 0 #e74c3c,-9px 9px 0 #e74c3c,-10px 10px 0 #e74c3c,-11px 11px 0 #e74c3c,-12px 12px 0 #e74c3c,-13px 13px 0 #e74c3c,-14px 14px 0 #e74c3c,-15px 15px 0 #e74c3c,-16px 16px 0 #e74c3c,-17px 17px 0 #e74c3c,-18px 18px 0 #e74c3c,-19px 19px 0 #e74c3c,-20px 20px 0 #e74c3c,-21px 21px 0 #e74c3c,-22px 22px 0 #e74c3c,-23px 23px 0 #e74c3c,-24px 24px 0 #e74c3c,-25px 25px 0 #e74c3c,-26px 26px 0 #e74c3c,-27px 27px 0 #e74c3c,-28px 28px 0 #e74c3c,-29px 29px 0 #e74c3c,-30px 30px 0 #e74c3c,-31px 31px 0 #e74c3c,-32px 32px 0 #e74c3c,-33px 33px 0 #e74c3c,-34px 34px 0 #e74c3c,-35px 35px 0 #e74c3c,-36px 36px 0 #e74c3c,-37px 37px 0 #e74c3c,-38px 38px 0 #e74c3c,-39px 39px 0 #e74c3c,-40px 40px 0 #e74c3c,-41px 41px 0 #e74c3c,-42px 42px 0 #e74c3c,-43px 43px 0 #e74c3c,-44px 44px 0 #e74c3c,-45px 45px 0 #e74c3c,-46px 46px 0 #e74c3c,-47px 47px 0 #e74c3c,-48px 48px 0 #e74c3c,-49px 49px 0 #e74c3c,-50px 50px 0 #e74c3c,-51px 51px 0 #e74c3c,-52px 52px 0 #e74c3c,-53px 53px 0 #e74c3c,-54px 54px 0 #e74c3c,-55px 55px 0 #e74c3c,-56px 56px 0 #e74c3c,-57px 57px 0 #e74c3c,-58px 58px 0 #e74c3c,-59px 59px 0 #e74c3c,-60px 60px 0 #e74c3c,-61px 61px 0 #e74c3c,-62px 62px 0 #e74c3c,-63px 63px 0 #e74c3c,-64px 64px 0 #e74c3c,-65px 65px 0 #e74c3c,-66px 66px 0 #e74c3c,-67px 67px 0 #e74c3c,-68px 68px 0 #e74c3c,-69px 69px 0 #e74c3c,-70px 70px 0 #e74c3c,-71px 71px 0 #e74c3c,-72px 72px 0 #e74c3c,-73px 73px 0 #e74c3c,-74px 74px 0 #e74c3c,-75px 75px 0 #e74c3c,-76px 76px 0 #e74c3c,-77px 77px 0 #e74c3c,-78px 78px 0 #e74c3c,-79px 79px 0 #e74c3c,-80px 80px 0 #e74c3c,-81px 81px 0 #e74c3c,-82px 82px 0 #e74c3c,-83px 83px 0 #e74c3c,-84px 84px 0 #e74c3c,-85px 85px 0 #e74c3c,-86px 86px 0 #e74c3c,-87px 87px 0 #e74c3c,-88px 88px 0 #e74c3c,-89px 89px 0 #e74c3c,-90px 90px 0 #e74c3c,-91px 91px 0 #e74c3c,-92px 92px 0 #e74c3c,-93px 93px 0 #e74c3c,-94px 94px 0 #e74c3c,-95px 95px 0 #e74c3c,-96px 96px 0 #e74c3c,-97px 97px 0 #e74c3c,-98px 98px 0 #e74c3c,100px 100px 0 transparent;
}

.app-icon {
  width: 100px;
  height: 100px;
  margin-bottom: 1em;
  font-family: entypo;
  border-radius: 5px;
  color: white;
  padding-left: 15px;
  font-size: 60px;
  padding-top: 15px;
  margin-right: 10px;
  display: inline-block;
  box-shadow: 1px 1px 0 0.2px rgba(42, 59, 77, 0.98),2px 2px 0 0.4px rgba(42, 59, 77, 0.96),3px 3px 0 0.6px rgba(42, 59, 77, 0.94),4px 4px 0 0.8px rgba(42, 59, 77, 0.92),5px 5px 0 1px rgba(42, 59, 77, 0.9),6px 6px 0 1.2px rgba(42, 59, 77, 0.88),7px 7px 0 1.4px rgba(42, 59, 77, 0.86),8px 8px 0 1.6px rgba(42, 59, 77, 0.84),9px 9px 0 1.8px rgba(42, 59, 77, 0.82),10px 10px 0 2px rgba(42, 59, 77, 0.8),11px 11px 0 2.2px rgba(42, 59, 77, 0.78),12px 12px 0 2.4px rgba(42, 59, 77, 0.76),13px 13px 0 2.6px rgba(42, 59, 77, 0.74),14px 14px 0 2.8px rgba(42, 59, 77, 0.72),15px 15px 0 3px rgba(42, 59, 77, 0.7),16px 16px 0 3.2px rgba(42, 59, 77, 0.68),17px 17px 0 3.4px rgba(42, 59, 77, 0.66),18px 18px 0 3.6px rgba(42, 59, 77, 0.64),19px 19px 0 3.8px rgba(42, 59, 77, 0.62),20px 20px 0 4px rgba(42, 59, 77, 0.6),21px 21px 0 4.2px rgba(42, 59, 77, 0.58),22px 22px 0 4.4px rgba(42, 59, 77, 0.56),23px 23px 0 4.6px rgba(42, 59, 77, 0.54),24px 24px 0 4.8px rgba(42, 59, 77, 0.52),25px 25px 0 5px rgba(42, 59, 77, 0.5),26px 26px 0 5.2px rgba(42, 59, 77, 0.48),27px 27px 0 5.4px rgba(42, 59, 77, 0.46),28px 28px 0 5.6px rgba(42, 59, 77, 0.44),29px 29px 0 5.8px rgba(42, 59, 77, 0.42),30px 30px 0 6px rgba(42, 59, 77, 0.4),31px 31px 0 6.2px rgba(42, 59, 77, 0.38),32px 32px 0 6.4px rgba(42, 59, 77, 0.36),33px 33px 0 6.6px rgba(42, 59, 77, 0.34),34px 34px 0 6.8px rgba(42, 59, 77, 0.32),35px 35px 0 7px rgba(42, 59, 77, 0.3),36px 36px 0 7.2px rgba(42, 59, 77, 0.28),37px 37px 0 7.4px rgba(42, 59, 77, 0.26),38px 38px 0 7.6px rgba(42, 59, 77, 0.24),39px 39px 0 7.8px rgba(42, 59, 77, 0.22),40px 40px 0 8px rgba(42, 59, 77, 0.2),41px 41px 0 8.2px rgba(42, 59, 77, 0.18),42px 42px 0 8.4px rgba(42, 59, 77, 0.16),43px 43px 0 8.6px rgba(42, 59, 77, 0.14),44px 44px 0 8.8px rgba(42, 59, 77, 0.12),45px 45px 0 9px rgba(42, 59, 77, 0.1),46px 46px 0 9.2px rgba(42, 59, 77, 0.08),47px 47px 0 9.4px rgba(42, 59, 77, 0.06),48px 48px 0 9.6px rgba(42, 59, 77, 0.04),50px 50px 0 rgba(42, 59, 77, 0);
}

.app-icon-1 {
  background: #2ecc71;
  border: 4px solid #29b765;
  text-shadow: 0px 0px 0 #25a25a,1px 1px 0 #25a25a,2px 2px 0 #25a25a,3px 3px 0 #25a25a,4px 4px 0 #25a25a,5px 5px 0 #25a25a,6px 6px 0 #25a25a,7px 7px 0 #25a25a,8px 8px 0 #25a25a,9px 9px 0 #25a25a,10px 10px 0 #25a25a,11px 11px 0 #25a25a,12px 12px 0 #25a25a,13px 13px 0 #25a25a,14px 14px 0 #25a25a,15px 15px 0 #25a25a,16px 16px 0 #25a25a,17px 17px 0 #25a25a,18px 18px 0 #25a25a,19px 19px 0 #25a25a,20px 20px 0 #25a25a,21px 21px 0 #25a25a,22px 22px 0 #25a25a,23px 23px 0 #25a25a,24px 24px 0 #25a25a,25px 25px 0 #25a25a,26px 26px 0 #25a25a,27px 27px 0 #25a25a,28px 28px 0 #25a25a,29px 29px 0 #25a25a,30px 30px 0 #25a25a,31px 31px 0 #25a25a,32px 32px 0 #25a25a,33px 33px 0 #25a25a,35px 35px 0 transparent;
}

.app-icon-2 {
  background: #639cf1;
  border: 4px solid #4b8def;
  text-shadow: 0px 0px 0 #347eed,1px 1px 0 #347eed,2px 2px 0 #347eed,3px 3px 0 #347eed,4px 4px 0 #347eed,5px 5px 0 #347eed,6px 6px 0 #347eed,7px 7px 0 #347eed,8px 8px 0 #347eed,9px 9px 0 #347eed,10px 10px 0 #347eed,11px 11px 0 #347eed,12px 12px 0 #347eed,13px 13px 0 #347eed,14px 14px 0 #347eed,15px 15px 0 #347eed,16px 16px 0 #347eed,17px 17px 0 #347eed,18px 18px 0 #347eed,19px 19px 0 #347eed,20px 20px 0 #347eed,21px 21px 0 #347eed,22px 22px 0 #347eed,23px 23px 0 #347eed,24px 24px 0 #347eed,25px 25px 0 #347eed,26px 26px 0 #347eed,27px 27px 0 #347eed,28px 28px 0 #347eed,29px 29px 0 #347eed,30px 30px 0 #347eed,31px 31px 0 #347eed,32px 32px 0 #347eed,33px 33px 0 #347eed,34px 34px 0 #347eed,35px 35px 0 #347eed,36px 36px 0 #347eed,37px 37px 0 #347eed,38px 38px 0 #347eed,39px 39px 0 #347eed,40px 40px 0 #347eed,41px 41px 0 #347eed,42px 42px 0 #347eed,43px 43px 0 #347eed,44px 44px 0 #347eed,45px 45px 0 #347eed,46px 46px 0 #347eed,47px 47px 0 #347eed,48px 48px 0 #347eed,49px 49px 0 #347eed,50px 50px 0 #347eed,51px 51px 0 #347eed,52px 52px 0 #347eed,53px 53px 0 #347eed,1px 1px 0 rgba(52, 126, 237, 0.98182),2px 2px 0 rgba(52, 126, 237, 0.96364),3px 3px 0 rgba(52, 126, 237, 0.94545),4px 4px 0 rgba(52, 126, 237, 0.92727),5px 5px 0 rgba(52, 126, 237, 0.90909),6px 6px 0 rgba(52, 126, 237, 0.89091),7px 7px 0 rgba(52, 126, 237, 0.87273),8px 8px 0 rgba(52, 126, 237, 0.85455),9px 9px 0 rgba(52, 126, 237, 0.83636),10px 10px 0 rgba(52, 126, 237, 0.81818),11px 11px 0 rgba(52, 126, 237, 0.8),12px 12px 0 rgba(52, 126, 237, 0.78182),13px 13px 0 rgba(52, 126, 237, 0.76364),14px 14px 0 rgba(52, 126, 237, 0.74545),15px 15px 0 rgba(52, 126, 237, 0.72727),16px 16px 0 rgba(52, 126, 237, 0.70909),17px 17px 0 rgba(52, 126, 237, 0.69091),18px 18px 0 rgba(52, 126, 237, 0.67273),19px 19px 0 rgba(52, 126, 237, 0.65455),20px 20px 0 rgba(52, 126, 237, 0.63636),21px 21px 0 rgba(52, 126, 237, 0.61818),22px 22px 0 rgba(52, 126, 237, 0.6),23px 23px 0 rgba(52, 126, 237, 0.58182),24px 24px 0 rgba(52, 126, 237, 0.56364),25px 25px 0 rgba(52, 126, 237, 0.54545),26px 26px 0 rgba(52, 126, 237, 0.52727),27px 27px 0 rgba(52, 126, 237, 0.50909),28px 28px 0 rgba(52, 126, 237, 0.49091),29px 29px 0 rgba(52, 126, 237, 0.47273),30px 30px 0 rgba(52, 126, 237, 0.45455),31px 31px 0 rgba(52, 126, 237, 0.43636),32px 32px 0 rgba(52, 126, 237, 0.41818),33px 33px 0 rgba(52, 126, 237, 0.4),34px 34px 0 rgba(52, 126, 237, 0.38182),35px 35px 0 rgba(52, 126, 237, 0.36364),36px 36px 0 rgba(52, 126, 237, 0.34545),37px 37px 0 rgba(52, 126, 237, 0.32727),38px 38px 0 rgba(52, 126, 237, 0.30909),39px 39px 0 rgba(52, 126, 237, 0.29091),40px 40px 0 rgba(52, 126, 237, 0.27273),41px 41px 0 rgba(52, 126, 237, 0.25455),42px 42px 0 rgba(52, 126, 237, 0.23636),43px 43px 0 rgba(52, 126, 237, 0.21818),44px 44px 0 rgba(52, 126, 237, 0.2),45px 45px 0 rgba(52, 126, 237, 0.18182),46px 46px 0 rgba(52, 126, 237, 0.16364),47px 47px 0 rgba(52, 126, 237, 0.14545),48px 48px 0 rgba(52, 126, 237, 0.12727),49px 49px 0 rgba(52, 126, 237, 0.10909),50px 50px 0 rgba(52, 126, 237, 0.09091),51px 51px 0 rgba(52, 126, 237, 0.07273),52px 52px 0 rgba(52, 126, 237, 0.05455),53px 53px 0 rgba(52, 126, 237, 0.03636),55px 55px 0 rgba(52, 126, 237, 0);
}

.app-icon-3 {
  background: #1abc9c;
  border: 4px solid #1abc9c;
  text-shadow: 0px 0px 0 #17a689,1px 1px 0 #17a689,2px 2px 0 #17a689,3px 3px 0 #17a689,4px 4px 0 #17a689,5px 5px 0 #17a689,6px 6px 0 #17a689,7px 7px 0 #17a689,8px 8px 0 #17a689,9px 9px 0 #17a689,10px 10px 0 #17a689,11px 11px 0 #17a689,12px 12px 0 #17a689,13px 13px 0 #17a689,14px 14px 0 #17a689,15px 15px 0 #17a689,16px 16px 0 #17a689,17px 17px 0 #17a689,18px 18px 0 #17a689,19px 19px 0 #17a689,20px 20px 0 #17a689,21px 21px 0 #17a689,22px 22px 0 #17a689,23px 23px 0 #17a689,24px 24px 0 #17a689,25px 25px 0 #17a689,26px 26px 0 #17a689,27px 27px 0 #17a689,28px 28px 0 #17a689,29px 29px 0 #17a689,30px 30px 0 #17a689,31px 31px 0 #17a689,32px 32px 0 #17a689,33px 33px 0 #17a689,34px 34px 0 #17a689,35px 35px 0 #17a689,36px 36px 0 #17a689,37px 37px 0 #17a689,38px 38px 0 #17a689,39px 39px 0 #17a689,40px 40px 0 #17a689,41px 41px 0 #17a689,42px 42px 0 #17a689,43px 43px 0 #17a689,44px 44px 0 #17a689,45px 45px 0 #17a689,46px 46px 0 #17a689,47px 47px 0 #17a689,48px 48px 0 #17a689,49px 49px 0 #17a689,50px 50px 0 #17a689,51px 51px 0 #17a689,52px 52px 0 #17a689,53px 53px 0 #17a689,1px 1px 0 rgba(23, 166, 137, 0.98182),2px 2px 0 rgba(23, 166, 137, 0.96364),3px 3px 0 rgba(23, 166, 137, 0.94545),4px 4px 0 rgba(23, 166, 137, 0.92727),5px 5px 0 rgba(23, 166, 137, 0.90909),6px 6px 0 rgba(23, 166, 137, 0.89091),7px 7px 0 rgba(23, 166, 137, 0.87273),8px 8px 0 rgba(23, 166, 137, 0.85455),9px 9px 0 rgba(23, 166, 137, 0.83636),10px 10px 0 rgba(23, 166, 137, 0.81818),11px 11px 0 rgba(23, 166, 137, 0.8),12px 12px 0 rgba(23, 166, 137, 0.78182),13px 13px 0 rgba(23, 166, 137, 0.76364),14px 14px 0 rgba(23, 166, 137, 0.74545),15px 15px 0 rgba(23, 166, 137, 0.72727),16px 16px 0 rgba(23, 166, 137, 0.70909),17px 17px 0 rgba(23, 166, 137, 0.69091),18px 18px 0 rgba(23, 166, 137, 0.67273),19px 19px 0 rgba(23, 166, 137, 0.65455),20px 20px 0 rgba(23, 166, 137, 0.63636),21px 21px 0 rgba(23, 166, 137, 0.61818),22px 22px 0 rgba(23, 166, 137, 0.6),23px 23px 0 rgba(23, 166, 137, 0.58182),24px 24px 0 rgba(23, 166, 137, 0.56364),25px 25px 0 rgba(23, 166, 137, 0.54545),26px 26px 0 rgba(23, 166, 137, 0.52727),27px 27px 0 rgba(23, 166, 137, 0.50909),28px 28px 0 rgba(23, 166, 137, 0.49091),29px 29px 0 rgba(23, 166, 137, 0.47273),30px 30px 0 rgba(23, 166, 137, 0.45455),31px 31px 0 rgba(23, 166, 137, 0.43636),32px 32px 0 rgba(23, 166, 137, 0.41818),33px 33px 0 rgba(23, 166, 137, 0.4),34px 34px 0 rgba(23, 166, 137, 0.38182),35px 35px 0 rgba(23, 166, 137, 0.36364),36px 36px 0 rgba(23, 166, 137, 0.34545),37px 37px 0 rgba(23, 166, 137, 0.32727),38px 38px 0 rgba(23, 166, 137, 0.30909),39px 39px 0 rgba(23, 166, 137, 0.29091),40px 40px 0 rgba(23, 166, 137, 0.27273),41px 41px 0 rgba(23, 166, 137, 0.25455),42px 42px 0 rgba(23, 166, 137, 0.23636),43px 43px 0 rgba(23, 166, 137, 0.21818),44px 44px 0 rgba(23, 166, 137, 0.2),45px 45px 0 rgba(23, 166, 137, 0.18182),46px 46px 0 rgba(23, 166, 137, 0.16364),47px 47px 0 rgba(23, 166, 137, 0.14545),48px 48px 0 rgba(23, 166, 137, 0.12727),49px 49px 0 rgba(23, 166, 137, 0.10909),50px 50px 0 rgba(23, 166, 137, 0.09091),51px 51px 0 rgba(23, 166, 137, 0.07273),52px 52px 0 rgba(23, 166, 137, 0.05455),53px 53px 0 rgba(23, 166, 137, 0.03636),55px 55px 0 rgba(23, 166, 137, 0);
}

.app-icon-4 {
  background: #f39c12;
  border: 4px solid #ff5350;
  text-shadow: 0px 0px 0 #ff5350,1px 1px 0 #ff5350,2px 2px 0 #ff5350,3px 3px 0 #ff5350,4px 4px 0 #ff5350,5px 5px 0 #ff5350,6px 6px 0 #ff5350,7px 7px 0 #ff5350,8px 8px 0 #ff5350,9px 9px 0 #ff5350,10px 10px 0 #ff5350,11px 11px 0 #ff5350,12px 12px 0 #ff5350,13px 13px 0 #ff5350,14px 14px 0 #ff5350,15px 15px 0 #ff5350,16px 16px 0 #ff5350,17px 17px 0 #ff5350,18px 18px 0 #ff5350,19px 19px 0 #ff5350,20px 20px 0 #ff5350,21px 21px 0 #ff5350,22px 22px 0 #ff5350,23px 23px 0 #ff5350,24px 24px 0 #ff5350,25px 25px 0 #ff5350,26px 26px 0 #ff5350,27px 27px 0 #ff5350,28px 28px 0 #ff5350,29px 29px 0 #ff5350,30px 30px 0 #ff5350,31px 31px 0 #ff5350,32px 32px 0 #ff5350,33px 33px 0 #ff5350,34px 34px 0 #ff5350,35px 35px 0 #ff5350,36px 36px 0 #ff5350,37px 37px 0 #ff5350,38px 38px 0 #ff5350,39px 39px 0 #ff5350,40px 40px 0 #ff5350,41px 41px 0 #ff5350,42px 42px 0 #ff5350,43px 43px 0 #ff5350,44px 44px 0 #ff5350,45px 45px 0 #ff5350,46px 46px 0 #ff5350,47px 47px 0 #ff5350,48px 48px 0 #ff5350,49px 49px 0 #ff5350,50px 50px 0 #ff5350,51px 51px 0 #ff5350,52px 52px 0 #ff5350,53px 53px 0 #ff5350,1px 1px 0 rgba(255, 83, 80, 0.98182),2px 2px 0 rgba(255, 83, 80, 0.96364),3px 3px 0 rgba(255, 83, 80, 0.94545),4px 4px 0 rgba(255, 83, 80, 0.92727),5px 5px 0 rgba(255, 83, 80, 0.90909),6px 6px 0 rgba(255, 83, 80, 0.89091),7px 7px 0 rgba(255, 83, 80, 0.87273),8px 8px 0 rgba(255, 83, 80, 0.85455),9px 9px 0 rgba(255, 83, 80, 0.83636),10px 10px 0 rgba(255, 83, 80, 0.81818),11px 11px 0 rgba(255, 83, 80, 0.8),12px 12px 0 rgba(255, 83, 80, 0.78182),13px 13px 0 rgba(255, 83, 80, 0.76364),14px 14px 0 rgba(255, 83, 80, 0.74545),15px 15px 0 rgba(255, 83, 80, 0.72727),16px 16px 0 rgba(255, 83, 80, 0.70909),17px 17px 0 rgba(255, 83, 80, 0.69091),18px 18px 0 rgba(255, 83, 80, 0.67273),19px 19px 0 rgba(255, 83, 80, 0.65455),20px 20px 0 rgba(255, 83, 80, 0.63636),21px 21px 0 rgba(255, 83, 80, 0.61818),22px 22px 0 rgba(255, 83, 80, 0.6),23px 23px 0 rgba(255, 83, 80, 0.58182),24px 24px 0 rgba(255, 83, 80, 0.56364),25px 25px 0 rgba(255, 83, 80, 0.54545),26px 26px 0 rgba(255, 83, 80, 0.52727),27px 27px 0 rgba(255, 83, 80, 0.50909),28px 28px 0 rgba(255, 83, 80, 0.49091),29px 29px 0 rgba(255, 83, 80, 0.47273),30px 30px 0 rgba(255, 83, 80, 0.45455),31px 31px 0 rgba(255, 83, 80, 0.43636),32px 32px 0 rgba(255, 83, 80, 0.41818),33px 33px 0 rgba(255, 83, 80, 0.4),34px 34px 0 rgba(255, 83, 80, 0.38182),35px 35px 0 rgba(255, 83, 80, 0.36364),36px 36px 0 rgba(255, 83, 80, 0.34545),37px 37px 0 rgba(255, 83, 80, 0.32727),38px 38px 0 rgba(255, 83, 80, 0.30909),39px 39px 0 rgba(255, 83, 80, 0.29091),40px 40px 0 rgba(255, 83, 80, 0.27273),41px 41px 0 rgba(255, 83, 80, 0.25455),42px 42px 0 rgba(255, 83, 80, 0.23636),43px 43px 0 rgba(255, 83, 80, 0.21818),44px 44px 0 rgba(255, 83, 80, 0.2),45px 45px 0 rgba(255, 83, 80, 0.18182),46px 46px 0 rgba(255, 83, 80, 0.16364),47px 47px 0 rgba(255, 83, 80, 0.14545),48px 48px 0 rgba(255, 83, 80, 0.12727),49px 49px 0 rgba(255, 83, 80, 0.10909),50px 50px 0 rgba(255, 83, 80, 0.09091),51px 51px 0 rgba(255, 83, 80, 0.07273),52px 52px 0 rgba(255, 83, 80, 0.05455),53px 53px 0 rgba(255, 83, 80, 0.03636),55px 55px 0 rgba(255, 83, 80, 0);
}

.app-icon-twitter {
  background: #4099FF;
  font-family: zocial;
}
.app-icon-twitter a {
  text-decoration: none;
  color: white;
  text-shadow: 0px 0px 0 #0d7eff,1px 1px 0 #0d7eff,2px 2px 0 #0d7eff,3px 3px 0 #0d7eff,4px 4px 0 #0d7eff,5px 5px 0 #0d7eff,6px 6px 0 #0d7eff,7px 7px 0 #0d7eff,8px 8px 0 #0d7eff,9px 9px 0 #0d7eff,10px 10px 0 #0d7eff,11px 11px 0 #0d7eff,12px 12px 0 #0d7eff,13px 13px 0 #0d7eff,14px 14px 0 #0d7eff,15px 15px 0 #0d7eff,16px 16px 0 #0d7eff,17px 17px 0 #0d7eff,18px 18px 0 #0d7eff,19px 19px 0 #0d7eff,20px 20px 0 #0d7eff,21px 21px 0 #0d7eff,22px 22px 0 #0d7eff,23px 23px 0 #0d7eff,24px 24px 0 #0d7eff,25px 25px 0 #0d7eff,26px 26px 0 #0d7eff,27px 27px 0 #0d7eff,28px 28px 0 #0d7eff,29px 29px 0 #0d7eff,30px 30px 0 #0d7eff,31px 31px 0 #0d7eff,32px 32px 0 #0d7eff,33px 33px 0 #0d7eff,34px 34px 0 #0d7eff,35px 35px 0 #0d7eff,36px 36px 0 #0d7eff,37px 37px 0 #0d7eff,38px 38px 0 #0d7eff,39px 39px 0 #0d7eff,40px 40px 0 #0d7eff,41px 41px 0 #0d7eff,42px 42px 0 #0d7eff,43px 43px 0 #0d7eff,44px 44px 0 #0d7eff,45px 45px 0 #0d7eff,46px 46px 0 #0d7eff,47px 47px 0 #0d7eff,48px 48px 0 #0d7eff,49px 49px 0 #0d7eff,50px 50px 0 #0d7eff,51px 51px 0 #0d7eff,52px 52px 0 #0d7eff,53px 53px 0 #0d7eff,1px 1px 0 rgba(13, 126, 255, 0.98182),2px 2px 0 rgba(13, 126, 255, 0.96364),3px 3px 0 rgba(13, 126, 255, 0.94545),4px 4px 0 rgba(13, 126, 255, 0.92727),5px 5px 0 rgba(13, 126, 255, 0.90909),6px 6px 0 rgba(13, 126, 255, 0.89091),7px 7px 0 rgba(13, 126, 255, 0.87273),8px 8px 0 rgba(13, 126, 255, 0.85455),9px 9px 0 rgba(13, 126, 255, 0.83636),10px 10px 0 rgba(13, 126, 255, 0.81818),11px 11px 0 rgba(13, 126, 255, 0.8),12px 12px 0 rgba(13, 126, 255, 0.78182),13px 13px 0 rgba(13, 126, 255, 0.76364),14px 14px 0 rgba(13, 126, 255, 0.74545),15px 15px 0 rgba(13, 126, 255, 0.72727),16px 16px 0 rgba(13, 126, 255, 0.70909),17px 17px 0 rgba(13, 126, 255, 0.69091),18px 18px 0 rgba(13, 126, 255, 0.67273),19px 19px 0 rgba(13, 126, 255, 0.65455),20px 20px 0 rgba(13, 126, 255, 0.63636),21px 21px 0 rgba(13, 126, 255, 0.61818),22px 22px 0 rgba(13, 126, 255, 0.6),23px 23px 0 rgba(13, 126, 255, 0.58182),24px 24px 0 rgba(13, 126, 255, 0.56364),25px 25px 0 rgba(13, 126, 255, 0.54545),26px 26px 0 rgba(13, 126, 255, 0.52727),27px 27px 0 rgba(13, 126, 255, 0.50909),28px 28px 0 rgba(13, 126, 255, 0.49091),29px 29px 0 rgba(13, 126, 255, 0.47273),30px 30px 0 rgba(13, 126, 255, 0.45455),31px 31px 0 rgba(13, 126, 255, 0.43636),32px 32px 0 rgba(13, 126, 255, 0.41818),33px 33px 0 rgba(13, 126, 255, 0.4),34px 34px 0 rgba(13, 126, 255, 0.38182),35px 35px 0 rgba(13, 126, 255, 0.36364),36px 36px 0 rgba(13, 126, 255, 0.34545),37px 37px 0 rgba(13, 126, 255, 0.32727),38px 38px 0 rgba(13, 126, 255, 0.30909),39px 39px 0 rgba(13, 126, 255, 0.29091),40px 40px 0 rgba(13, 126, 255, 0.27273),41px 41px 0 rgba(13, 126, 255, 0.25455),42px 42px 0 rgba(13, 126, 255, 0.23636),43px 43px 0 rgba(13, 126, 255, 0.21818),44px 44px 0 rgba(13, 126, 255, 0.2),45px 45px 0 rgba(13, 126, 255, 0.18182),46px 46px 0 rgba(13, 126, 255, 0.16364),47px 47px 0 rgba(13, 126, 255, 0.14545),48px 48px 0 rgba(13, 126, 255, 0.12727),49px 49px 0 rgba(13, 126, 255, 0.10909),50px 50px 0 rgba(13, 126, 255, 0.09091),51px 51px 0 rgba(13, 126, 255, 0.07273),52px 52px 0 rgba(13, 126, 255, 0.05455),53px 53px 0 rgba(13, 126, 255, 0.03636),55px 55px 0 rgba(13, 126, 255, 0);
}

div {
  overflow: hidden;
}

body {
  background: #2c3e50;
}

</style>


<div class='demo'>




	<div class='icons'>
		<div class='app-icon app-icon-1'>
			<p>&#9835;</p>
		</div>
		<div class='app-icon app-icon-2'>
			<p>&#59176;</p>
		</div>
		<div class='app-icon app-icon-3'>
			<p>&#9993;</p>
		</div>
		<div class='app-icon app-icon-4'>
			<p>&hearts;</p>
		</div>
		<div class='app-icon app-icon-twitter'>
			<p><a href="https://www.twitter.com/maxakohler">T</a></p>
		</div>
	</div>
	<div class='clearfix'>
		<div class="shadow">
			#LONG
		</div>
		<div class="shadow-2">
			<p>SHADOW</p>
		</div>
		<div class="shadow-3">
			<p>DESIGN</p>
		</div>
	</div>
	<h1 class='text-shadow'>Because flat design is <em>so last week</em></h1>
</div>
<article class='demo-desc'>
	<h1>Long shadow generator</h1>
	<p>A Sass mixin that makes pulling off 'long shadow design' as easy as pie.
	</p>
	<p>For more information about this design trend, head over to <a href="http://je.roon.io/long-shadow-design">http://je.roon.io/long-shadow-design</a>. Just make sure not to look at the compiled CSS :)</p>

	<p>Follow me
		<a href='https://twitter.com/maxakohler'>@maxakohler</a> for updates.
	</p>
	<h2>Features</h2>
	<ul>
		<li>Works with any element, both <strong>text-shadow</strong> and <strong>box-shadow</strong> is supported.</li>
		<li>Variable color</li>
		<li>Variable shadow length</li>
		<li>Shadow can either point to the <strong>left</strong> or to the <strong>right</strong></li>
		<li>Define if the shadow is <strong>skewed</strong> or not</li>
		<li>Choose if the shadow <strong>fades out</strong> or not (still in beta)</li>
	</ul>
	<pre>
  <code class="language-scss">
.my-thing {
  @include long-shadow($type: text, $color: indigo, $length: 50, $fadeout: false, $skew: true, $direction: right);
}
  //That's it!</code>
  </pre>
	<h2>How does it work?</h2>
	<p>Basically: It uses a Sass @for loop to create a number of box-shadows, every shadow with a slightly different position. The number of shadows is based on the length that you enter.
	</p>
</article>