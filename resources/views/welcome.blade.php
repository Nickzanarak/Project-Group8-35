@include ('layouts/frontend/head')

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to Up Rank SiriusNick</h1>
      <h2>Don't waste another minute, get yours now.</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    @include ('layouts/frontend/header')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="{{asset('frontend/img/Cutnew.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Up Rank Service Website By Siriusnick</h3>
            <p data-aos="fade-up" data-aos-delay="200">
              ปลอดภัย ไม่โกง100% มีเครดิตรองรับ เล่นโดยผู้เล่นฝีมือดี ไม่ใช้โปรแกรมในการช่วยเล่น งานเร็ว!
            </p>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-shield"></i>
              <h4>“ ปลอดภัย “ </h4>
              <p>รหัสของลูกค้าจะปลอดภัย 100 %!</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-user"></i>
              <h4>“ ทีมงานระดับ Professional ”</h4>
              <p>ทีมงานระดับ Top 10 ของประเทศ!</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-window"></i>
              <h4>“ เครดิตเเน่น “</h4>
              <p>เครดิตพร้อมรีวิวเเน่นๆ!</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-tachometer"></i>
              <h4>“ งานไวงานดี ”</h4>
              <p>งานไวใช้เวลาไม่นานเกินรอ!</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-heart"></i>
              <h4>“ คุณภาพดี “</h4>
              <p>คุณภาพดีเกินราคา!</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Who is it suitable for?</h2>
          <p>หรือว่าเหมาะสำหรับใครนั้นเองในบล็อคนี้จะบอกสำหรับการปั้มเเรงค์นี้เหมาะสำหรับใครบ้างที่ประสบปัญหา</p>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4> 1 สำหรับคนที่ไม่มีเวลาเล่น</h4>
                  <p>สำหรับใครที่ไม่มีเวลาเล่นเเต่อยากได้เเรงค์เเบบหล่อเท่</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4> 2 สำหรับคนที่อยู่ในสภาพเเวดล้อมที่เเย่</h4>
                  <p>สำหรับคนที่สะภาพเเวดล้อมที่เเย่เน็ตไหลเน็ตหลุดบ่อยๆ</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4> 3 สำหรับคนที่เเพ้มารัวๆเเล้วหัวร้อน</h4>
                  <p>เหมาะสำหรับคนที่เเพ้รัวๆเเล้วัหัวร้อนหงุดหงิดที่เล่นไม่ขึ้นจนหัวร้อน</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                  <h4> 4 สำหรับคนที่เจอคนโยนเกมจนเบื่อไม่อยากเล่น</h4>
                  <p>สำหรับคนที่เจอเเต่คนโยนเกมเบื่อไม่อยากเล่นเเต่อยากมีเเรงค์เท่ๆ</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-left">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="{{asset('frontend/img/background/TBG2.png')}}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="{{asset('frontend/img/background/TBG2.png')}}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="{{asset('frontend/img/background/TBG2.png')}}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="{{asset('frontend/img/background/TBG2.png')}}" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Service</h2>
          <p>ทางร้านรับปั้มแรงค์ By Siriusnick มีรายการบริการให้เลือกมากมาย ราคาถูก ลูกค้าสามารถจ้างด้วยงบประมาณที่ต้องการ มาพร้อมกับระดับแรงค์เกมและของแถมสุดประทับใจ </p>
          <p>มีเฉพาะที่ร้านรับปั้มแรงค์ By Siriusnick เท่านั้น!</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <a href="{{ route('welcome') }}">
                <li @if ($type=='' ) class="filter-active" @endif>ทั้งหมด</li>
              </a>
              @foreach ($categories as $category)
              <a href="{{ route('welcome') }}?type={{ $category->category_id }}">
                <li @if ($type==$category->category_id) class="filter-active" @endif>{{ $category->name }}</li>
                @endforeach
            </ul>
          </div>
        </div>
        <div class="row">
          @foreach ($product as $products)
          <div class="col-lg-4 col-md-6 portfolio-item ">
            <div class="portfolio-wrap">
              <img src="{{ asset('admin/img/' . $products->image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$products->name}}</h4>
                <p>{{ $products->price }}</p>
                <p>{{ $products->category->name }}</p>
              </div>
            </div>

          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Steps Section ======= -->
    <section id="steps" class="steps section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Detail Rank.</h2>
          <p>อธิบายราคาเเละรายระเอียดเเรงค์เพิ่มเติมพร้อมราคาเหมาเเรงค์</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in">
            <span>01</span>
            <h4>Rank Conqueror</h4>
            <p>น้อยกว่า Conqueror 10 ดาว จะตกดาวละ 30 บาท (มากกว่า คอน 10 ดาว พูดคุยเพิ่มเติมกับแอดมินได้เลยครับ)</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="100">
            <span>02</span>
            <h4>Rank Commander</h4>
            <p>ตกดาวละ 25 บาท มีราคาเหมาจากCommander 5 ไป Conqueror 1 ดาวราคา 500 บาท รวม 25 ดาว</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="200">
            <span>03</span>
            <h4>Rank Diamond</h4>
            <p>ตกดาวละ 20 บาท มีราคาเหมาจากDiamond 5 ไป Commander 5 ราคา 400 บาทรวม 25 ดาว</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="300">
            <span>04</span>
            <h4>Rank Plattinum</h4>
            <p>ตกดาวละ 20 บาท มีราคาเหมาจากPlattinum 5 ไป Diamond 5 ราคา 250 บาท รวม 25 ดาว</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="400">
            <span>05</span>
            <h4>Rank Gold</h4>
            <p>ตกดาวละ 15 บาท มีราคาเหมาจากGold 3 ไป Plattinum 5 ราคา 120 บาท รวม 12 ดาว</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="500">
            <span>06</span>
            <h4>Rank Silver</h4>
            <p>ตกดาวละ 10 บาท มีราคาเหมาจากSilver 3 ไป Gold 3 ราคา 60 บาท รวม 9 ดาว</p>
          </div>

        </div>

      </div>
    </section><!-- End Steps Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Promotion.</h2>
          <p>ร้านรับปั้มแรงค์ By Siriusnick มีโปรโมชั่นมากมาย เพื่อตอบแทนลูกค้าทุกท่านที่ใช้บริการกับเรา ทั้งเน้นฟรีและแถมอีกเพียบ!</p>
        </div>

        <div class="row">
          @foreach ($promotion as $promotions)
          <div class="col-lg-4 col-md-6">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">{{$promotions->name}}</a></h4>
              <img src="{{ asset('admin/img/' . $promotions->image) }}" width="350px" alt="">
              <p class="description"><br></p>
              <p class="description">{{$promotions->Detail}}</p>
            </div>
          </div>
          @endforeach



        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Teamzanarak</h2>
          <p>รับปั้มแรงค์ By Siriusnick มีทีมงานฝีมือดีระดับโปรเพลเยอร์ พร้อมให้บริการกับลูกค้าทุกท่าน ไม่ว่าจะเป็นแรงค์ไหน ทีมงานรับปั้มแรงค์ By Siriusnick สามารถจัดสรรให้ลูกค้าได้ ไว้ใจทีมงานเราได้เลย!</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  รักมันขมกินผมไหมครับ
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('frontend/img/teamzamak/nicknickza.jpg')}}" class="testimonial-img" alt="">
                <h3>Nickzanarak</h3>
                <h4>Ceo &amp; Assistant</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  อยากเป็นไข้ที่ชล เพราะจะได้เป็นคนที่ใช่
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('frontend/img/teamzamak/getzanarak.jpg')}}" class="testimonial-img" alt="">
                <h3>Getzanarak</h3>
                <h4>Team</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  โรงเรียนก็ไม่ได้ไป หวานใจก็ไม่ได้เจอ
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('frontend/img/teamzamak/poohpoohhza.jpg')}}" class="testimonial-img" alt="">
                <h3>Poohzanarak</h3>
                <h4>Team</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  ถ้าอำเภอยังไม่ปิด ผมก็ยังมีสิทธิ์ไปเเจ้งเกิด
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('frontend/img/teamzamak/tultulza.jpg')}}" class="testimonial-img" alt="">
                <h3>Tulzanarak</h3>
                <h4>Team</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  ยิ้มจางๆพอจะทำให้เธอใจบางได้ยัง
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('frontend/img/New Team/Team nn -2.png')}}" class="testimonial-img" alt="">
                <h3>Nonzanarak</h3>
                <h4>Team</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  ในโคมมีแต่ไฟ ในใจมีแต่เธอ
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{asset('frontend/img/teamzamak/momooza.jpg')}}" class="testimonial-img" alt="">
                <h3>Mozanarak</h3>
                <h4>Assistant</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">



        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
          <div class="container">

            <div class="section-title" data-aos="fade-up">
              <h2>Team</h2>
              <p>นี้คือทีมผู้พัฒนาเว็บไซต์จากวิทยาลัยเทคโนโลยีพงษ์สวัสดิ์</p>
            </div>

            <div class="row">

              <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up">
                <div class="member">
                  <img src="{{asset('frontend/img/New Team/Team nn-1 .png')}}" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Partarwee Keawparphon</h4>
                      <span>NickNickzanarak</span>
                    </div>
                    <div class="social">
                      <a href="https://www.facebook.com/partarwee.kaewparphon.58"><i class="bi bi-facebook"></i></a>
                      <a href=https://www.instagram.com/nickzanaruk><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                  <img src="{{asset('frontend/img/New Team/Team nn -2.png')}}" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Suparkorn Boonmee</h4>
                      <span>NonNonzanarak</span>
                    </div>
                    <div class="social">
                      <a href=https://www.facebook.com/supakorn.boonmee.161><i class="bi bi-facebook"></i></a>
                      <a href=https://www.instagram.com/nnonsp__><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                  <img src="{{asset('frontend/img/New Team/Team nn-3.jpg')}}" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Chaleamchai Nudchaved</h4>
                      <span>TulTulzanarak</span>
                    </div>
                    <div class="social">
                      <a href=https://www.facebook.com/Chaleamchai.Nudchaved><i class="bi bi-facebook"></i></a>
                      <a href=https://www.instagram.com/tulz.pablo><i class="bi bi-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>


            </div>

          </div>
        </section><!-- End Team Section -->

        <!-- ======= F.A.Q Section ======= -->

        <section id="F.A.Q" class="F.A.Q">
          <section id="faq" class="faq section-bg">
            <div class="container">

              <div class="section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>ในการใช้บริการร้านรับปั้มแรงค์ By Siriusnick มีคำถามที่ทางร้านพบเป็นประจำ ทางร้านจึงนำคำถามมารวบรวมไว้เพื่อสะดวกต่อการใช้งานและการตัดสินใจในการใช้บริการกับทางร้าน</p>
              </div>

              <div class="faq-list">
                <ul>
                  <li data-aos="fade-up">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"> ใช้เวลาในการเล่นนานไหม? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                      <p>
                        เฉลี่ยเเล้วระยะเวลาในการเล่น 1 ชั่วโมง สามารถเล่นได้ 2-3 ดาว
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"> รหัสเกมของลูกค้าจะปลอดภัยหรือไม่?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        ข้อมูลในรหัสปลอดภัยแน่นอน 100% หลังจากจบงานของลูกค้า ทีมงานจะล็อคเอาท์และแจ้งลูกค้าทันที
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"> สามารถเริ่มงานได้เลยหรือไม่? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        หากไม่มีคิวอยู่ก่อนหน้าสามารถเริ่มงานได้ภายใน 10 - 20 นาที เเต่ถ้าหากมีคิวก่อนหน้าแอดมินจะคำนวณเวลาเเละทักมาหากับลูกค้าเมื่อถึงคิว
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed"> มีเครดิตรองรับหรือไม่? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        ทางร้านมีเครดิตรองรับมากกว่า 1000 เครดิตสามารถดูได้โดยการพิมพ์ #เครดิต By SiriusNick ในช่อง Facebook search
                      </p>
                    </div>
                  </li>

                  <li data-aos="fade-up" data-aos-delay="400">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"> ทางร้านได้ใช้โปรเกรมช่วยเล่นหรือไม่? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        ทางร้านไม่ได้ใช้โปรเเกรมช่วยเล่นดาวที่ได้เเต่ละดาวมาจากฝีมือทีมงานของทางร้าน 100 %
                      </p>
                    </div>
                  </li>

                </ul>
              </div>


            </div>
          </section><!-- End F.A.Q Section -->

          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
            <div class="container">

              <div class="section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>นี้คือช่องทางการติดต่อของทางร้าน รับปั้มเเรงค์ By SiriusNick. สนใจสามารถติดตามสอบถามข้อมูลข้างต้นได้เลยครับ </p>
              </div>

              <div class="row no-gutters justify-content-center" data-aos="fade-up">

                <div class="col-lg-5 d-flex align-items-stretch">
                  <div class="info">
                    <div class="facebook">
                      <a href="https://www.facebook.com/%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%B1%E0%B9%89%E0%B8%A1%E0%B9%81%E0%B8%A3%E0%B8%87%E0%B8%84%E0%B9%8C-By-SiriusNick-109553043996180"><i class="bi bi-facebook"></i></a>
                      <h4>Facebook:</h4>
                      <p>รับปั้มเเรงค์ By SiriusNick</p>
                      <p>กดที่รูป Facebook เพื่อชมร้าน</p>
                    </div>

                    <div class="line mt-4">
                      <i class="bi bi-bookmark"></i>
                      <h4>Line:</h4>
                      <p>Lineid:uprankbysiriusnick</p>
                    </div>

                    <div class="phone mt-4">
                      <i class="bi bi-phone"></i>
                      <h4>Call:</h4>
                      <p>092-691-1189</p>
                    </div>

                  </div>

                </div>

                <div class="col-lg-5 d-flex align-items-stretch">
                  <img src="{{asset('frontend/img/page-1.png')}}" class="img-fluid" alt="">
                </div>

              </div>



            </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- footer -->
  @include ('layouts/frontend/footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>