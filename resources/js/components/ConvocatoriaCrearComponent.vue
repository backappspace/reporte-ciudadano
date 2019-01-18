<template>
    <div class="bg-white border-t border-b sm:border-l sm:border-r sm:rounded shadow mb-6">
        <div class="border-b p-6">
            <h1 class="mb-5 text-gob">Crear nueva convocatoria</h1>
            <ConvocatoriaFormComponent></ConvocatoriaFormComponent>
        </div>
    </div>
</template>

<script>
    import ConvocatoriaFormComponent from './ConvocatoriaFormComponent';
    export default {
        components: {
            ConvocatoriaFormComponent
        },
        mounted() {
            //
        }
    }
</script>
