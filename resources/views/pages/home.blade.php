@extends('layouts.main')

@section('title', 'Ospree Duty Free')

@section('content')
    <section class="homeBanner">
        <div class="videoWrapper">
            <video src="{{ URL::asset('/public/assets/images/Intro-Video.mp4')}}" class="w-100" muted autoplay loop></video>
        </div>
    </section>

    <section class="bannerMain position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-8">
                    <div class="contentWrapper text-center banner1">
                        <div class="contentOuter">
                            <h1>Duty Free and Tax Free</h1>
                            <p>Experience the thrill of tax-free shopping like never before. Satisfaction guaranteed, transparent pricing policy and authenticity checks.</p>
                        </div>
                        <div class="btnWrapper pt-3">
                            <a href="#" class="btnCustom whiteBtn d-inline-block cursorPointer">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-3">
                            <div class="singleCard">
                                <div class="contentCardWrapper">
                                    <div class="title">
                                        TOP BRANDS
                                    </div>
                                    <div class="desc">
                                        Iconic names, luxurious brands
                                    </div>
                                </div>
                                <div class="imgWrapper text-center">
                                    <img src="{{ URL::asset('/public/assets/images/TOP-BRANDS.webp')}}" alt="Top Brands" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="singleCard">
                                <div class="contentCardWrapper">
                                    <div class="title">
                                        Unique Experiences
                                    </div>
                                    <div class="desc">
                                        Live DJ, Movies, Celebrations
                                    </div>
                                </div>
                                <div class="imgWrapper text-center">
                                    <img src="{{ URL::asset('/public/assets/images/Unique-Experiences.webp')}}" alt="Top Brands" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="singleCard">
                                <div class="contentCardWrapper">
                                    <div class="title">
                                        Convenient Location
                                    </div>
                                    <div class="desc">
                                        Shop at your convenience before your flight
                                    </div>
                                </div>
                                <div class="imgWrapper text-center">
                                    <img src="{{ URL::asset('/public/assets/images/Convenient-Location.webp')}}" alt="Top Brands" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="singleCard">
                                <div class="contentCardWrapper">
                                    <div class="title">
                                        News & Media
                                    </div>
                                    <div class="desc">
                                        Stay updated, follow us for the latest stories
                                    </div>
                                </div>
                                <div class="imgWrapper text-center">
                                    <img src="{{ URL::asset('/public/assets/images/News-Media.webp')}}" alt="Top Brands" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutusHome">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="aboutContentOuter text-center">
                        <div class="mainTitle mb-3">
                            Luxury Redefined, Highest standards of excellence
                        </div>
                        <div class="mainDesc mb-2">
                            Diverse product range catering to your taste and latest products, a shopping destination for all your needs.
                        </div>
                        <div class="btnWrapper pt-3 mb-5">
                            <a href="#" class="btnCustom d-inline-block cursorPointer">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="aboutImgWrapper">
                        <img src="#" alt="" class="img-fluid w-100">
                    </div>
                </div>
            </div>
            <div class="counterWrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row g-4 justify-content-center">


                            <div class="col-sm-6 col-lg-5">
                                <div class="singleCounterCard h-100">
                                    <div class="mainNum d-flex">
                                        <span></span>
                                        <span class="numText_">Serving 24+ Million Passengers</span>
                                    </div>
                                    <div class="content">
                                        Serving Across Million </br>
                                        Passengers Annually
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-5">
                                <div class="singleCounterCard h-100">
                                    <div class="mainNum d-flex">
                                        <span></span>6
                                        <span class="numText_">Airports</span>
                                    </div>
                                    <div class="content">
                                        Operating Across Six Major</br>Airports
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brandPartners">
        <div class="container">
            <div class="brandPartnersTitle">
                <div class="mainTitle mb-4">
                    Brand Partners
                </div>
            </div>
        </div>

        <div class="tabBrandPartnersWrapper">

            <div class="container">
                <ul class="nav nav-pills nav-pills-custom mb-4 pb-4 d-none" id="pills-tab" role="tablist">

                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-bptab-1-tab" data-bs-toggle="pill" data-bs-target="#pills-bptab-1" type="button" role="tab" aria-controls="pills-bptab-1" aria-selected="true">

                        </button>
                    </li>

                </ul>
            </div>

            <div class="container-fluid">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-bptab-1" role="tabpanel" aria-labelledby="pills-bptab-1-tab" tabindex="0">
                        <div class="bpsliderWrapper">
                            <div class="bpSlider1">
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider1/03.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider1/04.webp')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider1/05.webp')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider1/06.webp')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider1/07.webp')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider1/08.webp')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bpsliderWrapper">
                            <div class="bpSlider2">
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider2/01.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider2/02.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider2/09.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider2/10.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider2/11.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider2/12.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider2/13.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider2/14.webp')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="imgWrapper">
                                        <img src="{{ URL::asset('/public/assets/images/brand-img/slider2/15.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="midBannerSection">
        <div class="container">
            <div class="position-relative">
                <div class="imgWrapper imgWrapperDesktop d-none d-lg-block">
                    <img src="{{ URL::asset('/public/assets/images/Mask-Group-101.webp')}}" alt="" class="img-fluid w-100">
                </div>
                <div class="imgWrapper d-block d-lg-none">
                    <img src="{{ URL::asset('/public/assets/images/Mask-Group-101.webp')}}" alt="#" class="img-fluid w-100">
                </div>
                <div class="row justify-content-end align-items-center">
                    <div class="col-lg-4">
                        <div class="contentMidBannerWrapper">
                            <div class="offWrapper">
                                <div class="enjoyText d-inline-block">
                                    Enjoy 10% off
                                </div>
                            </div>
                            <div class="theTitle">
                                Duty-Free Shopping at</br>Mumbai Airport
                            </div>
                            <div class="btnWrapper pt-3">
                                <a href="#" class="btnCustom d-inline-block cursorPointer">Know More</a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </section>

    <section class="our_location">
        <div class="container">
            <section class="our_location homeIn_location section-padding">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- col start  -->
                        <div class="col-md-6">
                            <div class="titleWrapper">
                                <div class="mainTitle white">Unveiling Our</br>
                                    Captivating Retail</br>
                                    Spaces Across</br>
                                    Airports in India</div>
                            </div>
                        </div>
                        <!-- col end  -->
                        <!-- col start  -->
                        <div class="col-md-6 position-relative">

                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'india')" id="defaultOpen">India</button>
                                <button class="tablinks" onclick="openCity(event, 'Paris')">France</button>
                            </div>

                            <div id="india" class="tabcontent">

                                <div class="mapimg_mobile">
                                    <img src="{{ URL::asset('/public/assets/images/pointers.png')}}" alt="">
                                </div>

                                <div class="mapimg_full">
                                    <img src="{{ URL::asset('/public/assets/images/india map.svg')}}" alt="">

                                    <!-- pointer cards start  -->

                                    <div class="map_pointers_cards cardone_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/plane.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Amritsar</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Amritsar</div>
                                                <div class="main_pointer_cards_main_content_text">Mumbai travel Retail pvt Ltd.<br> Amritsar Duty Free store<br> Sri Guru Govind Ram Dass Jee, International Airport,<br> Amritsar- 143101<br> Punjab</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardtwo_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/plane.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Jaipur</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Jaipur</div>
                                                <div class="main_pointer_cards_main_content_text">Jaipur Duty Free,</br>Mumbai Travel Retail Private Limited, Arrival Hall, Terminal 2, Jaipur International Airport, Jawahar Circle, Jaipur-302011.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardthree_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/plane.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Lucknow</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Lucknow</div>
                                                <div class="main_pointer_cards_main_content_text">Lucknow Duty Free,</br>
                                                    Mumbai Travel Retail Private Limited</br>
                                                    Terminal -3 , Choudhary Charan Singh International Airport,</br>
                                                    Amausi, Lucknow-226009</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardfour_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/plane.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Amritsar</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Amritsar</div>
                                                <div class="main_pointer_cards_main_content_text">Mumbai travel Retail pvt Ltd.<br> Amritsar Duty Free store<br> Sri Guru Govind Ram Dass Jee, International Airport,<br> Amritsar- 143101<br> Punjab</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardfive_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/plane.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Ahmedabad</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Ahmedabad</div>
                                                <div class="main_pointer_cards_main_content_text">Ahmedabad Duty Free,</br>
                                                    Mumbai Travel Retail Private Limited,</br>
                                                    SVP international airport,</br>
                                                    Sardar Nagar,</br>
                                                    Ahmedabad-382475.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardsix_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/plane.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Mundra</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Mundra</div>
                                                <div class="main_pointer_cards_main_content_text">Plot No :S13,Near IPS gate, Road towards MPT/MLTPL-LPG terminal,South Port Development Zone, Adani Ports & Special Economic Zone LTD Mundra, Taluka-Mundra,District Kutch, Gujarat -370421</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardseven_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/plane.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Mumbai</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Mumbai</div>
                                                <div class="main_pointer_cards_main_content_text">Chhatrapati Shivaji Maharaj International Airport, Mumbai, Int'l Airport, 2C Arrival, Airside Rd, Navpada, Vile Parle East, Vile Parle, Mumbai, Maharashtra 400099.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardeight_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/plane.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Trivandrum</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Trivandrum</div>
                                                <div class="main_pointer_cards_main_content_text">Thiruvananthapuram Duty Free, Mumbai Travel Retail Private Limited, Airport road, Chacka, Thiruvananthapuram, Kerela 695024</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardnine_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/plane.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Navi Mumbai</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Navi Mumbai</div>
                                                <div class="main_pointer_cards_main_content_text">Soon to be announced.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardten_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/plane.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Mangalore</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Mangalore</div>
                                                <div class="main_pointer_cards_main_content_text">Mangalore Duty Free Mumbai, Travel Retail Private Limited, Mangalore international airport, Kenjar, Mangalore-574142</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardeleven_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/Ship.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Dharma</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Dharma</div>
                                                <div class="main_pointer_cards_main_content_text">Adani Dhamra Port Limited,Dhamra Port Premises,Near Port Signal Station, Seamens Club, Dosinga,Odisha 756171</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardtwelve_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/Ship.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Gangavaram</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Gangavaram</div>
                                                <div class="main_pointer_cards_main_content_text">Adani Gangavaram Port Limited,Gangavaram Port Premises, Near Berth No : 8, Pedyagantyda Mandal, Gangavaram (Post), Visakhapatnam-530044, Andhra Pradesh</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardthirteen_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/Ship.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Krishnapatnam</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Krishnapatnam</div>
                                                <div class="main_pointer_cards_main_content_text">Adani Krishnapatnam Port,Bank Building,Ground Floor,Adani Krishnapatnam Port Premises,Nellore 524344, Andhrapradesh</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardfourteen_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/Ship.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Kattupalli</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Kattupalli</div>
                                                <div class="main_pointer_cards_main_content_text">Adani Kattupalli Port Limited,Kattupalli Port premises, Seamen Club Building, Ground Floor, Opposite Liquid Terminal Operation Buildings , Minjur, Kattupalli,Tamil Nadu 601203</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                    <!-- pointer cards start  -->
                                    <div class="map_pointers_cards cardfifteen_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/Ship.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Hazira</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Hazira</div>
                                                <div class="main_pointer_cards_main_content_text">Adani Hazira Port Limited, Hazira Port Premises, Near MPT-1, Choryashi,Surat 3904270, Gujarat</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                </div>
                            </div>


                            <div id="Paris" class="tabcontent">

                                <div class="mapimg_mobile">
                                    <img src="{{ URL::asset('/public/assets/images/Group-4.png')}}" alt="">
                                </div>

                                <div class="mapimg_full">
                                    <img src="{{ URL::asset('/public/assets/images/France.svg')}}" alt="">

                                    <!-- pointer cards start  -->

                                    <div class="map_pointers_cards cardfranceone_">
                                        <div class="map_pointers_cardstop">
                                            <div class="pointericon_img"><img src="{{ URL::asset('/public/assets/images/Ship.svg')}}" alt=""></div>
                                            <div class="pointericon_title">Euro Tunnel</div>
                                        </div>
                                        <div class="map_pointer_cards_main">
                                            <div class="map_pointer_cards_main_img"><img src="{{ URL::asset('/public/assets/images/Mask-Group-109.webp')}}" alt=""></div>
                                            <div class="main_pointer_cards_main_content">
                                                <div class="main_pointer_cards_main_content_title">Euro Tunnel</div>
                                                <div class="main_pointer_cards_main_content_text">Le Marché Duty Free S.A.S. Terminal Eurotunnel Bâtiment Charles Dickens 62231 Coquelles, France</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pointer cards end  -->

                                </div>
                            </div>

                        </div>
                        <!-- col end  -->
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="newsArticlesSection">
        <div class="container">
            <div class="newsWrapper">
                <div class="titleWrapper mb-4 d-flex justify-content-between flex-wrap">
                    <div class="titleOuter">
                        <div class="mainTitle mb-2">
                            News & Articles
                        </div>
                        <div class="desc mb-3">
                            Latest Buzz: Dive into Our Trendsetting News Updates.
                        </div>
                    </div>
                    <div class="btnArrowWrapper">

                    </div>
                </div>

                <div class="newsouter">

                    <div class="newsOuterSliderWrapper">
                        <div class="newsOuterSlider">

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    @endsection