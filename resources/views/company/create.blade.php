@extends('app')

@section('title', '新增公司資訊')

@section('contents')
    {!! Form::open(['url' =>'company']) !!}
    @include('company.form', ['submitButtonText' => '新增公司資訊'])
    {!! Form::close() !!}
    @include('errors.list')

@stop