@extends('admin.layouts.layout')




@section('title')
       Add camping ground
@endsection

  @section('header')


  {!! Html::style('cus/css/select2.css') !!}


  @endsection



@section('content')

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add camping ground</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/adminpanel')}}"> Home </a></li>

              <li class="breadcrumb-item active"><a href="{{url('/adminpanel/campground')}}"> Control of camping ground </a></li>
              <li class="breadcrumb-item active"><a href="{{url('/adminpanel/campground/create')}}"> Add new camping ground </a></li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



       <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" style="margin: 10px">
              <h3 class="card-title">

                add new camping ground
              </h3>
            </div>




        {!! Form::open(['url' => '/adminpanel/campground', 'class' => 'form-horizontal', 'method' => 'post','files'=> true]) !!}

          @include('backend.campGrounds.formAdd')

        {!! Form::close()  !!}



            </div>
            </div>
            </div>
    </section>


@endsection




@section('footer')

  {!! Html::script('cus/js/select2.js') !!}

  <script type="text/javascript">

    $('.select2').select2();

  </script>
@endsection
