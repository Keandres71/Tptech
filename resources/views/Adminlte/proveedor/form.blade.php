<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nit', 'Nit') }}
            {{ Form::number('nit', $proveedor->nit, ['class' => 'form-control' . ($errors->has('nit') ? ' is-invalid' : ''), 'placeholder' => 'Nit']) }}
            {!! $errors->first('nit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dire','Direccion') }}
            {{ Form::text('dire', $proveedor->dire, ['class' => 'form-control' . ($errors->has('dire') ? ' is-invalid' : ''), 'placeholder' => 'Dire']) }}
            {!! $errors->first('dire', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel', 'Telefono') }}
            {{ Form::number('tel', $proveedor->tel, ['class' => 'form-control' . ($errors->has('tel') ? ' is-invalid' : ''), 'placeholder' => 'Tel']) }}
            {!! $errors->first('tel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::email('email', $proveedor->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    </div>
</div>
