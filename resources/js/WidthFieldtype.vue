<template>
    <div class="flex flex-row -mx-1">
        <div v-if="config[key]" v-for="(name, key, index) in options" :key="index" class="flex flex-col items-center px-1">
            <button
                :class="['btn-flat', key === value ? 'bg-blue' : '']"
                :title="name"
                @click="update(key)"
            >
                <Icon :name="key" :class="['w-8 h-8 fill-current', key === value ? 'text-white' : 'text-grey-80' ]" />
            </button>
            <p class="mt-1 text-xs text-grey-80">{{ name }}</p>
        </div>
    </div>
</template>

<script>
    import Icon from './Icon.vue'

    export default {
        mixins: [Fieldtype],
        components: {
            Icon,
        },
        data() {
            return {
                options: this.meta.options,
            }
        },
    }
</script>
