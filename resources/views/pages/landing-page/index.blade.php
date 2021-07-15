@extends('layouts.app')

{{-- set title --}}
@section('title', 'Home')

@section('content')

    <section class="h-100 w-100 bg-white" style="box-sizing: border-box;">
        <div class="content-3-1 container position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="row justify-content-center mb-5">
                <div class="col text-center" data-aos="zoom-out" >
                <img class="img-fluid"
                src="{{ asset('/asset/img/logo-logo-rapimnas.png') }}"
                alt="" />
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                <div class="row" data-aos="fade-right" data-aos-offset="300"
                data-aos-easing="ease-in-sine"><h2 id="daftar" class="title-caption">Soft Launching</h2></div>
                <div class="row" data-aos="fade-left" data-aos-offset="300"
                data-aos-easing="ease-in-sine"><p class="fs-1 fw-bolder">RAPIMNAS PERSATUAN INSINYUR INDONESIA 2021</p></div>
                <div class="row" data-aos="fade-right" data-aos-offset="300"
                data-aos-easing="ease-in-sine"><h3 class="text-caption">Tema Webinar</h3></div>
                <div class="row" data-aos="fade-left" data-aos-offset="300"
                data-aos-easing="ease-in-sine"><h2 class="title-caption-2">"Mendorong Kemandirian Industri Kesehatan Nasional"</h2></div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-md-3 mb-3">
                <div class="card text-center h-100" style="width: 18rem;" data-aos="flip-left" data-aos-duration="500">
                    <img src="{{ asset('/asset/img/card KETUM.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-text">Dr. Ir. Heru Dewanto, ST., M.Sc.(Eng.), IPU., ASEAN Eng., ACPE</h5>
                    <p class="card-text">Ketua Umum Persatuan Insinyur Indonesia</p>
                    </div>
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <div class="card text-center h-100" style="width: 18rem;" data-aos="flip-left" data-aos-duration="500" data-aos-delay="100">
                    <img src="{{ asset('/asset/img/card MENKES.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-text">Ir. Budi Gunadi Sadiki, CHFC, CLU.</h5>
                    <p class="card-text mt-4">Menteri Kesehatan</p>
                    </div>
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <div class="card text-center h-100" style="width: 18rem;" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
                    <img src="{{ asset('/asset/img/card KEPALA BRIN.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-text">Dr. Laksana Tri Handoko, M.Sc.</h5>
                    <p class="card-text mt-4">Kepala Badan Riset dan Inovasi Nasional (BRIN)</p>
                    </div>
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <div class="card text-center h-100" style="width: 18rem;" data-aos="flip-left" data-aos-duration="500" data-aos-delay="200">
                    <img src="{{ asset('/asset/img/card IDI.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-text">dr. Daeng Mohammad Faqih, SH., M.H.</h5>
                    <p class="card-text mt-4">Ketua Umum Ikatan Dokter Indonesia</p>
                    </div>
                </div>
                </div>
            </div>
            <div id="lokasi" class="row justify-content-center">
                <div class="col-md-4 text-center" data-aos="fade-right" data-aos-duration="1000">
                <img class="img-fluid"
                src="{{ asset('/asset/img/location.png') }}"
                alt="" />
                </div>
                <div class="col-md-4 text-center" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <img class="img-fluid"
                src="{{ asset('/asset/img/time.png') }}"
                alt="" />
                </div>
                <div class="col-md-6 text-center" data-aos="fade-up">
                <img class="img-fluid"
                src="{{ asset('/asset/img/protocol.png') }}"
                alt="" />
                </div>
            </div>
        </div>
    </section>

@endsection
