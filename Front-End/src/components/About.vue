<template>
    <div class="About">
        <navbar />
        <br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
        <h1>Bienvenido</h1>
    </div>
</template>
<script>
import styles from "@/css/Login.css";
import ventanaerror from "@/components/VentanaError";
import User from "@/models/user";
import navbar from "@/components/Nav";

export default {
    name: "login",
    components: {
        ventanaerror,
        navbar,
    },
    data() {
        return {
            user: new User("", ""),
            //loading: false,
            message: "",
        };
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
