<template>
    <div class="Home">
        <navbar />
        <div class="wrapper fadeInDown">
            <div class="container-fluid">
                <img src="../assets/ine.png" width="450" />
                <div id="sidebar">
                    <div class="toggle-btn" @click.prevent="toggleSidebar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="list">
                        <div class="item">Home</div>
                        <div class="item">About us</div>
                        <div class="item">Contact us</div>
                    </div>
                </div>

                <form>
                    <input
                        type="submit"
                        class="fadeIn fourth"
                        value="Diagnostico"
                        @click.prevent="diagnostico"
                    />
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import styles from "@/css/Sidenav.css";
import navbar from "@/components/Nav-no-login";
export default {
    name: "home",
    components: {
        navbar,
    },
    methods: {
        toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("active");
        },
    },
};
</script>
