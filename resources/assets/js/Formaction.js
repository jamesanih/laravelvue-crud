export default {
   
   data() {
       return {
           
           fields: {},
           errors: {},
           success: false,
           loaded: true,
           action: '',
       };
   },

   methods: {
      submit() {
          if (this.loaded) {
              this.loaded = false;
              this.success = false;
              this.errors = {};
          //alert("submited");
            axios.post(this.action, this.fields)
                    .then(response=> {
                       this.fields = {}; //clear input fields.
                       this.loaded = true;
                       this.success = true;
                    }).catch(error => {
                        this.loaded = true;
                        if(error.response.status === 422) {
                            this.errors = error.response.data.errors || {};

                        }
                    });
          }
          
      }
       
   },
   

   
}