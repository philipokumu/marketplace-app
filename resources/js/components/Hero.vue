<template>
    <header>
        <div class="shadow overflow-hidden">
            <div class="banner w-full focus:outline-none bg-white">
                <img
                    :src="images[0]"
                    alt="Banner"
                    loading="lazy"
                    class="h-full w-full object-cover p-2"
                    height="300px"
                />
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "Hero",
    data() {
        return {
            options: {
                autoplay: 3000,
            },
            images: [
                "https://secura.cloud/wp-content/uploads/TrafficPeaks_Header.jpg",
                "https://www.chatstack.com/blog/wp-content/uploads/2015/11/TopToolsOnlineStoreHeader.png",
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
    height: 30vh;
}
@media screen and (min-width: 768px) {
    .banner {
        height: 40vh;
    }
}
</style>
