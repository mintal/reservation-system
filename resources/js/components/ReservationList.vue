<template>
    <div>
        <b-table :items=reservationData></b-table>
    </div>
</template>

<script>
    export default {
        name: "ReservationList",
        props: ['reservation-data'],
        data: function(){
            return {

            }
        }
    }
</script>

<style scoped>

</style>