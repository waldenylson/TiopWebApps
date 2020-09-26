<template>
  <div class="dacom">
    <div class="panel panel-primary">
      <div
        class="panel-heading"
        :class="{
                    'box-dacom-titulo-color-yellow': (PSAlert ^ MOAlert),
                    'box-dacom-titulo-color-red': !(PSAlert && MOAlert)

                 }"
      >
        <h3 class="panel-title">
          <i class="fa fa-cloud-upload titulo">
            <b>&nbsp;DTCEAs SGD BKP</b>
          </i>
        </h3>
      </div>
      <div class="panel-body">
        <div>
          <div class="box-dacom">
            <i v-if="PSAlert" class="fa fa-check-circle">&nbsp;SVR DTCEA-PS&nbsp;&nbsp;</i>
            <i v-else-if="!PSAlert" class="fa fa-exclamation-triangle error">&nbsp;SVR DTCEA-PS</i>
            <i v-if="MOAlert" class="fa fa-check-circle disabled">&nbsp;SVR DTCEA-MO</i>
            <!-- <i v-else-if="!MOAlert" class="fa fa-exclamation-triangle error">&nbsp;SVR DTCEA-MO</i> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "tiop-dtceas",

  data: () => ({
    PSAlert: false,
    MOAlert: false
  }),

  methods: {
    getDACOMInfo: function() {
      axios.get("/api/getStatusDACOM").then(response => {
        this.PSAlert = response.data[2].status;
        this.MOAlert = 1; //response.data[3].status;

        if (!this.PSAlert)
          $(".blink")
            .append("<br/>")
            .append("FALHA CÓPIA DTCEA-PS!");

        // if (!this.MOAlert)
        //   $(".blink")
        //     .append("<br/>")
        //     .append("FALHA CÓPIA DADOS DTCEA-MO!");
      });
    }
  },

  mounted() {
    window.console.log("componente dacom carregado");
    this.getDACOMInfo();
  }
};
</script>

<style scoped>
.dacom {
  width: 275px;
  margin-left: 5px;
  margin-top: -16px;
}

.box-dacom {
  height: 50px;
  width: 270px;
  margin-left: 4px;
  font-size: 20px;
  color: green;
  padding-left: 5px;
  padding-bottom: 5px;
}

.disabled {
  color: gray;
}

.box-dacom-titulo-color-red {
  color: #fff;
  background-color: #ff0000;
  border-color: #ff0000;
}

.box-dacom-titulo-color-yellow {
  color: #fff;
  background-color: #ffe623;
  border-color: #ffe623;
}

.titulo {
  font-size: 20px;
  padding-bottom: -20px;
}

.error {
  color: red;
}
</style>