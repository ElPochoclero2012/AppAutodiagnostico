<template>
    <div id="navbar">
        <header>
            <nav>
                <div class="menu-item" @click.prevent="about">
                    <span>About</span>
                </div>
                <div class="menu-item" @click.prevent="diagnostico">
                    <span>Diagnostico</span>
                </div>
                <div class="menu-item" @click.prevent="home">
                    <span>Home</span>
                </div>
                <div class="menu-item" @click.prevent="logout">
                    <span>Logout</span>
                </div>
                <ventanaerror />
            </nav>
        </header>
    </div>
</template>

<script>
import styles from "@/css/Login.css";
import ventanaerror from "@/components/VentanaError";

export default {
    name: "navbar",
    components: {
        ventanaerror,
    },
    methods: {
        about: function () {
            this.$router.push("/about");
            // Forgot Password
        },
        diagnostico: function () {
            this.$router.push("/diagnostico");
            // Forgot Password
        },
        home: function () {
            this.$router.push("/home");
            // Forgot Password
        },
        logout: function () {
            this.$store.dispatch("auth/logout").then(
                () => {
                    this.$router.push("/login");
                },
                (error) => {
                    this.message =
                        (error.response && error.response.data) ||
                        error.message ||
                        error.toString();
                }
            );
        },
    },
};
</script>
