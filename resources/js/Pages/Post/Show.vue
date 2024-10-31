<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Head} from "@inertiajs/vue3";

defineProps(['post']);
</script>

<template>
    <Head title="Single Post View" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-prose sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="px-6 pt-6">
                        <h2 class="text-xl font-semibold text-gray-800">
                            {{ post.title }}
                        </h2>
                    </div>

                    <div class="px-6 pt-0 pb-2 text-sm text-gray-400">
                        Published by {{ post.user.name }} on {{ new Date(post.published_at)
                            .toLocaleDateString("en-US", {month: "long", day: "numeric", year: "numeric"})
                        }}
                    </div>

                    <div class="p-6 text-gray-900">
                        {{ post.content }}
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
