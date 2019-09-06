<template>
    <div class="dacom">
        <div class="panel panel-primary">
            <div class="panel-heading" :class="{ 'box-dacom-titulo-color-red': !dacomAlert  }">
                <h3 class="panel-title">
                    <i class="fa fa-cloud-upload titulo">
                        <b>&nbsp;COPM SGD Backup</b>
                    </i>
                </h3>
            </div>
            <div class="panel-body">
                <div>
                    <div class="box-dacom">
                        <i v-if="dacomAlert" class="fa fa-check-circle">&nbsp;&nbsp;OK</i>
                        <i v-else-if="!dacomAlert" class="fa fa-exclamation-triangle error">&nbsp;&nbsp;FALHA!</i>
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
        dacomAlert: false
    }),

    methods:
    {
        getDACOMInfo: function ()
        {
            axios.get('/api/getStatusDACOM').then( response =>
            {
                this.dacomAlert = (response.data[0].status === 1);

                console.log(response.data[1])

                if (this.dacomAlert !== true) $('.blink').append("<br/>").append('FALHA CÓPIA DADOS DACOM!');
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
        margin-top: -12px;
    }

    .box-dacom {
        height: 40px;
        width: 270px;
        margin-left: 4px;
        font-size: xx-large;
        color: green;
        padding-left: 5px;
        padding-bottom: 5px;

    }

    .box-dacom-titulo-color-red {
        color: #fff;
        background-color: #ff0000;
        border-color: #ff0000;
    }

    .titulo {
        font-size: 20px;
        padding-bottom: -20px;
    }

    .error {
        color: red;
    }

</style>