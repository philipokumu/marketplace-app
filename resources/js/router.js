import { createWebHistory, createRouter } from "vue-router";
import Home from "./pages/listings";
import Example from "./components/ExampleComponent";

const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
        meta: { title: "home" },
    },
    {
        path: "/example",
        name: "example",
        component: Example,
        meta: { title: "example" },
    },
    // {
    //     path: "/listings/:productId",
    //     name: "listings.show",
    //     component: ListingShow,
    //     meta: { title: "Listing name" },
    // },
];
// });

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
