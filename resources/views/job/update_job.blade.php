@extends('app')

@section('title', '資料更新資訊')

@section('contents')

    {!! Form::model($jobs, ['method'=>'PATCH','action'=>['jobController@update', $jobs->id]]) !!}

    @include('job.form', ['submitButtonText' => '更新職缺資料'])
    {!! Form::close() !!}

    @include('errors.list')

@stop
