<template>
<div class="max-w-7xl mx-2 sm:mx-auto py-6 sm:px-6 lg:px-8 ">
    <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Title
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Publication Date
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="post in posts" :key="post.title">
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ post.title }}</div>
                </td>
                 <td class="px-6 py-4 whitespace-nowrap">
                     {{ formatDate(post.publication_date) }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
                </tr>

                <!-- More items... -->
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>

</template>

<script>
import day from 'dayjs'
export default {
    name: 'AllPosts',
    data: () => ({
        posts: []
    }),
    methods: {
        formatDate(date) {
            return day(date).format('DD.MM.YYYY')
        }
    },
    mounted() {
        axios.get('/user-posts').then(response => {
            this.posts = response.data
        })
    },
}
</script>

<style>

</style>