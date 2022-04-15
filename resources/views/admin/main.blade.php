@extends('layouts.app')

@section('content')
    <div class="col-md-8 ">
        <div class="card margin-top">
            <div class="card-header card-for-div">
                <form action ="{{route('admin.search')}}" method="POST">
                    {{csrf_field()}}

                    <div class="row mb-3">
                        <label for="jobs" class="col-md-4 col-form-label text-md-end">{{ __('Job') }}</label>
                        <div class="col-md-6">
                            <select name="job" class="form-control" id="job">
                                <option value=" Manager"> Manager</option>
                                <option value="Programmer"selected>Programmer</option>
                                <option value="HR">HR</option>
                                <option value="Support">Support</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-input">


                        <input type="radio" id="description" name="criterion" value="first_name" required="required">
                        <label for="description">First name</label><br>


                        <input type="radio" class="last_name align-content-center" id="last_name" name="criterion" value="last_name">
                        <label for="last_name">Last name</label><br>

                        <input type="radio" id="email" class="align-content-center" name="criterion" value="email">
                        <label for="email">email</label><br>
                        <input type="radio" id="phone" class="align-content-center" name="criterion" value="phone">
                        <label for="phone">Phone</label><br>



                    </div>



                    <div class="form-input">

                        <label for="search">Search the products by this options up</label>
                        <input type="search" id="search" name="search" required="required">
                    </div>
                    <input type="submit"    value="Search"><br/>
                </form>


            </div>


        </div>
    </div>


                  @foreach($applications as $app)
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-md-8">
                                  <div class="card">
                                      <div id="job-application" class="card-header">{{ __('Job application') }}</div>

                                      <div class="row mb-3">
                                          <label for="submited_date" class="col-md-4 col-form-label text-md-end"> {{ __('Submited date') }}</label>

                                          <div class="col-md-6">
                                              <input type="date" id="submited_date" value="{{$app->submited_date}}" name="submited_date" readonly class="form-control">
                                          </div>
                                      </div>


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('First name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control"   name='first_name'  value="{{ $app->first_name }}" readonly required autocomplete="first_name" autofocus>


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last name') }}</label>

                            ,<div class="col-md-6">
                                <input id="last_name" type="text" class="form-control"  name='last_name'    value="{{ $app->last_name }}"  readonly required  autocomplete="last_name" autofocus>


                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="previous_experience" class="col-md-4 col-form-label text-md-end">{{ __('previous_experience-yes') }}</label>
                            <div class="col-md-6">
                                <input type="checkbox" id="previous_experience"   name="previous_experience" @if($app->previous_experience == 1)checked @endif readonly>

                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email"  type="email" class="form-control" name='email'   value="{{ $app->email}}"   readonly autocomplete="email">


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" class="form-control" type="tel"  name="phone" @if($app->phone != null) value="{{ $app->phone }}" readonly @endif>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date_of_bird" class="col-md-4 col-form-label text-md-end"> {{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input type="date" id="date_of_bird" value="{{$app->date_of_bird}}" name="date_of_bird" readonly class="form-control">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="jobs" class="col-md-4 col-form-label text-md-end">{{ __('Job') }}</label>
                            <div class="col-md-6">
                                <input type="text" id="job"  name="job" readonly value="{{ $app->job }}" class="form-control">
                            </div>
                        </div>


                                      <div class="row mb-3">
                                          <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                                          <div class="col-md-6">
                                              <input type="text" id="status"  name="status" readonly  value="{{(isset($app->status)) ?   $app->status : "in progress"}}"  class="form-control">
                                          </div>
                                      </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="btn btn-primary"  href ="{{route('admin.approve', $app['id'])}}">Approve</a></li>
                                <a class="btn btn-primary"  href ="{{route('admin.deny', $app['id'])}}">Deny</a></li>
                                <a class="btn btn-primary"  href ="{{route('admin.delete', $app)}}">Delete</a></li>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{$applications->links()}}
@endsection
