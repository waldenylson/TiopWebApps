@extends('support::templates.clean')
{{--{{ dd($radares) }}--}}
@section('content')

    <div class="container">
        <div class="sub-container-left">
            <div class="sobreaviso">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-bell titulo">
                                <b>&nbsp;Sobreaviso Técnico</b>
                            </i>
                        </h3>
                    </div>
                    <div class="panel-body center">
                        <b>3S SOBREAVISO</b>
                    </div>
                </div>
            </div>

            <div class="afastamentos">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-group titulo">
                                <b>&nbsp;Afastamentos Efetivo</b>
                            </i>
                        </h3>
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
                        <h3 class="panel-title">
                            <i class="fa fa-podcast titulo">
                                <b>&nbsp;SINÓPTICO RADARES</b>
                            </i>
                        </h3>
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
        <div class="inf-sistemas">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-desktop titulo">
                            <b>&nbsp;SISTEMAS</b>
                        </i>
                    </h3>
                </div>
                <!-- ###################### INICIA AQUI AS BOXES ######################### -->
                <div class="box box-title">ACC-RE</div>
                <div class="box box-bg-color">
                    <i class="fa fa-code">&nbsp;STM: <b><i>SAGITARIO</i></b></i><br />
                    <i class="fa fa-info-circle">&nbsp;VER: <b>2.2.9.10</b></i><br />
                    <i class="fa fa-database">&nbsp;BDS: <b>ACCRE50</i></b><br />
                    <i class="fa fa-calendar">&nbsp;ATL: <b>29/03/2018</b></i>
                </div>
                <div class="box box-title">ACC-AO</div>
                <div class="box box-bg-color">
                    <i class="fa fa-code">&nbsp;STM: <b><i>SAGITARIO</i></b></i><br />
                    <i class="fa fa-info-circle">&nbsp;VER: <b>2.2.9.20</b></i><br />
                    <i class="fa fa-database">&nbsp;BDS: <b>ACCAO14</i></b><br />
                    <i class="fa fa-calendar">&nbsp;ATL: <b>15/03/2018</b></i>
                </div>
                <div class="box box-title">APP-RF</div>
                <div class="box box-bg-color">
                    <i class="fa fa-code">&nbsp;STM: <b><i>SAGITARIO</i></b></i><br />
                    <i class="fa fa-info-circle">&nbsp;VER: <b>2.2.9.10</b></i><br />
                    <i class="fa fa-database">&nbsp;BDS: <b>APPRF24</i></b><br />
                    <i class="fa fa-calendar">&nbsp;ATL: <b>13/02/2018</b></i>
                </div>
                <div class="box box-title">COPM3</div>
                <div class="box box-bg-color">
                    <i class="fa fa-code">&nbsp;STM: <b><i>DACOM</i></b></i><br />
                    <i class="fa fa-info-circle">&nbsp;VER: <b>4.6.5</b></i><br />
                    <i class="fa fa-database">&nbsp;BDS: <b>COPM3_1</i></b><br />
                    <i class="fa fa-calendar">&nbsp;ATL: <b>03/03/2018</b></i>
                </div>
                <!-- #################### TERMINA AQUI AS BOXES ######################### -->

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
            /*border: 1px solid #000000;*/
        }

        .titulo {
            font-size: xx-large;
        }

        .sub-container-left {
            padding-left: 10px;
            padding-top: 10px;
            float: left;
            width: 21%;
        }

        .sub-container-right{
            float: left;
            width: 60%;
        }

        .sinoptico {
            float: left;
            padding-left: 10px;
            padding-top: 20px;
        }

        .sobreaviso {
            padding-top: 10px;
            font-size: xx-large;
        }

        .center {
            text-align: center;
        }

        .afastamentos {
            overflow: hidden;
            height: 100%;
        }

        .inf-sistemas {
            float: left;
            width: 19%;
            padding-left: 10px;
            padding-top: 20px;
        }

        .bottom-container {
            width: 100%;
            padding-left: 10px;
            padding-top: 10px;
            float: left;
        }

        .box{
            background-color: royalblue;
            height: 50%;
            width: 99.5%;
            left: 20%;
            top: 20%;
            text-align: left;
            padding-top: 1px;
            margin-left: 1px;
            margin-bottom: 1px;
            margin-top: 1px;
            font-size: xx-large;
            padding-left: 5px;
        }

        .box-title {
            text-align: center;
            color:white;
        }

        .box-bg-color {
            background-color: floralwhite;
        }
    </style>
@stop