<template>
    <div class="sitc">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-podcast titulo">
                        <b>&nbspSTATUS SITC</b>
                    </i>
                </h3>
            </div>
            <div class="panel-body">
                <div class="box box-bg-color-sitc box-sitc box-sitc-height">
                    <div class="teste">
                        <span class="fa fa-server"></span>
                        <span class="texto">SITC-RF</span>
                    </div>
                    <div class="teste">
                        <span class="fa fa-server"></span>
                        <span class="texto">SITC-NT</span>
                    </div>
                    <div class="teste">
                        <span class="fa fa-server"></span>
                        <span class="texto">TATIC-SV</span>
                    </div>
                    <div class="teste">
                        <span class="fa fa-server"></span>
                        <span class="texto">SITC-FZ</span>
                    </div>
                    <div class="teste">
                        <span class="fa fa-server"></span>
                        <span class="texto">SITC-PS</span>
                    </div>
                    <div class="teste">
                        <span class="fa fa-server"></span>
                        <span class="texto">TATIC-MO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: 'tiop-sitc',

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
            window.console.log('componente sitc carregado')
            //this.getEfetivo()
        }
    }
</script>

<style scoped>
    .panel-body {
        padding: 5px;
    }

    .sitc {
        overflow: hidden;
        height: 100%;
        margin-bottom: -10px;
    }
    .box-sitc {
        background-color: royalblue;
        height: 50%;
        width: 99.5%;
        text-align: center;
    }

    .box-sitc-height {
        height: 480px;
    }

    .box-bg-color-sitc {
        background-color: #fff;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        align-items: center;
        justify-content: center;
    }

    .teste {
        font-size: 170px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .texto {
        font-size: 30px;
        font-weight: bold;
        color:green;
        text-shadow: 0px 1px 0px  #fff;
        display:inline-block;
        line-height:18px;
        font-family:  Helvetica, Arial, sans-serif;;
        text-decoration:none;
    }

    .texto-red {
        color:red;
    }

    .texto-yellow {
        color: #ffc919;
    }

</style>