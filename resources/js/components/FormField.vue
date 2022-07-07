<template>
    <DefaultField :field="field" :errors="errors" :show-help-text="showHelpText">
        <template #field>
            <div v-if="hasValue" v-html="field.value"></div>
        </template>
    </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],
    props: ['resourceName', 'resourceId', 'field'],
    methods: {},
    computed: {
        setInitialValue() {
            this.value = this.field.value || ''
        },
    },
}
</script>
