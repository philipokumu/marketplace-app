<template>
    <section v-if="tab" class="bg-white md:rounded-md shadow overflow-hidden">
        <div class="flex items-center border-b border-gray-100 overflow-x-auto">
            <router-link
                v-if="listing.attributes.description"
                to="?tab=description"
                class="py-3 px-6 whitespace-nowrap hover:text-primary-500 focus:font-bold text-xl transition focus:outline-none"
                :class="{
                    'text-primary-500 border-b-2 border-primary-500':
                        tab === 'description',
                }"
            >
                Description
            </router-link>
            <router-link
                v-if="listing.attributes.email"
                to="?tab=contacts"
                class="py-3 px-6 whitespace-nowrap hover:text-primary-500 focus:font-bold text-xl transition focus:outline-none"
                :class="{
                    'text-primary-500 border-b-2 border-primary-500':
                        tab === 'contacts',
                }"
            >
                Contact details
            </router-link>
        </div>
        <div class="py-3 px-6">
            <div
                v-if="listing.attributes.description"
                :class="{ hidden: tab !== 'description' }"
            >
                {{ listing.attributes.description }}
            </div>
            <div
                v-if="listing.attributes.email"
                :class="{ hidden: tab !== 'contacts' }"
            >
                <p>
                    {{ listing.attributes.email }}
                </p>
                <p>
                    {{ listing.attributes.mobile }}
                </p>
            </div>
            <!-- <div
        v-if="product.attributes.product_video"
        :class="{ hidden: tab !== 'video' }"
      >
        {{ product.attributes.product_video }}
      </div> -->
            <!-- <div
        v-if="product.attributes.productReviews.data.length > 0"
        :class="{ hidden: tab !== 'reviews' }"
      >
        <product-reviews :reviews="product.attributes.productReviews" />
      </div> -->
            <!-- <div v-if="$auth.loggedIn" :class="{ hidden: tab !== 'review' }">
        <product-review-form />
      </div> -->
        </div>
    </section>
</template>

<script>
// import ProductReviewForm from "./ProductReviewForm.vue";
// import ProductReviews from "./ProductReviews.vue";
export default {
    name: "ListingViewDetails",
    // components: { ProductReviewForm, ProductReviews },
    props: {
        listing: {
            type: Object,
            default: null,
        },
    },
    computed: {
        tab() {
            if (!this.$route.query.tab) return "description";
            return this.$route.query.tab;
        },
    },
};
</script>
