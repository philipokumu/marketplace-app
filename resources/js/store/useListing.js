import axios from "axios";
import { defineStore } from "pinia";
import { env } from "process";

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
        async fetchListings(search_term = null, selected_category = null) {
            let query_string = "";
            if (selected_category !== null && search_term !== null) {
                query_string = `?search_title=${search_term}&category_id=${selected_category}`;
            } else if (search_term !== null) {
                query_string = `?search_title=${search_term}`;
            } else if (selected_category !== null) {
                query_string = `?category_id=${selected_category}`;
            } else {
                query_string = "";
            }

            this.busy = true;
            try {
                const response = await axios.get(
                    `${process.env.MIX_APP_URL}/api/listings${query_string}`
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
                    `${process.env.MIX_APP_URL}/api/listings/${slug}`
                );
                this.listing = response.data.data;
                this.busy = false;
            } catch (error) {
                console.log(error);
            }
        },
    },
});
