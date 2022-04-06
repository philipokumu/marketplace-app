<template>
    <button
        class="category-menu-toggle h-10 w-10 grid place-items-center ring-primary-500 hover:bg-gray-50 focus:bg-gray-50 focus:ring-2 rounded-full transition focus:outline-none"
        @click.stop="toggleMenu"
    >
        <div class="h-2/3 w-2/3">
            <menu-icon />
        </div>
    </button>
</template>

<script>
import MenuIcon from "../Icons/MenuIcon.vue";

export default {
    components: { MenuIcon },
};
</script>
