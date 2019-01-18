<template>
    <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
        <div class="border-b p-6">
            <div class="flex flex-wrap">
                <h1 class="mb-5 text-gob w-4/5 sm:w-5/6">Editar convocatoria</h1>
                <div class="w-1/5 sm:w-1/6 flex justify-end px-5 mb-5">
                    <button class="h-12 bg-red hover:bg-gob text-white font-bold px-5 rounded">
                        <i class="far fa-trash-alt text-lg"></i> 
                    </button>
                </div>
            </div>
            <ConvocatoriaFormComponent></ConvocatoriaFormComponent>
        </div>
    </div>
</template>

<script>
    import ConvocatoriaFormComponent from './ConvocatoriaFormComponent';
    export default {
        props: ['id'],
        components: {
            ConvocatoriaFormComponent
        },
        mounted() {
            //
        }
    }
</script>
