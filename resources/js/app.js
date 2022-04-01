/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

import { createApp } from "vue";
import App from "./app.vue";
import router from "./router";
import { createPinia } from "pinia";

const app = createApp({});

app.component("App", App);

app.use(router).use(createPinia()).mount("#app");
