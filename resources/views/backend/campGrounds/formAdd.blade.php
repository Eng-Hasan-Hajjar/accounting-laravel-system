<div class="form-group">
    {!! Form::label('name', 'camping ground name :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::text('name', null, ['class' => ' col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'description :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::text('description', null, ['class' => ' col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('country', 'country :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::text('country', null, ['class' => ' col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('city', 'city :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::text('city', null, ['class' => ' col-md-6']) !!}
</div>

<div class="form-group">
    {!! Form::label('region', 'region :', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
    {!! Form::text('region', null, ['class' => ' col-md-6']) !!}
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
    <label for="image" style="padding-right: 100px;padding-bottom: 30px;"
        class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
    <div class="col-md-6">
        <div style="width:500px;height:300px; padding-bottom:30px;">
            @if (isset($estate))
                @if ($estate->campGround_image != '')
                    <img src="{{ Request::root() . '/website/estateimages/' . $estate->campGround_image }}"
                        style="width: 100%;height: 100%" />
                    <br>
                @endif
            @endif
            {!! Form::file('campGround_image', null, ['class' => 'form-control', 'style' => 'width: 100%;height: 100%']) !!}

            @error('es_image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    </div>
</div>












<!--

<div class="form-group">
{!! Form::label('campGround_image', 'Image for Estate:', ['class' => ' col-md-4 col-form-label text-md-right ']) !!}
{!! Form::file('campGround_image', null, ['class' => 'col-md-6']) !!}
</div>

-->







<!-- Submit Button -->
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        {!! Form::submit('Add Camp ground', ['class' => 'btn btn-primary  pull-right']) !!}
    </div>
</div>
