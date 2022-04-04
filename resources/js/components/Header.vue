<template>
    <header>
        <div class="shadow overflow-hidden">
            <div class="banner w-full focus:outline-none">
                <img
                    :src="images[0]"
                    alt="Banner"
                    loading="lazy"
                    class="h-full w-full object-cover"
                />
            </div>
        </div>
    </header>
</template>

<script>
// import Carousel from "../Widgets/Carousel.vue";
export default {
    name: "Header",
    // components: { Carousel },
    data() {
        return {
            options: {
                autoplay: 3000,
            },
            images: [
                "https://morecustomersapp.com/wp-content/uploads/2020/08/banner-and-eCommerce.jpg",
                "http://bangaknitwear.com/assets/data/option14/Banga-knitwear-Home-Banner-4.jpg",
                "https://www.goingit.com.au/blog/wp-content/uploads/2015/11/amazing-banner-1200x565.jpg",
            ],
        };
    },
};
</script>

<style lang="scss" scoped>
.banner {
    height: 50vh;
}
@media screen and (min-width: 768px) {
    .banner {
        height: 70vh;
    }
}
</style>
