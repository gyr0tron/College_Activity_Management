<template>
    <div :class="classObj">
        <div v-if="device==='mobile'&&sidebar.opened" class="drawer-bg" @click="handleClickOutside"/>
        <sidebar class="sidebar-container"/>
        <div class="main-container">
            <navbar/>
            <tags-view/>
            <app-main/>
        </div>
    </div>
</template>
<script>
import {Navbar, Sidebar, MainApp, TagsView} from './'
export default {
    components: {

    },
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
                mobile: this.device === 'mobile'
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
