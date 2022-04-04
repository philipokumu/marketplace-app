<template>
    <nav
        ref="navbar"
        class="sticky top-0 w-full bg-white transition shadow z-10"
    >
        <div
            class="container mx-auto py-2 md:py-4 px-4 md:px-8 lg:py-0 lg:h-20 lg:flex items-center"
        >
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center">
                    <menu-toggle class="lg:hidden" />
                    <logo class="hidden md:block" />
                </div>
                <logo class="justify-self-center md:hidden" />
                <div class="hidden lg:block mx-4 w-full max-w-2xl">
                    <searchbar />
                </div>
                <div class="flex items-center"></div>
            </div>
            <div class="py-2 lg:hidden bg-white w-full">
                <searchbar />
            </div>
        </div>
    </nav>
</template>

<script>
import Logo from "./Icons/Logo.vue";
import MenuToggle from "./Widgets/MenuToggle.vue";
import Searchbar from "./Widgets/Searchbar.vue";

export default {
    name: "Navbar",
    components: {
        Logo,
        Searchbar,
        MenuToggle,
    },
};
</script>
