<template>
    <div class="bottom-container">
        <div class="panel panel-default">
            <div class="panel-body bottom-container-decoration">
                <div class="relogio">
                    <div id="hora"></div><br />
                    <div id="data"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'tiop-rodape',

        created: function(){
            this.relogio()
        },

        methods: {
            relogio: function (event) {
                let mestxt
                
                var momentoAtual = new Date();
                
                var ano = momentoAtual.getFullYear();
                var mes = momentoAtual.getMonth();
                var dia = momentoAtual.getDate();
                var hora = momentoAtual.getHours();
                var minuto = momentoAtual.getMinutes();
                var segundo = momentoAtual.getSeconds();
                
                if(segundo <=9 ){ segundo = "0"+segundo; };
                if(minuto <=9 ){ minuto = "0"+minuto; };
                if(hora <=9 ){ hora = "0"+hora; };
                
                switch(mes){
                    case 0: mestxt = "JAN"; break;
                    case 1: mestxt = "FEV"; break;
                    case 2: mestxt = "MAR"; break;
                    case 3: mestxt = "ABR"; break;
                    case 4: mestxt = "MAI"; break;
                    case 5: mestxt = "JUN"; break;
                    case 6: mestxt = "JUL"; break;
                    case 7: mestxt = "AGO"; break;
                    case 8: mestxt = "SET"; break;
                    case 9: mestxt = "OUT"; break;
                    case 10: mestxt = "NOV"; break;
                    case 11: mestxt = "DEZ"; break;
                }
                
                $("#hora").html(hora +":"+ minuto +":"+ segundo)
                $("#data").html(dia + " de " + mestxt + " de " + ano)
                
                momentoAtual.setSeconds(momentoAtual.getSeconds()+1);
                
                setTimeout(this.relogio, 1000)
            }
        },

        mounted() {
            window.console.log('Componente Rodapé Carregado')
        }
    }
</script>

<style scoped>
    .bottom-container {
        padding-left: 4px;
        padding-top: 5px;
        text-align: center;
        width: 280px;
    }

    .bottom-container-decoration {
        border: 1px solid #0d6aad;
        border-radius:3px;
        height: 55px;
        text-align: center;
    }

    #data {
        margin-left: 16px;
    }

    #hora {
        margin-bottom: 2px;
        height: 35px;
        text-align: center;
    }
</style>