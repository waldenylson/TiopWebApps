<template>
    <div class="sinoptico">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-podcast titulo">
                        <b>&nbsp;SINÓPTICO RADARES</b>
                    </i>
                </h3>
            </div>
            <div class="panel-body">
                <div class="float-right">
                    <div>
                        <div class="project_sort">
                            <div id="panel">
                                <ul class="project_list">                                    
                                    <li v-for="radar in dadosRadares" :key="radar.id">
                                        <span class="project_badge" :class="[ radar.status ]"></span>
                                        <a class="project_title"><b>{{ radar.nome }}</b></a><br>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "status-radares",

        props: ['radares'],

        data: function (){
            return {
                dadosRadares: []
            }
        },

        methods: {
            getRadares: function() {
                axios.get('/api/getRStatus').then(response => (this.dadosRadares = response.data))
                setTimeout(this.getRadares, 10000)
            }
        },

        mounted () {
            console.log('componente radares carregado...')
            this.getRadares()
        }
    }
</script>

<style scoped>

    /*PROJECT SORT*/
    ul.filter_project{
        margin-left: 0px;
        background:#d3d3d3;
        border-top:solid 1px #f6f6f6;

    }
    ul.filter_project li{
        font-size: 14px;
        padding:8px 15px;
        display:inline-block;
        list-style:none;
    }
    ul.filter_project li a{
        color:#6c6c6c;

        font-weight:bold;
        text-shadow: 0px 1px 0px  #fff;
    }
    ul.filter_project li span.count a{
        line-height:100%;
        color:#fff;
        text-shadow: 0px 1px 0px  #353535;
        padding:2px 2px 2px;
        background:#707070;
        border-radius:2px;
        margin-left:8px;
        min-width:16px;
        text-align:center;
        display:inline-block;
        box-shadow:0px 1px 0px 0px #ffffff;
        -webkit-box-shadow:0px 1px 0px 0px #ffffff;
    }
    ul.filter_project li.selected{
        background:#ffffff;
        box-shadow:inset 0px 10px 8px #eaeaea;
        -webkit-box-shadow:inset 0px 10px 8px #eaeaea;
        border:solid 1px #fff;
        border-width:0px 1px;
    }
    ul.filter_project li.selected a{
        color:#4a4a4a;
    }
    ul.filter_project li.selected span.count{
        background:#4a4a4a;
    }

    .project_sort ul.project_list{
        margin:0px;
        padding:18px 0px 0px 18px;
    }
    .project_sort ul.project_list li{
        padding:12px;
        width:120px;
        height:60px;
        position:relative;
        border:solid 1px #c4c4c4;
        border-radius:10px;
        list-style:none;
        display:inline-block;
        margin-right:16px;
        margin-bottom:16px;
        background-color: #ededed;
    }
    .project_sort ul.project_list .project_badge{
        width:36px;
        height:36px;
        position:absolute;
        right:-1px;
        top:-1px;
        background:url("/img/project_badge.png") no-repeat center;
        color:#fff;
        font-size:15px;
        text-align:right;
        line-height:17px;
    }
    .project_sort ul.project_list .project_badge.ino{
        background-position:-148px 0px;
    }
    .project_sort ul.project_list .project_badge.ope{
        background-position:-299px 0px;
    }
    .project_sort ul.project_list .project_badge.deg{
        background-position:-1px 0px;
    }
    .project_sort ul.project_list a.project_title{
        font-size:30px;
        text-align: center;
        color:#5c5c5c;
        text-shadow: 0px 1px 0px  #fff;
        display:inline-block;
        line-height:18px;
        font-family:  Helvetica, Arial, sans-serif;;
        text-decoration:none;
    }
    .project_sort ul.project_list a.project_body{
        font-size:11.5px;
        color:#5c5c5c;
        text-shadow: 0px 1px 0px  #fff;
        display:inline-block;
        line-height:40px;
        font-family:  cursive;
        text-decoration:none;
    }
    .project_sort ul.project_list a.assigned_user{
        font-size:12px;
        color:#6c6c6c;
        text-shadow: 0px 1px 0px  #fff;
        position:absolute;
        bottom:11px;
        left:10px;
        text-decoration:none;
    }
    .project_sort ul.project_list a.assigned_user span{
        font-size:19px;
        float:left;
        margin-top:-7px;
        margin-right:2px;
    }

    .sinoptico {
        padding-left: 5px;
        padding-top: 20px;
        margin-bottom: -10px;
        width: 100%;
    }

</style>