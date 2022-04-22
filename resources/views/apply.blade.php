@extends('layouts.app')
@section('content')
    <div class="container">

      <section>

        <div class="card"  style="margin-top: 180px;">
        <div class="card-header">
            <h3 class="card-title pt-2"><strong>{{$course->name}} Application Form</strong></h3>
        </div>
                <form action="{{route('booking')}}" method="POST">
                    @if(Session::has('success'))
                          <div class="alert alert-success">
                            {{Session::get('success')}}
                          </div>
                    @endif
                    @csrf

          <div class="row my-5">
            <div class="col-md-6">
                          <div class="col-12">
                              <input type="text" class="form-control mb-3 {{ $errors->has('name') ? 'error' : '' }}" id="name" name="name" placeholder="Name">
                              @if ($errors->has('name'))
                                <div class="error text-danger">
                                  {{ $errors->first('name') }}
                                </div>
                                @endif
                          </div>
                          <div class="col-12">
                              <input type="text" class="form-control mb-3 {{ $errors->has('phone') ? 'error' : '' }}" id="phone" name="phone" placeholder="Phone">
                              @if ($errors->has('phone'))
                                <div class="error text-danger">
                                  {{ $errors->first('phone') }}
                                </div>
                                @endif
                          </div>
                          <div class="col-12">
                              <input type="email" class="form-control mb-3 {{ $errors->has('email') ? 'error' : '' }}" id="email" name="email" placeholder="Email">
                              @if ($errors->has('email'))
                                <div class="error text-danger">
                                  {{ $errors->first('email') }}
                                </div>
                                @endif
                          </div>
                          <div class="col-12">
                              <input type="text" class="form-control mb-3 {{ $errors->has('age') ? 'error' : '' }}" id="age" name="age" placeholder="Age">
                              @if ($errors->has('age'))
                                <div class="error text-danger">
                                  {{ $errors->first('age') }}
                                </div>
                                @endif
                          </div>
                      </div>
                      <div class="col-md-6">

                          <!-- for hidden course name -->
                              <input type="hidden" class="form-control mb-3" id="course_name" name="course_name" value="{{($course->name)}}" hidden/>
                          
                          <div class="col-12">
                              <input type="text" class="form-control mb-3" id="address" name="address" placeholder="Your address">
                          </div>
                          <div class="col-12">
                              <textarea type="text" class="form-control mb-3" id="message" name="message" placeholder="Message" rows="2"></textarea>
                          </div>
                          <div class="col-12">
                              <button type="submit" class="btn btn-primary">Apply</button>
                          </div>
                      </div>
                      
            </div>
          </form>	
        </div>
      </section>

    </div>
@endsection



