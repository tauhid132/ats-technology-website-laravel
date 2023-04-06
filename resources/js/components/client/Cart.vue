<template>
    <div class="dropdown topbar-head-dropdown ms-1 header-item">
        <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
        id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside"
        aria-haspopup="true" aria-expanded="false">
        <i class='bx bx-shopping-bag fs-22'></i>
        <span
        class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">{{ cartItems.length }}</span>
    </button>
    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart"
    aria-labelledby="page-header-cart-dropdown">
    <div class="dropdown-head bg-primary bg-pattern rounded-top">
        <div class="p-3">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="m-0 fs-16 fw-semibold text-white"> My Cart </h6>
                </div>
                <div class="col-auto dropdown-tabs">
                    <span class="badge badge-soft-light fs-13"> {{ cartItems.length }} Items</span>
                </div>
            </div>
        </div>
    </div>
    
    <div >
        <div  v-if="!cartItems.length" class="p-2">
            <div class="text-center empty-cart">
                <div class="avatar-md mx-auto my-3">
                    <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                        <i class='bx bx-cart'></i>
                    </div>
                </div>
                <h5 class="mb-3">Your Cart is Empty!</h5>
                <a href="/marketplace" class="btn btn-success w-md mb-3">Shop Now</a>
            </div>
            
        </div>
        <div v-for="item in cartItems" class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2 mt-2">
            <div class="d-flex align-items-center">
                
                <div class="flex-1">
                    <h6 class="mt-0 mb-1 fs-14">
                        <a href="apps-ecommerce-product-details.html" class="text-reset">{{ item.carted_link.media }}</a>
                    </h6>
                    <p class="mb-0 fs-12 text-muted">
                        Quantity: <span>{{ item.quantity }} x € {{ item.carted_link.sell_price }}</span>
                    </p>
                </div>
                <div class="px-2">
                    <h5 class="m-0 fw-normal">€ 
                        <span v-if="item.niches == 'niches_casino'">{{ item.carted_link.sell_price * item.carted_link.niches_casino  }}</span>
                        <span v-if="item.niches == 'niches_loan'">{{ item.carted_link.sell_price * item.carted_link.niches_loan  }}</span>
                        <span v-if="item.niches == 'niches_erotic'">{{ item.carted_link.sell_price * item.carted_link.niches_erotic  }}</span>
                        <span v-if="item.niches == 'niches_cbd'">{{ item.carted_link.sell_price * item.carted_link.niches_cbd  }}</span>
                        <span v-if="item.niches == 'niches_crypto'">{{ item.carted_link.sell_price * item.carted_link.niches_crypto  }}</span>
                        <span v-if="item.niches == null">{{ item.carted_link.sell_price   }}</span>
                    </h5>
                </div>
                <div class="ps-2">
                    <button @click="removeFromCart(item)" type="button"
                    class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                    class="fa fa-times text-danger fs-16"></i></button>
                </div>
            </div>
        </div>
        <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border"
        id="checkout-elem">
        <div v-if="cartItems.length" class="d-flex justify-content-between align-items-center pb-3">
            <h5 class="m-0 text-muted">Total:</h5>
            <div class="px-2">
                <h5 class="m-0" id="cart-item-total">€ {{ cartAmount }}</h5>
            </div>
        </div>
        
        <a v-if="cartItems.length" href="/mycart" class="btn btn-success text-center w-100">
            Checkout
        </a>
    </div>
</div>

</div>
</div>
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
        this.$store.dispatch('getCartItems')
    },
    methods: {
        removeFromCart(item){
            this.$store.dispatch('removeFromCartAction',item)
        }
        
    }
    
}
</script>