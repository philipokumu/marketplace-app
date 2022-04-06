<template>
    <form
        autocomplete="off"
        class="px-2 lg:px-3 w-full flex items-center bg-white border ring-primary-500 focus-within:ring-2 transition rounded overflow-hidden"
        @submit.prevent="searchedTitle"
    >
        <div
            class="h-10 w-10 flex-shrink-0 text-gray-500 grid place-items-center rounded-full"
        >
            <div class="h-2/3 w-2/3">
                <search-icon />
            </div>
        </div>
        <input
            id="search"
            v-model="search_query"
            type="search"
            placeholder="Search Listings..."
            class="h-10 lg:px-3 w-full bg-transparent outline-none"
        />
    </form>
</template>

<script>
import { ref } from "vue";
import SearchIcon from "../Icons/SearchIcon.vue";

export default {
    components: { SearchIcon },
    setup(props, { emit }) {
        let search_query = ref("");

        const searchedTitle = () => {
            emit("searchedTitle", search_query.value);
        };
        return {
            searchedTitle,
            search_query,
        };
    },
};

// export default {
//     name: "Searchbar",
//     data() {
//         return {
//             search_query: this.$route.query.query,
//         };
//     },
//     methods: {
//         submitForm() {
//             if (!this.query) return;
//             this.$router.push(`/listings?query=${this.query}`);
//         },
//     },
// };
//
</script>
