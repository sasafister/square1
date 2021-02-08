<template>
    <div class="">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold leading-tight text-gray-900">
            Write something awesome
        </h1>
        </div>
    </header>
    <main>
        <div class="max-w-7xl mx-2 sm:mx-auto py-6 sm:px-6 lg:px-8 ">
        <label for="title" class="font-semibold">Title</label>
        <input name="title" v-model="title" class="border w-full rounded-sm h-12 mb-2 p-2" />
        <label for="description" class="font-semibold">Description</label>
        <textarea name="description" rows="10" v-model="description" class="border w-full rounded-sm p-2"/>
        <div class="flex">
            <date-pick v-model="publication_date" class="border rounded-lg border-blue-600 px-3 py-5 mr-2"></date-pick>
            <div @click="submit" class="px-6 py-4 text-center font-medium text-white bg-blue-600 rounded-lg">Submit</div>
        </div>
        </div>
    </main>
    </div>
</template>

<script>
import DatePick from 'vue-date-pick';
import 'vue-date-pick/dist/vueDatePick.css';
import day from 'dayjs'

export default {
    name: 'Dashboard',
    components: {DatePick},
    data: () => ({
        title: '',
        description: '',
        publication_date: day().format('YYYY-MM-DD')
    }),
    methods: {
        submit() {
            const data = {
                title: this.title,
                description: this.description,
                publication_date: this.publication_date
            }
            axios.post('posts', data).then(response => {
                console.log(response);
            })
        }
    }
}
</script>

<style>

</style>