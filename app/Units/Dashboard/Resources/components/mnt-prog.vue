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
                <div class="float-right">
                    <div>
                        <div class="project_sort">
                            <div id="panel">
                                <ul class="project_list">
                                    <li v-for="(mntProg, index) in dadosMntProg" :key="mntProg.id" :id="index">
                                        <span class="project_badge" :class="status"></span>
                                        <a class="project_title alinha-esquerda"><b>{{ mntProg.radarNome }}</b></a><br>
                                        <span class="fa fa-calendar data"><a><b>&nbsp;{{ mntProg.data_ini }}</b></a></span>
                                        <span class="data"><a>&nbsp;&nbsp;<b class="fa fa-clock-o">&nbsp;{{ mntProg.hora_ini + 'Z'}}</b></a></span><br>
                                        <span class="fa fa-calendar data"><a><b>&nbsp;{{ mntProg.data_fim }}</b></a></span>
                                        <span class="data"><a>&nbsp;&nbsp;<b class="fa fa-clock-o">&nbsp;{{ mntProg.hora_fim + 'Z'}}</b></a></span><br>
                                        <span class="motivo">{{ mntProg.motivo }}</span><br>
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
        name: 'tiop-mnt',

        data: function (){
            return {
                dadosMntProg: [],
                mntCount: 0,
                status: 'ope'
            }
        },

        methods: {
            getMntProg: function()
            {
                axios.get('/api/getMntProg').then(response =>
                {
                    this.dadosMntProg = response.data;
                    this.mntCount     = Object.keys(this.dadosMntProg).length;
                })
            }
        },

        mounted() {
            window.console.log('Componente MNT-Prog Carregado');
            this.getMntProg();
        }
    }

</script>

<style scoped>
    .mnt-programadas {
        float: left;
        padding-left: 5px;
        width: 100%;
        margin-bottom: -20px;
        padding-top: 10px;
    }

    .motivo {
        font-size: 18px;
    }

    .panel-body {
        margin-left: -25px;
    }

    .mnt-programadas-height {
        height: 1003px;
    }

    .project_sort ul.project_list li{
        padding:15px;
        width:490px;
        height:155px;
        position:relative;
        border:solid 1px #c4c4c4;
        border-radius:3px;
        list-style:none;
        display:inline-block;
        margin-right:5px;
        margin-bottom:10px;
        background-color: #ededed;
        text-align: left;
    }


    .project_sort ul.project_list a.project_title{
        font-size:35px;
        text-align: left;
        color:#5c5c5c;
        text-shadow: 0px 1px 0px  #fff;
        display:inline-block;
        line-height:18px;
        font-family:  Helvetica, Arial, sans-serif;;
        text-decoration:none;
        padding-top: 5px;
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

    .data {
        text-align: left;
        font-size: 25px;
    }

</style>