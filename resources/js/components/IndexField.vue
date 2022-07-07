<template>
    <div :class="`text-${field.textAlign}`">
        <template v-if="hasValue">
            <div v-html="field.value"></div>
        </template>
        <p v-else>&mdash;</p>
    </div>
</template>

<script>
export default {
    props: ['resourceName', 'field'],

    computed: {
        hasValue() {
            return this.field.value !== null
        },
    },
}
</script>
