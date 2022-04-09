import { createWebHistory, createRouter } from "vue-router";
import Home from "./pages/listings";
import ListingShow from "./pages/listings/show";

const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
        meta: { title: "home" },
    },
    {
        path: "/listings",
        name: "listings",
        component: Home,
        meta: { title: "listings" },
    },
    {
        path: "/listings/:listingId",
        name: "listings.show",
        component: ListingShow,
        meta: { title: "Listing" },
    },
    {
        path: "/:pathMatch(.*)*",
        name: "home",
        component: Home,
        meta: { title: "home" },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
