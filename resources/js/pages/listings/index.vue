<template>
    <div class="container mx-auto md:px-8">
        <Hero />
        <CategorySelect @selectedCategory="searchByCategoryId" />
        <div
            v-if="isBusy"
            class="m-16 font-semibold text-xl flex justify-center"
        >
            <Spinner />
        </div>
        <div
            v-else-if="listings && listings.length > 0"
            class="md:p-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 md:gap-4"
        >
            <ListingCard
                v-for="(listing, index) in listings"
                :key="index"
                :listing="listing"
            />
        </div>
        <div v-else class="m-16 font-semibold text-xl flex justify-center">
            No content matches this query
        </div>
    </div>
</template>

<script>
import Hero from "../../components/Hero.vue";
import Spinner from "../../components/Widgets/Spinner.vue";
import ListingCard from "../../components/Cards/ListingCard.vue";
import CategorySelect from "../../components/Widgets/CategorySelect.vue";
import { useListingStore } from "../../store/useListing";
import { storeToRefs } from "pinia";
import { useRoute } from "vue-router";
import { watch, ref } from "vue";

export default {
    components: { Hero, ListingCard, CategorySelect, Spinner },
    setup() {
        const route = useRoute();
        const store = useListingStore();
        let category = ref(null);

        // Fetch all listings if no search query or if search query entered in browser url
        !route.query.search_title
            ? store.fetchListings()
            : store.fetchListings(route.query.search_title, category.value);

        // Fetch listings by category and if there is a search query
        const searchByCategoryId = (selected_category) => {
            category.value = selected_category;
            store.fetchListings(route.query.search_title, category.value);
        };

        // Fetch listings by search query and if there is a category
        watch(
            () => route.query.search_title,
            (search_term) => {
                store.fetchListings(search_term, category.value);
            }
        );

        const { listings, isBusy } = storeToRefs(store);

        return { listings, isBusy, searchByCategoryId };
    },
};
</script>

<style></style>
