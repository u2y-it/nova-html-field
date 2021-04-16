<template>
    <default-field :field="field" :errors="errors" :show-help-text="showHelpText">
        <template slot="field">
            <div v-if="hasValue" v-html="field.value"></div>
        </template>
    </default-field>
</template>

<script>
import {FormField, HandlesValidationErrors} from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {

    },

    computed: {
        /**
         * Determine if the field has a value other than null.
         */
        hasValue() {
            return this.field.value !== null
        },
    },
}
</script>
