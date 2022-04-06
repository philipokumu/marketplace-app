<template>
    <div class="flex justify-center w-3/4 rounded-lg">
        <select
            v-if="!isBusy"
            class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-black bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded-xl transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
            aria-label="Default select example"
            v-model="selected_category"
            @change="selectedCategory()"
        >
            <!-- v-model="selected_category" -->
            <option selected>- Filter by category -</option>
            <option
                v-for="(category, index) in categories"
                :key="index"
                :value="category.data.category_id"
            >
                {{ category.data.attributes.title }}
            </option>
        </select>
    </div>
</template>

<script>
import { storeToRefs } from "pinia";
import { ref } from "vue";
import { useCategoryStore } from "../../store/useCategory";

export default {
    setup(props, { emit }) {
        const store = useCategoryStore();
        store.fetchCategories();
        let selected_category = ref("");

        const { categories, isBusy } = storeToRefs(store);

        const selectedCategory = () => {
            emit("selectedCategory", selected_category.value);
        };
        return { categories, isBusy, selected_category, selectedCategory };
    },
};
</script>

<style></style>
