require('./bootstrap');


import Vue from 'vue';
import axios from 'axios';

const dish = new Vue({
    el: '#dish',
    data: {
        dishes: [],
        carrello: [],
        id: '',

    },
    created() {
        let datiDB = JSON.parse(localStorage.getItem('dish-vue'));
        if(datiDB === null) {
            this.carrello = [];
        } else {
            this.carrello = datiDB;
        }
        this.id = document.getElementById('restaurantId').value;
        // console.log(this.id);
        axios.get('http://127.0.0.1:8000/api/dishesFilter', {
            params: {
                id: this.id,
            }

        })
            .then(response => {
            // handle success
            response.data.forEach((dish) => {
                dish.showMe = false;
            }); 
            this.dishes = response.data;
            
            console.log(response.data);
            
            })
            .catch(error => {
            // handle error
            console.log(error);
            });
            
        },
    computed: {
        carrelloTotale() {
            let somma = 0;
            for(let key in this.carrello) {
                somma = somma + (this.carrello[key].dish.price * this.carrello[key].quantita);
            }
            return somma.toFixed(2)
        },
        quantitaTotale() {
            let quantita = 0;
            for(let key in this.carrello) {
                quantita = quantita + (this.carrello[key].quantita);
            }
            return quantita

        }
    },

    methods: {
        aggiungereCarrello(dish) {
            let elementoEsistente;
            let esistente = this.carrello.filter( (item, index) => {
                if (item.dish.id == Number(dish.id)) {
                    elementoEsistente = index;
                return true;
                } else {
                return false;
                }
            });
            if(esistente.length) {
                this.carrello[elementoEsistente].quantita++
            } else {
                this.carrello.push({dish: dish, quantita: 1})
            }
            localStorage.setItem('dish-vue', JSON.stringify(this.carrello));
        },
        rimuovereCarrello(dish){

            this.carrello.splice(dish, 1)

            localStorage.setItem('dish-vue', JSON.stringify(this.carrello));
        }
    } // --> fine methods

});


