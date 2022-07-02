<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('idpro','Proveedor del producto') }}
            {{ Form::select('idpro', $proveedores, $producto->idpro,['class' => 'form-control select2' . ($errors->has('idpro') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opción']) }}
            {!! $errors->first('idpro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idcag','Categoria del producto') }}
            {{ Form::select('idcag', $categorias, $producto->idcag,['class' => 'form-control select2' . ($errors->has('idcag') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opción']) }}
            {!! $errors->first('idcag', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre','Nombre del producto') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del producto']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('val_unit','Precio unidad producto') }}
                    {{ Form::number('val_unit', $producto->val_unit, ['class' => 'form-control' . ($errors->has('val_unit') ? ' is-invalid' : ''), 'placeholder' => 'Precio unidad producto']) }}
                    {!! $errors->first('val_unit', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    {{ Form::label('stock','Stock del producto') }}
                    {{ Form::number('stock', $producto->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock del producto']) }}
                    {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::file('imagen', ['accept' => 'image/* ' . ($errors->has('imagen') ? ' is-invalid' : '')])}}
            @error('imagen')
                <div class="">
                    <p class="text-danger">{{ $message }}</p>
                </div>
            @enderror
        </div>
        <div class="form-group">
            {{ Form::label('descripcion','Descripción del producto') }}
            {{ Form::textArea('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripción del producto']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    </div>
</div>
