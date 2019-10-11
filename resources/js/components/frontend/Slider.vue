<template>

   <ul class="pgwSlider" >
      <li  v-for="item in slider" v-bind:key="item.id">
          <a href="s-artisticas">
              <img src="img/2246d36031da923ba74a3ff8a6daef86.png">
              <span style="font-family: inherit; font-weight: bold;">{{item.titulo}}</span></a>
        </li>


</ul>

</template>

<script>
    export default {
      data(){
           return{
               slider:[]
               }
           }
       ,
       methods:{
           listarSlider(){


            let me= this;
               axios.get("slider")
                .then(function (response) {
                    var respuesta= response.data;
                     me.slider= respuesta.sliders.data;
    //
                console.log(me.slider)

                 })
                .catch(function (error) {

                console.log(error);
                })
            }


        },

        mounted(){

 this.listarSlider();

        },created(){

        }
        }
</script>


