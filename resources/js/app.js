require('./bootstrap');


import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
    el: '#app',
    data: {
        types:[],
        name: '',
        restaurants: [],
        dishes: [],
        //nameDish: '',
        // actualType: 'tutte'
    },
    created() {
        this.filterType()
    },
    methods: {
         filterType() {
            axios.get('http://127.0.0.1:8000/api/filter', {
                params: {
                    name: this.name,
                    types: this.types,
                }
                })
                .then(response => {
                // handle success
                    // console.log(response.data);
                    this.restaurants = response.data;
                    console.log(response.data);
                })
                .catch(error => {
                // handle error
                console.log(error);
                });

        },
            route(id){
                return window.location + '/' + id ;
            }
    } // -->fine methods

});





