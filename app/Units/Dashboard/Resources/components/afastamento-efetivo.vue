<template>
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
                <div class="box box-bg-color-efetivo box-efetivo">
                    <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
                        <thead>
                        <tr class="table-title">
                            <th><i class="fa fa-user">&nbsp;<b>NOME</b></i></th>
                            <th><i class="fa fa-question-circle">&nbsp;<b>MOTIVO</b></i></th>
                            <th class="table-afastamentos-retorno"><i class="fa fa-calendar">&nbsp;<b>RETORNO</b></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- @foreach($efetivoTiop as $efetivo) -->
                            <tr v-for="efetivo in efetivoTiop" 
                                :key="efetivo.id"
                            >
                                <td><b>{{ efetivo.nome }}</b></td>
                                <td><b>{{ efetivo.motivo }}</b></td>
                                <td class="table-afastamentos-retorno">
                                    <b>{{ efetivo.retorno }}</b>
                                </td>
                            </tr>
                        <!-- @endforeach -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'tiop-efetivo',

        props: ['efetivotiop'],

        data: function (){
            return {
                efetivoTiop: []
            }
        },

        methods: {
            getEfetivo: function() {
                axios.get('/api/getEfetivo').then(response => (this.efetivoTiop = response.data))
                //setTimeout(this.getRadares, 10000)
            }
        },

        mounted() {
            window.console.log('componente efetivo carregado')
            this.getEfetivo()
        }

    }
</script>

<style scoped>
    .afastamentos {
        overflow: hidden;
        height: 100%;
        margin-bottom: -10px;
    }
    .box-efetivo {
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
        font-size: larger;
        padding-left: 5px;
    }
    .table-title {
        font-size: 25px;
    }

    .table-afastamentos-retorno {
        text-align: center;
    }

    .box-bg-color-efetivo {
        background-color: snow;
    }
</style>