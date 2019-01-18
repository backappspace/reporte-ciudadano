<template>
    <form class="w-full flex flex-wrap">
        <div class="w-full md:w-1/2">
            <div class="flex flex-wrap mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
                        Título de la convocatoria
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="" type="text" value="Título de ejemplo" placeholder="">
                    <p class="text-red text-xs italic">Please fill out this field.</p>
                </div>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="">
                        Descripción
                    </label>
                    <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="" type="text" placeholder="">Descripción de ejemplo</textarea>
                </div>
            </div>
            <div class="flex flex-wrap mb-2">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
                        Categoría
                    </label>
                    <div class="relative">
                        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-state">
                        <option>Opción 1</option>
                        <option>Opción 2</option>
                        <option>Opción 3</option>
                        </select>
                        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2">
            <div class="w-full px-16 pt-5">
                <img src="https://tailwindcss.com/img/card-top.jpg" class="rounded w-full" alt="">
            </div>
            <div class="w-full flex justify-center">
                <button class="bg-transparent hover:bg-gob text-gob-dark font-semibold hover:text-white py-2 px-4 border border-gob hover:border-transparent rounded">
                    Selecciona una imagen
                </button>
            </div>
        </div>
        <div class="w-full border-2 rounded m-5">
        </div>
        <div class="w-full flex justify-end px-10">
            <button class="bg-gob hover:bg-gob-dark text-white font-bold py-2 px-4 rounded">
                Guardar convocatoria
            </button>
        </div>
    </form>
</template>

<script>
    export default {
        mounted() {
            //
        }
    }
</script>
