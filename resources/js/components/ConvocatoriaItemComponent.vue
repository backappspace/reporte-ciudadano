<template>
    <router-link :to="{ name: 'convocatoria_editar', params: { id } }" class="no-underline">
        <div class="group relative rounded overflow-hidden shadow-lg hover:opacity-75">
            <i class="fas fa-edit pin-r text-black text-size-6 absolute invisible group-hover:visible"></i>
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