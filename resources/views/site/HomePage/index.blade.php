@extends('site.layouts.master')
@section('page_name')
    ايجارات مصر | الصفحة الرئيسية
@endsection
@section('site_css')

@endsection
@section('content')
    @include('site.layouts.social-navbar')

    <content>
        <!-- main Section -->
        <!-- main Section -->
        <section class="mainSection">
            <div class="container">
                <div class="inner">
                    <!-- text -->
                    <h5 class="subTitle wow fadeInDown delay-1s">
                        وحدات مفروشة للايجار من المالك مباشرة
                    </h5>
                    <h1 class="title wow fadeInDown">الساحل الشمالي</h1>
                    <p class="hint wow fadeInDown delay-2s">
                        الاسعار تبدأ من <span> 1300 </span> جنيه لليوم الواحد
                    </p>
                    <!-- search -->
                    <div class="search">
                        <form action="" class="row flex-wrap align-items-center">
                            <!--  -->
                            <div class="col-sm-6 col-md-4  p-2">
                                <label class="form-label" for="">
                                    <i class="fa-solid fa-magnifying-glass me-1"></i> ابحث عن
                                </label>
                                <select name="" id="" class="select2">
                                    <option value="">شالية</option>
                                    <option value="">شقة</option>
                                    <option value="">فيلا</option>
                                    <option value="">قاعة مناسبات</option>
                                </select>
                            </div>
                            <!--  -->
                            <div class="col-sm-6 col-md-4  p-2">
                                <label class="form-label" for="">
                                    <i class="fa-solid fa-location-dot me-1"></i> اسم المكان
                                </label>
                                <input type="text" class="form-control" />
                            </div>
                            <!--  -->
                            <div class="col p-2">
                                <label class="form-label" for="">
                                    <i class="fa-solid fa-calendar-arrow-down me-1"></i> حدد
                                    تاريخ الوصول
                                </label>
                                <input type="date" class="form-control" />
                            </div>
                            <!--  -->
                            <div class="col p-2">
                                <label class="form-label" for="">
                                    <i class="fa-solid fa-calendar-arrow-up me-1"></i> حدد تاريخ
                                    المغادرة
                                </label>
                                <input type="date" class="form-control" />
                            </div>
                            <!--  -->
                            <button type="submit" class="btn">
                                ابحث الان <i class="fa-solid fa-magnifying-glass ms-1"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end main Section -->
        <!-- best offers -->
        <section class="bestOffers">
            <div class="container">
                <!-- Section Title -->
                <div class="SectionTitle">
                    <h2 class="title">وحدات مختارة</h2>
                    <h6 class="hint">
                        أكثر الوحدات طلباً للموسم الماضي بالإضافة لوحدات جديدة مميزة
                    </h6>
                </div>
                <div class="swiperContainer">
                    <!-- Swiper -->
                    <div class="swiper offerSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- unit -->
                                <div class="unit">
                                    <div class="unitTop">
                                        <a href="unit-details.html">
                                            <img class="unitImg" src="img/home.webp" />
                                        </a>
                                        <span class="uintType"> شالية </span>
                                        <div class="unitAdvertiser">
                                            <img src="img/logo.png" alt="" />
                                            <div class="info">
                                                <h6 class="name">محمود</h6>
                                                <ul class="rate">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="unitBody">
                                        <div class="location">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>الساحل الشمالي - ماونتن فيو</p>
                                        </div>
                                        <a href="unit-details.html" class="adName">
                                            فيلا فاخرة في ماونتن فيو الساحل أول صف بحر
                                        </a>
                                        <div class="price">
                                            <i class="fa-solid fa-money-bill-wave"></i>
                                            <h6>EGP 4000 / <span> يوم </span></h6>
                                        </div>
                                    </div>
                                    <div class="unitContents">
                                        <div class="content">
                                            <i class="fa-duotone fa-bed-front"></i>
                                            <span> 5 </span>
                                        </div>
                                        <div class="content">
                                            <i class="fa-duotone fa-bath"></i>
                                            <span> 3 </span>
                                        </div>
                                        <div class="content">
                                            <i class="fa-duotone fa-garage-car"></i>
                                            <span> 5 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- unit -->
                                <div class="unit">
                                    <div class="unitTop">
                                        <a href="unit-details.html">
                                            <img class="unitImg" src="img/home.webp" />
                                        </a>
                                        <span class="uintType"> شالية </span>
                                        <div class="unitAdvertiser">
                                            <img src="img/logo.png" alt="" />
                                            <div class="info">
                                                <h6 class="name">محمود</h6>
                                                <ul class="rate">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="unitBody">
                                        <div class="location">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>الساحل الشمالي - ماونتن فيو</p>
                                        </div>
                                        <a href="unit-details.html" class="adName">
                                            فيلا فاخرة في ماونتن فيو الساحل أول صف بحر
                                        </a>
                                        <div class="price">
                                            <i class="fa-solid fa-money-bill-wave"></i>
                                            <h6>EGP 4000 / <span> يوم </span></h6>
                                        </div>
                                    </div>
                                    <div class="unitContents">
                                        <div class="content">
                                            <i class="fa-duotone fa-bed-front"></i>
                                            <span> 5 </span>
                                        </div>
                                        <div class="content">
                                            <i class="fa-duotone fa-bath"></i>
                                            <span> 3 </span>
                                        </div>
                                        <div class="content">
                                            <i class="fa-duotone fa-garage-car"></i>
                                            <span> 5 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- unit -->
                                <div class="unit">
                                    <div class="unitTop">
                                        <a href="unit-details.html">
                                            <img class="unitImg" src="img/home.webp" />
                                        </a>
                                        <span class="uintType"> شالية </span>
                                        <div class="unitAdvertiser">
                                            <img src="img/logo.png" alt="" />
                                            <div class="info">
                                                <h6 class="name">محمود</h6>
                                                <ul class="rate">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="unitBody">
                                        <div class="location">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>الساحل الشمالي - ماونتن فيو</p>
                                        </div>
                                        <a href="unit-details.html" class="adName">
                                            فيلا فاخرة في ماونتن فيو الساحل أول صف بحر
                                        </a>
                                        <div class="price">
                                            <i class="fa-solid fa-money-bill-wave"></i>
                                            <h6>EGP 4000 / <span> يوم </span></h6>
                                        </div>
                                    </div>
                                    <div class="unitContents">
                                        <div class="content">
                                            <i class="fa-duotone fa-bed-front"></i>
                                            <span> 5 </span>
                                        </div>
                                        <div class="content">
                                            <i class="fa-duotone fa-bath"></i>
                                            <span> 3 </span>
                                        </div>
                                        <div class="content">
                                            <i class="fa-duotone fa-garage-car"></i>
                                            <span> 5 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- unit -->
                                <div class="unit">
                                    <div class="unitTop">
                                        <a href="unit-details.html">
                                            <img class="unitImg" src="img/home.webp" />
                                        </a>
                                        <span class="uintType"> شالية </span>
                                        <div class="unitAdvertiser">
                                            <img src="img/logo.png" alt="" />
                                            <div class="info">
                                                <h6 class="name">محمود</h6>
                                                <ul class="rate">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="unitBody">
                                        <div class="location">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <p>الساحل الشمالي - ماونتن فيو</p>
                                        </div>
                                        <a href="unit-details.html" class="adName">
                                            فيلا فاخرة في ماونتن فيو الساحل أول صف بحر
                                        </a>
                                        <div class="price">
                                            <i class="fa-solid fa-money-bill-wave"></i>
                                            <h6>EGP 4000 / <span> يوم </span></h6>
                                        </div>
                                    </div>
                                    <div class="unitContents">
                                        <div class="content">
                                            <i class="fa-duotone fa-bed-front"></i>
                                            <span> 5 </span>
                                        </div>
                                        <div class="content">
                                            <i class="fa-duotone fa-bath"></i>
                                            <span> 3 </span>
                                        </div>
                                        <div class="content">
                                            <i class="fa-duotone fa-garage-car"></i>
                                            <span> 5 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="swiper-pagination offerPagination"></div>
                    <!-- button -->
                    <div class="swiper-button-next offerNext"></div>
                    <div class="swiper-button-prev offerPrev"></div>
                </div>
            </div>
        </section>
        <!-- end best offers -->
        <!-- Most popular destinations -->
        <section class="destinations">
            <div class="container">
                <!-- Section Title -->
                <div class="SectionTitle">
                    <h2 class="title">أكثر الوجهات طلباً</h2>
                    <h6 class="hint">
                        شاهد أكثر الوجهات طلباً بالساحل الشمالي مع مجموعه مميزة ومنتقاة
                        بعناية من العروض الحصرية بها قمنا باختيارها خصيصاً من اجلك
                    </h6>
                </div>
                <div class="destination">
                    <a
                        href="#!"
                        class="city"
                        style="background-image: url({{asset('assets/site/img/home.webp')}})"
                    >
                        <div class="info">
                            <h4 class="name">الساحل الشمالي</h4>
                            <p>الأسعار تبدأ من 1400 جنيه</p>
                        </div>
                    </a>

                    @foreach($categories as $category)


                    <a
                        href="#!"
                        class="city"
                        style="background-image: url({{$category->image}})"
                    >
                        <div class="info">
                            <h4 class="name">{{$category->name}}</h4>
                            <p>الأسعار تبدأ من 1400 جنيه</p>
                        </div>
                    </a>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- end Most popular destinations -->
        <!-- most recent -->
        <section class="mostRecent">
            <div class="container">
                <!-- Section Title -->
                <div class="SectionTitle">
                    <h2 class="title">احدث الوحدات المضافة</h2>
                    <h6 class="hint">تصفح احدث الوحدات التي قام المعلنون بعرضها </h6>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4  p-1">
                        <!-- unit -->
                        <div class="unit">
                            <div class="unitTop">
                                <a href="unit-details.html">
                                    <img class="unitImg" src="img/home.webp" />
                                </a>
                                <span class="uintType"> شالية </span>
                                <div class="unitAdvertiser">
                                    <img src="img/logo.png" alt="" />
                                    <div class="info">
                                        <h6 class="name">محمود</h6>
                                        <ul class="rate">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="unitBody">
                                <div class="location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>الساحل الشمالي - ماونتن فيو</p>
                                </div>
                                <a href="unit-details.html" class="adName">
                                    فيلا فاخرة في ماونتن فيو الساحل أول صف بحر
                                </a>
                                <div class="price">
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                    <h6>EGP 4000 / <span> يوم </span></h6>
                                </div>
                            </div>
                            <div class="unitContents">
                                <div class="content">
                                    <i class="fa-duotone fa-bed-front"></i>
                                    <span> 5 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-bath"></i>
                                    <span> 3 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-garage-car"></i>
                                    <span> 5 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4  p-1">
                        <!-- unit -->
                        <div class="unit">
                            <div class="unitTop">
                                <a href="unit-details.html">
                                    <img class="unitImg" src="img/home.webp" />
                                </a>
                                <span class="uintType"> شالية </span>
                                <div class="unitAdvertiser">
                                    <img src="img/logo.png" alt="" />
                                    <div class="info">
                                        <h6 class="name">محمود</h6>
                                        <ul class="rate">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="unitBody">
                                <div class="location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>الساحل الشمالي - ماونتن فيو</p>
                                </div>
                                <a href="unit-details.html" class="adName">
                                    فيلا فاخرة في ماونتن فيو الساحل أول صف بحر
                                </a>
                                <div class="price">
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                    <h6>EGP 4000 / <span> يوم </span></h6>
                                </div>
                            </div>
                            <div class="unitContents">
                                <div class="content">
                                    <i class="fa-duotone fa-bed-front"></i>
                                    <span> 5 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-bath"></i>
                                    <span> 3 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-garage-car"></i>
                                    <span> 5 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4  p-1">
                        <!-- unit -->
                        <div class="unit">
                            <div class="unitTop">
                                <a href="unit-details.html">
                                    <img class="unitImg" src="img/home.webp" />
                                </a>
                                <span class="uintType"> شالية </span>
                                <div class="unitAdvertiser">
                                    <img src="img/logo.png" alt="" />
                                    <div class="info">
                                        <h6 class="name">محمود</h6>
                                        <ul class="rate">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="unitBody">
                                <div class="location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>الساحل الشمالي - ماونتن فيو</p>
                                </div>
                                <a href="unit-details.html" class="adName">
                                    فيلا فاخرة في ماونتن فيو الساحل أول صف بحر
                                </a>
                                <div class="price">
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                    <h6>EGP 4000 / <span> يوم </span></h6>
                                </div>
                            </div>
                            <div class="unitContents">
                                <div class="content">
                                    <i class="fa-duotone fa-bed-front"></i>
                                    <span> 5 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-bath"></i>
                                    <span> 3 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-garage-car"></i>
                                    <span> 5 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4  p-1">
                        <!-- unit -->
                        <div class="unit">
                            <div class="unitTop">
                                <a href="unit-details.html">
                                    <img class="unitImg" src="img/home.webp" />
                                </a>
                                <span class="uintType"> شالية </span>
                                <div class="unitAdvertiser">
                                    <img src="img/logo.png" alt="" />
                                    <div class="info">
                                        <h6 class="name">محمود</h6>
                                        <ul class="rate">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="unitBody">
                                <div class="location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>الساحل الشمالي - ماونتن فيو</p>
                                </div>
                                <a href="unit-details.html" class="adName">
                                    فيلا فاخرة في ماونتن فيو الساحل أول صف بحر
                                </a>
                                <div class="price">
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                    <h6>EGP 4000 / <span> يوم </span></h6>
                                </div>
                            </div>
                            <div class="unitContents">
                                <div class="content">
                                    <i class="fa-duotone fa-bed-front"></i>
                                    <span> 5 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-bath"></i>
                                    <span> 3 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-garage-car"></i>
                                    <span> 5 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4  p-1">
                        <!-- unit -->
                        <div class="unit">
                            <div class="unitTop">
                                <a href="unit-details.html">
                                    <img class="unitImg" src="img/home.webp" />
                                </a>
                                <span class="uintType"> شالية </span>
                                <div class="unitAdvertiser">
                                    <img src="img/logo.png" alt="" />
                                    <div class="info">
                                        <h6 class="name">محمود</h6>
                                        <ul class="rate">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="unitBody">
                                <div class="location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>الساحل الشمالي - ماونتن فيو</p>
                                </div>
                                <a href="unit-details.html" class="adName">
                                    فيلا فاخرة في ماونتن فيو الساحل أول صف بحر
                                </a>
                                <div class="price">
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                    <h6>EGP 4000 / <span> يوم </span></h6>
                                </div>
                            </div>
                            <div class="unitContents">
                                <div class="content">
                                    <i class="fa-duotone fa-bed-front"></i>
                                    <span> 5 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-bath"></i>
                                    <span> 3 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-garage-car"></i>
                                    <span> 5 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4  p-1">
                        <!-- unit -->
                        <div class="unit">
                            <div class="unitTop">
                                <a href="unit-details.html">
                                    <img class="unitImg" src="img/home.webp" />
                                </a>
                                <span class="uintType"> شالية </span>
                                <div class="unitAdvertiser">
                                    <img src="img/logo.png" alt="" />
                                    <div class="info">
                                        <h6 class="name">محمود</h6>
                                        <ul class="rate">
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="unitBody">
                                <div class="location">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <p>الساحل الشمالي - ماونتن فيو</p>
                                </div>
                                <a href="unit-details.html" class="adName">
                                    فيلا فاخرة في ماونتن فيو الساحل أول صف بحر
                                </a>
                                <div class="price">
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                    <h6>EGP 4000 / <span> يوم </span></h6>
                                </div>
                            </div>
                            <div class="unitContents">
                                <div class="content">
                                    <i class="fa-duotone fa-bed-front"></i>
                                    <span> 5 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-bath"></i>
                                    <span> 3 </span>
                                </div>
                                <div class="content">
                                    <i class="fa-duotone fa-garage-car"></i>
                                    <span> 5 </span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="showAll">
                    <a href="#!"> عرض الكل <i class="fa-duotone fa-left-long ms-1"></i>  </a>
                </div>
            </div>
        </section>
        <!-- end most recent -->
        <!-- steps -->
        <section class="steps">
            <div class="container">
                <!-- Section Title -->
                <div class="SectionTitle">
                    <h2 class="title">خطوات بسيطة</h2>
                    <h6 class="hint">
                        نسهل عليك عملية حجز و تاجير الاماكن سواء كانت شالية , فيلا , شقة ,
                        قاعة مناسبات في خطوات سهلة وبسيطة
                    </h6>
                </div>
                <!-- steps -->
                <div class="allSteps">
                    <div class="step">
                        <img src="{{asset('assets/site/img/step1.png')}}" alt="" />
                        <p>ابحث عن الوحدة</p>
                    </div>
                    <div class="step">
                        <img src="{{asset('assets/site/img/step2.png')}}" alt="" />
                        <p>اختر ما يناسبك بين الوحدات المتاحة</p>
                    </div>
                    <div class="step">
                        <img src="{{asset('assets/site/img/step3.png')}}" alt="" />
                        <p>اختر فترة التأجير و موعد الوصول و المغادرة</p>
                    </div>
                    <div class="step">
                        <img src="{{asset('assets/site/img/step4.png')}}" alt="" />
                        <p>قم بتاكيد الحجز والدفع</p>
                    </div>
                    <div class="step">
                        <img src="{{asset('assets/site/img/step5.png')}}" alt="" />
                        <p>استلم مفاتيح وحدتك في تاريخ وصولك</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end steps -->
    </content>

@endsection
@section('site_js')

@endsection
