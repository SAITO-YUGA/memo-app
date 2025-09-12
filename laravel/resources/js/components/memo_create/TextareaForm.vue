<script setup>
import { ref, watch } from "vue"

// メモの内容
const content = ref("")
const emit = defineEmits(["update"])
watch(content, (val) => emit("update",val))
</script>
<template>
    <textarea v-model="content" placeholder = "ここにメモを入力" rows="10" class="w-full min-h-[240px] p-3 rounded-lg border border-gray-300 text-base leading-relaxed">
    </textarea>
</template>
