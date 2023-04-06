<template>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">All Categories {{this.data.test}}</h4>
                </div>
                <div class="card-body">
                    <div class="list-group col nested-list nested-sortable-handle">
                        <div  class="list-group nested-list nested-sortable-handle">
                            
                            <div v-for="category,index in data.categories" class="list-group-item nested-2"><i class="ri-drag-move-fill align-bottom handle"></i>{{ category.name }} <div style="float: right"><i  @click="deleteCat(category)" class="fa fa-trash text-danger"></i>&nbsp; <i @click="editCat(category)" class="fa fa-edit text-success"></i></div>
                            <div class="list-group nested-list nested-sortable-handle">
                                
                                <div v-for="subCat in category.children" class="list-group-item nested-3"><i class="ri-drag-move-fill align-bottom handle"></i>{{ subCat.name }}<div style="float: right"><i  @click="deleteCat(subCat)" class="fa fa-trash text-danger"></i>&nbsp; <i @click="editCat(subCat)" class="fa fa-edit text-success"></i></div></div>
                                
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <loader v-if="isLoading"></loader>
    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Add Categories</h4>
            </div>
            
            
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-lg-12">
                        <label for="projectName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="category_name" v-model="newCat.catName"  placeholder="Enter Category Name" required>
                    </div>
                    <!--end col-->
                    <div class="col-lg-12">
                        <label for="sub-tasks" class="form-label">Parent Category</label>
                        <select class="form-select" aria-label="Parent Category" v-model="newCat.parentId" name="parent_id">
                            <option value="">None</option>
                            <option v-for="category in data.categories" :value="category.id" >{{ category.name }}</option>
                        </select>
                    </div>
                    <!--end col-->
                    <div class="mt-4">
                        <div class="hstack gap-2 justify-content-end">
                            
                            <button @click="addCategory()" class="btn btn-success"><i class="fa fa-plus"></i> Create</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

</template>

<script>
import axios from 'axios';

export default {
    data(){
        return{
            data : {
                categories: []

            },
            newCat : {
                catName : '',
                parentId : ''
            },
            itemSelected: '',
            isLoading : false
        }
    },
    created(){
        this.getCat()
    },
    methods : { 
        async getCat(){
            const res = await axios.get('/admin/getCat')
            this.data.categories = res.data          
            console.log(res)
            toas
        },
        async addCategory(){
            const res = await axios.post('/admin/categories',this.newCat)
            this.getCat()
            toastr["success"]("Deleted Successfully!")
            this.isLoading = true
        },
        async deleteCat(cat){
           
            const res = await axios.post('/admin/categories/delete', cat)
            this.getCat()
            toastr["success"]("Deleted Successfully!")
            
        },
        async editCat(cat){
            
        }

    }
}
</script>


