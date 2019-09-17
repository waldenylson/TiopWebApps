@extends('support::templates.clean')
{{--{{ dd($radares) }}--}}
@section('content')
    <div class="container">
        <div class="sub-container-left">

            <tiop-sobreaviso></tiop-sobreaviso>

            <status-sitc></status-sitc>

            <tiop-notifications></tiop-notifications>

        </div>
        <div class="sub-container-center">

            <tiop-mnt></tiop-mnt>

        </div>
        <div class="sub-container-right">
            <tiop-sistemas></tiop-sistemas>
            <tiop-rpl></tiop-rpl>
            <tiop-dacom></tiop-dacom>
            <tiop-rodape></tiop-rodape>
        </div>
    </div>
@stop