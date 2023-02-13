<template>
  <div class="sobreaviso">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">
          <i class="fa fa-bell titulo">
            <b>&nbsp;SOBREAVISO TÉCNICO</b>
          </i>
        </h3>
      </div>
      <div
        class="panel-body center"
        v-for="(sobreavisoInfo,index) in dadosSobreaviso"
        :key="sobreavisoInfo.id"
        :id="index"
      >
        <b>
          2S REHILSON - 6267  
	{{
          sobreavisoInfo['posto_gradu'] + '&nbsp;' +
          sobreavisoInfo['especialidade'] + '&nbsp;' +
          sobreavisoInfo['nome_guerra'].toUpperCase() + '&nbsp;' + ' - '+ '&nbsp;' +
          sobreavisoInfo['agenda']
          }}
        </b>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "tiop-sobreaviso",

  data: function() {
    return {
      dadosSobreaviso: []
    };
  },

  methods: {
    getSobreaviso: function() {
      axios
        .get("/api/getSobreaviso")
        .then(response => (this.dadosSobreaviso = response.data));
      //setTimeout(this.getSobreaviso, 50000);
    }
  },

  mounted() {
    console.log("componente sobreaviso carregado...");
    this.getSobreaviso();
  }
};
</script>

<style scoped>
.sobreaviso {
  font-size: xx-large;
  margin-bottom: -10px;
}
</style>
