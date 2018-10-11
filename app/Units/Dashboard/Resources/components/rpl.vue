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
                    <div class="box-rpl">
                        <i class="fa fa-check-circle">&nbsp;ATUAL: <b><i>RPL060</i></b></i><br />
                        <i class="fa fa-calendar">&nbsp;ATLIZ: <b>10/10/2018</b></i>
                        <i class="fa fa-exclamation-circle">&nbsp;VALID: <b>19/10/2018</b></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'tiop-rpl',

    mounted() {
        window.console.log('componente RPL carregado')
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