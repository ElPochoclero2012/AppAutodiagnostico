<template>
    <div id="VentanaError">
        <b-button v-b-modal.modal-center>Modal</b-button>
        <b-modal id="modal-center" centered title="BootstrapVue">
            <p class="my-4">Error</p>
        </b-modal>
    </div>
</template>

<script>
export default {
    name: "VentanaError",
};
</script>