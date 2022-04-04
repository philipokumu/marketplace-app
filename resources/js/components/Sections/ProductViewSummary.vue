<template>
    <section class="p-4">
        <div class="mb-2">
            <div class="mb-1">
                <h1 class="text-4xl font-semibold">
                    {{ listing.name }}
                </h1>
            </div>
            <p>Category: {{ listing.category_id }}</p>
            <!-- <div class="flex items-center">
        <p class="mr-2 flex items-center text-gray-400">
          <span
            class="h-3 w-3 block"
            :class="{
              'text-yellow-400':
                product.attributes.productReviews.meta.review_average >= 1
            }"
          >
            <star-icon />
          </span>
          <span
            class="h-3 w-3 block"
            :class="{
              'text-yellow-400':
                product.attributes.productReviews.meta.review_average >= 2
            }"
          >
            <star-icon />
          </span>
          <span
            class="h-3 w-3 block"
            :class="{
              'text-yellow-400':
                product.attributes.productReviews.meta.review_average >= 3
            }"
          >
            <star-icon />
          </span>
          <span
            class="h-3 w-3 block"
            :class="{
              'text-yellow-400':
                product.attributes.productReviews.meta.review_average >= 4
            }"
            ><star-icon
          /></span>
          <span
            class="h-3 w-3 block"
            :class="{
              'text-yellow-400':
                product.attributes.productReviews.meta.review_average >= 5
            }"
            ><star-icon
          /></span>
        </p>
        <p
          v-if="product.attributes.productReviews.meta.review_average"
          class="text-sm text-gray-500"
        >
          ({{ product.attributes.productReviews.meta.review_average }} ratings)
        </p>
        <p v-else class="text-sm text-gray-500">(no ratings)</p>
      </div> -->
        </div>
        <p class="text-3xl font-semibold">
            {{ listing.currency }}
            {{ listing.price }}
        </p>
        <!-- <p v-if="product.attributes.discounted_price" class="text-gray-500"> -->
        <!-- <span class="mr-2 text-lg line-through">
        {{ product.attributes.currency }}
        {{ product.attributes.discounted_price }}
      </span> -->
        <!-- <span class="py-1 px-2 text-sm rounded bg-primary-100 text-primary-600">
        -
        {{
          percentageDiscount(
            product.attributes.discount_percent,
            product.attributes.product_price
          )
        }}%
      </span> -->
        <!-- </p> -->
        <hr class="my-4 border-gray-200 border border-dashed" />
        <div class="text-lg">
            <!-- <p
        v-if="product.attributes.quantity_in_stock"
        class="text-primary-500 font-semibold"
      >
        In stock
      </p> -->
            <!-- <p class="mb-2 font-semibold">
        Quantity in {{ product.attributes.product_unit }}
      </p> -->
            <div class="w-40 flex items-center">
                <button
                    class="h-10 w-10 leading-10 flex-shrink-0 text-center text-2xl border hover:bg-gray-100 focus:bg-gray-100 transition focus:outline-none rounded-full"
                >
                    -
                </button>
                <!-- <input
          v-model="quantity"
          type="number"
          min="1"
          max="9"
          value="1"
          step="1"
          readonly
          class="quantity-input mx-2 h-10 w-full text-center block border outline-none rounded-full"
        /> -->
                <button
                    class="h-10 w-10 leading-10 flex-shrink-0 text-center text-2xl border hover:bg-gray-100 focus:bg-gray-100 transition focus:outline-none rounded-full"
                >
                    +
                </button>
            </div>
        </div>
        <div class="mt-4">
            <!-- <button
          @click="monitorQuantity('dec')"
          @click="monitorQuantity('inc')"
        class="mr-2 py-3 px-6 w-full text-lg block font-semibold text-white bg-primary-500 hover:bg-primary-600 focus:bg-primary-600 transition rounded shadow-md focus:outline-none"
        :disabled="busy"
        :class="{ 'pointer-events-none': busy }"
        @click="addToCart(product)"
      >
        <div v-if="!busy" class="flex items-center">
          <div class="h-6 w-6">
            <cart-add-icon />
          </div>
          <div class="mx-auto whitespace-nowrap">Add To Cart</div>
        </div>
        <spinner v-if="busy" class="mx-auto" />
      </button> -->
        </div>
        <hr class="my-4 border-gray-200 border border-dashed" />
        <div>
            <p class="mb-1 text-xl font-semibold">Share it on:</p>
            <!-- <p class="flex items-center text-gray-500"> -->
            <!-- <a
          href="#"
          class="mr-4 h-8 w-8 grid place-items-center hover:text-primary-500 focus:text-primary-500 transition outline-none"
        >
          <facebook-icon />
        </a> -->
            <!-- <a
          href="#"
          class="mr-4 h-8 w-8 grid place-items-center hover:text-primary-500 focus:text-primary-500 transition outline-none"
        >
          <instagram-icon />
        </a> -->
            <!-- <a
          href="#"
          class="mr-4 h-8 w-8 grid place-items-center hover:text-primary-500 focus:text-primary-500 transition outline-none"
        >
          <twitter-icon />
        </a> -->
            <!-- </p> -->
        </div>
    </section>
</template>

<script>
// import { mapGetters, mapActions } from 'vuex';
// import StarIcon from '@/components/Icons/StarIcon.vue';
// import FacebookIcon from '@/components/Icons/FacebookIcon.vue';
// import InstagramIcon from '@/components/Icons/InstagramIcon.vue';
// import TwitterIcon from '@/components/Icons/TwitterIcon.vue';
// import CartAddIcon from '../Icons/CartAddIcon.vue';
import Spinner from "../Widgets/Spinner.vue";

export default {
    name: "ProductViewSummary",
    components: {
        // StarIcon,
        // FacebookIcon,
        // InstagramIcon,
        // TwitterIcon,
        // CartAddIcon,
        Spinner,
    },
    props: {
        listing: {
            type: Object,
            default: null,
        },
    },
    data() {
        return {
            quantity: 1,
        };
    },
    computed: {
        // ...mapGetters({
        //   busy: 'cart/busy'
        // })
    },
    methods: {
        // ...mapActions({
        //   saveCart: 'cart/create'
        // }),
        // addToCart(product) {
        //   this.saveCart({ product_quantity: this.quantity, ...product });
        // },
        // percentageDiscount(originalPrice, sellingPrice) {
        //   const discount = originalPrice - sellingPrice;
        //   const percentageDiscount = Math.round((discount / originalPrice) * 100);
        //   return percentageDiscount;
        // },
        // monitorQuantity(action) {
        //   if (action === 'dec') {
        //     if (this.quantity === 1) return;
        //     this.quantity--;
        //   } else {
        //     this.quantity++;
        //   }
        // }
    },
};
</script>

<style scoped>
.quantity-input::-webkit-inner-spin-button,
.quantity-input::-webkit-outer-spin-button {
    appearance: none;
}
</style>
