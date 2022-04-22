@extends('layouts.app')
@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="events.html">Upcoming Events- {{($event->evet_name)}}</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">{{($event->event_name)}}</li>
        </ul>
        <p class="text-lighten">Our events offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- event single -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">{{($event->event_name)}}</h2>
      </div>
      <!-- event image -->
      <div class="col-12 mb-4">
        <img src="{{asset('storage/'.$event->image)}}" alt="event thumb" class="img-fluid w-100">
      </div>
    </div>
    <!-- event info -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-9">
        <ul class="list-inline">
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-location-pin text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">LOCATION</h6>
                <p class="mb-0">{{($event->location)}}</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-calendar text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">DATE</h6>
                <p class="mb-0">{{($event->date)}}</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-time text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">TIME</h6>
                <p class="mb-0">{{($event->time)}}</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-wallet text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">ENTRY FEE</h6>
                <p class="mb-0">{{($event->entry_fee)}} - $</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- <div class="col-lg-3 text-lg-right text-left">
        <a href="#" class="btn btn-primary">Apply now</a>
      </div> -->
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- event details -->
    <div class="row">
      <div class="col-12 mb-40">
        <h3>About Event</h3>
        <p>{{($event->description)}}</p>
      </div>
      <div class="col-12 mb-40">
        <h3>How to Join This Event</h3>
        <p>fdsfdfsafsfsaf fdsfdfsafsfsaf fdsfdfsafsfsaf fdsfdfsafsfsaf fdsfdfsafsfsaf fdsfdfsafsfsaf fdsfdfsafsfsaf.</p>
      </div>
    </div>
    
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
  </div>
</section>
<!-- /event single -->

@endsection