<template>
    <div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-for="(question, i) in questions" :key="i">
            {{ question.text }}
            <textarea @change="saveData"></textarea>
        </div>
    </div>
</template>

<style scoped>
    
</style>

<script>
    export default {
        props: {
            questions: Object,
        },
        methods: {
        }
    }
</script>
