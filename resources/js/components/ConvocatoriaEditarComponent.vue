<template>
    <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
        <div class="border-b p-6">
            <h1 class="mb-4 text-gob">Editar convocatoria</h1>
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
