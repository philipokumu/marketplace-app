<template>
    <footer class="bg-gray-800 text-white">
        <div class="container mx-auto p-4 md:p-8">
            <div class="md:grid md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="mb-4 md:mb-0 md:col-span-3 lg:col-auto">
                    <div class="mb-2">
                        <logo />
                    </div>
                    <p class="text-sm leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Reiciendis fuga provident distinctio. Commodi labore ea
                        enim in incidunt dicta iste quisquam eligendi.
                    </p>
                </div>
                <div class="mb-4 md:mb-0">
                    <p class="mb-4 text-2xl font-semibold">Easy Shopping</p>
                    <ul>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                class="text-sm py-1 block hover:text-primary-500 focus:text-primary-500 transition outline-none"
                                >Fast delivery</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                class="text-sm py-1 block hover:text-primary-500 focus:text-primary-500 transition outline-none"
                                >Secure checkout</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                class="text-sm py-1 block hover:text-primary-500 focus:text-primary-500 transition outline-none"
                                >Return Policy</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="mb-4 md:mb-0">
                    <p class="mb-4 text-2xl font-semibold">About Us</p>
                    <ul>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                class="text-sm py-1 block hover:text-primary-500 focus:text-primary-500 transition outline-none"
                                >About the company</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                class="text-sm py-1 block hover:text-primary-500 focus:text-primary-500 transition outline-none"
                                >Terms & Conditions</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                class="text-sm py-1 block hover:text-primary-500 focus:text-primary-500 transition outline-none"
                                >Privacy Policy</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                class="text-sm py-1 block hover:text-primary-500 focus:text-primary-500 transition outline-none"
                                >Blog</a
                            >
                        </li>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                class="text-sm py-1 block hover:text-primary-500 focus:text-primary-500 transition outline-none"
                                >FAQs</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="mb-4 md:mb-0">
                    <p class="mb-4 text-2xl font-semibold">Store Information</p>
                    <ul>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-sm mb-2 flex hover:text-primary-500 focus:text-primary-500 transition outline-none"
                            >
                                <div class="mr-2 h-5 w-5">
                                    <location-icon />
                                </div>
                                Nairobi, Kenya
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-sm mb-2 flex hover:text-primary-500 focus:text-primary-500 transition outline-none"
                            >
                                <div class="mr-2 h-5 w-5">
                                    <phone-icon />
                                </div>
                                Call Us: +254 712 345 678
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-sm mb-2 flex hover:text-primary-500 focus:text-primary-500 transition outline-none"
                            >
                                <div class="mr-2 h-5 w-5">
                                    <envelope-icon />
                                </div>
                                Email us: support@multicommerce.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
import EnvelopeIcon from "../components/Icons/EnvelopeIcon.vue";
import LocationIcon from "../components/Icons/LocationIcon.vue";
import Logo from "../components/Icons/Logo.vue";
import PhoneIcon from "../components/Icons/PhoneIcon.vue";

export default {
    name: "Footer",
    components: {
        Logo,
        LocationIcon,
        PhoneIcon,
        EnvelopeIcon,
    },
};
</script>
