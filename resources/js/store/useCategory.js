import axios from "axios";
import { defineStore } from "pinia";

export const useCategoryStore = defineStore("mainCategory", {
    state: () => ({
        categories: [1, 2, 3],
        busy: false,
    }),
    getters: {
        getCategories: (state) => state.categories,
        isBusy: (state) => state.busy,
    },
    actions: {
        async fetchCategories() {
            this.busy = true;
            try {
                const response = await axios.get(
                    "http://127.0.0.1:8000/api/categories"
                );
                this.categories = response.data.data;
                this.busy = false;
            } catch (error) {
                console.log(error);
            }
        },
    },
});
