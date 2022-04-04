<template>
  <form
    autocomplete="off"
    class="px-2 lg:px-3 w-full flex items-center bg-white border ring-primary-500 focus-within:ring-2 transition rounded overflow-hidden"
    @submit.prevent="submitForm"
  >
    <div
      class="h-10 w-10 flex-shrink-0 text-gray-500 grid place-items-center rounded-full"
    >
      <div class="h-2/3 w-2/3">
        <search-icon />
      </div>
    </div>
    <input
      id="search"
      v-model="query"
      type="search"
      placeholder="Search products..."
      class="h-10 lg:px-3 w-full bg-transparent outline-none"
    />
  </form>
</template>

<script>
import SearchIcon from '../Icons/SearchIcon.vue';

export default {
  name: 'Searchbar',
  components: { SearchIcon },
  data() {
    return {
      query: this.$route.query.query
    };
  },
  methods: {
    submitForm() {
      if (!this.query) return;
      this.$router.push(`/search?query=${this.query}`);
    }
  }
};
</script>
