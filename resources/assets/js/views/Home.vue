<template>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                        <div class="page-header">
                                <div class="page-header-title">
                                    <h4>Dashboard</h4>
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
                                <div class="row">
                                    <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card client-blocks dark-primary-border">
                                                    <router-link to="/jobs" exact>
                                                         <a>
                                                            <div class="card-block">
                                                                <h5>Total Jobs</h5>
                                                                
                                                                <ul>
                                                                
                                                                    <li>
                                                                        <i class="icofont icofont-document-folder"></i>
                                                                    </li>
                                                                    <li class="text-right">0</li>
                                                                </ul>
                                                            </div>   
                                                         </a>
                                                    </router-link>
                                                    
                                                   
                                                </div>
                                            </div>
                                            <!-- card1 end -->

                                            <!-- card2 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card client-blocks dark-primary-border">
                                                    <router-link to="/users">
                                                        <a>
                                                            <div class="card-block">
                                                                <h5>Total Users</h5>
                                                                <ul>
                                                                    <li>
                                                                        <i class="icofont icofont-student-alt"></i>
                                                                    </li>
                                                                    <li class="text-right"></li>
                                                                </ul>

                                                            </div>
                                                        </a>

                                                    </router-link>
                                                    

                                                </div>

                                            </div>
                                            <!-- card2 end -->



                                            

                                </div>

                            </div>
                </div>

            </div>
            
        </div>

    </div>
</template>

<script>
    export default {
        
        data(){
            return {
                count: 1
            }
        },
        mounted() {
           // this.count = 1;
            
        }
    }
</script>
