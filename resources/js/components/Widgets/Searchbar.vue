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
import { useRoute, useRouter } from "vue-router";
import SearchIcon from "../Icons/SearchIcon.vue";

export default {
    components: { SearchIcon },
    setup() {
        const router = useRouter();
        const route = useRoute();
        let search_query = ref("");

        const searchedTitle = () => {
            router.push(`/listings?search_title=${search_query.value}`);
        };
        return {
            searchedTitle,
            search_query,
        };
    },
};

// https://stackoverflow.com/questions/68030632/vue-3-composition-api-route-query-is-empty
</script>
