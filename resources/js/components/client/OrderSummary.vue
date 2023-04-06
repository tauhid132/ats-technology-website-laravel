<template>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-0">Order Summary</h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="elmLoader" v-if="this.$store.state.OrderSummaryIsLoading">
                    <div class="spinner-border text-primary avatar-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div class="table-responsive table-card">
                    <table class="table table-borderless align-middle mb-0">
                        <thead class="table-light text-muted">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Item</th>
                                <th scope="col" class="text-end">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in cartItems">
                                <td>
                                    1
                                </td>
                                <td>
                                    <h5 class="fs-14"><a href="apps-ecommerce-product-details.html" class="text-dark">{{ item.quantity }} x Links ({{ item.carted_link.media }})</a></h5>
                                    <p class="text-muted mb-0"><i class="fa fa-check text-success"></i> Including {{ item.carted_link.article_words }} Word Article</p>
                                    <p class="text-muted mb-0"><i class="fa fa-check text-success"></i> Do-Follow Link</p>
                                </td>
                                <td class="text-end">€ 
                                    <span v-if="item.niches == 'niches_casino'">{{ item.carted_link.sell_price * item.carted_link.niches_casino  }}</span>
                                    <span v-if="item.niches == 'niches_loan'">{{ item.carted_link.sell_price * item.carted_link.niches_loan  }}</span>
                                    <span v-if="item.niches == 'niches_erotic'">{{ item.carted_link.sell_price * item.carted_link.niches_erotic  }}</span>
                                    <span v-if="item.niches == 'niches_cbd'">{{ item.carted_link.sell_price * item.carted_link.niches_cbd  }}</span>
                                    <span v-if="item.niches == 'niches_crypto'">{{ item.carted_link.sell_price * item.carted_link.niches_crypto  }}</span>
                                    <span v-if="item.niches == null">{{ item.carted_link.sell_price   }}</span>
                                </td>
                            </tr>
                            
                            
                            <tr>
                                <td class="fw-semibold" colspan="2">Sub Total :</td>
                                <td class="fw-semibold text-end">€ {{ cartAmount }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Discount <span class="text-muted"></span> : </td>
                                <td class="text-end">- € 0</td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">VAT: </td>
                                <td class="text-end">€ 0</td>
                            </tr>
                            <tr class="table-active">
                                <th colspan="2">Total (€) :</th>
                                <td class="text-end">
                                    <span class="fw-semibold">
                                        € {{ cartAmount }}
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</template>
<script>
import { mapGetters } from 'vuex';
export default {
    computed: {
        ...mapGetters({
            'cartItems' : 'getCart'
        }),
        ...mapGetters({
            'cartAmount' : 'getCartAmount'
        }),
        
    },  
    created(){
        //this.$store.dispatch('getCartItems')
        console.log(this.cartAmount)
    },
    methods:{
        removeFromCart(item){
            this.$store.dispatch('removeFromCartAction',item)
        }
    }
    
    
    
}
</script>