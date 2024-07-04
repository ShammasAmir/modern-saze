<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/front/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('/front/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('/front/css/responsive.css')}}">
  <link rel="stylesheet" href="{{asset('/front/css/fontawesome.css')}}">
  <title>شرکت مدرن سازه</title>
</head>

<body>



  <div class="top-header">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-9">
          <div class="row h-100">
            <div class="col-lg-6 col-xl-5">
              <div class="email-address h-100 d-flex align-items-center">
                آدرس ایمیل :
                <span>Example@gmail.com</span>
              </div>
            </div>
            <div class="col-lg-6 col-xl-5 mt-3 mt-md-0">
              <div class="call h-100 d-flex align-items-center">
                شماره تماس :
                <span>02128282828</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="top-header-social">
            <div class="row py-1">
              <div class="col-lg-12">
                <ul class="d-flex align-items-center justify-content-end">
                  <li><a href=""><i class="fab fa-instagram"></i></a></li>
                  <li><a href=""><i class="fab fa-facebook"></i></a></li>
                  <li><a href=""><i class="fab fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-lg">

        <div class="hamburger-menu">
          <i class="fas fa-bars"></i>
        </div>

        
          <ul class="navbar-nav">
            <div class="close-menu">
              <i class="fas fa-times"></i>
            </div>
            <li class="nav-item">
              <a class="nav-link active" href="#">خانه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">درباره ما</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">خدمات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">پروژه ها</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">بلاگ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">تماس با ما</a>
            </li>

          </ul>
       

        <div class="logo">
          <a href="">Modern-Saze</a>
        </div>
      </div>
    </nav>

    <div class="overlay-menu"></div>
  </header>




  <section class="hero-wrap" style="background-image: url('{{asset('/front/images/hero.png')}}');">
    <div class="overlay"></div>
    <div class="container-lg">
      <div class="row min-vh-100 align-items-center justify-content-center text-center">
        <div class="col-lg-9 ">
          <div class="hero-wrap-content position-relative">
            <span class="subheading text-white fs-5 fw-bold">از 1320</span>
            <h1 class="fs-1 text-white fw-bold lh-5 py-3 my-5">ما خوشحال خواهیم شد که از کار شما مراقبت کنیم و بهترین
              کیفیت را ارائه دهیم.</h1>
            <p class="mt-5">
              <a href="" class="btn btn-dark w-25 py-3">تماس با ما</a>
              <a href="" class="btn btn-primary w-25 text-dark py-3">سوالات متداول</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="about">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-6  mt-5 mt-md-0">
          <div class="about-content">
            <h5 class="text-primary">خوش اومدین به مدرن سازه</h5>
            <h1 class="fs-1 fw-bold py-2 text-dark">ساخت و ساز با کیفیت و مقرون به صرفه</h1>
            <p class="text-muted py-4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
              گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
              مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد کتابهای زیادی در شصت و سه درصد گذشته حال
              و آینده شناخت فراوان جامعه و متخصصان را می طلبد</p>
            <h2 class="fs-3 mb-5 text-dark">چجوری میتونیم کمکتون کنیم</h2>
            <div class="row">
              <div class="col-lg-6">
                <div class="services d-flex">
                  <div class="services-img w-25 p-1">
                    <img src="{{asset('/front/images/about/building.png')}}" class="w-100" alt="">
                  </div>
                  <div class="services-text w-75 px-3 py-2">
                    <h3 class="fs-5 mb-4">ساخت و ساز</h3>
                    <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services d-flex">
                  <div class="services-img w-25 p-1">
                    <img src="{{asset('/front/images/about/floor-plan.png')}}" class="w-100" alt="">
                  </div>
                  <div class="services-text w-75 px-3 py-2">
                    <h3 class="fs-5 mb-4">ساخت و ساز</h3>
                    <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services d-flex">
                  <div class="services-img w-25 p-1">
                    <img src="{{asset('/front/images/about/consult.png')}}" class="w-100" alt="">
                  </div>
                  <div class="services-text w-75 px-3 py-2">
                    <h3 class="fs-5 mb-4">ساخت و ساز</h3>
                    <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="services d-flex">
                  <div class="services-img w-25 p-1">
                    <img src="{{asset('/front/images/about/reverse-engineering.png')}}" class="w-100" alt="">
                  </div>
                  <div class="services-text w-75 px-3 py-2">
                    <h3 class="fs-5 mb-4">ساخت و ساز</h3>
                    <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-5 mt-md-0">
          <div class="about-img w-100" style="background-image: url('{{asset('/front/images/about.png')}}');">
            <div class="counter-wrap d-flex py-3 px-3 align-items-center">
              <div class="icon">
                <img src="{{asset('/front/images/about/engineer.png')}}" alt="">
              </div>
              <div class="text d-flex flex-column px-3">
                <span class="number text-primary fw-bold fs-3">30</span>
                <span class="caption fw-bold fs-5 text-white">
                  سال تجربه کاری
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="intro py-5" style="background-image: url('{{asset('/front/images/intro-1.jpeg')}}');">
    <div class="overlay"></div>
    <div class="container-lg py-5">
      <div class="row">
        <div class="col-lg-10">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-8 mb-4 mb-md-0">
              <div class="intro-text">
                <h6 class="text-white">شما می توانید برای کارهای ساختمانی و نوسازی با ما تماس بگیرید</h6>
                <h1 class="mt-3">ما یک شرکت عالی هستیم</h1>
              </div>
            </div>
            <div class="col-md-4">
              <div class="intro-btn">
                <a href="" class="btn btn-primary text-dark px-5 py-3 w-75">قرار گذاشتن</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="service py-5">
    <div class="container-lg py-5">
      <div class="service-title">
        <h6 class="fs-6 fw-bold text-center text-primary">ما چیکار میکنیم</h6>
        <h1 class="text-center fw-bold mt-4">خدمات ما</h1>
      </div>
      <div class="row py-5">
        <div class="col-md-6">
          <div class="service-item bg-dark d-flex px-4 py-5 shadow-sm">
            <div class="service-item-img">
              <img src="{{asset('/front/images/service/reverse-engineering.png')}}" height="80" width="80" alt="">
            </div>
            <div class="service-item-text pe-4">
              <h2 class="text-white fs-3 mb-3">ساخت و ساز</h2>
              <p class="text-white fs-6 mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                طراحان گرافیک است</p>
              <a href="" class="btn btn-light text-primary fs-6 fw-bold">بیشتر بخوانید</a>
            </div>
          </div>
          <div class="service-item bg-primary d-flex px-4 py-5 shadow-sm mt-4">
            <div class="service-item-img">
              <img src="{{asset('/front/images/service/modern-house (1).png')}}" height="80" width="80" alt="">
            </div>
            <div class="service-item-text pe-4">
              <h2 class="text-white fs-3 mb-3">ساخت و ساز</h2>
              <p class="text-white fs-6 mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                طراحان گرافیک است</p>
              <a href="" class="btn btn-light text-primary fs-6 fw-bold">بیشتر بخوانید</a>
            </div>
          </div>
          <div class="service-item bg-light d-flex px-4 py-5 shadow-sm mt-4">
            <div class="service-item-img">
              <img src="{{asset('/front/images/service/engineer.png')}}" height="80" width="80" alt="">
            </div>
            <div class="service-item-text pe-4">
              <h2 class="text-dark fs-3 mb-3">ساخت و ساز</h2>
              <p class="text-dark fs-6 mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                گرافیک است</p>
              <a href="" class="btn btn-light text-primary fs-6 fw-bold">بیشتر بخوانید</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex mt-4 mt-md-0">
          <div class="service-img w-100" style="background-image: url('{{asset('/front/images/service.webp')}}');"></div>
        </div>
      </div>
    </div>
  </section>


  <section class="counter-section py-5" style="background-image: url('{{asset('/front/images/counter.png')}}');">
    <div class="overlay"></div>
    <div class="container-lg py-5">
      <div class="row">
        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="counter-item d-flex align-items-center justify-content-sm-center">
            <div class="counter-img w-25 ps-3">
              <img src="{{asset('/front/images/engineer.png')}}" class="w-100" alt="">
            </div>
            <div class="counter-text">
              <span class="counter text-primary fs-1 fw-bold">3000</span>
              <div class="counter-text-name fs-6 text-white">پروژه های تکمیل شده</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="counter-item d-flex align-items-center  justify-content-sm-center">
            <div class="counter-img w-25 ps-3">
              <img src="{{asset('/front/images/engineer.png')}}" class="w-100" alt="">
            </div>
            <div class="counter-text">
              <span class="counter text-primary fs-1 fw-bold">4000</span>
              <div class="counter-text-name fs-6 text-white">مشتریان خوشحال</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="counter-item d-flex align-items-center  justify-content-sm-center">
            <div class="counter-img w-25 ps-3">
              <img src="{{asset('/front/images/engineer.png')}}" class="w-100" alt="">
            </div>
            <div class="counter-text">
              <span class="counter text-primary fs-1 fw-bold">2000</span>
              <div class="counter-text-name fs-6 text-white">پروژه های جاری</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="counter-item d-flex align-items-center  justify-content-sm-center">
            <div class="counter-img w-25 ps-3">
              <img src="{{asset('/front/images/engineer.png')}}" class="w-100" alt="">
            </div>
            <div class="counter-text">
              <span class="counter text-primary fs-1 fw-bold">14000</span>
              <div class="counter-text-name fs-6 text-white">مهندسین و کارمندان</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="team py-5">
    <div class="container py-5">
      <div class="team-title">
        <h6 class="fs-6 fw-bold text-center text-primary">تیم و کارکنان</h6>
        <h1 class="text-center fw-bold mt-4">مهندسین و کارکنان ما</h1>
      </div>

      <div class="row mt-5">
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('{{asset('/front/images/staff/1.webp')}}');">
              <ul>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold">ناهید محمدی</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">مهندس ارشد</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('{{asset('/front/images/staff/2.webp')}}');">
              <ul>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold">جواد قاسمی</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">مهندس ارشد</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('{{asset('/front/images/staff/3.webp')}}');">
              <ul>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold"> رضا قاسمی</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">مهندس ارشد</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="team-item">
            <div class="team-item-img" style="background-image: url('{{asset('/front/images/staff/4.webp')}}');">
              <ul>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="team-item-text py-3 px-3">
              <h4 class="text-center fs-5 fw-bold">احمد محمدی</h4>
              <h6 class="text-muted text-center fs-6 fw-bold">مهندس ارشد</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="project overflow-hidden w-100 py-5">
    <div class="project-title py-5">
      <h6 class="fs-6 fw-bold text-center text-primary">نمونه کارها</h6>
      <h1 class="text-center fw-bold mt-4">پروژه ها</h1>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="project-item">
          <img src="{{asset('/front/images/project/project1.png')}}" class="w-100" alt="">
          <div class="project-search">
            <a href="">
              <i class="fas fa-search"></i>
            </a>
          </div>
          <div class="project-description">
            <h2 class="text-white fs-5">پروژه اول</h2>
            <h3 class="fs-4 text-white">این پروژه اول است</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="project-item">
          <img src="{{asset('/front/images/project/project2.png')}}" class="w-100" alt="">
          <div class="project-search">
            <a href="">
              <i class="fas fa-search"></i>
            </a>
          </div>
          <div class="project-description">
            <h2 class="text-white fs-5">پروژه اول</h2>
            <h3 class="fs-4 text-white">این پروژه اول است</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="project-item">
          <img src="{{asset('/front/images/project/project3.png')}}" class="w-100" alt="">
          <div class="project-search">
            <a href="">
              <i class="fas fa-search"></i>
            </a>
          </div>
          <div class="project-description">
            <h2 class="text-white fs-5">پروژه اول</h2>
            <h3 class="fs-4 text-white">این پروژه اول است</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="project-item">
          <img src="{{asset('/front/images/project/project4.png')}}" class="w-100" alt="">
          <div class="project-search">
            <a href="">
              <i class="fas fa-search"></i>
            </a>
          </div>
          <div class="project-description">
            <h2 class="text-white fs-5">پروژه اول</h2>
            <h3 class="fs-4 text-white">این پروژه اول است</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="project-item">
          <img src="{{asset('/front/images/project/project5.png')}}" class="w-100" alt="">
          <div class="project-search">
            <a href="">
              <i class="fas fa-search"></i>
            </a>
          </div>
          <div class="project-description">
            <h2 class="text-white fs-5">پروژه اول</h2>
            <h3 class="fs-4 text-white">این پروژه اول است</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="project-item">
          <img src="{{asset('/front/images/project/project6.png')}}" class="w-100" alt="">
          <div class="project-search">
            <a href="">
              <i class="fas fa-search"></i>
            </a>
          </div>
          <div class="project-description">
            <h2 class="text-white fs-5">پروژه اول</h2>
            <h3 class="fs-4 text-white">این پروژه اول است</h3>
          </div>
        </div>
      </div>
    </div>

  </section>



  <section class="testimonial py-5">
    <div class="testimonial-title">
      <h6 class="fs-6 fw-bold text-center text-primary">نظرات مشتریان</h6>
      <h1 class="text-center fw-bold mt-4">مشتریان خوشحال</h1>
    </div>
    <div class="container-lg py-5">
      <div class="row py-5 justify-content-center">
        <div class="col-lg-8 col-md-7">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="bg-primary active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" class="bg-primary" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" class="bg-primary" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner pb-5">
              <div class="slider-item bg-white p-4 carousel-item active">
                <div class="slider-item-info d-flex align-items-center">
                  <img src="{{asset('/front/images/testimonial/1.webp')}}" class="img-fluid rounded-circle px-3" alt="">
                  <div class="information">
                    <h3 class="fs-5 fw-bold">جان جاناتانی</h3>
                    <h4 class="fs-6 text-primary mt-2">مدیر شرکت رایانه گستر</h4>
                  </div>
                </div>
                <div class="slider-item-descritpion">
                  <p class="text-muted mt-5  fs-6">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                    استفاده از طراحان گرافیک استلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                    از طراحان گرافیک است</p>
                </div>
              </div>
              <div class="slider-item bg-white p-4 carousel-item">
                <div class="slider-item-info d-flex align-items-center">
                  <img src="{{asset('/front/images/testimonial/2.webp')}}" class="img-fluid rounded-circle px-3" alt="">
                  <div class="information">
                    <h3 class="fs-5 fw-bold">جان جاناتانی</h3>
                    <h4 class="fs-6 text-primary mt-2">مدیر شرکت رایانه گستر</h4>
                  </div>
                </div>
                <div class="slider-item-descritpion">
                  <p class="text-muted mt-5  fs-6">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                    استفاده از طراحان گرافیک استلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                    از طراحان گرافیک است</p>
                </div>
              </div>
              <div class="slider-item bg-white p-4 carousel-item">
                <div class="slider-item-info d-flex align-items-center">
                  <img src="{{asset('/front/images/testimonial/1.webp')}}" class="img-fluid rounded-circle px-3" alt="">
                  <div class="information">
                    <h3 class="fs-5 fw-bold">جان جاناتانی</h3>
                    <h4 class="fs-6 text-primary mt-2">مدیر شرکت رایانه گستر</h4>
                  </div>
                </div>
                <div class="slider-item-descritpion">
                  <p class="text-muted mt-5  fs-6">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                    استفاده از طراحان گرافیک استلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                    از طراحان گرافیک است</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>



  <section class="blogs py-5">
    <div class="blog-title py-5">
      <h6 class="fs-6 fw-bold text-center text-primary">وبلاگ ما </h6>
      <h1 class="text-center fw-bold mt-4">بلاگ های اخیر</h1>
    </div>

    <div class="container-lg ">
      <div class="row py-5">
        <div class="col-lg-4 col-md-6 mt-3 mt-md-0">
          <div class="blog-item bg-white">
            <div class="blog-img position-relative">
              <a href="">
                <img src="{{asset('/front/images/blog/1.webp')}}" class="w-100" alt="">
                <div class="date">10 شهریور</div>
              </a>
            </div>
            <div class="blog-text px-4">
              <div class="blog-info d-flex py-3">
                <div class="author d-flex">
                  <i class="fas fa-user"></i>
                  <h6 class="pe-1">ادمین</h6>
                </div>
                <div class="comment text-primary d-flex pe-3">
                  <i class="fas fa-comment"></i>
                  <h6 class="pe-1">5 کامنت</h6>
                </div>
              </div>
              <div class="blog-text-title">
                <a href="">
                  <h2 class="fs-5 fw-bold">لورم ایپسوم متن ساختگی با تولید سادگی</h2>
                </a>
              </div>
              <div class="blog-decription">
                <p class="text-muted py-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                  طراحان گرافیک استلورم
                  ایپسوم متن ساختگی با تولید</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3 mt-md-0">
          <div class="blog-item bg-white">
            <div class="blog-img position-relative">
              <a href="">
                <img src="{{asset('/front/images/blog/2.webp')}}" class="w-100" alt="">
                <div class="date">10 شهریور</div>
              </a>
            </div>
            <div class="blog-text px-4">
              <div class="blog-info d-flex py-3">
                <div class="author d-flex">
                  <i class="fas fa-user"></i>
                  <h6 class="pe-1">ادمین</h6>
                </div>
                <div class="comment text-primary d-flex pe-3">
                  <i class="fas fa-comment"></i>
                  <h6 class="pe-1">5 کامنت</h6>
                </div>
              </div>
              <div class="blog-text-title">
                <a href="">
                  <h2 class="fs-5 fw-bold">لورم ایپسوم متن ساختگی با تولید سادگی</h2>
                </a>
              </div>
              <div class="blog-decription">
                <p class="text-muted py-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                  طراحان گرافیک استلورم
                  ایپسوم متن ساختگی با تولید</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3 mt-md-0">
          <div class="blog-item bg-white">
            <div class="blog-img position-relative">
              <a href="">
                <img src="{{asset('/front/images/blog/3.webp')}}" class="w-100" alt="">
                <div class="date">10 شهریور</div>
              </a>
            </div>
            <div class="blog-text px-4">
              <div class="blog-info d-flex py-3">
                <div class="author d-flex">
                  <i class="fas fa-user"></i>
                  <h6 class="pe-1">ادمین</h6>
                </div>
                <div class="comment text-primary d-flex pe-3">
                  <i class="fas fa-comment"></i>
                  <h6 class="pe-1">5 کامنت</h6>
                </div>
              </div>
              <div class="blog-text-title">
                <a href="">
                  <h2 class="fs-5 fw-bold">لورم ایپسوم متن ساختگی با تولید سادگی</h2>
                </a>
              </div>
              <div class="blog-decription">
                <p class="text-muted py-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                  طراحان گرافیک استلورم
                  ایپسوم متن ساختگی با تولید</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="more-blog text-center">
        <a href="" class="text-dark bg-primary fw-bold px-5 p-2">همه بلاگ ها</a>
      </div>
    </div>
  </section>


  <section class="contact" style="background-image: url('images/contact.png');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mt-3 mt-lg-0">
          <div class="contact-form">
            <div class="contact-form-title py-4">
              <h6 class="fs-6 fw-bold text-right text-primary">یک پیام ارسال کنید </h6>
              <h1 class="fs-5 text-right fw-bold mt-4">ارسال پیام به ما</h1>
            </div>
            <form>
              <div class="row">
                <div class="col-lg-6">
                  <div class="input-group">
                    <label for="fullname">نام و نام خانوادگی شما</label>
                    <input type="text" id="fullname" class="w-100 p-2 mt-2" placeholder="نام ونام خانوادگی">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group">
                    <label for="email">ایمیل شما</label>
                    <input type="email" id="email" class="w-100 p-2 mt-2" placeholder="ایمیل شما">
                  </div>
                </div>
                <div class="col-lg-12 mt-4">
                  <div class="input-group">
                    <label for="sobject">موضوع</label>
                    <input type="text" id="sobject" class="w-100 p-2 mt-2" placeholder="موضوع">
                  </div>
                </div>
                <div class="col-lg-12 mt-4">
                  <div class="input-group">
                    <label for="desc">محتوای پیام شما</label>
                    <textarea id="desc" class="w-100 p-2 mt-2" placeholder="پیام شما"></textarea>
                  </div>
                </div>
                <div class="col-lg-12 mt-4">
                  <button class="btn btn-primary w-25 text-dark py-2 border-0">ارسال</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 mt-3 mt-lg-0">
          <div class="faq pe-3">
            <h6 class="text-primary">سوالات متداول</h6>
            <h1 class="text-dark fw-bold">می خواهید چیزی از ما بپرسید؟</h1>
            <p class="mt-5 text-muted mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
              گرافیک استلورم ایپسوم متن ساختگی با تولیدلورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
              استفاده از طراحان گرافیک استلورم ایپسوم متن ساختگی با تولید</p>

            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    این سوال شماره یک است
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                      است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی
                      تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت
                      و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                      بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد
                      کرد</strong>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    این سوال شماره دوم است
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                      است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی
                      تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت
                      و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                      بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد
                      کرد</strong>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    این سوال شماره سوم است
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک
                      است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی
                      تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت
                      و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت
                      بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد
                      کرد</strong>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>



  <footer class="footer pt-5">
    <div class="container-lg pt-5">
      <div class="row">
        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
          <div class="footer-about">
            <h5 class="fw-bold text-white">شرکت مدرن سازه</h5>
            <p class="mt-5 text-white">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک استلورم ایپسوم متن ساختگی با تولید</p>
            <ul class="d-flex">
              <li><a href=""><i class="fab fa-instagram"></i></a></li>
              <li><a href=""><i class="fab fa-facebook"></i></a></li>
              <li><a href=""><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
          <div class="footer-service">
            <h5 class="fs-5 text-white mb-5">خدمات</h5>
            <div class="footer-service-item d-flex mt-3">
              <div class="footer-service-img">
                <img src="{{asset('/front/images/service/service-item/1.webp')}}"  alt="">
              </div>
              <div class="footer-service-text pe-3">
                <h5><a href="" class="text-white fs-6">این خیلی فوق العاده است و زیباست</a></h5>
                <div class="footer-service-author text-primary mt-4">
                  <span><i class="fas fa-user"></i>مدیر</span>
                  <span><i class="fas fa-comment"></i>5 نظر</span>
                </div>
              </div>
            </div>
            <div class="footer-service-item d-flex mt-3">
              <div class="footer-service-img">
                <img src="{{asset('/front/images/service/service-item/2.webp')}}"  alt="">
              </div>
              <div class="footer-service-text pe-3">
                <h5><a href="" class="text-white fs-6">این خیلی فوق العاده است و زیباست</a></h5>
                <div class="footer-service-author text-primary mt-4">
                  <span><i class="fas fa-user"></i>مدیر</span>
                  <span><i class="fas fa-comment"></i>5 نظر</span>
                </div>
              </div>
            </div>
            <div class="footer-service-item d-flex mt-3">
              <div class="footer-service-img">
                <img src="{{asset('/front/images/service/service-item/3.webp')}}"  alt="">
              </div>
              <div class="footer-service-text pe-3">
                <h5><a href="" class="text-white fs-6">این خیلی فوق العاده است و زیباست</a></h5>
                <div class="footer-service-author text-primary mt-4">
                  <span><i class="fas fa-user"></i>مدیر</span>
                  <span><i class="fas fa-comment"></i>5 نظر</span>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
          <div class="footer-quick-link">
            <h5 class="fs-5 text-white mb-5">دسترسی سریع</h5>
            <ul>
              <li><a href=""><i class="fas fa-chevron-left"></i>صفحه نخست </a></li>
              <li><a href=""> <i class="fas fa-chevron-left"></i>درباره ما</a></li>
              <li><a href=""> <i class="fas fa-chevron-left"></i>تماس با ما</a></li>
              <li><a href=""> <i class="fas fa-chevron-left"></i>خدمات</a></li>
              <li><a href=""> <i class="fas fa-chevron-left"></i>پروژه ها</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mt-5 mt-lg-0">
          <div class="footer-question">
            <h5 class="fs-5 text-white mb-5">سوالی دارید؟</h5>
            <ul>
              <li class="d-flex mt-3"><i class="fas fa-map text-primary"></i> <h5 class="text-white fs-6 pe-2">تهران سمت راست طبقه چهارم</h5></li>
              <li class="d-flex mt-3"><i class="fas fa-phone text-primary"></i><h5 class="text-white fs-6 pe-2">02128282828</h5></li>
              <li class="d-flex mt-3"><i class="fas fa-envelope text-primary"></i><h5 class="text-white fs-6 pe-2">Example@gmail.com</h5></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copy-right">
      <p>&copy; تمامی حقوق مادی و معنوی این وب سایت متعلق به امیر شماس می باشد.</p>
    </div>
  </footer>


  <script src="{{asset('/front/js/jquery.js')}}"></script>
  <script src="{{asset('/front/js/bootstrap.js')}}"></script>
  <script src="{{asset('/front/js/fontawesome.js')}}"></script>
  <script src="{{asset('/front/js/counterup.js')}}"></script>
  <script src="{{asset('/front/js/waypoints.js')}}"></script>
  <script src="{{asset('/front/js/main.js')}}"></script>
  <script>
    $('.counter').counterUp({
      delay: 10,
      time: 3000
    });
  </script>
</body>

</html>