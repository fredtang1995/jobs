@extends('app')

@section('title', '新增職缺資訊')

@section('contents')
    {!! Form::open(['url' =>'job']) !!}
    @include('job.form', ['submitButtonText' => '新增公司資訊'])
    {!! Form::close() !!}
    @include('errors.list')

@stop