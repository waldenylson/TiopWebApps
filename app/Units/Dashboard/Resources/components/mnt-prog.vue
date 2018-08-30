<template>
    <div class="mnt-programadas">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-cogs titulo">
                                <b>&nbsp;MANUTENÇÕES PROGRAMADAS</b>
                            </i>
                        </h3>
                    </div>
                    <div class="panel-body mnt-programadas-height">
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
        name: 'tiop-mnt',

        mounted() {
            window.console.log('Componente MNT-Prog Carregado')
        }
    }
</script>

<style scoped>
    .mnt-programadas {
        float: left;
        padding-left: 5px;
        width: 100%;
        margin-bottom: -10px;
    }

    .mnt-programadas-height {
        height: 252px;
    }
</style>