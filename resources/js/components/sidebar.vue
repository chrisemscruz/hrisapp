<template>
        <div class="sidebar-dash bg-white  rounded-r">
            <router-link
                v-for="(item,key) in nav"
                v-bind:key="key"
                :to="item.link"
                class="dash-link text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-100 cursor-pointer select-none">
                {{item.title}}
            </router-link>
        </div>

</template>
<script>
module.exports = {
     data: function(){
       return{
           nav:[
                { title: 'Organization', link: '/organization' },
                { title: 'Employees', link: '/employees' },
                { title: 'Settings', link: '/settings' }
            ]

       }
     },
    methods: {

    }
    };

</script>
<style scoped>
.sidebar-dash{

    display:grid;
}

.dash-link{
    border-left: 10px solid white;
    padding: .8em;
    text-align: center;
    --initialTextColor: #FFF;
      --slideTextColor: #272838;
      --initialBgColor: #ffffff;
      --slideBgColor: #6366f1;
      background-image: linear-gradient(90deg,
          var(--initialBgColor) 0%,
          var(--initialBgColor) 50%,
          var(--slideBgColor) 50%,
          var(--slideBgColor) 100%);
      background-size: 200%;
      transition: background-position .3s cubic-bezier(.47, .1, 1, .63),
        color .2s linear;
      transition-delay: 0.0s, 0.15s;

}
.dash-link:hover{
    border-left: 10px solid;
    border-color:#6366f1;
    cursor: pointer;
    background-position: -100% 100%;
    color:white;
}
.router-link-active{
    border-left: 10px solid #6366f1;
   border-color:#6366f1;
    background-color:#6366f1;
    background-position: 0 -100%;
}
</style>
