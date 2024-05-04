<!-- resources/views/reservations/update.blade.php -->

@extends('admin.layouts.layout')

@section('title')
    control of camping places
@endsection

@section('header')
    <!-- DataTables -->
    {{ Html::style('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}
    {{ Html::style('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">تحديث بيانات الحجز</div>

            <div class="card-body">
                <form method="POST" action="{{ route('reservations.update', $reservation) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="user_id">رقم المستخدم</label>
                        <input type="text" name="user_id" class="form-control" id="user_id" value="{{ $reservation->user_id }}">
                    </div>

                    <div class="form-group">
                        <label for="camp_ground_id">رقم المكان</label>
                        <input type="text" name="camp_ground_id" class="form-control" id="camp_ground_id" value="{{ $reservation->camp_ground_id }}">
                    </div>

                    <div class="form-group">
                        <label for="start_date">تاريخ البداية</label>
                        <input type="date" name="start_date" class="form-control" id="start_date" value="{{ $reservation->start_date }}">
                    </div>

                    <div class="form-group">
                        <label for="end_date">تاريخ الانتهاء</label>
                        <input type="date" name="end_date" class="form-control" id="end_date" value="{{ $reservation->end_date }}">
                    </div>

                    <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                </form>
            </div>
        </div>
    </div>
@endsection
