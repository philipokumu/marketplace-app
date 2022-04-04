<template>
    <section v-if="tab" class="bg-white md:rounded-md shadow overflow-hidden">
        <div class="flex items-center border-b border-gray-100 overflow-x-auto">
            <!-- v-if="listing.description" -->
            <div
                to="?tab=description"
                class="py-3 px-6 whitespace-nowrap hover:text-primary-500 focus:text-primary-500 transition focus:outline-none"
                :class="{
                    'text-primary-500 border-b-2 border-primary-500':
                        tab === 'description',
                }"
            >
                Description
            </div>
            <!-- <nuxt-link
        v-if="product.attributes.product_video"
        to="?tab=video"
        class="py-3 px-6 whitespace-nowrap hover:text-primary-500 focus:text-primary-500 transition focus:outline-none"
        :class="{
          'text-primary-500 border-b-2 border-primary-500': tab === 'video'
        }"
      >
        Video
      </nuxt-link> -->
            <!-- <nuxt-link
        v-if="product.attributes.productReviews.data.length > 0"
        to="?tab=reviews"
        class="py-3 px-6 whitespace-nowrap hover:text-primary-500 focus:text-primary-500 transition focus:outline-none"
        :class="{
          'text-primary-500 border-b-2 border-primary-500': tab === 'reviews'
        }"
      >
        Reviews
      </nuxt-link> -->
            <!-- <nuxt-link
        v-if="$auth.loggedIn"
        to="?tab=review"
        class="py-3 px-6 whitespace-nowrap hover:text-primary-500 focus:text-primary-500 transition focus:outline-none"
        :class="{
          'text-primary-500 border-b-2 border-primary-500': tab === 'review'
        }"
      >
        Write Review
      </nuxt-link> -->
        </div>
        <div class="py-3 px-6">
            <div
                v-if="listing.description"
                :class="{ hidden: tab !== 'description' }"
            >
                {{ listing.description }}
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
// import ProductReviewForm from './ProductReviewForm.vue';
// import ProductReviews from './ProductReviews.vue';

export default {
    name: "ProductViewDetails",
    // components: { ProductReviewForm, ProductReviews },
    props: {
        listing: {
            type: Object,
            default: null,
        },
    },
    computed: {
        tab() {
            if (!this.$route.query.tab) return "details";
            return this.$route.query.tab;
        },
    },
};
</script>
