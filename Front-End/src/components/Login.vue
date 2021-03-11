<template>
    <div class="Home">
        <navbar />
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP --><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP --><br /> <!-- EVITAR EL USO DE BR, USAR BOOTSTRAP -->
                <form>
                    <input
                        type="text"
                        id="login"
                        class="fadeIn second"
                        name="login"
                        placeholder="Correo Electronico"
                        required
                        v-model="user.email"
                    />
                    <input
                        type="password"
                        id="password"
                        class="fadeIn third"
                        name="password"
                        placeholder="Contraseña"
                        v-model="user.password"
                        required
                        minlength="8"
                    />
                    <abbr
                        title="Este campo es obligatorio"
                        aria-label="required"
                    ></abbr>
                    <input
                        type="submit"
                        class="fadeIn fourth"
                        value="Log In"
                        @click.prevent="login"
                    />
                    <input
                        type="submit"
                        class="fadeIn fourth"
                        value="Sign Up"
                        @click.prevent="register"
                    />
                </form>
                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a
                        class="underlineHover"
                        href="#"
                        @click.prevent="password"
                    >
                        Forgot Password?
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import styles from "@/css/Login.css";
import navbar from "@/components/Nav-no-login";
import User from "@/models/user";

export default {
    name: "login",
    components: {
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
        loggedIn() {
            return this.$store.state.auth.status.loggedIn;
        },
    },
    created() {
        if (this.loggedIn) {
            this.$router.push("/about");
        }
    },
    //mounted: function () {},
    methods: {
        login: function () {
            //this.loading = true;
            //this.$validator.validateAll().then((isValid) => {
            //if (!isValid) {
            //    this.loading = false;
            //    return;
            //}

            if (this.user.email && this.user.password) {
                this.$store.dispatch("auth/login", this.user).then(
                    () => {
                        this.$router.push("/diagnostico");
                    },
                    (error) => {
                        //this.loading = false;
                        this.message =
                            (error.response && error.response.data) ||
                            error.message ||
                            error.toString();
                    }
                );
            }
            //});
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
