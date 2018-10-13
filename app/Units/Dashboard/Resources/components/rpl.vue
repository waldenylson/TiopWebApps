<template>
    <div class="rpl">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-plane titulo">
                        <b>&nbsp;RPL</b>
                    </i>
                </h3>
            </div>
            <div class="panel-body">
                <div>
                    <div class="box-rpl" v-for="rplInfo in dadosRPLInfo">
                        <i class="fa fa-check-circle">&nbsp;ATUAL: <b><i>{{ rplInfo['numero'] }}</i></b></i><br />
                        <i class="fa fa-calendar">&nbsp;ATLIZ: <b>{{ rplInfo['dtCarga'] | moment("DD/MM/YYYY") }}</b></i>
                        <i class="fa fa-exclamation-circle">&nbsp;VALID: <b>{{ rplInfo['validade'] | moment("DD/MM/YYYY") }}</b></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
Vue.use(require('vue-moment'));
export default {
    name: 'tiop-rpl',

    data: function () {
        return {
            dadosRPLInfo: []
        }
    },

    methods:
    {
        getRPLInfo: function () {
            axios.get('/api/getRPLInfo').then(response => (this.dadosRPLInfo = response.data))
        }
    },

    mounted() {
        window.console.log('componente RPL carregado')
        this.getRPLInfo()
    }
}

</script>

<style scoped>
    .box-rpl {
        height: 142px;
        width: 99.5%;
        left: 20%;
        top: 20%;
        padding-top: 1px;
        margin-left: 1px;
        margin-bottom: 1px;
        margin-top: 1px;
        font-size: xx-large;
        padding-left: 5px;
    }
</style>