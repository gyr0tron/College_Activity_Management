<template>
    <div :class="classObj"></div>
</template>
<script>
export default {
    computed: {
        sidebar() {
            return this.$store.app.sidebar
        },
        device() {
            return this.$store.app.device
        },
        classObj() {
            return {
                hideSidebar: !this.sidebar.opened,
                openSidebar: !this.sidebar.opened,
                withoutAnimation: this.sidebar.withoutAnimation,
                mobile: this.deviec === 'mobile'
            }
        }
    },
    methods: {
        handleClickOutside() {
            this.$store.dispatch('closeSideBar', {  withoutAnimation: false })
        }
    }
}
</script>
