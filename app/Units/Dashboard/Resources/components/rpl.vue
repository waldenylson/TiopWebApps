<template>
    <div class="rpl">
        <div class="panel panel-primary" v-for="rplInfo in dadosRPLInfo">
            <div class="panel-heading"  v-bind:class="{  }">
                <h3 class="panel-title">
                    <i class="fa fa-plane titulo">
                        <b>&nbsp;RPL</b>
                    </i>
                </h3>
            </div>
            <div class="panel-body">
                <div>
                    <div class="box-rpl">
                        <i class="fa fa-check-circle">&nbsp;ATUAL: <b><i>{{ rplInfo['numero'] }}</i></b></i><br />
                        <i class="fa fa-calendar">&nbsp;ATLIZ: <b>{{ rplInfo['dtCarga'] }}</b></i>
                        <i class="fa fa-exclamation-circle">&nbsp;VALID: <b>{{ rplInfo['validade'] }}</b></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {


    name: 'tiop-rpl',

    data: () => ({

        dadosRPLInfo: {},

    }),

    methods:
    {
        getRPLInfo: function ()
        {
            axios.get('/api/getRPLInfo').then(response => (this.dadosRPLInfo = response.data));

            console.log(this.dadosRPLInfo)


        }
    },

    mounted() {
        window.console.log('componente RPL carregado');
        this.getRPLInfo()
    }
}

</script>

<style scoped>
    .rpl {
        width: 275px;
        margin-left: 5px;
        margin-top: 25px;
    }

    .box-rpl {
        height: 100px;
        width: 270px;
        padding-top: 5px;
        margin-left: 4px;
        margin-bottom: 1px;
        margin-top: 1px;
        font-size: large;
        padding-left: 5px;
    }

    .box-rpl-titulo-color-red {
        color: #fff;
        background-color: #ff0000;
        border-color: #ff0000;
    }

</style>