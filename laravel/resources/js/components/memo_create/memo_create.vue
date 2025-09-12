<script setup>
import { ref } from "vue"
import MemoHeader from "@/components/memo_create/MemoHeader.vue"
import TextareaForm from "@/components/memo_create/TextareaForm.vue";
import MemoSave from "@/components/memo_create/MemoSave.vue";

const content = ref("")

const handleUpdate = (val) => {
    content.value = val
}
const handleSave = () => {
    console.log("保存しました。",content.value)
}

</script>

<template>
    <div class = "min-h-screen flex items-center justify-center bg-gray-100">
    <!--中央パネル-->
        <div class="bg-white shadow-lg rounded-xl w-full max-w-2xl">
        <!--ヘッダー-->
                <div class="border-b px-6 py-2">
                    <MemoHeader />
                </div>
        <!--入力フォーム-->
            <div class="px-6 py-4">
                <TextareaForm @update="handleUpdate"/>
            </div>
        <!--保存ボタン-->
            <div class="border-t px-6 py-4 flex justify-end">
                <MemoSave :disabled ="!content" @save="handleSave"/>
            </div>
        </div>
    </div>
</template>
