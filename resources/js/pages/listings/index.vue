<template>
    <div class="container mx-auto md:px-8">
        <Header />
        <div>Product Listing</div>
        <div class="flex justify-center w-3/4 rounded-lg">
            <select
                class="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-black bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded-xl transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                aria-label="Default select example"
            >
                <option selected>Open this select menu</option>
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
import Header from "../../components/Header.vue";
import ListingCard from "../../components/Cards/ListingCard.vue";
export default {
    components: { Header, ListingCard },
    data() {
        return {
            listings: [
                {
                    id: 1,
                    slug: "product-1",
                    title: "Product 1",
                    image: "https://unsplash.com/photos/fZuleEfeA1Q",
                    price: 50,
                    currency: "KES",
                },
                {
                    id: 2,
                    slug: "product-2",
                    title: "Product 2",
                    image: "https://unsplash.com/photos/fZuleEfeA1Q",
                    price: 50,
                    currency: "KES",
                },
                {
                    id: 3,
                    slug: "product-3",
                    title: "Product 3",
                    image: "https://unsplash.com/photos/fZuleEfeA1Q",
                    price: 50,
                    currency: "KES",
                },
                {
                    id: 4,
                    slug: "product-4",
                    title: "Product 4",
                    image: "https://unsplash.com/photos/fZuleEfeA1Q",
                    price: 50,
                    currency: "KES",
                },
                {
                    id: 5,
                    slug: "product-5",
                    title: "Product 5",
                    image: "https://unsplash.com/photos/fZuleEfeA1Q",
                    price: 50,
                    currency: "KES",
                },
            ],
        };
    },
};
</script>

<style></style>
