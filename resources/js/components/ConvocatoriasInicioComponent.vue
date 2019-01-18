<template>
    <div class="flex flex-wrap">
        <div class="p-1 w-full sm:w-full md:w-1/2">
            <ConvocatoriaItemComponent></ConvocatoriaItemComponent>
        </div>
        <div class="p-1 w-full sm:w-full md:w-1/2">
            <ConvocatoriaItemComponent></ConvocatoriaItemComponent>
        </div>
        <div class="p-1 w-full sm:w-full md:w-1/2">
            <ConvocatoriaItemComponent></ConvocatoriaItemComponent>
        </div>
        <div class="p-1 w-full sm:w-full md:w-1/2">
            <router-link :to="{ name: 'convocatoria_crear' }" class="no-underline">
                <div class="group relative rounded flex items-center justify-center p-5 overflow-hidden shadow-lg hover:opacity-75 h-full">
                    <i class="fas fa-plus-circle text-grey-darker text-size-10"></i>
                </div>
            </router-link>
        </div>
    </div>
</template>

<script>
    import ConvocatoriaItemComponent from './ConvocatoriaItemComponent';
    export default {
        components: {
            ConvocatoriaItemComponent
        },
        mounted() {
            //
        }
    }
</script>
