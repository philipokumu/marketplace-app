<template>
    <div v-if="isBusy" class="h-screen flex items-center justify-center">
        <Spinner />
    </div>
    <div v-else class="container mx-auto md:py-4 md:px-8">
        <div
            class="mb-4 md:grid grid-cols-2 gap-4 bg-white md:rounded-md shadow overflow-hidden"
        >
            <div class="mb-4 md:mb-0" v-if="listing.attributes.image">
                <img :src="listing.attributes.image" alt="Image" />
            </div>
            <ListingViewSummary :listing="listing" />
        </div>
        <div class="mb-4">
            <ListingViewDetails :listing="listing" />
        </div>
    </div>
</template>

<script>
import ListingViewSummary from "../../components/Sections/ListingViewSummary.vue";
import ListingViewDetails from "../../components/Sections/ListingViewDetails.vue";
import Spinner from "../../components/Widgets/Spinner.vue";
import { useRoute } from "vue-router";
import { useListingStore } from "../../store/useListing";
import { storeToRefs } from "pinia";

export default {
    components: {
        ListingViewSummary,
        ListingViewDetails,
        Spinner,
    },
    setup() {
        const route = useRoute();
        const store = useListingStore();

        const listing_slug = route.params.listingId;

        store.fetchListing(listing_slug);

        const { listing, isBusy } = storeToRefs(store);

        return {
            listing,
            isBusy,
        };
    },
};
</script>
