import axios from 'axios';
import Vue from 'vue';
import vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex)

export default new Vuex.Store({
    state : {
        counter : 0,
        cartedItems: [],
        messages : [],
        totalCartAmount: 0,
        OrderSummaryIsLoading :false
    },
    getters: {
        getCart(state){
            return state.cartedItems
        },
        getCartAmount(state){
          return state.totalCartAmount;
        },
        getMessages(state){
          return state.messages
      },
    },
    mutations: {
        updateCartItems(state, data){
            state.cartedItems = data
            console.log('cart Updated')
        },
        updateCartAmount(state, data){
          state.OrderSummaryIsLoading = true
          setTimeout(function() { state.OrderSummaryIsLoading = false; }, 1000);
          state.totalCartAmount = data
        },
        updateMessages(state, data){
          state.messages = data
        }
        
    },
     

    actions: {
      async getCartItems({commit,dispatch}){
        const res = await axios.get('/getCartItems')
        commit('updateCartItems',res.data)
        dispatch('getCartAmount')    
      },
      async getCartAmount({commit}){
        const res = await axios.get('/getCartAmount')
        commit('updateCartAmount',res.data)   
      },
      async addToCartAction({commit,dispatch},link){
        const res = await axios.post('/addToCart',link)
        console.log("added")
        dispatch('getCartItems') 
        toastr["success"]("Added to Cart!")
      },
      async removeFromCartAction({commit,dispatch},link){
        const res = await axios.post('/removeFromCart',link)
        console.log("added")
        dispatch('getCartItems') 
        toastr["success"]("Removed From Cart!")
      },
      async fetchMessagesAction({commit}){
        const res = await axios.get('/messages/fetch')
        commit('updateMessages',res.data)   
      },
      async sendMessage({commit,dispatch},msg){
        const res = await axios.post('/messages/send',msg)
        dispatch ('fetchMessagesAction')
      },

    }

    
})