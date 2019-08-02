@extends('support::templates.clean')
{{--{{ dd($radares) }}--}}
@section('content')
    <div class="container">
        <div class="sub-container-left">

            <tiop-sobreaviso></tiop-sobreaviso>

            <tiop-notifications></tiop-notifications>

        </div>
        <div class="sub-container-center">

{{--            <status-sitc></status-sitc>--}}

            <tiop-mnt></tiop-mnt>

        </div>
        <div class="sub-container-right">
            <tiop-sistemas></tiop-sistemas>
            <tiop-rpl></tiop-rpl>
            <tiop-rodape></tiop-rodape>
        </div>
    </div>
@stop