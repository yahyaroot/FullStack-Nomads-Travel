@extends('layouts.app')


@section('title')
  NOMADS   
@endsection

@section('content')

  <!-- Header -->

  <header class="text-center">
    <h1>
      Explore The Beautiful World
      <br />
      As Easy One Click
    </h1>
    <p class="mt-3">
      You will see beautiful
      <br />
      moment you never see before
    </p>
    <a href="#" class="btn btn-get-started px-4 mt-4"> Get Started </a>
  </header>

  <main>
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>12</h2>
          <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>3K</h2>
          <p>Hotel</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>72</h2>
          <p>Partners</p>
        </div>
      </section>
    </div>

    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>
              Something that you never try <br />
              before in this world
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-trevel row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-trevel text-center d-flex flex-column"
              style="background-image: url(./frontend/image/popular-1.png)">
              <div class="trevel-country">INDONESIA</div>
              <div class="trevel-location">DARATAN, BALI</div>
              <div class="trevel-button mt-auto">
                <a href="{{route('detail')}}" class="btn btn-trevel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-trevel text-center d-flex flex-column"
              style="background-image: url(./frontend/image/popular-2.png)">
              <div class="trevel-country">INDONESIA</div>
              <div class="trevel-location">BROMO, MALANG</div>
              <div class="trevel-button mt-auto">
                <a href="{{route('detail')}}" class="btn btn-trevel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-trevel text-center d-flex flex-column"
              style="background-image: url(./frontend/image/popular-3.png)">
              <div class="trevel-country">INDONESIA</div>
              <div class="trevel-location">NUSA PENIDA</div>
              <div class="trevel-button mt-auto">
                <a href="{{route('detail')}}" class="btn btn-trevel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-trevel text-center d-flex flex-column"
              style="background-image: url(./frontend/image/popular-4.png)">
              <div class="trevel-country">INDONESIA</div>
              <div class="trevel-location">DARATAN, BALI</div>
              <div class="trevel-button mt-auto">
                <a href="{{route('detail')}}" class="btn btn-trevel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>
              Companies are trusted us <br />
              more than just a trip
            </p>
          </div>

          <div class="col-md-8 text-center">
            <img src="./frontend/image/partner.png" alt="Logo Partner" class="img-patner" />
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p>
              Moments were giving them
              <br />
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-testimonial-content" id="testimonialContent">
      <div class="container">
        <div class="section-popular-trevel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="./frontend/image/testimonial-1.png" alt="User" class="mb-4 rounded-circle" />
                <h3 class="mb-4">Angga Risky</h3>
                <p class="testimonial">
                  “ It was glorious and I could <br />
                  not stop to say wohooo for <br />
                  every single moment <br />
                  Dankeeeeee “
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Ubud</p>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="./frontend/image/testimonial-2.png" alt="User" class="mb-4 rounded-circle" />
                <h3 class="mb-4">Shayna</h3>
                <p class="testimonial">
                  “ The trip was amazing and <br />
                  I saw something beautiful in <br />
                  that Island that makes me <br />
                  want to learn more “
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Nusa Penida</p>
            </div>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="./frontend/image/testimonial-3.png" alt="User" class="mb-4 rounded-circle" />
                <h3 class="mb-4">Shabrina</h3>
                <p class="testimonial">
                  “ I loved it when the waves <br />
                  was shaking harder — I was <br />
                  scared too “
                </p>
              </div>
              <hr />
              <p class="trip-to mt-2">Trip to Karimun Jawa</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
              I Need Help
            </a>

            <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

    
@endsection