<template>
    <div>
      <button
            @click.prevent="handleButtons(btnType)"
            type="button"
            class="inline-flex items-center mr-2 px-3 py-2
            border border-gray-300 rounded-md shadow-sm
            text-sm font-medium text-gray-700 bg-white
            hover:bg-gray-50 focus:outline-none focus:ring-2
            focus:ring-offset-2 focus:ring-indigo-500 btn">
        <!-- Heroicon name: solid/pencil -->

           <div  v-html="btnType == '1' ? icon1 : btnType == '2' ? icon3: icon4 "></div>
            <slot></slot>
    </button>

    </div>
</template>
<script>
export default {
    props:[
        'btnType'
    ],
    data:function(){
        return{
                //toggle
                icon1:`<svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                </svg>`,
                icon2:`<svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                </svg>`,

                //'Edit',
                icon3:`<svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>`,


                //'Delete',
                icon4:`<svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>`


        }
    },
    methods:{
        handleButtons:function(key){
            console.log(key)
        }
    }
}
</script>

<style scoped>
.btn{
     max-height:40px;
}
</style>
