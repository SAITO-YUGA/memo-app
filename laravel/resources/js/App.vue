<script setup>
import {ref } from "vue"
import Header from './components/Header.vue'
import Memo_create from './components/memo_create/memo_create.vue'
import Memo_Show from './components/memo_show/Memo_Show.vue'

const memoShowRef = ref(null)
const handleSaved = () => {
    memoShowRef.value?.fetchMemos()
}
</script>
<template>
    <div class="flex flex-col min-h-screen bg-gray-100">
        <Header/>
        <Memo_create @saved = "handleSaved"/>
        <Memo_Show ref = "memoShowRef"/>
    </div>

</template>
