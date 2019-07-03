<template>
    <div>
        <datetime :type="dateType" input-class="form-control" :name="dataId" zone="local" :value="dataValue" :format="dateFormat"></datetime>
    </div>
</template>

<script>
    export default {
        props: ['data-id','data-value', 'date-type', 'date-format'],
        name: "DateTimePicker"
    }
</script>

<style scoped>

</style>