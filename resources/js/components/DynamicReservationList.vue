<template>
    <div>
        <b-table striped :items=tableData :fields="fields"></b-table>
        Last update: <em v-html=lastUpdate></em>
    </div>
</template>

<script>
    function Row({id ,title, date, start, end, description, section}) {
        this.id = id;
        this.date = new Date(date).toLocaleDateString('Nl-nl');
        this.time = start.substring(0, start.length - 3) + "-" +end.substring(0, start.length - 3);
        this.section = section.name;
        this.room = section.room.name;
        this.title= title;
    }
    export default {
        name: "DynamicReservationList",
        data() {
            return {
                fields: ['title','date','time','section','room'],
                tableData : [],
                newTableData : [],
                lastUpdate : new Date().toLocaleString('Nl-nl')
            }
        },
        methods: {
            read() {
                window.axios.get('/api/reservations').then(({data}) => {
                    if(data.length >= 1) {
                        data.forEach(res => {
                            this.newTableData.push(new Row(res));
                        });
                    } else {
                        this.newTableData.push(
                            {'title' : 'no reservations found in system.'}
                            );
                    }
                    this.tableData = _.orderBy(this.newTableData, 'date', 'asc');
                    this.newTableData = [];
                });
                this.lastUpdate = new Date().toLocaleString('Nl-nl');
            },
            readInterval() {
                setInterval(()=>{
                    this.read();
                },30000);
            }
        },
        created() {
           this.read();
           this.readInterval();
        }
    }
</script>

<style scoped>

</style>