<script>

import axios from 'axios';
import { onMounted } from 'vue';

export default {
    name: "ToDoList",

    data() {
        return {
            toDoList: [],
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
    <h1>To do list:</h1>

    <form @submit.prevent="createTask">
        <input type="text" name="text" v-model="newTaskText">
        <input type="submit" value="CREATE">
    </form>

    <ul>
        <li v-for="(toDo, index) in toDoList" :key="index">
            {{ toDo.task }}
        </li>
    </ul>
</template>