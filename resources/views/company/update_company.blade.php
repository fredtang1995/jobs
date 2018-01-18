@extends('app')

@section('title', '更新公司資訊')

@section('contents')

    {!! Form::model($company, ['method'=>'PATCH','action'=>['CompanyController@update', $company->id]]) !!}

    @include('company.form', ['submitButtonText' => '更新公司資料'])
    {!! Form::close() !!}

    @include('errors.list')

@stop