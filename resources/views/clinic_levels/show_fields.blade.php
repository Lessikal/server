<!-- Id Field -->
<div class="form-group row col-6">
    {!! Form::label('id', 'Id:', ['class' => 'col-md-3 control-label text-md-right mx-1']) !!}
    <div class="col-md-9">
        <p>{!! $clinicLevel->id !!}</p>
    </div>
</div>

<!-- Name Field -->
<div class="form-group row col-6">
    {!! Form::label('name', 'Name:', ['class' => 'col-md-3 control-label text-md-right mx-1']) !!}
    <div class="col-md-9">
        <p>{!! $clinicLevel->name !!}</p>
    </div>
</div>

<!-- Commission Field -->
<div class="form-group row col-6">
    {!! Form::label('commission', 'Commission:', ['class' => 'col-md-3 control-label text-md-right mx-1']) !!}
    <div class="col-md-9">
        <p>{!! $clinicLevel->commission !!}</p>
    </div>
</div>

<!-- Disabled Field -->
<div class="form-group row col-6">
    {!! Form::label('disabled', 'Disabled:', ['class' => 'col-md-3 control-label text-md-right mx-1']) !!}
    <div class="col-md-9">
        <p>{!! $clinicLevel->disabled !!}</p>
    </div>
</div>

<!-- Created At Field -->
<div class="form-group row col-6">
    {!! Form::label('created_at', 'Created At:', ['class' => 'col-md-3 control-label text-md-right mx-1']) !!}
    <div class="col-md-9">
        <p>{!! $clinicLevel->created_at !!}</p>
    </div>
</div>

<!-- Updated At Field -->
<div class="form-group row col-6">
    {!! Form::label('updated_at', 'Updated At:', ['class' => 'col-md-3 control-label text-md-right mx-1']) !!}
    <div class="col-md-9">
        <p>{!! $clinicLevel->updated_at !!}</p>
    </div>
</div>

