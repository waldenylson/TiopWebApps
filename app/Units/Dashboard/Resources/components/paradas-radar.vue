<template>
    <div class="paradas-radar">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-history titulo">
                        <b>&nbsp;PARADAS RADAR</b>
                    </i>
                </h3>
            </div>
            <div class="panel-body paradas-radar-height">
                <!-- {{--<table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">--}}
                    {{--<thead>--}}
                    {{--<tr class="table-title">--}}
                        {{--<th></th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--@foreach($efetivoTiop as $efetivo)--}}
                        {{--<tr>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                    {{--</tbody>--}}
                {{--</table>--}} -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'tiop-paradas',

        mounted() {
            window.console.log('Componente Paradas-Radar Carregado')
        }
    }
</script>

<style scoped>
    .paradas-radar {
        float: left;
        padding-left: 5px;
        width: 100%;
        margin-bottom: -10px;
    }

    .paradas-radar-height {
        height: 250px;
    }
</style>