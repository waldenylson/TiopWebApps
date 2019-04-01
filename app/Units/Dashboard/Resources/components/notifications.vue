<template>
    <div class="notifications">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-info titulo">
                        <b>&nbsp;NOTIFICAÇÕES SISTEMA</b>
                    </i>
                </h3>
            </div>
            <div class="panel-body">
                <div class="box box-bg-color-notification box-notification box-notification-height">

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'tiop-notifications',

        props: ['efetivotiop'],

        data: function (){
            return {
                efetivoTiop: []
            }
        },

        methods: {
            getEfetivo: function() {
                axios.get('/api/getEfetivo').then(response => (this.efetivoTiop = response.data))
            }
        },

        mounted() {
            window.console.log('componente notifications carregado')
            //this.getEfetivo()
        }
    }
</script>

<style scoped>
    .panel-body {
        padding: 5px;
    }

    .notifications {
        overflow: hidden;
        height: 100%;
        margin-bottom: -10px;
    }
    .box-notification {
        background-color: royalblue;
        height: 50%;
        width: 99.5%;
        text-align: left;
        font-size: 12px;
    }

    .box-notification-height {
        height: 337px;
    }

    .box-bg-color-notification {
        background-color: snow;
    }
</style>