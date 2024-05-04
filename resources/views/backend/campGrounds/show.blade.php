@extends('admin.layouts.layout')
@section('title')
    Info of estate
@endsection
@section('content')
    <div class="jumbotron text-center">
        <div align="right" style="width: 335px; margin-left: 335px ;margin-bottom: 20px">
            <a href="{{ route('campground.index') }}" class="btn btn-default">Back</a>
        </div>
        <br />


        <h3>Name - {{ $data->name }} </h3>
        <h3>description - {{ $data->description }}</h3>
        <h3>country - {{ $data->country }}</h3>
        <h3>city - {{ $data->city }} </h3>
        <h3>region - {{ $data->region }}</h3>

        <h3>Type - {{ cm_type_func()[$data->cm_type] }}</h3>
        <h3>season - {{ cm_season_func()[$data->cm_season] }}</h3>
        <img src="{{ URL::to('/') }}/images/{{ $data->campGround_image }}" class="img-thumbnail" />


    </div>
@endsection
