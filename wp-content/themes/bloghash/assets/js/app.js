import { createApp } from 'vue';

const app = createApp({
    data() {
        return {
            liveRooms: []
        };
    },
    mounted() {
        fetch('/wp-json/custom/v1/live-rooms')
            .then(response => response.json())
            .then(data => {
                this.liveRooms = data;
            });
    }
});

app.mount('#live-rooms');
