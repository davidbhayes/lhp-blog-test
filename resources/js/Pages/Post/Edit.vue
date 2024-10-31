<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {Link, useForm, usePage} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    post: {
        type: Object,
        default: () => ({content: '', title: ''}),
    }
});

const form = useForm({
    title: props.post.title,
    content: props.post.content,
    published_at: new Date(props.post.published_at)
});
</script>

<template>
    <AuthenticatedLayout>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">
                Edit a Blog Post
            </h2>
        </header>

        <div class="py-12">
            <div class="mx-auto max-w-prose sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden shadow-sm sm:rounded-lg"
                >
            <form @submit.prevent="form.post(route('posts.store'), { onSuccess: () => form.reset() })">
                <InputLabel for="title" value="Post Title" />
                <TextInput v-model="form.title" id="title" class="w-full"></TextInput>
                <InputLabel for="content" value="Post Content" />
                <textarea
                    v-model="form.content"
                    id="content"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    rows="9"
                ></textarea>
                <InputLabel for="published_at" value="Post Published At" />
                <input id="published_at" type="datetime-local" :value="form.published_at && form.published_at.toISOString().split('T')[0]">
                <InputError :message="form.errors.content" class="mt-2" />
                <br>
                <PrimaryButton class="mt-4">Save</PrimaryButton>
            </form>
        </div>
            </div></div>
    </section>
    </AuthenticatedLayout>
</template>
