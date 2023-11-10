<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">Tenants - <?php echo e($tenant->id); ?></span>
        <a href=http://127.0.0.1:8000/tenants/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Detail Tenanta
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            ID
                        </div>
                        <div class="col-6">
                            <?php echo e($tenant->id); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Name
                        </div>
                        <div class="col-6">
                            <?php echo e($tenant->firm_name); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Password
                        </div>
                        <div class="col-6">
                            <?php echo e($tenant->password); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6"> 
                            <?php echo Form::model($tenant, ['url' => $tenant->getDeletePostLink()]); ?>

                            <?php echo Form::hidden('id'); ?>

                            <button type="button1" class="btn btn-danger btn-sm">Delete</button>
                            <?php echo Form::close(); ?>

                        </div>
                        <div class="col-6 text-right"> 
                            <a href="<?php echo e($tenant->getEditLink()); ?>" class="btn btn-success btn-sm" role="button" aria-pressed="true" style="width: 48px;">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/slavo/whistleblower/resources/views/tenants/view.blade.php ENDPATH**/ ?>