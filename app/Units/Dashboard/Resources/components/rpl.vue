<template>
    <div class="rpl">
        <div class="panel panel-primary">
            <div class="panel-heading" v-bind:class="{ 'box-rpl-titulo-color-red': rplAlert.rplAlert  }">
                <h3 class="panel-title">
                    <i class="fa fa-plane titulo">
                        <b>&nbsp;RPL</b>
                    </i>
                </h3>
            </div>
            <div class="panel-body">
                <div>
                    <div class="box-rpl">
                        <i class="fa fa-check-circle">&nbsp;ATUAL: <b><i>{{ dadosRPLInfo.numero }}</i></b></i><br />
                        <i class="fa fa-calendar">&nbsp;ATLIZ: <b>{{ dadosRPLInfo.dtCarga }}</b></i>
                        <i class="fa fa-exclamation-circle">&nbsp;VALID: <b>{{ dadosRPLInfo.validade }}</b></i>
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
        rplAlert: false
    }),

    methods:
    {
        getRPLInfo: function ()
        {
            axios.get('/api/getRPLInfo').then( response =>
            {
                let dadosResposta = response.data;

                this.dadosRPLInfo = dadosResposta[0];
                this.rplAlert     = dadosResposta[1];

                console.log(this.rplAlert.rplAlert)

                if (this.rplAlert.rplAlert === true)
                {
                    $('.blink').append('RPL VENCENDO OU VENCIDO!');
                }
            });
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