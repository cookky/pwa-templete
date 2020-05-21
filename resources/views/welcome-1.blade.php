@extends('layouts.app')


@section('title', 'Welcome')


@section('content')
<div id="mobile-header">
    <header>
        <div class="container">
            <a target="_blank" href=""><img src="{{asset('images/logo-slot-circle.png')}}">
                <span>SLOT999</span></a>
            <a target="_blank" href=""><i class="fas fa-user-circle"></i></a>
        </div>
    </header>
    <div class="nav-mobile-expend">
        <div class="container">
            <ul>
                <li><a target="_blank" href=""><i class="fas fa-home"></i> หน้าแรก</a></li>
                <li><a target="_blank" href=""><i class="fas fa-user-plus"></i>
                        สมัครสมาชิก</a></li>
                <li><a target="_blank" href=""><i class="fas fa-star"></i>
                        โปรโมชั่น</a></li>
                <li><a target="_blank" href=""><i class="fas fa-download"></i>
                        ดาวน์โหลดเกม</a></li>
                <li><a target="_blank" href=""><i class="fas fa-wallet"></i> ฝาก - ถอน</a>
                </li>
                <li><a target="_blank" href=""><i class="fas fa-book"></i>
                        คู่มือการใช้งาน</a></li>
                <li><a target="_blank" href=""><i class="fas fa-newspaper"></i> บล็อก</a>
                </li>
                <li><a target="_blank" href=""><i class="fas fa-envelope"></i>
                        ติดต่อเรา</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="nav-mobile">
    <div class="navigation">
        <div class="container">
            <ul>
                <li><a target="_blank" href=""><i class="fas fa-user"></i>
                        <p class="font11">บัญชี</p>
                    </a></li>
                <li><a target="_blank" href=""><i class="fas fa-wallet"></i>
                        <p class="font11">เติมเงิน</p>
                    </a></li>
                <li><a target="_blank" href=""><i class="fas fa-usd-circle"></i>
                        <p class="font11">ถอนเงิน</p>
                    </a></li>
                <li><a target="_blank" href=""><i class="fas fa-exchange"></i>
                        <p class="font11">โยกเงิน</p>
                    </a></li>
                <li><a target="_blank" href=""><i class="fas fa-star"></i>
                        <p class="font11">โบนัส</p>
                    </a></li>
            </ul>
        </div>
    </div>
</div>
<div>

</div>
<header id="main-header" class="" style="font-family:'sukhumvit';">
    <img src="{{asset('images/background-h1.jpg')}}" class="img-fluid" alt="">

    <!-- <div class="container d-flex justify-content-between align-items-center">
        <p><strong>SLOT999</strong> สล็อตออนไลน์ เกมคาสิโนออนไลน์กว่า 100 เกม ฝาก-ถอน AUTO 24 ชม.</p>
        <div id="main-nav"></div>
    </div> -->
</header>
<nav class="navbar navbar-expand-lg navbar-dark bg-brown box-shadow sticky-top">
    <div class="container">
        <div></div>
        <a class="navbar-brand" target="_blank" href=""><img src="{{asset('images/logo-slot.png')}}" class="img-fluid"
                alt="สล็อต สล็อตออนไลน์ คาสิโนออนไลน์กว่า 100 เกม | ฝาก-ถอน 24 ชม."></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" id="nav-main">
                    <a class="nav-link" target="_blank" href="">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="">สมัครสมาชิก</a>
                </li>
                <li class="nav-item" id="nav-promotion">
                    <a class="nav-link" target="_blank" href="">โปรโมชั่น</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="">ฝาก-ถอน</a>
                </li>
                <li class="nav-item" id="nav-download">
                    <a class="nav-link" target="_blank" href="">ดาวน์โหลด</a>
                </li>
                <li class="nav-item" id="nav-contact">
                    <a class="nav-link" target="_blank" href="">ติดต่อเรา</a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0 text-light">
                <a target="_blank" href="" class="text-warning"><span style="font-size: 20px;"
                        class="d-flex align-items-center"><i class="fab fa-line fa-2x" style="padding-right:10px;"></i>
                        @SLOT999THAILAND</span></a>
            </div>
        </div>
    </div>
</nav>
<section class="slider">
    <div id="Slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner text-center">
            <div class="carousel-item active">
                <img class="animated bounceInUp img-fluid" src="{{asset('images/slider04.webp')}}"
                    alt="เปิดแล้ว 918Kiss, Pussy888, Joker123">
            </div>
            <div class="carousel-item">
                <img class="animated bounceInUp img-fluid" src="{{asset('images/slider01.webp')}}"
                    alt="สมัครสล็อต รับฟรีโบนัส">
            </div>
            <div class="carousel-item">
                <img class="animated bounceInUp img-fluid" src="{{asset('images/slider02.webp')}}"
                    alt="เติมเงินโคตรเร็ว 1 วิ">
            </div>
            <div class="carousel-item">
                <img class="animated bounceInUp img-fluid" src="{{asset('images/slider03.webp')}}"
                    alt="เว็บเดียวรวมทุกแบรนด์ slotxo, live22">
            </div>
        </div>
        <div class="container">
            <a class="carousel-control-prev" href="#Slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<div class="bg-bottom-slider text-center"></div>
<div style="">
    <div class="login-box">
        <header class="text-center"><img src="{{asset('images/h-login.png')}}" alt="เข้าสู่ระบบ"></header>
        <div class="container">
            <h3 class="text-center" id="alert-text"></h3>
            <div id="main-panel">
                <form>
                    <div class="form-row">
    
                        <div class="form-group col-sm-4 d-flex flex-column align-items-start">
                            <button type="button" class="btn btn-success btn-lg btn-block" onclick=""><i
                                    class="fas fa-user-plus"></i> สมัครสมาชิก</button>
                        </div>
                        <div class="form-group col-sm-4 d-flex flex-column align-items-start">
                            <button type="button" class="btn btn-warning btn-lg btn-block" onclick=""><i
                                    class="fas fa-sign-in-alt"></i>
                                เข้าสู่ระบบ</button>
                        </div>
                        <div class="form-group col-sm-4 d-flex flex-column align-items-start">
                            <button type="button" class="btn btn-light btn-lg btn-block" onclick=""><i
                                    class="fab fa-line"></i>
                                ติดต่อเรา</button>
                        </div>
    
    
    
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="main-content">
        <div class="container" style="background-color:rgba(0, 0, 0, 0.9);">
            <br>
            <section class="main-container text-white">
                <div class="row">
                    <div class="col-md-3 d-none d-sm-block">
                        <figure>
                            <img src="{{asset('images/slot-online.png')}}" class="img-fluid "
                                alt="สล็อตเงินจริง เล่นแล้วรวย">
                        </figure>
                    </div>
                    <div class="col-md-9">
                        <header style="border-left:5px solid #fff;">
                            <h1 style="padding-left:10px;">ยินดีต้อนรับเข้าสู่ ACE333 เว็บไซต์ สล็อต a ACE333 หรือ ACESLOT
                            </h1>
                        </header>
                        <p>เราพร้อมให้บริการนักพนันทุกท่านอย่างครบวงจรด้วยคาสิโนออนไลน์ที่เล่นง่าย ได้เงินจริง
                            พบกับเกมเดิมพันมากมายไม่ว่าจะเป็นเกมยอดนิยมอย่าง บาคาร่า สล็อต แบล็คแจ็ค รูเล็ตต์ และเสือมังกร
                            รับประสบการณ์การพนันที่สมจริงเสมือนกับไปเล่นที่คาสิโนระดับโลกผ่านระบบออนไลน์
                            เว็บไซต์ของเราเปิดรับสมาชิกใหม่ตลอด 24 ช.ม. โดยท่านสามารถเข้าร่วมเล่นกับเราได้ง่ายๆ ภายใน 15
                            นาที พร้อมรับโบนัสเครดิตและโปรโมชั่นส่วนลดมากมายที่หาไม่ได้จากที่อื่น อย่าให้ปัญหาการติดต่อ
                            หรือฝาก-ถอน มาเป็นอุปสรรคในช่วงเวลาแห่งความสุขของคุณ เล่นคาสิโนที่ joker
                            เรายึดถือการบริการเป็นอันดับ 1 พร้อมยินดีให้ความช่วยเหลือ ตอบทุกคำถาม เอาใจใส่ลูกค้าทุกคน
                            ด้วยประสบการณ์ดูแลลูกค้านักพนันกว่าหมื่นคนต่อวัน</p>
                    </div>
                </div>
            </section>
            <section class="main-container text-white">
                <header  class="">        
                    <h1 class="shine-text">สล็อต ace333 ระบบดีสุด การเงินมั่นคง</h1>
                </header>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <img src="{{'images/1.jpg'}}" class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="col-12 col-sm-6">
                        <img src="{{'images/2.jpg'}}" class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="col-12 col-sm-6">
                        <img src="{{'images/3.jpg'}}" class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="col-12 col-sm-6">
                        <img src="{{'images/4.jpg'}}" class="img-fluid" alt="" srcset="">
                    </div>
                </div>
            </section>
            <br>
            <section class="text-center text-white" >

                <div class="main-container row" >
                    <div class="col-6 col-sm-3 game-box animated zoomIn active-category" style="padding: 5px; margin:0px;" title="Lucky God Progressive"
                        data-game-name="Lucky God Progressive"
                        data-bind="css: { 'active-category' : (activeCategory() == 'Slot' || (activeCategory() == 'All' &amp;&amp; 'Slot' != 'Fishing')
                                                      ) &amp;&amp; isActiveGames(&quot;Lucky God Progressive&quot;) == true }">
                        <div class="icon-container free-game" data-category-key="Slot" data-game-code="GodOfFortunePlus"
                            data-game-width="960" data-game-height="618">
                            <div class="img-container">
                                <div class="img-wrapper">
                                    <img draggable="false" class="img-fluid" src="https://ace333.biz/image/game/godoffortuneplus.png"
                                        alt="ace333">
                                </div>
                            </div>
                            <div class="play-container">
                                <a href="">
                                    <div class="play-btn">
                                        <span class="img-play-now"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="game-flag free-play-flag ">
                                <span class="text">เกมฟรี</span>
                                <span class="pre-img"></span>
                            </div>
                            <div class="game-flag ">
                                <span class="pre-img"></span>
                            </div>
                        </div>
                        <div class="game-title">ACE333 Lucky God Progressive</div>
                    </div>
                    
                    <div class="col-6 col-sm-3 game-box animated zoomIn active-category" style="padding: 5px; margin: 0px;" title="Robin Hood" data-game-name="Robin Hood"
                        data-bind="css: { 'active-category' : (activeCategory() == 'Slot' || (activeCategory() == 'All' &amp;&amp; 'Slot' != 'Fishing')
                                                      ) &amp;&amp; isActiveGames(&quot;Robin Hood&quot;) == true }">
                        <div class="icon-container free-game" data-category-key="Slot" data-game-code="RobinHood"
                            data-game-width="960" data-game-height="618">
                            <div class="img-container">
                                <div class="img-wrapper">
                                    <img draggable="false" class="img-fluid" src="https://ace333.biz/image/game/robinhood.png " alt="ace333">
                                </div>
                            </div>
                            <div class="play-container">
                                <a href="">
                                    <div class="play-btn">
                                        <span class="img-play-now"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="game-flag free-play-flag ">
                                <span class="text">เกมฟรี</span>
                                <span class="pre-img"></span>
                            </div>
                            <div class="game-flag ">
                                <span class="pre-img"></span>
                            </div>
                        </div>
                        <div class="game-title">ACE333 Robin Hood</div>
                    </div>
                    <!-- <div class="col-6 col-sm-3 game-box animated zoomIn active-category" style="padding: 5px; margin: 0px;" title="Miami" data-game-name="Miami" data-bind="css: { 'active-category' : (activeCategory() == 'Slot' || (activeCategory() == 'All' &amp;&amp; 'Slot' != 'Fishing')
                                                      ) &amp;&amp; isActiveGames(&quot;Miami&quot;) == true }">
                        <div class="icon-container free-game" data-category-key="Slot" data-game-code="Miami"
                            data-game-width="960" data-game-height="618">
                            <div class="img-container">
                                <div class="img-wrapper">
                                    <img draggable="false" class="img-fluid" src="https://ace333.biz/image/game/miami.png" alt="ace333">
                                </div>
                            </div>
                            <div class="play-container">
                                <a href="">
                                    <div class="play-btn">
                                        <span class="img-play-now"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="game-flag free-play-flag ">
                                <span class="text">เกมฟรี</span>
                                <span class="pre-img"></span>
                            </div>
                            <div class="game-flag ">
                                <span class="pre-img"></span>
                            </div>
                        </div>
                        <div class="game-title">ACE333 Miami</div>
                    </div>
                    <div class="col-6 col-sm-3 game-box animated zoomIn active-category" style="padding: 5px; margin: 0px;" title="SilverBullet Progressive"
                        data-game-name="SilverBullet Progressive"
                        data-bind="css: { 'active-category' : (activeCategory() == 'Slot' || (activeCategory() == 'All' &amp;&amp; 'Slot' != 'Fishing')
                                                      ) &amp;&amp; isActiveGames(&quot;SilverBullet Progressive&quot;) == true }">
                        <div class="icon-container free-game" data-category-key="Slot" data-game-code="SilverBulletPlus"
                            data-game-width="960" data-game-height="618">
                            <div class="img-container">
                                <div class="img-wrapper">
                                    <img draggable="false" class="img-fluid" src="https://ace333.biz/image/game/silverbulletplus.png "
                                        alt="ace333">
                                </div>
                            </div>
                            <div class="play-container">
                                <a href="">
                                    <div class="play-btn">
                                        <span class="img-play-now"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="game-flag free-play-flag ">
                                <span class="text">เกมฟรี</span>
                                <span class="pre-img"></span>
                            </div>
                            <div class="game-flag ">
                                <span class="pre-img"></span>
                            </div>
                        </div>
                        <div class="game-title">ACE333 SilverBullet Progressive</div>
                    </div>
                    <div class="col-6 col-sm-3 game-box animated zoomIn active-category" style="padding: 5px; margin: 0px;" title="SilverBullet Progressive"
                        data-game-name="SilverBullet Progressive"
                        data-bind="css: { 'active-category' : (activeCategory() == 'Slot' || (activeCategory() == 'All' &amp;&amp; 'Slot' != 'Fishing')
                                                      ) &amp;&amp; isActiveGames(&quot;SilverBullet Progressive&quot;) == true }">
                        <div class="icon-container free-game" data-category-key="Slot" data-game-code="SilverBulletPlus"
                            data-game-width="960" data-game-height="618">
                            <div class="img-container">
                                <div class="img-wrapper">
                                    <img draggable="false" class="img-fluid" src="https://ace333.biz/image/game/panjinlian.png " alt="ace333">
                                </div>
                            </div>
                            <div class="play-container">
                                <a href="">
                                    <div class="play-btn">
                                        <span class="img-play-now"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="game-flag free-play-flag ">
                                <span class="text">เกมฟรี</span>
                                <span class="pre-img"></span>
                            </div>
                            <div class="game-flag ">
                                <span class="pre-img"></span>
                            </div>
                        </div>
                        <div class="game-title">ACE333 Pan Jin Lian</div>
                    </div>
                    <div class="col-6 col-sm-3 game-box animated zoomIn active-category" style="padding: 5px; margin: 0px;" title="SilverBullet Progressive"
                        data-game-name="SilverBullet Progressive"
                        data-bind="css: { 'active-category' : (activeCategory() == 'Slot' || (activeCategory() == 'All' &amp;&amp; 'Slot' != 'Fishing')
                                                      ) &amp;&amp; isActiveGames(&quot;SilverBullet Progressive&quot;) == true }">
                        <div class="icon-container free-game" data-category-key="Slot" data-game-code="SilverBulletPlus"
                            data-game-width="960" data-game-height="618">
                            <div class="img-container">
                                <div class="img-wrapper">
                                    <img draggable="false" class="img-fluid" src="https://ace333.biz/image/game/football.png " alt="ace333">
                                </div>
                            </div>
                            <div class="play-container">
                                <a href="">
                                    <div class="play-btn">
                                        <span class="img-play-now"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="game-flag free-play-flag ">
                                <span class="text">เกมฟรี</span>
                                <span class="pre-img"></span>
                            </div>
                            <div class="game-flag ">
                                <span class="pre-img"></span>
                            </div>
                        </div>
                        <div class="game-title">ACE333 Football</div>
                    </div>
                    <div class="col-6 col-sm-3 game-box animated zoomIn active-category" style="padding: 5px; margin: 0px;" title="SilverBullet Progressive"
                        data-game-name="SilverBullet Progressive"
                        data-bind="css: { 'active-category' : (activeCategory() == 'Slot' || (activeCategory() == 'All' &amp;&amp; 'Slot' != 'Fishing')
                                                      ) &amp;&amp; isActiveGames(&quot;SilverBullet Progressive&quot;) == true }">
                        <div class="icon-container free-game" data-category-key="Slot" data-game-code="SilverBulletPlus"
                            data-game-width="960" data-game-height="618">
                            <div class="img-container">
                                <div class="img-wrapper">
                                    <img draggable="false" class="img-fluid" src="https://ace333.biz/image/game/threekingdoms.png "
                                        alt="ace333">
                                </div>
                            </div>
                            <div class="play-container">
                                <a href="">
                                    <div class="play-btn">
                                        <span class="img-play-now"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="game-flag free-play-flag ">
                                <span class="text">เกมฟรี</span>
                                <span class="pre-img"></span>
                            </div>
                            <div class="game-flag ">
                                <span class="pre-img"></span>
                            </div>
                        </div>
                        <div class="game-title">ACE333 Three Kingdoms Quest</div>
                    </div>
                    <div class="col-6 col-sm-3 game-box animated zoomIn active-category"  style="padding: 5px; margin: 0px;" title="SilverBullet Progressive"
                        data-game-name="SilverBullet Progressive"
                        data-bind="css: { 'active-category' : (activeCategory() == 'Slot' || (activeCategory() == 'All' &amp;&amp; 'Slot' != 'Fishing')
                                                      ) &amp;&amp; isActiveGames(&quot;SilverBullet Progressive&quot;) == true }">
                        <div class="icon-container free-game" data-category-key="Slot" data-game-code="SilverBulletPlus"
                            data-game-width="960" data-game-height="618">
                            <div class="img-container">
                                <div class="img-wrapper">
                                    <img draggable="false" class="img-fluid" src="https://ace333.biz/image/game/panthermoon.png "
                                        alt="ace333">
                                </div>
                            </div>
                            <div class="play-container">
                                <a href="">
                                    <div class="play-btn">
                                        <span class="img-play-now"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="game-flag free-play-flag ">
                                <span class="text">เกมฟรี</span>
                                <span class="pre-img"></span>
                            </div>
                            <div class="game-flag ">
                                <span class="pre-img"></span>
                            </div>
                        </div>
                        <div class="game-title">ACE333 Panther Moon</div>
                    </div> -->
                </div>
    
            </section>
        </div>
    </div>
</div>
<footer id="main-footer">
    <div class="container">
        <div class="row" style="font-family:'sukhumvit';">
            <div class="col-md-3">
                <span>SLOT999</span>
                <p>
                    เราคือผู้ให้บริการเกมสล็อตบนมือถือ ที่สามารถเล่นผ่านโทรศัพท์มือถือ ได้ทุกที่ ทุกเวลา ตลอด 24 ชั่วโมง
                    ด้วยระบบในรูปแบบ Application ที่รองรับทั้งระบบ IOS และ Android ทั้งง่ายและสะดวก มีเกมมากกว่า 100
                    เกมให้ได้เลือกเล่นและเพลิดเพลิน ไม่ว่าจะเป็น เกมยิงปลา รูเล็ท แข่งรถ แข่งม้า บาคาร่า คาสิโน และอื่น
                    ๆ อีกมากมายให้ท่านได้เลือกเล่นอย่างสนุกสนาน
                    <img src="" />
                </p>
            </div>
            <div class="col-md-3">
                <span>เมนู</span>
                <ul>
                    <li><a target="_blank" href="">หน้าแรก</a></li>
                    <li><a target="_blank" href="">วิธีการเล่น</a></li>
                    <li><a target="_blank" href="">บล็อก</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <span>สมาชิก</span>
                <ul>
                    <li><a target="_blank" href="">สมัครสมาชิก</a></li>
                    <li><a target="_blank" href="">ฝาก-ถอน</a></li>
                    <li><a target="_blank" href="">ดาวน์โหลดเกม</a></li>
                    <li><a target="_blank" href="">ปัญหาที่พบบ่อย</a></li>
                    <li><a target="_blank" href="">เข้าสู่ระบบ</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <span>ติดต่อเรา</span>
                <ul>
                    <li>Line ID: @slot999thailand</li>
                    <li>Fanpage: fb.com/slot999online</li>
                    <li>Email: <a href="" class="">[email&#160;protected]</a></li>
                    <li>Website: slot999.com</li>
                    <li>© 2017 by SLOT999 GROUP</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection