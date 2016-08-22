@extends('layouts.admin')

@section('content')
{!! Form::open() !!}
<div class="form-group">
{!! Form::label('Nombre: '); !!}
{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre del usuario'])!!}
</div>
{!! Form::close() !!}
@stop