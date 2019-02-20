<template>
    <div class="mnt-programadas">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-cogs titulo">
                        <b>&nbsp;MANUTENÇÕES PROGRAMADAS</b>
                    </i>
                </h3>
            </div>
            <div class="panel-body mnt-programadas-height">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>TESTE</h3>
                            <p>MNT PROGRAMADA</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-radio-waves"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            Mais detalhes <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: 'tiop-mnt',

        mounted() {
            window.console.log('Componente MNT-Prog Carregado')
        }
    }
</script>

<style scoped>
    .mnt-programadas {
        float: left;
        padding-left: 5px;
        width: 100%;
        margin-bottom: -20px;
    }

    .mnt-programadas-height {
        height: 575px;
    }
</style>