<template>
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1"><i class="fa fa-book"></i> Best Seller</h4>
            
        </div>
        
        <div class="card-body">
            <div class="table-responsive table-card">
                <table class="table table-hover align-middle table-nowrap mb-0">
                    <thead class="table-light">
                        <tr class="text-muted">
                            <th></th>
                            <th>Price</th>
                            <th>Name</th>
                            <th>DR</th>
                            <th>Organic Traffic</th>
                            <th>Reffering Traffic</th>
                        </tr>
                    </thead>
                    <div id="elmLoader" v-if="isLoading">
                        <div class="spinner-border text-primary avatar-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <tbody>
                        
                        <tr v-for="item in bestSeller">
                            <td><button @click="addToCart(item)" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Buy</button></td>
                            <td>{{ item.sell_price }}</td>
                            <td>{{ item.media }}</td>
                            <td>{{ item.ahrefs_dr }}</td>
                            <td>{{ item.org_traffic }}</td>
                            <td>{{ item.ref_domain }}</td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
            
            
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import { mapGetters } from 'vuex';
export default {
    data(){
        return {
            bestSeller : [],
            isLoading : false,
        }
    },  
    created(){
       this.getBestSeller()
    },
    methods:{
       async getBestSeller(){
        this.isLoading = true
        const res = await axios.get('/getBestSeller')
        this.bestSeller = res.data
        this.isLoading = false
       },
       addToCart(link){
                this.$store.dispatch('addToCartAction',link)
        },
    }
    
    
    
}
</script>