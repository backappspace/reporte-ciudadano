<template>
    <div class="flex flex-wrap">
        <div class="p-1 w-full sm:w-full md:w-1/2">
            <router-link :to="{ name: 'convocatoria_editar', params: { id } }" class="no-underline">
                <div class="group relative rounded overflow-hidden shadow-lg hover:opacity-75">
                    <i class="fas fa-edit pin-r text-black text-xl-6 absolute invisible group-hover:visible"></i>
                    <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-grey-darkest">Título de la convocatoria</div>
                        <p class="font-bold text-grey">Categoría</p> 
                        <p class="my-3 text-grey-darker text-base">Descripción</p>
                    </div>
                    <div class="px-6 py-4">
                        <span class="text-sm font-semibold text-grey-darker">Last updated 3 min ago</span>
                    </div>
                </div>
            </router-link>
        </div>
        <div class="p-1 w-full sm:w-full md:w-1/2">
            <router-link :to="{ name: 'convocatoria_editar', params: { id } }" class="no-underline">
                <div class="group relative rounded overflow-hidden shadow-lg hover:opacity-75">
                    <i class="fas fa-edit pin-r text-black text-xl-6 absolute invisible group-hover:visible"></i>
                    <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-grey-darkest">Título de la convocatoria</div>
                        <p class="font-bold text-grey">Categoría</p> 
                        <p class="my-3 text-grey-darker text-base">Descripción</p>
                    </div>
                    <div class="px-6 py-4">
                        <span class="text-sm font-semibold text-grey-darker">Last updated 3 min ago</span>
                    </div>
                </div>
            </router-link>
        </div>
        <div class="p-1 w-full sm:w-full md:w-1/2">
            <router-link :to="{ name: 'convocatoria_editar', params: { id } }" class="no-underline">
                <div class="group relative rounded overflow-hidden shadow-lg hover:opacity-75">
                    <i class="fas fa-edit pin-r text-black text-xl-6 absolute invisible group-hover:visible"></i>
                    <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-grey-darkest">Título de la convocatoria</div>
                        <p class="font-bold text-grey">Categoría</p> 
                        <p class="my-3 text-grey-darker text-base">Descripción</p>
                    </div>
                    <div class="px-6 py-4">
                        <span class="text-sm font-semibold text-grey-darker">Last updated 3 min ago</span>
                    </div>
                </div>
            </router-link>
        </div>
        <div class="p-1 w-full sm:w-full md:w-1/2">
            <router-link :to="{ name: 'convocatoria_crear' }" class="no-underline">
                <div class="group relative rounded flex items-center justify-center p-5 overflow-hidden shadow-lg hover:opacity-75 h-full">
                    <i class="fas fa-plus-circle text-grey-darker text-xl-10"></i>
                </div>
            </router-link>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                id: 1
            }
        },
        mounted() {
            //
        }
    }
</script>
