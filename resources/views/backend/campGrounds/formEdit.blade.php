<div class="form-group">
    {!! Form::label('name', ' camp name :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::text('name', $data->name, ['class' => ' col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'description :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::text('description', $data->description, ['class' => ' col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('country', 'country :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::text('country', $data->country, ['class' => ' col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('city', 'city :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::text('city', $data->city, ['class' => ' col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('region', 'region :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::text('region', $data->region, ['class' => ' col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('cm_type', 'Type:', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::select('cm_type', cm_type_func(), null, ['class' => 'col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('cm_season', 'Season:', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::select('cm_season', cm_season_func(), null, ['class' => 'col-md-6']) !!}
</div>



<div class="form-group">
    {!! Form::label('es_image', 'Image for Estate:', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::file('es_image', null, ['class' => 'col-md-6']) !!}
</div>





<!-- Submit Button -->
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        {!! Form::submit('edit', ['class' => 'btn btn-primary  pull-right']) !!}
    </div>
</div>
