<template>
    <div class="main-container fixed ">
        <div class="sidebar-container bg-white" >
            <div class="bg-white divide-gray-200 rounded-r">
                <div class="dash-link-top text-gray-100 bg-gray-800 select-none">
                    Sidebar
                </div>
                <sidebar></sidebar>
            </div>
        </div>
        <div class="content-container overflow-scroll ">
            <div class="bg-transparent flex flex-col flex-wrap justify-start space-y-2 " >
                <div class="content-header dash-link-top text-gray-100 bg-gray-800 flex justify-end">
                    <div class="search-bar bg-white ">
                        <div class="icon-container">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="26"
                                height="36.78"
                                viewBox="0 0 22 26"
                                fill="none"
                                stroke="#000000"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <circle cx="11" cy="11" r="6"></circle>
                                <line
                                    x1="16"
                                    y1="16"
                                    x2="18.65"
                                    y2="18.65"
                                ></line>
                            </svg>
                        </div>
                        <div class="search-input border-none outline-none focus:border-none focus:outline-none">
                            <input
                                type="text"
                                class=" search-text border-none outline-none focus:border-none focus:outline-none"
                                placeholder="Search"
                            />
                        </div>
                    </div>
                    <!---search-bar-->
                </div>
                <!---conten-header-->
            </div>
            <div class="content-body ">
                <router-view></router-view>
            </div>
            <footer class="h-20">a</footer>
        </div>
        <!---conten-container-->





    </div>
    <!---main-container-->



</template>

<script>
const sidebar = require("./components/sidebar").default;
//const addCompany = require("./modals/addcompany").default;

module.exports = {
    mounted(){
        this.$eventBus.$on('show-modal',toggle =>{
            this.toggle =toggle;
        })
    },
    components: {
        sidebar,
       // addCompany
    },

};
</script>

<style scoped>
.main-container
{
display:grid;
grid-template-columns:  250px 1fr 1px;
height: 100vh;
width: 100%;
grid-gap: 15px;
overflow:hidden;

}

.sidebar-container{
    grid-column: 1;
    width: 100%;
    min-width: 200px;
    max-width: 250px;
    height: 100%;
    box-shadow: 5px 7px 17px -6px rgba(0,0,0,0.58);

}

.content-container{
    grid-column: 2;
    width: 100%;
    margin-right:5px;


}
.dash-link-top{
    padding:1em;
    background-color:#37474f;
}

.content-header{
    padding:0px;
    /* background-color:#37474f; */
}
.search-bar{
    display:grid;
    grid-template-columns: 30px auto;
    min-width:200px;
    width:35%;
    margin: 11px 20px;
    border-radius:5px;
}
svg{

    stroke:white;
    fill:none;

}
svg:hover{
    stroke: white;
}

.icon-container{
    cursor:pointer;
    height:100%;
    min-width:29px;
    width:8px;
    background-color: #6366f1;
    border: 1px red;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.search-input{
    color:black;
    width:90%;

}

.search-text{
    width:100%;
    padding:.40em 1em;


}
.content-body{
height: 100vh;
}
.journal-scroll::-webkit-scrollbar {
            width: 4px;
            cursor: pointer;
            /*background-color: rgba(229, 231, 235, var(--bg-opacity));*/

        }
.journal-scroll::-webkit-scrollbar-track {
            background-color: rgba(229, 231, 235, var(--bg-opacity));
            cursor: pointer;
            /*background: red;*/
        }
.journal-scroll::-webkit-scrollbar-thumb {
            cursor: pointer;
            background-color: #a0aec0;
            /*outline: 1px solid slategrey;*/
        }


</style>
