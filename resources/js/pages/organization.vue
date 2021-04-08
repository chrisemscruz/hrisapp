<template>
  <div class="flex flex-col">
      <!---header--->
      <div class="bg-gray-200 w-full px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider flex justify-between item-center" >
          <div class="flex self-center">company</div>
          <div @click.prevent="showModal" class="-ml-1 mr-2 h-7 w-7 bg-purple-600 rounded-2xl text-gray-500 cursor-pointer hover:bg-purple-300">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
         </div>
      </div>
      <!---body--->
      <vue-tables :items="companyList">
          Hellow
      </vue-tables>

  </div>

</template>

<script>
import VueTables from '../components/vueTables.vue';

export default {
        components:{
            VueTables
        },
        created(){
                axios.get('api/items')
                .then(response => {
                    this.companyList = response.data

                })
                .catch(err=>console.log(err))
        },
        data : function(){
            return{
                id:0,
                title:'',
                name:'',
                companyList:[],
                toggle:false
            }
        },
        methods:{
            showModal: function(){
              this.$eventBus.$emit('show-modal',true);
              this.update=false
            }
        }
    }
</script>

<style scoped>

svg{
    stroke:black;
}
svg:hover{
    stroke:#6366f1;
}


</style>
