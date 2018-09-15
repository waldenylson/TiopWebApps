@extends('support::templates.clean')
{{--{{ dd($radares) }}--}}
@section('content')
    <div class="container">
        <div class="sub-container-left">

            <tiop-sobreaviso></tiop-sobreaviso>

            <tiop-efetivo></tiop-efetivo>

            <tiop-rpl></tiop-rpl>

        </div>
        <div class="sub-container-right">

            <status-radares></status-radares>

            <tiop-mnt></tiop-mnt>

        </div>
        <tiop-sistemas></tiop-sistemas>
        <tiop-rodape></tiop-rodape>
    </div>
@stop