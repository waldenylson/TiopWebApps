@extends('support::templates.clean')
{{--{{ dd($radares) }}--}}
@section('content')
    <div class="container">
        <div class="sub-container-left">

            <tiop-sobreaviso></tiop-sobreaviso>

            <tiop-efetivo></tiop-efetivo>

            {{--<tiop-rpl></tiop-rpl>--}}

        </div>
        <div class="sub-container-center">

            <status-radares></status-radares>

            <tiop-mnt></tiop-mnt>

        </div>
        <div class="sub-container-right">
            <tiop-sistemas></tiop-sistemas>
            <tiop-rpl></tiop-rpl>
            <tiop-rodape></tiop-rodape>
        </div>
    </div>
@stop