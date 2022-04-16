@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h4 class="text-center">{{$massage}}</h4>

                @if(isset($app))
                    <div class="row mb-3">

                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('First name') }}</label>

                        <div class="col-md-6">
                            <input id="first_name" type="text" class="form-control"   name='first_name'  value="{{ $app['first_name'] }}"  readonly autocomplete="first_name" autofocus>


                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last name') }}</label>

                        ,<div class="col-md-6">
                            <input id="last_name" type="text" class="form-control"  name='last_name'  value="{{ $app['last_name'] }}"  readonly  autocomplete="last_name" autofocus>


                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="previous_experience" class="col-md-4 col-form-label text-md-end">{{ __('previous_experience-yes') }}</label>
                        <div class="col-md-6">
                            <input type="checkbox" id="previous_experience" @if($app['previous_experience'] == 1)  checked="checked" @endif name="previous_experience" value="1">

                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email"  type="email" class="form-control" name='email'  value="{{ $app['email'] }}"  readonly autocomplete="email">


                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                        <div class="col-md-6">
                            <input id="phone" class="form-control" type="tel"  name="phone" @if($app['phone'] != null) value="{{$app['phone'] }}" @endif readonly>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="date_of_bird" class="col-md-4 col-form-label text-md-end"> {{ __('Date of Birth') }}</label>

                        <div class="col-md-6">
                            <input type="date" value="{{ $app['date_of_bird'] }}" id="date_of_bird"  name="date_of_bird" readonly class="form-control">

                        </div>
                    </div>
                    @else

                    <div class="row mb-3">
                        <label for="job" class="col-md-4 col-form-label text-md-end"> {{ __('Job') }}</label>

                        <div class="col-md-6">
                            <input type="text" value="{{ $application->job }}" id="job"  name="job" readonly class="form-control">

                        </div>
                    </div>

                <div id="job-application" class="card-header">{{ __('Job application') }}</div>
                @if($errors)

                    @foreach($errors->all() as $errors)
                        <li>
                            {{$errors}}
                        </li>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('store') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('First name') }}</label>

                        <div class="col-md-6">
                            <input id="first_name" type="text" class="form-control"   name='first_name' @if(Illuminate\Support\Facades\Auth::check()) value="{{ Illuminate\Support\Facades\Auth::user()->name }}" @endif required autocomplete="first_name" autofocus>


                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last name') }}</label>

                        ,<div class="col-md-6">
                            <input id="last_name" type="text" class="form-control"  name='last_name'   @if(Illuminate\Support\Facades\Auth::check()) value="{{ Illuminate\Support\Facades\Auth::user()->last_name }}" @endif required  autocomplete="last_name" autofocus>


                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="previous_experience" class="col-md-4 col-form-label text-md-end">{{ __('previous_experience-yes') }}</label>
                        <div class="col-md-6">
                            <input type="checkbox" id="previous_experience"   name="previous_experience" value="1">

                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email"  type="email" class="form-control" name='email'  @if(Illuminate\Support\Facades\Auth::check())  value="{{ Illuminate\Support\Facades\Auth::user()->email}}" @endif  required autocomplete="email">


                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                        <div class="col-md-6">
                            <input id="phone" class="form-control" type="tel"  name="phone" @if(Illuminate\Support\Facades\Auth::check() && Illuminate\Support\Facades\Auth::user()->phone != null) value="{{ Illuminate\Support\Facades\Auth::user()->phone }}" @endif>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="date_of_bird" class="col-md-4 col-form-label text-md-end"> {{ __('Date of Birth') }}</label>

                        <div class="col-md-6">
                            <input type="date" id="date_of_bird"  name="date_of_bird" required class="form-control">

                        </div>
                    </div>


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


                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" id="btn-submit" class="btn btn-primary">
                                {{ __('apply') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

