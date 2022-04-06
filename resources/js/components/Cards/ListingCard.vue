<template>
    <article
        class="card block relative max-w-xs w-full bg-white rounded-md shadow md:shadow-none hover:shadow-md focus:shadow-md transition overflow-hidden"
    >
        <router-link
            :to="`/listings/${listing.data.attributes.slug}`"
            class="focus:outline-none"
        >
            <div class="h-40 overflow-hidden">
                <img
                    :src="listing.data.attributes.image"
                    :alt="listing.data.attributes.title"
                    class="h-full w-full object-cover"
                />
            </div>
            <div class="p-4">
                <p class="md:text-lg">
                    {{ listing.data.attributes.title }}
                </p>
                <div>
                    <p class="text-primary-500 text-xl">
                        {{ listing.data.attributes.currency }}
                        {{ listing.data.attributes.price }}
                    </p>
                </div>
            </div>
            <footer class="p-4 sticky top-full">
                <div
                    class="py-2 px-4 font-semibold rounded-lg mx-auto cursor-pointer whitespace-nowrap w-full bg-green-700 text-white flex justify-center"
                >
                    View listing
                </div>
            </footer>
        </router-link>
    </article>
</template>

<script>
import Spinner from "../Widgets/Spinner.vue";

export default {
    name: "ListingCard",
    components: { Spinner },
    props: {
        listing: {
            type: Object,
            default: null,
        },
    },
};
</script>

<style></style>
