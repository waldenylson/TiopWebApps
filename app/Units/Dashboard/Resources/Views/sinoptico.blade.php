@extends('support::templates.clean')
{{--{{ dd($radares) }}--}}
@section('content')

    <div class="container">
        <div class="sub-container-left">
            <div class="sobreaviso">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Sobreaviso Técnico - Agenda</b></h3>
                    </div>
                    <div class="panel-body">
                        <b>3S SIN WALDENYLSON - 6415</b>
                    </div>
                </div>
            </div>

            <div class="afastamentos">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Afastamentos Efetivo</b></h3>
                    </div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad aliquam amet asperiores at eaque enim est excepturi facere hic illum in, mollitia necessitatibus perspiciatis recusandae, voluptas voluptatum. Perferendis, voluptatibus?
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-container-right">
            <div class="sinoptico">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>SINÓPTICO RADARES - REAL TIME</b></h3>
                    </div>
                    <div class="panel-body">
                        <div class="float-right">
                            <div>
                                <div class="project_sort">
                                    <div id="panel">
                                        <ul class="project_list">
                                            @foreach($radares as $radar)
                                                <li>
                                                    <span class="project_badge {{ $radar['status'] }} iconsweet"></span>
                                                    <a class="project_title"><b>{{ $radar['nome'] }}</b></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-container">
            <div class="panel panel-default">
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci deserunt eius illum nisi quia. A corporis, cupiditate deserunt dolores eveniet magni natus reiciendis similique unde voluptas. Esse ipsum molestiae quod!
                </div>
            </div>
        </div>
    </div>

    <style>
        .container {
            margin: 0;
            padding: 0;
            width: 99%;
            margin: 5px 5px 5px 5px;
        }

        .sub-container-left {
            padding-left: 10px;
            padding-top: 10px;
            float: left;
            width: 22%;
        }

        .sub-container-right{
            float: left;
            width: 78%;
        }

        .sinoptico {
            float: left;
            padding-left: 10px;
            padding-top: 20px;
        }

        .sobreaviso {
            padding-top: 10px;
        }

        .afastamentos {
            overflow: hidden;
            height: 100%;
        }

        .bottom-container {
            width: 100%;
            padding-left: 10px;
            padding-top: 10px;
            float: left;
        }
    </style>
@stop