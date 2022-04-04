<template>
    <div>
        <div v-if="listing" class="container mx-auto md:py-4 md:px-8">
            <div
                class="mb-4 md:grid grid-cols-2 gap-4 bg-white md:rounded-md shadow overflow-hidden"
            >
                <div class="mb-4 md:mb-0">
                    <img src="#" alt="Image" />
                    <!-- <product-view-slider
            :images="product.data.attributes.productImages.data"
          /> -->
                </div>
                <product-view-summary :listing="listing" />
            </div>
            <div class="mb-4">
                <product-view-details :listing="listing" />
            </div>
            <!-- <div>
                <similar-products-slider :listing="listing" />
            </div> -->
        </div>
    </div>
</template>

<script>
// import { mapGetters, mapActions } from "vuex";
// import ProductViewSlider from "@/components/Sections/ProductViewSlider.vue";
import ProductViewSummary from "../../components/Sections/ProductViewSummary.vue";
import ProductViewDetails from "../../components/Sections/ProductViewDetails.vue";
// import SimilarProductsSlider from "@/components/Sections/SimilarProductsSlider.vue";

export default {
    data() {
        return {
            listing: {
                id: 1,
                slug: "product-1",
                title: "Product 1",
                image: "https://unsplash.com/photos/fZuleEfeA1Q",
                price: 50,
                currency: "KES",
                description: "This is a great product",
            },
        };
    },
    components: {
        // ProductViewSlider,
        ProductViewSummary,
        ProductViewDetails,
        // SimilarProductsSlider,
    },
    computed: {
        // ...mapGetters({
        //     product: "products/product",
        // }),
    },
    created() {
        // this.closeMenu();
        // this.getProduct(this.$route.params.slug);
    },
    methods: {
        // ...mapActions({
        //     closeMenu: "closeMenu",
        //     getProduct: "products/view",
        // }),
    },
};
</script>
