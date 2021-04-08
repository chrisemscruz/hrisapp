<template>
  <!---container-->
  <div v-if="toggle" class="modal-container">

    <div class="company-modal rounded-lg flex flex-col justify-center items-center">
        <div class="w-full rounded-lg h-full">
            <div class="bg-white  shadow h-full rounded-lg">
                    <div class="border-b border-grey-lighter rounded-lg  bg-gray-600 p-4">
                    <h3  class="text-white">
                        {{ update ? 'Update' : 'Add' }} Company
                    </h3>

                    </div>
                    <div class="p-4">
                        <div class="mb-4 mt-4">
                            <label for="company" class="uppercase text-sm tracking-wide font-semibold text-grey-darker  px-2">
                            Company Title
                            </label>
                            <input v-model="company.title" type="company" id="company" class="no-appearance bg-grey-lighter w-full leading-normal py-2 px-3 rounded border-b border-grey-light mt-2 focus:outline-none">
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="mb-4 mt-4">
                            <label for="company" class="uppercase text-sm tracking-wide font-semibold text-grey-darker  px-2">
                            Company Name
                            </label>
                            <input v-model="company.name"  type="company" id="company" class="no-appearance bg-grey-lighter w-full leading-normal py-2 px-3 rounded border-b border-grey-light mt-2 focus:outline-none">
                        </div>
                    </div>
                    <div class="flex justify-end mt-2">
                        <div class="flex justify-between mr-4"><!---buttons--->
                        <button v-for="(item,index) in buttons"
                                :key="index"
                                @click.prevent="handleButtons(index)"
                                type="button" class="inline-flex items-center px-4 py-2 mr-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 capitalize">
                    <!-- Heroicon name: solid/pencil -->
                        <div v-html="item.html"></div>
                           {{ (update && index===1) ? 'Update' : item.title }}
                        </button>
                    </div>
                    </div>

            </div>
        </div>
    </div>

     <div class="modal-bg">
     </div>
</div>

</template>
<script>
    module.exports ={
            created() {
            this.$eventBus.$on('show-modal',toggle =>{
                this.toggle=toggle
            })
        },
        data: function(){

            return{
                count:0,
                company:{
                    name:'',
                    title:'',
                },
                toggle:false,
                update:true,
                buttons:[
                    {
                        title:'cancel',
                        html:`<svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>`
                    },
                    {
                        title:'save',
                        html:`<svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>`
                    }
                ]
            }

        },

        computed:{

        },

        methods:{
            handleButtons: function(key){
                if (key === 0){
                   this.company.title=''
                   this.company.name=''
                   this.toggle = false
                }
                else{

                    axios.post('api/company/store', {
                        company: this.company
                    })
                    .then(response=>{
                        if(response.status ==201){
                            this.company.name ==''
                            this.company.title==''
                              this.toggle = false
                        }
                    })
                    .catch(error =>{
                        console.log(error)
                    })

                    location.reload()

                }

            },

        }

    }

</script>


<style scoped>
 .modal-bg{
    position:absolute;
    top:0;
    left:0;
    height:100vh;
    width:100%;

    z-index:0;
    background: rgba( 192, 170, 170, 0.00 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 2.0px );
    -webkit-backdrop-filter: blur( 3.5px );
    overflow:hidden;

}
.company-modal{
    position:absolute;
    top:20%;
    left:35%;
    height:400px;
    width:500px;
    background-color:white;
    z-index:100;

}
.modal-container{
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
}

</style>




