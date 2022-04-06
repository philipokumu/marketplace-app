import axios from "axios";
import { defineStore } from "pinia";

export const useListingStore = defineStore("mainListing", {
    state: () => ({
        listings: [],
        listing: {},
        busy: false,
    }),
    getters: {
        getListings: (state) => state.listings,
        getListing: (state) => state.listing,
        isBusy: (state) => state.busy,
    },
    actions: {
        async fetchListings(selected_category = null) {
            const category_filter_query =
                selected_category !== null
                    ? `?category_id=${selected_category}`
                    : "";
            // console.log(category_filter_query);
            this.busy = true;
            try {
                const response = await axios.get(
                    `http://127.0.0.1:8000/api/listings${category_filter_query}`
                );
                this.listings = response.data.data;
                this.busy = false;
            } catch (error) {
                console.log(error);
            }
        },
        async fetchListing(slug) {
            this.busy = true;
            try {
                const response = await axios.get(
                    `http://127.0.0.1:8000/api/listings/${slug}`
                );
                this.listing = response.data.data;
                this.busy = false;
            } catch (error) {
                console.log(error);
            }
        },
    },
});
