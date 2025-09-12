<script setup>
import PlusSvg from "@/components/svgs/PlusSvg.vue";
const props = defineProps({
    disabled: {
        type : Boolean,
        required : true
    }
});
const emit = defineEmits(["save"])

const handleClick = () => {
    if(!props.disabled){
        emit("save")
    }

}
</script>
<template>
    <button
        type = "button"
        @click = "handleClick"
        :disabled = "props.disabled"
        class = "w-full justify-center items-center flex px-6 py-2 rounded-lg bg-blue-600 text-white font-bold hover:bg-blue-700 disabled:opacity-50">
        <PlusSvg class="w-8 h-8 " />
        <p class="text-xl font-bold">メモを保存</p>
    </button>
</template>
