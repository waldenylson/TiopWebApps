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
                                <b>&nbsp;SOBREAVISO TÉCNICO</b>
                            </i>
                        </h3>
                    </div>
                    <div class="panel-body center">
                        <b>3S BET SOBREAVISO ESCALADO</b>
                    </div>
                </div>
            </div>

            <div class="afastamentos">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-group titulo">
                                <b>&nbsp;AFASTAMENTOS EFETIVO</b>
                            </i>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="box box-bg-color box-efetivo">
                            <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
                                <thead>
                                <tr class="table-title">
                                    <th><i class="fa fa-user">&nbsp;<b>NOME</b></i></th>
                                    <th>MOTIVO</th>
                                    <th class="table-afastamentos-retorno">RETORNO</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($efetivoTiop as $efetivo)
                                    <tr>
                                        <td><b>{{ $efetivo['nome'] }}</b></td>
                                        <td><b>{{ $efetivo['motivo'] }}</b></td>
                                        <td class="table-afastamentos-retorno"><b>{{ $efetivo['retorno'] }}</b></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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
                                                    <span class="project_badge {{ $radar['status'] }}"></span>
                                                    <a class="project_title"><b>{{ $radar['nome'] }}</b></a><br>
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
                    <i class="fa fa-database">&nbsp;BDS: <b>ACCRE50</b></i><br />
                    <i class="fa fa-calendar">&nbsp;ATL: <b>29/03/2018</b></i>
                </div>
                <div class="box box-title">ACC-AO</div>
                <div class="box box-bg-color">
                    <i class="fa fa-code">&nbsp;STM: <b><i>SAGITARIO</i></b></i><br />
                    <i class="fa fa-info-circle">&nbsp;VER: <b>2.2.9.20</b></i><br />
                    <i class="fa fa-database">&nbsp;BDS: <b>ACCAO14</b></i><br />
                    <i class="fa fa-calendar">&nbsp;ATL: <b>15/03/2018</b></i>
                </div>
                <div class="box box-title">APP-RF</div>
                <div class="box box-bg-color">
                    <i class="fa fa-code">&nbsp;STM: <b><i>SAGITARIO</i></b></i><br />
                    <i class="fa fa-info-circle">&nbsp;VER: <b>2.2.9.10</b></i><br />
                    <i class="fa fa-database">&nbsp;BDS: <b>APPRF24</b></i><br />
                    <i class="fa fa-calendar">&nbsp;ATL: <b>13/02/2018</b></i>
                </div>
                <div class="box box-title">COPM3</div>
                <div class="box box-bg-color">
                    <i class="fa fa-code">&nbsp;STM: <b><i>DACOM</i></b></i><br />
                    <i class="fa fa-info-circle">&nbsp;VER: <b>4.6.5</b></i><br />
                    <i class="fa fa-database">&nbsp;BDS: <b>COPM3_1</b></i><br />
                    <i class="fa fa-calendar">&nbsp;ATL: <b>03/03/2018</b></i>
                </div>
                <!-- #################### TERMINA AQUI AS BOXES ######################### -->

            </div>
        </div>
        <div class="bottom-container">
            <div class="panel panel-default">
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
@stop