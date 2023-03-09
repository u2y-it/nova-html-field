<template>
    <div :class="`text-${field.textAlign}`">
        <template v-if="hasValue">
            <div v-if="clickable" @click.stop v-html="field.value"  />
            <div v-else v-html="field.value" />
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
        clickable() {
            return !!this.field.clickable
        },
    },
}
</script>
