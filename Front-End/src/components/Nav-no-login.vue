<template>
    <div id="navbar">
        <header>
            <nav>
                <div class="menu-item" @click.prevent="login">
                    <span>Login</span>
                </div>
                <div class="menu-item" @click.prevent="password">
                    <span>Password</span>
                </div>
                <div class="menu-item" @click.prevent="register">
                    <span>Register</span>
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
        login: function () {
            this.$router.push("/login");
            // Forgot Password
        },
        password: function () {
            this.$router.push("/password");
            // Forgot Password
        },
        register: function () {
            this.$router.push("/register");
            // Forgot Password
        },
    },
};
</script>
