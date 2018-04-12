@extends('support::templates.fancyboxContent')
{{--{{ dd($radares) }}--}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="project_sort">
                <div id="paninel">
                    <ul class="project_list">
                        @foreach($radares as $radar)
                            <li>
                                <span class="project_badge {{ $radar['status'] }} iconsweet"></span>
                                <a class="project_title"><b>{{ $radar['nome'] }}</b></a>
                                <br>
                                <a class="project_title">TA-10SST </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="bottom-container">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium adipisci animi at consequuntur explicabo iure nihil, perspiciatis repellat reprehenderit? Assumenda dignissimos est ipsum iure rerum? Incidunt possimus quas sit.
            </div>
        </div>
    </div>
@stop