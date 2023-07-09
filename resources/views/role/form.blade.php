<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Usuario') }}
            {{ Form::text('Usuario', $role->Usuario, ['class' => 'form-control' . ($errors->has('Usuario') ? ' is-invalid' : ''), 'placeholder' => 'Usuario']) }}
            {!! $errors->first('Usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Roll') }}
            {{ Form::text('Roll', $role->Roll, ['class' => 'form-control' . ($errors->has('Roll') ? ' is-invalid' : ''), 'placeholder' => 'Roll']) }}
            {!! $errors->first('Roll', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $role->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>