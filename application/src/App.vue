<template>
  <v-app>
    <v-container d-flex justify-center align-center>
      <v-card height="500px" width="500px" color="blue">
        <v-form d-flex justify-center>
          <v-text-field label="Cateto A" placeholder="Ejemplo: 23" v-model="catetoA" name="catetoA" clearable></v-text-field>
          <v-text-field label="Cateto B" placeholder="Ejemplo: 123" v-model="catetoB" name="catetoB" clearable></v-text-field>
          <v-btn @click="sendData">calcular</v-btn>
        </v-form>
        <v-card>
          <katex-element expression="a^{2}=b^{2}+c^{2}\to\sqrt{b^{2} + c^{2}\to a=}"/>
          {{message}}
        </v-card>
      </v-card>
    </v-container>
  </v-app>
</template>

<script>
export default {
  name: 'App',
  data: () => {
    return {
      catetoA: null,
      catetoB: null,
      message: null
    }
  },
  methods: {
    getData: function() {
      console.log(typeof(console.log(this.catetoA)))
      console.log(typeof(console.log(this.catetoB)))
    },
    sendData: function() {
      let url = "http://localhost:9090/calculador.php";
      let formData = {
        catetoA: this.catetoA,
        catetoB: this.catetoB,
      }
      
      this.$http.post(url, formData).then(
        (response) => {
          let trueResponse = response.data;
          // let responseConsole = typeof(response.data);
          this.message = trueResponse;
        }
      )
    }
  }
};
</script>
