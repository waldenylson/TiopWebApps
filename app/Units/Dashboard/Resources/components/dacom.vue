<template>
    <div class="dacom">
        <div class="panel panel-primary">
            <div class="panel-heading"
                 :class="{
                    'box-dacom-titulo-color-yellow': (dacomAlert1 ^ dacomAlert2),
                    'box-dacom-titulo-color-red': !(dacomAlert1 && dacomAlert2)

                 }"

            >
                <h3 class="panel-title">
                    <i class="fa fa-cloud-upload titulo">
                        <b>&nbsp;COPM SGD Backup</b>
                    </i>
                </h3>
            </div>
            <div class="panel-body">
                <div>
                    <div class="box-dacom">
                        <i v-if="dacomAlert1" class="fa fa-check-circle">&nbsp;SVR Primário&nbsp;&nbsp;</i>
                        <i v-else-if="!dacomAlert1" class="fa fa-exclamation-triangle error">&nbsp;SVR Primário</i>
                        <i v-if="dacomAlert2" class="fa fa-check-circle">&nbsp;SVR Secundário</i>
                        <i v-else-if="!dacomAlert2" class="fa fa-exclamation-triangle error">&nbsp;SVR Secundário</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: 'tiop-dacom',

    data: () => ({
        dacomAlert1: false,
        dacomAlert2: false
    }),

    methods:
    {
        getDACOMInfo: function ()
        {
            axios.get('/api/getStatusDACOM').then( response =>
            {
                this.dacomAlert1 = (response.data[0].status === 1);
                this.dacomAlert2 = (response.data[1].status === 1);

                if (this.dacomAlert1 !== true) $('.blink').append("<br/>").append('FALHA CÓPIA DADOS DACOM!');
                if (this.dacomAlert2 !== true) $('.blink').append("<br/>").append('FALHA CÓPIA DADOS DACOM!');
            });
        }
    },

    mounted() {
        window.console.log('componente dacom carregado');
        this.getDACOMInfo()
    }
}

</script>

<style scoped>
    .dacom {
        width: 275px;
        margin-left: 5px;
        margin-top: -10px;
    }

    .box-dacom {
        height: 80px;
        width: 270px;
        margin-left: 4px;
        font-size: x-large;
        color: green;
        padding-left: 5px;
        padding-bottom: 5px;

    }

    .box-dacom-titulo-color-red {
        color: #fff;
        background-color: #ff0000;
        border-color: #ff0000;
    }

    .box-dacom-titulo-color-yellow {
        color: #fff;
        background-color: #ffe623;
        border-color: #ffe623;
    }

    .titulo {
        font-size: 20px;
        padding-bottom: -20px;
    }

    .error {
        color: red;
    }

</style>