<template>
    <div class="row" id="contactList">
        <div class="col-xl-3 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex mb-0">
                        <div class="flex-grow-1">
                            <h5 class="fs-16">Filters</h5>
                        </div>
                        <div class="flex-shrink-0">
                            <a href="#" class="text-decoration-underline" id="clearall">Reset Filter</a>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom">
                    <p class="text-muted text-uppercase fs-12 fw-medium mb-1">Categories</p>
                    
                    <multiselect v-model="selectedCategory" :multiple="true"  track-by="name" label="name" :options="categories"></multiselect>
                </div>
                <div class="card-body border-bottom">
                    <p class="text-muted text-uppercase fs-12 fw-medium mb-1">Countries</p>
                    
                    <multiselect v-model="selectedCountry" :multiple="true" track-by="country_name" label="country_name" :options="countries"></multiselect>
                </div>
                <div class="card-body border-bottom">
                    <p class="text-muted text-uppercase fs-12 fw-medium ">Price</p>
                    
                    <div class="range-slider" >
                        
                        <div class="formCost d-flex gap-2 align-items-center mb-0">
                            <input class="form-control form-control-sm" type="number" id="minCost" value="0" /> <span class="fw-semibold text-muted">to</span> <input class="form-control form-control-sm" type="number" id="maxCost" value="100" />
                        </div>
                        <div style="margin-top: -30px">
                            <input value="0" min="0" max="1000" v-model="minPrice" step="50" type="range"/>
                            <input value="1000" min="0" max="1000" step="50" v-model="maxPrice" type="range"/>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom">
                    <center><img class="ahref-img" :src="'/images/ahrefs.png'"/>DR</center>
                    <div class="formCost d-flex gap-2 align-items-center mt-3 mb-3">
                        
                        <input class="form-control form-control-sm" type="text" v-model="startAhrefs" value="0" /> <span class="fw-semibold text-muted">-</span> <input class="form-control form-control-sm" type="text" v-model="endAhrefs" value="100" />
                    </div>
                    <center><img class="ahref-img" :src="'/images/semrush.png'"/> AS</center>
                    <div class="formCost d-flex gap-2 align-items-center mt-3 mb-3">
                        
                        <input class="form-control form-control-sm" type="text" id="minCost" value="0"  v-model="startSemrush"/> <span class="fw-semibold text-muted">-</span> <input class="form-control form-control-sm" type="text" id="maxCost" value="100" v-model="endSemrush" />
                    </div>
                    <center><img class="ahref-img" :src="'/images/moz.png'"/> DA</center>
                    <div class="formCost d-flex gap-2 align-items-center mt-3 mb-3">
                        
                        <input class="form-control form-control-sm" type="text" id="minCost" value="0" v-model="startMozDa" /> <span class="fw-semibold text-muted">-</span> <input class="form-control form-control-sm" type="text" id="maxCost" value="100" v-model="endMozDa" />
                    </div>
                    <center><img class="ahref-img" :src="'/images/moz.png'"/> Spam Score</center>
                    <div class="formCost d-flex gap-2 align-items-center mt-3 mb-3">
                        
                        <input class="form-control form-control-sm" type="text" id="minCost" v-model="startMozSpam" value="0" /> <span class="fw-semibold text-muted">-</span> <input class="form-control form-control-sm" type="text" id="maxCost" value="100" v-model="endMozSpam" />
                    </div>
                </div>
                
                
                
                <!-- <div class="accordion accordion-flush filter-accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingBrands">
                            <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseBrands" aria-expanded="true" aria-controls="flush-collapseBrands">
                                <span class="text-muted text-uppercase fs-12 fw-medium">Niches</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                            </button>
                        </h2>
                        
                        <div id="flush-collapseBrands" class="accordion-collapse collapse show" aria-labelledby="flush-headingBrands">
                            <div class="accordion-body text-body pt-0">
                                
                                <div class="d-flex flex-column gap-2 mt-3 filter-check">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="niches_casino" v-model="selectedNiche" id="productBrandRadio5" >
                                        <label class="form-check-label" for="productBrandRadio5">Casino/Betting</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="niches_loan" v-model="selectedNiche" id="productBrandRadio4">
                                        <label class="form-check-label" for="productBrandRadio4">Loan</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="niches_erotic" v-model="selectedNiche" id="productBrandRadio3">
                                        <label class="form-check-label" for="productBrandRadio3">Crypto</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="niches_cbd" v-model="selectedNiche" id="productBrandRadio2">
                                        <label class="form-check-label" for="productBrandRadio2">Erotic</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="niches_crypto" v-model="selectedNiche" id="productBrandRadio1" >
                                        <label class="form-check-label" for="productBrandRadio1">Dating</label>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                
                
            </div>
            <!-- end card -->
        </div>
        
        
        <div class="col-lg-9">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-lg-3 col-auto">
                            <div class="search-box">
                                <input type="text" v-model="searchKey" class="form-control search" id="search-task-options" placeholder="Search...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="col-auto ms-sm-auto">
                            <select class="form-select" v-model="paginate">
                                <option v-bind:value="5">5</option>
                                <option v-bind:value="10">10</option>
                                <option v-bind:value="25">25</option>
                                <option v-bind:value="50">50</option>
                                <option v-bind:value="100">100</option>
                            </select>
                        </div>
                        <!-- <div class="col-auto ms-sm-auto">
                            <b>{{ this.links.length }} matches </b> out of {{ this.links.length }} Links
                        </div> -->
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
            <div class="card">
                <div id="elmLoader" v-if="isLoading">
                    <div class="spinner-border text-primary avatar-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive mt-4 mt-xl-0">
                        <table id="marketplace" class="table table-hover table-striped align-middle table-nowrap mb-4">
                            <thead>
                                <tr>
                                    
                                    <th><center>Action</center></th>
                                    <th><center>Price</center></th>
                                    <th><center>Media</center></th>
                                    <th><center>Language</center></th>
                                    <th><center>Country</center></th>
                                    <th><center>Category</center></th>
                                    <th><center><img class="ahref-img" :src="'/images/ahrefs.png'"><br>DR</center></th>
                                    <th><center><img class="ahref-img" :src="'/images/semrush.png'"><br>AS</center></th>
                                    <th><center><img class="ahref-img" :src="'/images/moz.png'"><br>DA</center></th>
                                    <th><center><img class="ahref-img" :src="'/images/moz.png'"><br>Spam Score</center></th>
                                    <th><center><img class="ahref-img" :src="'/images/majestic.png'"><br>TF</center></th>
                                    <th><center><img class="ahref-img" :src="'/images/majestic.png'"><br>CF</center></th>
                                    <th><center>ORG. Traffic</center></th>
                                    <th><center>Ref. Domain</center></th>
                                    <th><center>Out. Domain</center></th>
                                    <th><center>Niches</center></th>
                                    <th><center>Domain Age</center></th>
                                    <th><center>Upload Date</center></th>
                                    <th><center>Updated On</center></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                                <tr v-for="link in links.data">
                                    
                                    <td><center><button @click="addToCart(link)" class="btn btn-sm btn-info"><i class="fa fa-shopping-cart"></i> Buy</button></center></td>
                                    <td><center>€ {{ link.sell_price }}</center></td>
                                    <td><center>{{ link.media }}</center></td>
                                    <td><center>{{ link.language }}</center></td>
                                    <td><center><img height="15px" width="20px" :src="'/images/flags/'+(link.country.country_code).toLowerCase()+'.png'" /> &nbsp;{{ link.country.country_code }}</center></td>
                                    <td><center><span v-for="category,index in link.categories"><span v-if="index != 0">, </span>{{ category.name }} </span></center></td>
                                    <td><center>{{ link.ahrefs_dr }}</center></td>
                                    <td><center>{{ link.semrush_as }}</center></td>
                                    <td><center>{{ link.moz_da }}</center></td>
                                    <td><center>{{ link.moz_spam }}</center></td>
                                    <td><center>{{ link.majestic_TF }}</center></td>
                                    <td><center>{{ link.majestic_CF }}</center></td>
                                    <td><center>{{ link.org_traffic }}</center></td>
                                    <td><center>{{ link.ref_domain }}</center></td>
                                    <td><center>{{ link.outgoing_domains }}</center></td>
                                    <td>

                                        <span v-if="link.niches_casino == 0" class="badge rounded-pill text-bg-light" data-bs-toggle="tooltip" data-bs-placement="top" title="This Media does not accept Casino Content">Casino</span>
                                        <span v-else class="badge rounded-pill text-bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="This Media accepts Casino Content">Casino</span>

                                        <span v-if="link.niches_loan == 0" class="badge rounded-pill text-bg-light" data-bs-toggle="tooltip" data-bs-placement="top" title="This Media does not accept Loan Content">Loan</span>
                                        <span v-else class="badge rounded-pill text-bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="This Media accepts Loan Content">Loan</span>

                                        <span v-if="link.niches_cbd == 0" class="badge rounded-pill text-bg-light" data-bs-toggle="tooltip" data-bs-placement="top" title="This Media does not accept CBD Content">CBD</span>
                                        <span v-else class="badge rounded-pill text-bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="This Media accepts CBD Content">CBD</span>

                                        <span v-if="link.niches_crypto == 0" class="badge rounded-pill text-bg-light" data-bs-toggle="tooltip" data-bs-placement="top" title="This Media does not accept Crypto Content">Crypto</span>
                                        <span v-else class="badge rounded-pill text-bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="This Media accepts Crypto Content">Crypto</span>

                                        <span v-if="link.niches_erotic == 0" class="badge rounded-pill text-bg-light" data-bs-toggle="tooltip" data-bs-placement="top" title="This Media does not accept Erotic Content">Erotic</span>
                                        <span v-else class="badge rounded-pill text-bg-success" data-bs-toggle="tooltip" data-bs-placement="top" title="This Media accepts Erotic Content">Erotic</span>

                                        
                                    </td>
                                    <td><center>{{ moment(link.domain_age, "YYYY-MM-DD").fromNow() }}</center></td>
                                    <td><center>{{ moment(link.created_at).format('YYYY-MM-DD') }}</center></td>
                                    <td><center>{{ moment(link.updated_at).format('YYYY-MM-DD') }}</center></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <pagination :data="links" @pagination-change-page="getLinks"></pagination>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

import axios from 'axios';

export default {
    
    props: ['categories','countries'],
    data(){
        return{
            data : {
                
            },
            links: {},
            isLoading : false,
            paginate : 10,
            searchKey : '',
            minPrice : '0',
            maxPrice : '500',
            selectedNiche : [],
            selectedCategory: [],
            selectedCountry: [],
            startAhrefs : 0,
            endAhrefs : 100,
            startSemrush : 0,
            endSemrush : 100,
            startMozDa : 0,
            endMozDa : 100,
            startMozSpam : 0,
            endMozSpam : 100,

            
        }
    },
    created(){
        this.getLinks()
        
        
    },
    methods : { 
        async getLinks(page = 1){
            var selectedCat = [];
            var selectedCoun = [];
            for(let i=0; i<this.selectedCategory.length; i++){
                selectedCat.push(this.selectedCategory[i].name)
            }
            for(let j=0; j<this.selectedCountry.length; j++){
                selectedCoun.push(this.selectedCountry[j].id)
            }
            
            this.isLoading = true
            const res = await axios.get('/marketplace/getLinks?page='+ page 
            + '&paginate=' + this.paginate 
            + '&q=' + this.searchKey
            + '&minPrice=' +this.minPrice
            + '&maxPrice=' +this.maxPrice
            + '&selectedCategory=' +selectedCat
            + '&selectedCountry=' +selectedCoun
            + '&startAhrefs=' +this.startAhrefs
            + '&endAhrefs=' +this.endAhrefs
            + '&startSemrush=' +this.startSemrush
            + '&endSemrush=' +this.endSemrush
            + '&startMozDa=' +this.startMozDa
            + '&endMozDa=' +this.endMozDa
            + '&startMozSpam=' +this.startMozSpam
            + '&endMozSpam=' +this.endMozSpam
            
            )
            this.links = res.data
            this.isLoading = false         
        },
        addToCart(link){
            this.$store.dispatch('addToCartAction',link)
        },
        
    },
    watch:{
        searchKey: function(){
            this.getLinks();
        },
        minPrice: function(){
            this.getLinks();
        },
        maxPrice: function(){
            this.getLinks();
        },
        selectedCategory: function(){
            this.getLinks();
        },
        selectedCountry: function(){
            this.getLinks();
        },
        startAhrefs: function(){
            this.getLinks();
        },
        endAhrefs: function(){
            this.getLinks();
        },
        startSemrush: function(){
            this.getLinks();
        },
        endSemrush: function(){
            this.getLinks();
        },
        startMozDa: function(){
            this.getLinks();
        },
        endMozDa: function(){
            this.getLinks();
        },
        startMozSpam: function(){
            this.getLinks();
        },
        endMozSpam: function(){
            this.getLinks();
        },
        paginate: function(){
            this.getLinks();
        }
    }
    
}
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style>
.multiselect__option--highlight {
    background: #41b883;
    outline: none;
    color: #fff;
}

.multiselect__option {
    display: block;
    /* padding: 12px; */
    /* min-height: 40px; */
    /* line-height: 16px; */
    text-decoration: none;
    text-transform: none;
    vertical-align: middle;
    position: relative;
    cursor: pointer;
    white-space: nowrap;
    font-size: 14px;
}
.multiselect__tag {
    position: relative;
    display: inline-block;
    padding: 4px 26px 4px 10px;
    border-radius: 5px;
    margin-right: 10px;
    color: #fff;
    line-height: 1;
    background: #41b883;
    margin-bottom: 5px;
    white-space: nowrap;
    overflow: hidden;
    max-width: 100%;
    text-overflow: ellipsis;
}
.multiselect, .multiselect__input, .multiselect__single {
    font-family: inherit;
    font-size: 12px;
    touch-action: manipulation;
}
.multiselect__option {
    display: block;
    /* padding: 12px; */
    /* min-height: 40px; */
    /* line-height: 16px; */
    text-decoration: none;
    text-transform: none;
    vertical-align: middle;
    position: relative;
    cursor: pointer;
    white-space: nowrap;
    font-size: 12px;
}
</style>