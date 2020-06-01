@extends('layouts.app')


@section('title', 'Welcome')


@section('content')
<!-- <div class="d-none d-sm-block" style="position: fixed; z-index: 99; bottom: 20px; right: 10px;">
    <img src="images/addline.png" class="img-fluid " style="" alt="...">
</div> -->
<div id="mobile-header">
    
    <header>
        
        <div class="container m-0 p-0 " style="width: 100%;">
            <img src="{{asset('images/header-mobile.jpg')}}" class="img-fluid m-0 p-0" style="width: 100%;" alt="">    
            <!-- <a target="_blank" href=""><img src="{{asset('images/logo-slot-circle.png')}}">
                <span>SLOT999</span></a>
            <a target="_blank" href=""><i class="fas fa-user-circle"></i></a> -->
        </div>
    </header>
    <div class="nav-mobile-expend" >
        <div class="container">
            <ul>
                <li><a target="_blank" href=""><i class="fas fa-home text-danger"></i> หน้าแรก</a></li>
                <li><a target="_blank" href=""><i class="fas fa-user-plus text-danger"></i>
                        สมัครสมาชิก</a></li>
                <li><a target="_blank" href=""><i class="fas fa-star text-danger"></i>
                        โปรโมชั่น</a></li>
                <li><a target="_blank" href=""><i class="fas fa-download text-danger"></i>
                        ดาวน์โหลดเกม</a></li>
                <li><a target="_blank" href=""><i class="fas fa-wallet text-danger"></i> ฝาก - ถอน</a>
                </li>
                <li><a target="_blank" href=""><i class="fas fa-book text-danger"></i>
                        คู่มือการใช้งาน</a></li>
                <li><a target="_blank" href=""><i class="fas fa-newspaper text-danger"></i> บล็อก</a>
                </li>
                <li><a target="_blank" href=""><i class="fas fa-envelope text-danger"></i>
                        ติดต่อเรา</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="nav-mobile">
    <div class="navigation">
        <div class="container">

            <ul>
                <li><a target="_blank" href=""><i class="fas fa-user text-gray"></i>
                        <p class="font11 text-gray">บัญชี</p>
                    </a></li>
                <li><a target="_blank" href=""><i class="fas fa-wallet text-gray"></i>
                        <p class="font11 text-gray">เติมเงิน</p>
                    </a></li>
                <li><a target="_blank" href=""><i class="fas fa-usd-circle text-gray"></i>
                        <p class="font11 text-gray">ถอนเงิน</p>
                    </a></li>
                <li><a target="_blank" href=""><i class="fas fa-exchange text-gray"></i>
                        <p class="font11 text-gray">โยกเงิน</p>
                    </a></li>
                <li><a target="_blank" href=""><i class="fas fa-star text-gray"></i>
                        <p class="font11 text-gray">โบนัส</p>
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
        <!-- <a class="navbar-brand" target="_blank" href=""><img src="{{asset('images/logo-slot.png')}}" class="img-fluid"
                alt="สล็อต สล็อตออนไลน์ คาสิโนออนไลน์กว่า 100 เกม | ฝาก-ถอน 24 ชม."></a> -->
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
            <!-- <div class="carousel-item ">
                <img class="animated bounceInUp img-fluid" src="{{asset('images/slider04.webp')}}"
                    alt="เปิดแล้ว 918Kiss, Pussy888, Joker123">
            </div> -->
            <div class="carousel-item active" style="margin:0px ; padding:0px">
                <img class="img-fluid" src="{{asset('images/bg-slider02.jpg')}}"
                    alt="สมัครสล็อต รับฟรีโบนัส">
            </div>
            <!-- <div class="carousel-item">
                <img class="animated bounceInUp img-fluid" src="{{asset('images/slider02.webp')}}"
                    alt="เติมเงินโคตรเร็ว 1 วิ">
            </div>
            <div class="carousel-item">
                <img class="animated bounceInUp img-fluid" src="{{asset('images/slider03.webp')}}"
                    alt="เว็บเดียวรวมทุกแบรนด์ slotxo, live22">
            </div> -->
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
<!-- bg-bottom-slider -->
<div class=" text-center"></div>
<div>
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