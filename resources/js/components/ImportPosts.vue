<template>
    <div class="">
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                Import posts
            </h1>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-2 sm:mx-auto py-6 sm:px-6 lg:px-8 ">
                <label for="url" class="font-semibold">Import URL</label>
                <input name="url" v-model="url" class="border w-full rounded-sm h-12 mb-2 p-2" />
                <button @click="submit" class="w-28 px-3 py-4 font-medium text-white bg-blue-600 rounded-lg">Submit</button>
                <div class="my-4 text-gray-600" v-if="loading">Loading ...</div>
                <ShowPosts :posts="posts" v-else/>
            </div>
        </main>
    </div>
</template>

<script>
import ShowPosts from './Posts/ShowPosts'
import axios from 'axios'

export default {
    name: "ImportPosts",
    components: { ShowPosts },
    data: () => ({
        posts: [],
        url: '',
        loading: false
    }),
    methods: {
        submit() {
            this.loading = true
            axios.get(this.url).then(response => {
                this.posts = response.data.data
                this.loading = false
            })
        }
    }
}
</script>

<style>

</style>