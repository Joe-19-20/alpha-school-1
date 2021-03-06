@extends('layouts.app')
@section('content')
<!-- Modal -->
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="courses.html">Our Courses</a></li>
          <li class="list-inline-item text-white h3 font-secondary "></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
          <!-- success message -->
          @if(Session::has('success'))
            <div class="alert alert-success text-center">
                {{Session::get('success')}}
            </div>
          @endif
           <!-- success message -->
    <div class="row justify-content-center">

      <!-- course item -->
      @foreach ($courses as $course)
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('storage/'.$course->image)}}" alt="course thumb">
          <div class="card-body">
            <ul class="list-inline mb-2">
              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>{{$course->start_date}}</li>
              <li class="list-inline-item"><a class="text-color" href="#">Fees-{{$course->fees}}-$</a></li>
            </ul>
            <a href="course-single.html">
              <h4 class="card-title">{{$course->name}}</h4>
            </a>
            <a href="{{route('course-single',$course->id)}}" class="btn btn-primary btn-sm">Details</a>
          </div>
        </div>
      </div>
      @endforeach 
      <!-- course item -->
    </div>

  </div>
</section>
<!-- /courses -->
@endsection