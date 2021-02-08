<template>
    <section class="text-gray-600 body-font overflow-hidden" >
        <div class="container px-5 py-24 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100"  v-for="post in posts" :key="post.title">
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                        <span class="font-semibold title-font text-gray-700">CATEGORY</span>
                        <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                    </div>
                    <div class="md:flex-grow"> 
                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ post.title }}</h2>
                        <p class="leading-relaxed">{{ post.description }}</p>
                        <a class="text-indigo-500 inline-flex items-center mt-4">Import post
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <button v-if="posts.length" @click="importAll" class="w-28 px-3 py-4 font-medium text-white bg-blue-600 rounded-lg">Import All</button>
    </section>

</template>

<script>
export default {
    name: 'ShowPosts',
    props: {
        posts: Array
    },
    methods: {
        importAll() {
            axios.post('/posts', this.posts).then(response => {
                console.log(response);
            })
        }
    }
}
</script>

<style>

</style>