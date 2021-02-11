<template>
    <section class="text-gray-600 body-font overflow-hidden" >
        <button v-if="posts.length" @click="importAll" class="w-28 mt-4 px-3 py-4 font-medium text-white bg-blue-600 rounded-lg">Import All</button>
        <div class="container px-5 pt-12 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100"  v-for="post in posts" :key="post.title">
                <div class="py-8 flex flex-wrap md:flex-nowrap">
                    <div class="md:flex-grow"> 
                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ post.title }}</h2>
                        <p class="leading-relaxed">{{ post.description }}</p>
                    </div>
                </div>
            </div>
        </div>
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
            axios.post('/import-posts', this.posts).then(response => {
                this.$router.push({ name: 'AllPosts' })
            })
        }
    }
}
</script>

<style>

</style>