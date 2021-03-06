@extends('layouts.app')
@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="teacher.html">Our Teacher</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">{{$teacher->name}}</li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teacher details -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mb-5">
        <img class="img-fluid w-100" src="{{asset('storage/'.$teacher->image)}}" alt="teacher">
      </div>
      <div class="col-md-6 mb-5">
        <h3>{{$teacher->name}}</h3>
        <h6 class="text-color mb-5">Degrees</h6>
        <!-- <p class="mb-5">{{$teacher->biography}}}}</p> -->
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h4 class="mb-4">CONTACT INFO:</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="mailto:johndoe@email.com"><i class="ti-email mr-2"></i>{{$teacher->email}}</a></li>
              <li class="mb-3"><a class="text-color" href="callto:+120345876"><i class="ti-mobile mr-2"></i>{{$teacher->phone}}</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-facebook mr-2"></i>john Doe</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-twitter-alt mr-2"></i>john Doe</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-skype mr-2"></i>{{$teacher->skype_id}}</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-world mr-2"></i>johnDoe.com</a></li>
              <li class="mb-3"><a class="text-color" href="#"><i class="ti-location-pin mr-2"></i>1313 Boulevard
                  Cremazie,Quebec</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <h4 class="mb-4">SUMMARY OF ACTIVITIES/INTERESTS</h4>
            <ul class="list-unstyled">
              <li class="mb-3">Computer Networking</li>
              <li class="mb-3">Computer Security</li>
              <li class="mb-3">Human Computer Interfacing</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12">
        <h4 class="mb-4">BIOGRAPHY</h4>
        <p class="mb-5">{{$teacher->biography}}</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="mb-4">Courses {{$teacher->name}} Has Been Teaching</h3>
      </div>
      @foreach($teacher->courses as $course)
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('storage/'.$course->image)}}" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
              <li class="list-inline-item"><a class="text-color" href="#">{{$course->fees}}-$</a></li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title" href="">{{$course->name}}</h4>
            </a>
            <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna.</p>
            <a href="{{route('apply',$course->id)}}" class="btn btn-primary btn-sm">Apply now</a>
          </div>
        </div>
      </div>
      @endforeach
      <!-- course item -->


    </div>
  </div>
</section>
<!-- /teacher details -->

@endsection