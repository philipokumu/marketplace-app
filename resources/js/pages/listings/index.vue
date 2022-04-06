<template>
    <div class="container mx-auto md:px-8">
        <Hero />
        <CategorySelect @selectedCategory="searchByCategoryId" />
        <div v-if="isBusy" class="h-screen flex items-center justify-center">
            <Spinner />
        </div>
        <div
            v-if="listings"
            class="md:p-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 md:gap-4"
        >
            <ListingCard
                v-for="(listing, index) in listings"
                :key="index"
                :listing="listing"
            />
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

export default {
    components: { Hero, ListingCard, CategorySelect, Spinner },
    setup() {
        const store = useListingStore();
        store.fetchListings();

        const { listings, isBusy } = storeToRefs(store);

        const searchByCategoryId = (selected_category) => {
            // console.log(selected_category, "Parent");
            store.fetchListings(selected_category);
        };

        return { listings, isBusy, searchByCategoryId };
    },
};
</script>

<style></style>
