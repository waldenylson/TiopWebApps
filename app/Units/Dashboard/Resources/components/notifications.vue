<template>
    <div class="notifications">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-info titulo">
                        <b>&nbspNOTIFICAÇÕES SISTEMA</b>
                    </i>
                </h3>
            </div>
            <div class="panel-body">
                <div class="box box-bg-color-notification box-notification box-notification-height">
                    <span class="blink">

                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: 'tiop-notifications',

        data: function (){
            return {
                efetivoTiop: []
            }
        },

        methods: {
            getEfetivo: function() {
                axios.get('/api/getEfetivo').then(response => (this.efetivoTiop = response.data))
            },


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
        text-align: center;
        /*font-size: 100px;*/
        color: red;
    }

    .box-notification-height {
        height: 250px;
    }

    .box-bg-color-notification {
        background-color: #ffffff;
    }

    .blink{
        width:200px;
        height: 50px;
        color: red;
        padding: 15px;
        text-align: justify;
        line-height: 50px;
    }
    span{
        font-size: 35px;
        font-family: Verdana;
        font-weight: bold;
        color: white;
        animation: blink 1.3s linear infinite;
    }
    @keyframes blink{
        /*0%{opacity: 0;}*/
        50%{opacity: .0;}
        100%{opacity: 5;}
    }
</style>