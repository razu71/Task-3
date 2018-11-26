<template>
    <div id="list-example" class="list-group">
        <h3>Team list for contest two</h3>
        <router-link class="list-group-item list-group-item-action" to="/playerlist">Team One</router-link>
        <router-link class="list-group-item list-group-item-action" to="/playerlist2">Team Two</router-link>
        <router-link class="list-group-item list-group-item-action" to="/playerlist">Team Three</router-link>
        <router-link class="list-group-item list-group-item-action" to="/playerlist2">Team Four</router-link>
    </div>
</template>

<script>
    export default {
        name: "team2.vue"
    }
</script>

<style scoped>

</style>
