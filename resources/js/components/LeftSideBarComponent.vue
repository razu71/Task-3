<template>
    <div class="mt-50">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview product">
                <router-link to="/body" class="contest">Contest-1</router-link>
            </li>
            <li class="treeview product">
                <router-link to="/team2" class="contest">Contest-2</router-link>
            </li>
        </ul>
    </div>
</template>

<script>

</script>

<style scoped>
    .sidebar-menu>li>a {
        padding: 15px 5px 15px 15px;
        font-size: 15px;
        font-weight: 500;
    }
    .treeview{
        border-bottom: 1px solid #fff;
    }
    .contest{
        color: #000;
    }
    .treeview>a:hover{
        background: #696969;
        text-decoration: none;
    }

</style>
