document.addEventListener("DOMContentLoaded", function () {
    const { createApp } = Vue;

    createApp({
        data() {
            return {
                menuItems: [
                    { name: "Home", link: "/" },
                    { name: "About", link: "/about" },
                    { name: "Services", link: "/services" },
                    { name: "Contact", link: "/contact" }
                ],
                mobileMenuOpen: false
            };
        },
        methods: {
            toggleMobileMenu() {
                this.mobileMenuOpen = !this.mobileMenuOpen;
            }
        }
    }).mount("#vue-header");
});
