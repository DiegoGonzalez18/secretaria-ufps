
    <template >

    <ul class="pgwSlider"  v-if="hola" >

            <li v-for="item in slider " :key="item.id"><a href="#"><img :src="item.url"><span style="font-family: inherit; font-weight: bold;" v-text="item.titulo"></span></a>
        </li>
        </ul>


        </template>














<script>
const axios= require('axios');
const p = require('jquery')
const a= require('popper.js')

$(document).ready(function() {
    $('.pgwSlider').pgwSlider();
});
export default {
    mounted() {
this.listarSlider();

    },
      data(){
           return{
               slider:[],
               hola:false
               }
           }
       ,
       methods:{
           listarSlider(){


            let me= this;
               axios.get("slider")
                .then(function (response) {

                    var respuesta= response.data.sliders.data;
  me.slider= respuesta;
  me.hola=true;

    //
                console.log(respuesta)
                        console.log(me.slider.length)
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


