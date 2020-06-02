@extends('layouts.app')


@section('title', 'Welcome')


@section('content')
<script>
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
        img.src = img.dataset.src;
        });
    } else {
        // Dynamically import the LazySizes library
        const script = document.createElement('script');
        script.src =
        'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js';
        document.body.appendChild(script);
    }
</script>
<div id="mobile-header">
    <header>
        <div class="container">
            <a target="_blank" href=""><img
                    src="{{asset('images/logo-slot-circle.png')}}">
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
    <img src="{{asset('images/background-h1.jpg')}}" class="img-fluid"  alt="">    
    
    <!-- <div class="container d-flex justify-content-between align-items-center">
        <p><strong>SLOT999</strong> สล็อตออนไลน์ เกมคาสิโนออนไลน์กว่า 100 เกม ฝาก-ถอน AUTO 24 ชม.</p>
        <div id="main-nav"></div>
    </div> -->
</header>
<nav class="navbar navbar-expand-lg navbar-dark bg-brown box-shadow sticky-top">
    <div class="container">
        <div></div>
        <a class="navbar-brand" target="_blank" href=""><img
                src="{{asset('images/logo-slot.png')}}" class="img-fluid"
                alt="สล็อต สล็อตออนไลน์ คาสิโนออนไลน์กว่า 100 เกม | ฝาก-ถอน 24 ชม."></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" id="nav-main">
                    <a class="nav-link" target="_blank" href="">หน้าแรก <span
                            class="sr-only">(current)</span></a>
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
                <a target="_blank" href="" class="text-warning"><span
                        style="font-size: 20px;" class="d-flex align-items-center"><i class="fab fa-line fa-2x"
                            style="padding-right:10px;"></i> @SLOT999THAILAND</span></a>
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
<div  class="bg-bottom-slider text-center"></div>
<div class="login-box">
    <header class="text-center"><img
            src="{{asset('images/h-login.png')}}"
            alt="เข้าสู่ระบบ"></header>
    <div class="container">
        <h3 class="text-center" id="alert-text"></h3>
        <div id="main-panel">                        
            <form>
                <div class="form-row">

                    <div class="form-group col-sm-4 d-flex flex-column align-items-start">
                        <button type="button" class="btn btn-success btn-lg btn-block"
                            onclick=""><i
                                class="fas fa-user-plus"></i> สมัครสมาชิก</button>
                    </div>
                    <div class="form-group col-sm-4 d-flex flex-column align-items-start">
                        <button type="button" class="btn btn-warning btn-lg btn-block"
                            onclick=""><i class="fas fa-sign-in-alt"></i>
                            เข้าสู่ระบบ</button>
                    </div>
                    <div class="form-group col-sm-4 d-flex flex-column align-items-start">
                        <button type="button" class="btn btn-light btn-lg btn-block"
                            onclick=""><i class="fab fa-line"></i>
                            ติดต่อเรา</button>
                    </div>
                   


                </div>
            </form>
        </div>
    </div>
</div>
<div id="main-content">
    <div class="container">
        <section class="bg-content-main">
            <div class="content-main">
                <div class="row">
                    <div class="col-md-3">
                        <figure>
                            <img src="{{asset('images/slot-online.png')}}" class="img-fluid"
                                alt="สล็อตเงินจริง เล่นแล้วรวย">
                        </figure>
                    </div>
                    <div class="col-md-9 content">
                        <header style="border-left:5px solid #fff;">
                            <h1 style="padding-left:10px;">สล็อต เกมออนไลน์ slot บนมือถือ เติม-ถอน
                                ผ่านระบบอัตโนมัติบริการตลอด 24 ชม. มั่นคงปลอดภัย 100%</h1>
                        </header>
                        <article>
                            <p class="text-warning" style="font-size:1.2rem;">ผู้ให้บริการ สล็อตออนไลน์ เกมออนไลน์
                                live22 slotxo และคาสิโนออนไลน์บนมือถือ อันดับ 1</p>
                            <p>
                                <strong>SLOT</strong> 999
                                ทำให้การเล่น<strong>เกมออนไลน์</strong>ของท่านง่ายและสะดวกยิ่งขึ้น
                                ไม่ต้องเสียเวลาเดินทาง
                                ไม่ต้องเสียเวลารอในการฝากเงินอีกต่อไปด้วยการให้บริการผ่านระบบอัตโนมัติทั้งหมด
                                ให้ทั้งความมั่นคงปลอดภัย เราเป็นผู้ให้บริการแอพเกมสล็อตชั้นนำ เราคัดสรรเกมที่น่าสนใจ
                                และพร้อมจะให้ท่านเพลิดเพลินไปกับมัน
                            </p>
                            <br />
                            <p class="text-warning" style="font-size:1.2rem;">สล็อต SlotXO Live22
                                เกมคาสิโนออนไลน์บนมือถือ</p>
                            <p><a target="_blank" href="" class="text-warning"
                                    title="สล็อต"><strong>สล็อต</strong></a> เราคือผู้ให้บริการ Application
                                <strong>เกมคาสิโนออนไลน์</strong>บนมือถืออันดับ 1 รองรับทั้ง IOS และ Android
                                มีเกมส์ให้เลือกเล่นกว่า 100 เกมส์ ไม่ว่าจะเป็นสล็อต ยิงปลา บาคาร่า เสือมังกร รูเล็ท
                                แข่งม้า ไฮโล และ เกมคาสิโนออนไลน์อื่น ๆ อีกมากมาย เติมเงิน - ถอนเงินผ่านระบบอัตโนมัติ
                                ตลอด 24 ชั่วโมง และมีพนักงานคอยให้คำปรึกษาตลอด</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="promotion">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6 text-center">
                    <figure>
                        <img src="{{asset('images/promotion01.jpg')}}" alt="แจกเครดิตฟรี"
                            class="img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6 col-6 text-center">
                    <figure>
                        <img src="{{asset('images/promotion02.jpg')}}"
                            alt="อยากรวยฟังทางนี้ ชวนเพื่อนรับโบนัส50%" class="img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6 col-6 text-center">
                    <figure>
                        <img src="{{asset('images/promotion03.jpg')}}"
                            alt="รวยได้ในแอพเดียว สมัครวันนี้ รวยทันที" class="img-fluid">
                    </figure>
                </div>
                <div class="col-md-3 col-sm-6 col-6 text-center">
                    <figure>
                        <img src="{{asset('images/promotion04.jpg')}}" alt="รับโบนัสทันที ทุกยอดฝาก"
                            class="img-fluid">
                    </figure>
                </div>
            </div>
        </section>
        <section class="why-us">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset('images/banner300x250_2.webp')}}" class="img-fluid"
                        alt="slotxo, live22">
                </div>
                <div class="col-md-6">
                    <header style="border-left:5px solid #f3123e">
                        <h2 style="padding-left:10px;" class="text-danger">ทำไมต้อง SLOT 999</h2>
                    </header>
                    <strong style="font-size:1.2rem; padding: 0 15px;">บริการเกม <strong>slot</strong> ผ่านระบบอัตโนมัติ
                        เริ่มต้นเพียง 1 บาท!</strong>
                    <br>
                    <br>
                    <ul>
                        <li>ระบบอัตโนมัติ รวดเร็วที่สุด ดีที่สุดในตอนนี้</li>
                        <li>ฝากขั้นต่ำเพียง 1 บาท</li>
                        <li>เติมเงินได้หลายช่องทาง เช่น ทรูวอเลท ทรูมันนี่ พร้อมเพลย์ และธนาคารชั้นนำ</li>
                        <li>บริการผ่านระบบอัตโนมัติทั้งหมด</li>
                        <li>มีพนักงานคอยให้บริการตลอด 24 ชั่วโมง</li>
                        <li>มีเกมให้เล่นมากกว่า 100 เกม</li>
                        <li>เราให้บริการ<strong>คาสิโนออนไลน์</strong> มาไม่ต่ำกว่า 9 ปี</li>
                        <li>มั่นคง ปลอดภัย 100%</li>
                    </ul>
                </div>                
            </div>
        </section>
        <section class="news">
            <header style="border-left:5px solid #078767;">
                <h2 style="padding-left:10px;" class="text-success">ข่าวสาร และกิจกรรม เครดิตฟรี</h2>
            </header>
            <article>
                <ul>
                    <li>
                        <a href=""><img
                                src="{{asset('images/test.png')}}" width="150"
                                height="150" alt="เกม Gold Rally ผจญภัยไปกับการขุดทอง"></a>
                        <div>
                            <span>หมวดหมู่<a target="_blank" href=""
                                    class="text-danger">สล๊อต</a></span>
                            <header>
                                <h3><a target="_blank"
                                        href="">เกม
                                        Gold Rally ผจญภัยไปกับการขุดทอง</a></h3>
                            </header>
                            <small class="text-gray"><i class="fal fa-clock"></i> 1 ปีที่แล้ว</small>
                        </div>
                    </li>
                    <li>
                        <a href=""><img
                                src="{{asset('images/test.png')}}" width="150"
                                height="150" alt="เกม Golden Tour พารวยแจกโชค"></a>
                        <div>
                            <span>หมวดหมู่<a target="_blank" href=""
                                    class="text-danger">สล๊อต</a></span>
                            <header>
                                <h3><a target="_blank"
                                        href="">เกม Golden
                                        Tour พารวยแจกโชค</a></h3>
                            </header>
                            <small class="text-gray"><i class="fal fa-clock"></i> 1 ปีที่แล้ว</small>
                        </div>
                    </li>
                    <li>
                        <a href=""><img
                                src="{{asset('images/test.png')}}" width="150"
                                height="150" alt="เกมยิงปลาออนไลน์ มีมากกว่าแค่ความสนุก"></a>
                        <div>
                            <span>หมวดหมู่<a target="_blank" href=""
                                    class="text-danger">เกมส์ยิงปลา</a></span>
                            <header>
                                <h3><a target="_blank"
                                        href="">เกมยิงปลาออนไลน์
                                        มีมากกว่าแค่ความสนุก</a></h3>
                            </header>
                            <small class="text-gray"><i class="fal fa-clock"></i> 1 ปีที่แล้ว</small>
                        </div>
                    </li>
                    <li>
                        <a href=""><img
                                src="{{asset('images/test.png')}}" width="150"
                                height="150" alt="ทำฝันของคุณให้เป็นจริงได้ ด้วยสล็อตออนไลน์"></a>
                        <div>
                            <span>หมวดหมู่<a target="_blank" href=""
                                    class="text-danger">สล๊อต</a></span>
                            <header>
                                <h3><a target="_blank"
                                        href="">ทำฝันของคุณให้เป็นจริงได้
                                        ด้วยสล็อตออนไลน์</a></h3>
                            </header>
                            <small class="text-gray"><i class="fal fa-clock"></i> 1 ปีที่แล้ว</small>
                        </div>
                    </li>
                </ul>
            </article>
        </section>
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
                    <img
                        src="" />
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