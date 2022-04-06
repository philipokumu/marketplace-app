import axios from "axios";
import { defineStore } from "pinia";

export const useListingStore = defineStore("main", {
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
        async fetchListings() {
            this.busy = true;
            try {
                const response = await axios.get(
                    "http://127.0.0.1:8000/api/listings"
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
