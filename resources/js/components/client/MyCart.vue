<template>
    <div class="row mb-3">
        <div class="col-xl-8">
            <div class="row align-items-center gy-3 mb-3">
                <div class="col-sm">
                    
                </div>
                <div class="col-sm-auto">
                    <a href="/marketplace" class="link-primary text-decoration-underline">Continue Shopping</a>
                </div>
            </div>
            
            <div class="card product">
                <div class="card-body">
                    <div id="elmLoader" v-if="isLoading">
                        <div class="spinner-border text-primary avatar-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <div class="table-responsive table-card">
                        <table v-if="cartItems.length" class="table align-middle table-nowrap mb-0">
                            <thead class="text-white bg-primary" >
                                <tr>
                                    
                                    <th scope="col">No</th>
                                    <th scope="col">Media</th>
                                    <th scope="col">Restricted Niche</th>
                                    <th scope="col">Article Word</th>
                                    <th scope="col">Price</th>
                                    <th scope="col" style="width: 150px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item,i in cartItems">
                                    <td><a href="#" class="fw-medium">{{ i+1 }}</a></td>
                                    <td>{{ item.carted_link.media }}</td>
                                    <td>
                                        <select class="form-select" v-model="item.niches"  @change="selectNiches(item, $event.target.value)">
                                            <option value="null" selected>None</option>
                                            
                                            <option value="niches_casino"  v-bind:value="niches_casino" v-if="item.carted_link.niches_casino == 0" disabled>Casino</option>
                                            <option value="niches_casino" v-else >Casino(X{{ item.carted_link.niches_casino }})</option>
                                            
                                            <option value="niches_loan" v-if="item.carted_link.niches_loan == 0" disabled>Loan</option>
                                            <option value="niches_loan" v-else >Loan(X{{ item.carted_link.niches_loan }})</option>
                                            
                                            <option value="niches_crypto" v-if="item.carted_link.niches_crypto == 0" disabled>Crypto</option>
                                            <option value="niches_crypto" v-else >Crypto(X{{ item.carted_link.niches_crypto }})</option>

                                            <option value="niches_cbd" v-if="item.carted_link.niches_cbd == 0" disabled>CBD</option>
                                            <option value="niches_cbd" v-else >CBD(X{{ item.carted_link.niches_cbd }})</option>
                                            
                                            <option value="niches_erotic" v-if="item.carted_link.niches_erotic == 0" disabled>Erotic</option>
                                            <option value="niches_erotic" v-else >Erotic(X{{ item.carted_link.niches_erotic }})</option>
                                        </select>
                                    </td>
                                    <!-- <td>07 Oct, 2021</td> -->
                                    <td>{{ item.carted_link.article_words }}</td>
                                    <td>€ 
                                        <span v-if="item.niches == 'niches_casino'">{{ item.carted_link.sell_price * item.carted_link.niches_casino  }}</span>
                                        <span v-if="item.niches == 'niches_loan'">{{ item.carted_link.sell_price * item.carted_link.niches_loan  }}</span>
                                        <span v-if="item.niches == 'niches_erotic'">{{ item.carted_link.sell_price * item.carted_link.niches_erotic  }}</span>
                                        <span v-if="item.niches == 'niches_cbd'">{{ item.carted_link.sell_price * item.carted_link.niches_cbd  }}</span>
                                        <span v-if="item.niches == 'niches_crypto'">{{ item.carted_link.sell_price * item.carted_link.niches_crypto  }}</span>
                                        <span v-if="item.niches == null">{{ item.carted_link.sell_price   }}</span>
                                    </td>
                                    <td>
                                        <button @click="removeFromCart(item)" type="button" class="btn btn-sm"><i class="fa fa-trash text-danger"></i> Remove </button>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <div  v-if="!cartItems.length" class="p-2">
                            <div class="text-center empty-cart">
                                <div class="avatar-md mx-auto my-3">
                                    <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                                        <i class='bx bx-cart'></i>
                                    </div>
                                </div>
                                <h5 class="mb-3">Your Cart is Empty!</h5>
                                <a href="/marketplace" class="btn btn-primary w-md mb-3">Go To Marketplace</a>
                            </div>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div v-if="cartItems.length" class="text-end mb-4">
                <a href="/checkout" class="btn btn-primary btn-label right ms-auto"><i class="ri-arrow-right-line label-icon align-bottom fs-16 ms-2"></i> Checkout</a>
            </div>
        </div>
        
        <order-summary></order-summary>
    </div>
    
</template>
<script>
import axios from 'axios';
import { mapGetters } from 'vuex';
export default {
    data(){
        return {
            isLoading : true,
            selectedNiches : {
                niches : '',
                item_id : ''
            }
        }
    },
    computed: {
        
        ...mapGetters({
            'cartItems' : 'getCart'
        }),
        ...mapGetters({
            'cartAmount' : 'getCartAmount'
        }),
        
    },  
    created(){
        this.$store.dispatch('getCartItems')
        this.isLoading = false
    },
    methods:{
        removeFromCart(item){
            this.$store.dispatch('removeFromCartAction',item)
        },
        async selectNiches(item, value){
            this.selectedNiches.niches = value
            this.selectedNiches.item_id = item.id
            const res = await axios.post('/selectNiches', this.selectedNiches)
            this.$store.dispatch('getCartItems')
        }
    }
    
    
    
}
</script>