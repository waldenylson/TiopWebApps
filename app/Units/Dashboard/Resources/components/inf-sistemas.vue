<template>
    <div class="inf-sistemas" >
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-desktop titulo">
                        <b>&nbsp;SISTEMAS</b>
                    </i>
                </h3>
            </div>
            <div class="box box-title">ACC-RE</div>
            <div class="box box-bg-color" v-for="infSis in dadosInfSistemas" v-if="(infSis['sigla'] === 'ACC-RE') ">
                <i class="fa fa-code">&nbsp;STM: <b><i>{{ infSis['sistema'] }}</i></b></i><br />
                <i class="fa fa-info-circle">&nbsp;&nbsp;VER: <b>{{ infSis['versao'] }}</b></i><br />
                <i class="fa fa-database">&nbsp;&nbsp;BDS: <b>{{ infSis['v-bds'] }}</b></i><br />
                <i class="fa fa-calendar">&nbsp;&nbsp;ATL: <b>{{ infSis['dt-atualiza'] | moment("DD/MM/YYYY") }}</b></i>
            </div>
            <div class="box box-title">ACC-AO</div>
            <div class="box box-bg-color" v-for="infSis in dadosInfSistemas" v-if="(infSis['sigla'] === 'ACC-AO') ">
                <i class="fa fa-code">&nbsp;STM: <b><i>{{ infSis['sistema'] }}</i></b></i><br />
                <i class="fa fa-info-circle">&nbsp;&nbsp;VER: <b>{{ infSis['versao'] }}</b></i><br />
                <i class="fa fa-database">&nbsp;&nbsp;BDS: <b>{{ infSis['v-bds'] }}</b></i><br />
                <i class="fa fa-calendar">&nbsp;&nbsp;ATL: <b>{{ infSis['dt-atualiza'] | moment("DD/MM/YYYY") }}</b></i>
            </div>
            <div class="box box-title">APP-RF</div>
            <div class="box box-bg-color" v-for="infSis in dadosInfSistemas" v-if="(infSis['sigla'] === 'APP-RF') ">
                <i class="fa fa-code">&nbsp;STM: <b><i>{{ infSis['sistema'] }}</i></b></i><br />
                <i class="fa fa-info-circle">&nbsp;&nbsp;VER: <b>{{ infSis['versao'] }}</b></i><br />
                <i class="fa fa-database">&nbsp;&nbsp;BDS: <b>{{ infSis['v-bds'] }}</b></i><br />
                <i class="fa fa-calendar">&nbsp;&nbsp;ATL: <b>{{ infSis['dt-atualiza'] | moment("DD/MM/YYYY") }}</b></i>
            </div>
            <div class="box box-title">COPM3</div>
            <div class="box box-bg-color" v-for="infSis in dadosInfSistemas" v-if="(infSis['sigla'] === 'COPM') ">
                <i class="fa fa-code">&nbsp;STM: <b><i>{{ infSis['sistema'] }}</i></b></i><br />
                <i class="fa fa-info-circle">&nbsp;&nbsp;VER: <b>{{ infSis['versao'] }}</b></i><br />
                <i class="fa fa-database">&nbsp;&nbsp;BDS: <b>{{ infSis['v-bds'] }}</b></i><br />
                <i class="fa fa-calendar">&nbsp;&nbsp;ATL: <b>{{ infSis['dt-atualiza'] | moment("DD/MM/YYYY") }}</b></i>
            </div>
        </div>
    </div>
</template>

<script>
    Vue.use(require('vue-moment'));
    export default {
        name: 'tiop-sistemas',

        props: ['infSis'],

        data: function ()
        {
            return {
                dadosInfSistemas: []
            }
        },

        methods:
        {
            getInfSis: function ()
            {
                axios.get('/api/getInfSis').then(response => (this.dadosInfSistemas = response.data))
            }
        },
        
        mounted()
        {
            window.console.log('Componente INF-Sistemas Carregado')
            this.getInfSis()
        }
    }
</script>

<style scoped>
    .inf-sistemas {
        padding-left: 5px;
        padding-top: 20px;
        margin-bottom: -20px;
        width: 450px;
    }
</style>