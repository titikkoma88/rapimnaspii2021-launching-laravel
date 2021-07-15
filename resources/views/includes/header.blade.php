<section id="home" class="h-100 w-100" style="box-sizing: border-box; background-color: #141432"">
    <div class="header-4-1 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="#">
          <img style="margin-right: 0.75rem"
            src="{{ asset('/asset/img/icon-rapimnas.png') }}" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top: 0.5rem"
                    src="{{ asset('/asset/img/icon-rapimnas.png') }}"
                    alt="" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 1rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#daftar">Agenda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#lokasi">Location</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="https://bagi.to/ProposalRAPIMNAS2021">Proposal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://bagi.to/DaftarSposorRapimnasPII2021">Sponsor</a>
                  </li> -->
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                <a href="https://bagi.to/RAPIMNAS2021PII" class="btn btn-fill text-white">Pendaftaran</a>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#daftar">Agenda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#lokasi">Location</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="https://bagi.to/ProposalRAPIMNAS2021">Proposal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://bagi.to/DaftarSposorRapimnasPII2021">Sponsor</a>
            </li> -->
          </ul>
          <div class="gap-3">
            <a href="https://bagi.to/RAPIMNAS2021PII" class="btn btn-fill text-white">Pendaftaran</a>
          </div>
        </div>
      </nav>
      <div class="jumbotron">
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div
            class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <p class="text-caption">Jumat, 18 Juni 2021.</p>
            <h1 class="title-text-big">
              Soft Launching<br class="d-lg-block d-none" />
              RAPIMNAS PII 2021
            </h1>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
              <a href="#daftar" class="btn d-inline-flex mb-md-0 btn-try text-white">
                Lihat Agenda
              </a>
              <a href="https://youtu.be/TGOJz6ytAnA" class="btn btn-outline">
                <div class="d-flex align-items-center">
                  <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z"
                      fill="#555B61" />
                  </svg>
                  Watch the video
                </div>
              </a>
            </div>
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-lg-end justify-content-center pe-0">
            <img class="img-fluid h-auto mw-100"
              src="{{ asset('/asset/img/433x253 logo rapimnas.png') }}"
              alt="" />
          </div>
        </div>
      </div>   
    </div>
    <div class="container">
      <div class="text-center">
        <!-- <h1 class="lead text-white" style="font-size: larger; font: 1.25em sans-serif; font-weight: bold;"></h1> -->
        <h3 class="text-white">Road to RAPIMNAS PII 2021</h3>
      </div>
      <div class="countdown justify-content-center">
        <div id="hari" data-aos="fade-up" data-aos-duration="500">NA</div>
        <div id="jam" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">NA</div>
        <div id="menit" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">NA</div>
        <div id="detik" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">NA</div>
      </div>
    </div>
  </section>