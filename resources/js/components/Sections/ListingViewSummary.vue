<template>
    <section class="p-4">
        <div class="mb-2">
            <div class="mb-1">
                <h1 class="text-4xl font-semibold">
                    {{ listing.attributes.title }}
                </h1>
            </div>
            <p>Category: {{ listing.attributes.category_id }}</p>
        </div>
        <p class="text-3xl font-semibold">
            {{ listing.attributes.currency }}
            {{ listing.attributes.price }}
        </p>
        <hr class="my-4 border-gray-200 border border-dashed" />
        <div class="text-lg">
            <div class="w-40 flex items-center">
                <button
                    class="h-10 w-10 leading-10 flex-shrink-0 text-center text-2xl border hover:bg-gray-100 focus:bg-gray-100 transition focus:outline-none rounded-full"
                >
                    -
                </button>
                <button
                    class="h-10 w-10 leading-10 flex-shrink-0 text-center text-2xl border hover:bg-gray-100 focus:bg-gray-100 transition focus:outline-none rounded-full"
                >
                    +
                </button>
            </div>
        </div>
        <div class="mt-4"></div>
        <hr class="my-4 border-gray-200 border border-dashed" />
        <div>
            <p class="mb-1 text-xl font-semibold">Date online:</p>
            <p class="flex items-center text-gray-500">
                {{ listing.attributes.date_online }}
            </p>
        </div>
    </section>
</template>

<script>
import Spinner from "../Widgets/Spinner.vue";

export default {
    name: "ListingViewSummary",
    components: {
        Spinner,
    },
    props: {
        listing: {
            type: Object,
            default: null,
        },
    },
};
</script>

<style scoped>
.quantity-input::-webkit-inner-spin-button,
.quantity-input::-webkit-outer-spin-button {
    appearance: none;
}
</style>
