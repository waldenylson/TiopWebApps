<template>
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
            <div id="sistemas" v-for="infsistemas in dadosInfSistemas" :key="infsistemas.id">
                <div id="acc-re" v-if="">
                    <div class="box box-title">ACC-RE</div>
                    <div class="box box-bg-color">
                        <i class="fa fa-code">&nbsp;STM: <b><i>SAGITARIO</i></b></i><br />
                        <!--<i class="fa fa-info-circle">&nbsp;&nbsp;VER: <b>2.2.9.10.11_MST</b></i><br />-->
                        <i class="fa fa-info-circle">&nbsp;&nbsp;VER: <b></b></i><br />
                        <i class="fa fa-database">&nbsp;&nbsp;BDS: <b>ACCRE50</b></i><br />
                        <i class="fa fa-calendar">&nbsp;&nbsp;ATL: <b>29/03/2018</b></i>
                    </div>
                </div>
                <div class="box box-title">ACC-AO</div>
                <div class="box box-bg-color">
                    <i class="fa fa-code">&nbsp;STM: <b><i>SAGITARIO</i></b></i><br />
                    <i class="fa fa-info-circle">&nbsp;&nbsp;VER: <b>2.2.9.20</b></i><br />
                    <i class="fa fa-database">&nbsp;&nbsp;BDS: <b>ACCAO14</b></i><br />
                    <i class="fa fa-calendar">&nbsp;&nbsp;ATL: <b>15/03/2018</b></i>
                </div>
                <div class="box box-title">APP-RF</div>
                <div class="box box-bg-color">
                    <i class="fa fa-code">&nbsp;STM: <b><i>SAGITARIO</i></b></i><br />
                    <i class="fa fa-info-circle">&nbsp;&nbsp;VER: <b>2.2.9.10</b></i><br />
                    <i class="fa fa-database">&nbsp;&nbsp;BDS: <b>APPRF24</b></i><br />
                    <i class="fa fa-calendar">&nbsp;&nbsp;ATL: <b>13/02/2018</b></i>
                </div>
                <div class="box box-title">COPM3</div>
                <div class="box box-bg-color">
                    <i class="fa fa-code"> STM: <b><i>DACOM</i></b></i><br />
                    <i class="fa fa-info-circle">&nbsp;&nbsp;VER: <b>4.6.6</b></i><br />
                    <i class="fa fa-database">&nbsp;&nbsp;BDS: <b>COPM3_1</b></i><br />
                    <i class="fa fa-calendar">&nbsp;&nbsp;ATL: <b>03/03/2018</b></i>
                </div>
            </div>
            <!-- #################### TERMINA AQUI AS BOXES ######################### -->

        </div>
    </div>
</template>

<script>
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
            getInfSis: function()
            {
                axios.get('/api/getInfSis').then(response => (this.dadosInfSistemas = response.data))
            }
        },

        created()
        {
            this.getInfSis()
        },
        
        mounted()
        {
            window.console.log('Componente INF-Sistemas Carregado')
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