<template>
   <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                        <div class="page-header">
                                <div class="page-header-title">
                                    <h4>Users</h4>
                                </div>
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index.html">
                                                <i class="icofont icofont-home"></i>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Project</a>
                                        </li>
                                    </ul>
                                </div>

                                
                            </div>

                            <!-- page body -->
                            <div class="page-body">
                                <!-- DOM/Jquery table end -->
                                    <!-- Column Rendering table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Users</h5>
                                            <div>
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#sign-in-modal">Add Users</button>
                                               
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table  class="table table-striped table-bordered nowrap notifications">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th></th>
                                                            
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody v-for="result in results" :key="result.id">                               
                                                        <tr>
                                                            <td>{{ result.name}}</td>
                                                            <td>{{ result.email}}</td>
                                                            <th>
                                                                <button type="button" class="btn btn-primary waves-effect" @click="edit(result.id)" data-toggle="modal" data-target="#edit" id="editmodal"> <i class="icofont icofont-ui-edit"></i></button>
                                                                <button class="btn btn-danger waves-effect" data-type="danger" id="btn2" data-from="top" data-align="right" @click="delete_user(result.id)"><i class="icofont icofont-ui-delete"></i></button>

                                                            
                                                            </th>
                                                            
                                                           
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th></th>
                                                            
                                                            
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        
                                        <modal>
                                            <div slot="header">
                                                 <h5 class="modal-title">Sign In Now</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>

                                            <div slot="body-modal">
                                                <form>

                                                        
                                                             <span v-if="success" class="text-success"><h4>{{ successMess}}</h4></span>

                                                        
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div>
                                                                    <label class="form-control-label">First name:</label>
                                                                    <input type="text" class="form-control" name="Firstname" id="Firstname" placeholder="Enter Your First name"  v-model="fields.Firstname">
                                                                    <span v-if="errors && errors.Firstname" class="text-danger">{{ errors.Firstname[0]}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div>
                                                                    <label class="form-control-label">Last name:</label>
                                                                    <input type="text" class="form-control" name="Lastname" id="Lastname" placeholder="Enter Your Last Name" v-model="fields.Lastname">
                                                                    <span v-if="errors && errors.Lastname" class="text-danger">{{ errors.Lastname[0]}}</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div>
                                                                    <label class="form-control-label">Email:</label>
                                                                    <input type="text" class="form-control" name="Email" id="Email" placeholder="Enter Your Email" v-model="fields.Email">
                                                                    <span v-if="errors && errors.Email" class="text-danger">{{ errors.Email[0]}}</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- Adding Roles to users -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div>
                                                                    <label class="form-control-label ">Select Role:</label>
                                                                    <select class="form-control" name="Role" id="Role" v-model="fields.Role">
                                                                        <option value="Admin">Admin</option>
                                                                        <option value="Normal User">User</option>
                                                                    </select>
                                                                    <span v-if="errors && errors.Role" class="text-danger">{{ errors.Role[0]}}</span>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <br>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2">Gender</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-radio">
                                                                    <div class="radio radiofill radio-primary radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="Member" value="male" data-bv-field="member" v-model="fields.Member">
                                                                            <i class="helper"></i>Male
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio radiofill radio-primary radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="Member" value="female" data-bv-field="member"  v-model="fields.Member">
                                                                            <i class="helper"></i>Female
                                                                        </label>
                                                                    </div>
                                                                    <span v-if="errors && errors.Member" class="text-danger">{{ errors.Member[0]}}</span>
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        
                                             </form>


                                            </div>

                                            <div slot="footer">
                                                <input type="submit" class="btn btn-primary" value="Add User" @click.prevent="submit">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal" @click="cancelBtn">Cancel</button>

                                            </div>
                                        </modal>


                                         <!-- editModal -->
                                         <editmodal>
                                             <div slot="header">
                                                 <h5 class="modal-title">Edit User Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>

                                            <div slot="body-modal">

                                               

                                                <form action="" >

                                                    <span v-if="editsuccess" class="text-success"><h4>{{ editsuccMes}}</h4></span>

                                                     <div class="row">
                                                            <div class="col-sm-12">
                                                                <div>
                                                                    <label class="form-control-label">FirstName</label>
                                                                    <input type="text" class="form-control" name="firstname" id="" v-model= "editresults.fname" >
                                                                    <span v-if="editErrors && editErrors.firstname" class="text-danger">{{ editErrors.firstname[0]}}</span>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div>
                                                                    <label for="" class="form-control-label">Last name:</label>
                                                                    <input type="text" class="form-control" name="lastname" id="" v-model= "editresults.lname" >
                                                                    <span v-if="editErrors && editErrors.lastname" class="text-danger">{{ editErrors.lastname[0]}}</span>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div>
                                                                    <label for="" class="form-control-label">Email</label>
                                                                    <input type="text" class="form-control" name="email" id="" v-model="editresults.email" >
                                                                    <span v-if="editErrors && editErrors.email" class="text-danger">{{ editErrors.email[0]}}</span>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <!-- Adding Roles to users -->
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div>
                                                                    <label class="form-control-label ">Select Role:</label>
                                                                    <select class="form-control" name="role" id="Role" v-model="editdata.role" >
                                                                        <option value="Admin">Admin</option>
                                                                        <option value="Normal User">User</option>
                                                                    </select>
                                                                    <span v-if="editErrors && editErrors.role" class="text-danger">{{ editErrors.role[0]}}</span>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div slot="footer">
                                                            <input type="submit" class="btn btn-primary" value="Update" @click.prevent="update(editresults.id)">
                                                            <button type="button" class="btn btn-warning" data-dismiss="modal" @click="cancelBtn">Cancel</button>

                                                        </div>



                                                </form>
                                            </div>

                                         </editmodal>
                                         
                                         


                                    </div>

                            </div>

                            <div>

                            </div>
                </div>

            </div>
            
        </div>

    </div>
</template>

<script>
    import modal from './modal.vue';
    import editmodal from './editModal.vue'
    export default {
        name: 'app',
        components: {
            modal,
            editmodal,
        },
       data() {
           return {
               results:[],
               fields: {},
               errors: {},
               success: false,
               loaded: true,
               successMess: "",
               result_id: "",
               editresults: {},
               editdata: {
                   'firstname': "",
                   'lastname': "",
                   'email': "",
                   'role': "",
               },
               editfields: {},
               editsuccess:false,
               editsuccMes: "",
               editErrors: {},
               editload:true,
               Mess: ""
               

           };
       },

       methods: {
          submit() {
              if (this.loaded) {
                  this.loaded = false;
                  this.success = false;
                  this.errors = {};
              //alert("submited");
                axios.post('/submit', this.fields)
                        .then(response=> {
                           this.fields = {}; //clear input fields
                           this.loaded = true;
                           this.success = true;
                           this.successMess = response.data.message;
                           this.getUsers();
                        }).catch(error => {
                            this.loaded = true;
                            
                            if(error.response.status === 422) {
                                this.errors = error.response.data.errors || {};

                            }
                        });
              }
              
          },

          getUsers() {
              axios.get('/getusers')
                    .then(response => this.results = response.data);
          },

          edit(id) {
              axios.get(`/edit/${id}`)
                    .then(response => this.editresults = response.data);
                   
           
          },

          update(id) {
                if(this.editload){
                    this.editload = false;
                    this.editsuccess = false;
                    this.editErrors = {};
                    this.editdata.firstname = this.editresults.fname;
                    this.editdata.lastname = this.editresults.lname;
                    this.editdata.email = this.editresults.email;
                    axios.post(`/update/${id}`, this.editdata)
                                            .then(response =>{
                                                this.editsuccess = true;
                                                this.editsuccMes = response.data.message;
                                                this.getUsers();
                                            }).catch(error => {
                                                this.editload = true;
                                                
                                                if(error.response.status === 422) {
                                                    this.editErrors = error.response.data.errors || {};

                                                }
                                            });
                }
               
          },

          delete_user(id) {
              //alert(id);
              axios.get(`/delete/${id}`)
                    .then(response=>{
                        this.Mess = response.data.message;
                        this.getUsers();

                        });
          },

          cancelBtn() {
              this.editsuccess = false;
              this.success = false;
              this.errors = {};
              this.editErrors = {};
          }
           
       },
       mounted() {

           
             axios.get('/getusers')
                 .then(response => this.results = response.data);
        //    Status.all(statuses => this.statuses = statuses);
        //    console.log(statuses);
       },

       
    }
</script>
