<template>
       <transition name="component-fade" mode="out-in">
        <div v-if="item.toggle" class="whitespace-nowrap bg-gray-100 trans-div">
            <div class="flex flex-col ">
                    <div class="bg-gray-200 w-full px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider flex justify-between  ">

                        <div class="flex self-center">Branch</div>
                        <div class="-ml-1 mr-2 h-7 w-7 text-gray-500 cursor-pointer bg-purple-400 rounded-2xl hover:bg-purple-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"          stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                        </div>

                    </div>
                    <div  v-for="(dItem, dIndex) in item.department"
                          :key="dIndex"
                          class="cursor-pointer table-body-dept flex justify-between px-6 py-4 whitespace-nowrap bg-gray-100  border-b">
                        <div class="flex justify-center items-center ml-4">
                            <div class="ml-28">
                                <div class="text-sm font-medium text-gray-900 uppercase grid items-center select-none ">
                                    {{dItem.name}}
                                </div>
                            </div>
                        </div>
                        <div class="">
                                <button @click.prevent="handleButtonsDept(index,dIndex)" type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: solid/pencil -->
                                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                                Edit
                                </button>

                                <button @click.prevent="item.toggle = !item.toggle" type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: solid/pencil -->

                                <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Delete
                                </button>
                        </div>
                    </div>
            </div>
      </div>
    </transition>
</template>
