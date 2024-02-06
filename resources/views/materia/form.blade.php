<div class="box box-info padding-1">
    <div class="box-body">
        
<div class="form-group">
    {{ Form::label('personaid', 'Persona') }}
    {{ Form::select('personaid', $personas, null, ['class' => 'form-control' . ($errors->has('personaid') ? ' is-invalid' : '')]) }}
    {!! $errors->first('personaid', '<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
            {{ Form::label('Nombre_materia') }}
            {{ Form::text('Nombre_materia', $materia->Nombre_materia, ['class' => 'form-control' . ($errors->has('Nombre_materia') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Materia']) }}
            {!! $errors->first('Nombre_materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>