@extends('support::templates.fancyboxContent')
{{--{{ dd($radares) }}--}}
@section('content')
    {{--<div class="container">--}}
        {{--<div class="row box float-left">--}}
            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eum nam sint voluptates! Assumenda eos est maxime nemo nostrum odio optio quas quidem rerum! Atque facilis iure laborum nisi repudiandae.--}}
        {{--</div>--}}
        {{--<div class="float-right">--}}
            {{--<div>--}}
                {{--<div class="project_sort">--}}
                    {{--<div id="paninel">--}}
                        {{--<ul class="project_list">--}}
                            {{--@foreach($radares as $radar)--}}
                                {{--<li>--}}
                                    {{--<span class="project_badge {{ $radar['status'] }} iconsweet"></span>--}}
                                    {{--<a class="project_title"><b>{{ $radar['nome'] }}</b></a>--}}
                                    {{--<br>--}}
                                    {{--<a class="project_title">TA-10SST </a>--}}
                                {{--</li>--}}
                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<br>--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<div class="bottom-container">--}}
                {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium adipisci animi at consequuntur explicabo iure nihil, perspiciatis repellat reprehenderit? Assumenda dignissimos est ipsum iure rerum? Incidunt possimus quas sit.--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="container">
        <div class="tile is-ancestor">
            <div class="tile is- is-vertical is-parent">
                <div class="tile is-child box">
                    <p class="title">SOBREAVISO</p>
                </div>
                <div class="tile is-child box">
                    <p class="title">Two</p>
                </div>
            </div>
            <div class="tile is-parent">
                <div class="tile is-child box">
                    <p class="title">Three</p>
                </div>
            </div>
        </div>
    </div>
@stop