@extends('admin.layouts.layout')

@section('title')
       edit camp
@endsection
@section('header')


{!! Html::style('cus/css/select2.css') !!}


@endsection



@section('content')

       <form method="post" action="{{ route('campground.update', $id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                @include('backend.campGrounds.formEdit')

   	     </form>



@endsection




@section('footer')


 {!! Html::script('cus/js/select2.js') !!}

  <script type="text/javascript">

    $('.select2').select2();

  </script>

@endsection
