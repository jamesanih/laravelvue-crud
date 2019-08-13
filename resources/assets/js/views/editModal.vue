<template>
       <div class="modal fade" id="edit" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <slot name="header"></slot>
               
            </div>
            <div class="modal-body p-b-0">
                <slot name="body-modal"></slot>
            </div>
            <div class="modal-footer">
                <slot name="footer"></slot>
            </div>
        </div>
    </div>
</div>
        
    
</template>

<script>
export default {
    name: 'editmodal',

    methods: {
        close() {
            this.$emit('close');
        },
    },
};
</script>



