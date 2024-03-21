<?php if($action_array['is_simple_action']==1): ?>
<div class="btn-icon-group" role="group" aria-label="Basic example">

    <?php if(isset($action_array['edit_route'])): ?>
    <a href="<?php echo e($action_array['edit_route']); ?>" class="btn btn-info btn-icon"
       data-toggle="tooltip" data-placement="top" title="EDIT">
        <i class="bx bx-pencil font-size-16 align-middle"></i>
    </a>
    <?php endif; ?>
    <?php if(isset($action_array['delete_id'])): ?>
    <button data-id="<?php echo e($action_array['delete_id']); ?>" class="delete-single btn btn-danger btn-icon"
            data-toggle="tooltip" data-placement="top" title="DELETE">
        <i class="bx bx-trash font-size-16 align-middle"></i>
    </button>
    <?php endif; ?>
</div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\sandip_task\sandip_task\resources\views/admin/render_view/datable_action.blade.php ENDPATH**/ ?>