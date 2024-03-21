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

    <?php if(isset($action_array['current_status'])): ?>
    <?php if($action_array['current_status']=='active'): ?>
    <button data-id="<?php echo e($action_array['hidden_id']); ?>" data-change-status="inactive"
            class="status-change btn btn-warning btn-icon" data-effect="effect-fall"
            data-toggle="tooltip" data-placement="top" title="InActive">
        <i class="bx bx-refresh font-size-16 align-middle"></i>
    </button>
    <?php else: ?>
    <button data-id="<?php echo e($action_array['hidden_id']); ?>" data-change-status="active"
            class="status-change btn btn-success btn-icon" data-effect="effect-fall"
            data-toggle="tooltip" data-placement="top" title="Active">
        <i class="bx bx-refresh font-size-16 align-middle"></i>
    </button>
    <?php endif; ?>
    <?php endif; ?>
    <?php if(isset($action_array['view_url'])): ?>
    <a href="<?php echo e($action_array['view_url']); ?>" class="btn btn-dark btn-icon"
       data-toggle="tooltip" data-placement="top" title="VIEW">
        <i class="bx bx-bullseye font-size-16 align-middle"></i>
    </a>
    <?php endif; ?>
</div>
<?php endif; ?>
<?php /**PATH D:\xampp-2\htdocs\new-print-app\printing\resources\views/admin/render_view/datable_action.blade.php ENDPATH**/ ?>