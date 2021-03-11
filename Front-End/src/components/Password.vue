<template>
    <div class="Home">
        <navbar />
        <div class="wrapper fadeInDown">
            <h2>Recupera tu cuenta</h2>
            <form>
                <input
                    type="text"
                    id="recuperar"
                    class="fadeIn second"
                    name="recuperar"
                    placeholder="Introduzca su email"
                    v-model="email"
                />
            </form>
            <input
                type="submit"
                class="fadeIn fourth"
                @click.prevent="recuperar"
                value="Aceptar"
            />
        </div>
    </div>
</template>

<script>
import styles from "@/css/Password.css";
import navbar from "@/components/Nav-no-login";

export default {
    name: "home",
    components: { navbar },

    methods: {
        recuperar: function () {
            // TODO
            //  Codigo para recuperar contraseña
        },
    },
};
</script>
