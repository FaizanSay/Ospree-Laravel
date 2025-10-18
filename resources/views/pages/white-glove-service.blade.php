@extends('layouts.main')

@section('title', 'White Glove Service - Ospree Duty Free')

@section('content')



    <!-- Inner page banner start  -->
    <section class="Inner_PageBanner discoverbanner section-padding" style="background:url('{{ asset('public/assets/images/white-glove-banner.png') }}') !important;  background-position: right !important; background-size: cover !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Inner_PageBanner_content">
                        <div class="Inner_PageBanner_content_title">
                            <h1 class="Inner_PageBanner_content_title">White Glove <br> Service</h1>
                        </div>
                        <!--                     <div class="Inner_PageBanner_content_text">Lorem ipsum dolor sit amet, consetetur, sed diam nonumy eirmod tempor Lorem ipsum dolor sit amet, consetetur.</div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner page banner end  -->


    <!-- discover service form start  -->
    <section class="discoverservice_form section-padding">
        <div class="container">
            <div class="row">
                <!-- col start  -->
                <div class="col-md-12">
                    <div class="section_title">
                        <div class="section_title_main">Let's Connect</div>
                    </div>
                  
                    <div class="qrSection">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="imgWrapper mb-lg-0 mb-4 px-lg-4">
                                          
                                                <img src="{{ URL::asset('/public/assets/images/whatsapp-qr.png')}}" alt="QR" class="img-fluid w-100" />
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mainTitle">
                                            To Know more about White Glove Service, scan the QR  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- col end  -->
            </div>
        </div>
    </section>
    <!-- discovre service form end  -->



@endsection