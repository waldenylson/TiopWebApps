@extends('support::templates.fancyboxContent')
{{--{{ dd($radares) }}--}}
@section('content')
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

    {{--<a class="fancybox" href="/radars/new">Teste</a>--}}
@stop