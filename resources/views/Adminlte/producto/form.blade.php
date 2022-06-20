<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idcag') }}
            {{ Form::text('idcag', $producto->idcag, ['class' => 'form-control' . ($errors->has('idcag') ? ' is-invalid' : ''), 'placeholder' => 'Idcag']) }}
            {!! $errors->first('idcag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idpro') }}
            {{ Form::text('idpro', $producto->idpro, ['class' => 'form-control' . ($errors->has('idpro') ? ' is-invalid' : ''), 'placeholder' => 'Idpro']) }}
            {!! $errors->first('idpro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('val_unit') }}
            {{ Form::text('val_unit', $producto->val_unit, ['class' => 'form-control' . ($errors->has('val_unit') ? ' is-invalid' : ''), 'placeholder' => 'Val Unit']) }}
            {!! $errors->first('val_unit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('active') }}
            {{ Form::text('active', $producto->active, ['class' => 'form-control' . ($errors->has('active') ? ' is-invalid' : ''), 'placeholder' => 'Active']) }}
            {!! $errors->first('active', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>