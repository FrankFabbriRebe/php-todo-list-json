<script>

import axios from 'axios';
import { onMounted } from 'vue';

export default {
    name: "ToDoList",

    data() {
        return {
            toDoList: []
        }
    },

    mounted() {

        const t = this;
        axios.get('http://localhost/php-todo-list-json/Back-end/toDoListAPI.php')
            .then(res => {
                // console.log("data: " + JSON.stringify(res.data));
                t.toDoList = res.data;
                console.log(t.toDoList);
            }).catch(err => console.error(err));

    }

}



</script>

<template>
    <ul>
        <li v-for="(toDo, index) in toDoList" :key="index">
            {{ toDo.task }}
        </li>
    </ul>
</template>