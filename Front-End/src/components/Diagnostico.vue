<template>
    <div class="Home">
        <navbar />
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP --><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP --><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
                <form>
                    <h1>Autodiagnóstico</h1>
                    ¿Percibiste una marcada pérdida del olfato de manera repentina?
                    <input
                        type="checkbox"
                        id="olfato"
                        name="answer"
                        value="Si"
                    /><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
                    ¿Percibiste una marcada pérdida del gusto (sabor de los alimentos) de manera repentina?
                    <input
                        type="checkbox"
                        id="gusto"
                        name="answer"
                        value="Si"
                    /><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
                    ¿Tenés tos?
                    <input
                        type="checkbox"
                        id="tos"
                        name="answer"
                        value="Si"
                    /><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
                    ¿Tenés dolor de garganta?
                    <input
                        type="checkbox"
                        id="garganta"
                        name="answer"
                        value="Si"
                    /><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
                    ¿Tenés dificultad respiratoria o falta de aire?
                    <input
                        type="checkbox"
                        id="aire"
                        name="answer"
                        value="Si"
                    /><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
                    ¿Tenés dolor de cabeza?
                    <input
                        type="checkbox"
                        id="cabeza"
                        name="answer"
                        value="Si"
                    /><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
                    ¿Tenés diarrea?
                    <input
                        type="checkbox"
                        id="diarrea"
                        name="answer"
                        value="Si"
                    /><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
                    ¿Tenés vómitos?
                    <input
                        type="checkbox"
                        id="vomito"
                        name="answer"
                        value="Si"
                    /><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
                    ¿Tenés dolor muscular?
                    <input
                        type="checkbox"
                        id="dolor"
                        name="answer"
                        value="Si"
                    /><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
                </form>
                <router-link to="/home">
                    <input
                        type="submit"
                        class="fadeIn fourth"
                        value="Aceptar"
                    />
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
import styles from "@/css/Diagnostico.css";
import navbar from "@/components/Nav";

export default {
    name: "diagnostico",
    components: {
        navbar,
    },
    computed: {
        currentUser() {
            return this.$store.state.auth.user;
        },
    },
    mounted() {
        if (!this.currentUser) {
            this.$router.push("/login");
        }
    },
};
</script>

