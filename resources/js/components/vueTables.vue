<template>
 <div>
     <div v-for="(item,index) in items" :key="index" class="table-body" >
      <div  class="bg-white shadow  p-3  border-b border-gray-200 flex justify-between">

             <div class="flex items-center content">
                    <div class="flex-shrink-0 h-10 w-10">
                            <img class="" src="https://upload.wikimedia.org/wikipedia/commons/5/55/LogoCSAV.png" alt="">
                    </div>
                    <div class="ml-4">
                        <div class="text-sm font-medium text-gray-900 uppercase select-none">
                            {{item.title}}
                        </div>
                        <div class="text-sm text-gray-500 capitalize select-none">
                            {{item.name}}
                        </div>
                    </div>
                </div>

            <div class="flex justify-center items-center">
                <!---buttons--->
                <vue-buttons :btn-type="1">Toggle</vue-buttons>
                <vue-buttons :btn-type="2">Edit</vue-buttons>
                <vue-buttons :btn-type="3">Delete</vue-buttons>
            </div>

      </div>
      <slot></slot>

</div>
 </div>
</template>
<script>

import VueButtons from './vueButtons.vue'

export default {
    props:[
        'items'
    ],
    components:{
        VueButtons
    },
    data: function(){
        return{

        }
    }
}
</script>

<style scoped>
 .table-body{
        grid-template-columns: repeat(2, 1fr) 50px 60px;
    }
  .table-body-dept{
        grid-template-columns: repeat(2, 1fr) 50px 60px;
    }
 .component-fade-enter-active, .component-fade-leave-active {

  transition: all .5s ease;
  max-height:600px;
  opacity:100;
}
.component-fade-enter, .component-fade-leave-to
/* .component-fade-leave-active below version 2.1.8 */ {
  max-height: 0;
  opacity:0;
}
.content{
    max-height:60px;
}

</style>
