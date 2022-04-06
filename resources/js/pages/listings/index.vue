<template>
    <div v-if="isBusy" class="h-screen flex items-center justify-center">
        <Spinner />
    </div>
    <div class="container mx-auto md:px-8" v-else>
        <Hero />
        <div class="flex justify-center w-3/4 rounded-lg">
            <select
                class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-black bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded-xl transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                aria-label="Default select example"
            >
                <option selected>- Filter by category -</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
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
import { useListingStore } from "../../store/useListing";
import { storeToRefs } from "pinia";

export default {
    components: { Hero, ListingCard, Spinner },
    setup() {
        const store = useListingStore();
        store.fetchListings();

        const { listings, isBusy } = storeToRefs(store);

        return { listings, isBusy };
    },
};
</script>

<style></style>
