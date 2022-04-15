@extends('layouts.app')

@section('content')

    <div class="row mb-3">
        <h2 class="text-center">you have already applied for this position</h2>
        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('First name') }}</label>

        <div class="col-md-6">
            <input id="first_name" type="text" class="form-control"   name='first_name'  value="{{ $application->first_name }}"  readonly autocomplete="first_name" autofocus>


        </div>
    </div>

    <div class="row mb-3">
        <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last name') }}</label>

        ,<div class="col-md-6">
            <input id="last_name" type="text" class="form-control"  name='last_name'  value="{{ $application->last_name }}"  readonly  autocomplete="last_name" autofocus>


        </div>
    </div>
    <div class="row mb-3">
        <label for="previous_experience" class="col-md-4 col-form-label text-md-end">{{ __('previous_experience-yes') }}</label>
        <div class="col-md-6">
            <input type="checkbox" id="previous_experience" @if($application->previous_experience == 1)  checked="checked" @endif name="previous_experience" value="1">

        </div>
    </div>


    <div class="row mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

        <div class="col-md-6">
            <input id="email"  type="email" class="form-control" name='email'  value="{{ $application->email }}"  readonly autocomplete="email">


        </div>
    </div>

    <div class="row mb-3">
        <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

        <div class="col-md-6">
            <input id="phone" class="form-control" type="tel"  name="phone" @if($application->phone != null) value="{{$application->phone }}" @endif readonly>

        </div>
    </div>
    <div class="row mb-3">
        <label for="date_of_bird" class="col-md-4 col-form-label text-md-end"> {{ __('Date of Birth') }}</label>

        <div class="col-md-6">
            <input type="date" value="{{ $application->date_of_bird }}" id="date_of_bird"  name="date_of_bird" readonly class="form-control">

        </div>
    </div>


    <div class="row mb-3">
        <label for="job" class="col-md-4 col-form-label text-md-end"> {{ __('Job') }}</label>

        <div class="col-md-6">
            <input type="text" value="{{ $application->job }}" id="job"  name="job" readonly class="form-control">

        </div>
    </div>

@endsection
