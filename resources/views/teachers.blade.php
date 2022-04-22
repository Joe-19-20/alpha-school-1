@extends('layouts.app')
@section('content')

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Our teachers</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teachers -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- teacher category list -->
        <!-- <ul class="list-inline text-center filter-controls mb-5">
          

         <li class="list-inline-item m-3 text-uppercase" data-filter="arts">arts</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter="bio-science">biological science</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter="business-study">business studies</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter="law">law</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter="pharmacy">pharmacy</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter="science">science</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter="social-science">social science</li> 
        </ul> -->
      </div> 
    </div>
    <!-- teacher list -->
    <div class="row filtr-container">
      <!-- teacher -->
      @foreach ($teachers as $teacher)
      <div data-category="arts, law" class="col-lg-4 col-sm-6 mb-5 filtr-item">
        <div class="card border-0 rounded-0 hover-shadow">
            <a href="{{route('teacher-single',$teacher->id)}}">
                <img class="card-img-top rounded-0" src="{{asset('storage/'.$teacher->image)}}" alt="teacher">
            </a>
          <div class="card-body">
            <a href="{{route('teacher-single',$teacher->id)}}">
              <h4 class="card-title">{{($teacher->name)}}</h4>
            </a>

            @foreach($teacher->courses as $course)
                <p>{{($course->name)}}</p>
            @endforeach
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- /teachers -->

@endsection