<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                <?php echo Form::model($tenant,['url'=>$tenant->getEditPostLink()]); ?>

                <?php echo Form::hidden ('id', null); ?> 
                    <div class="form-group">
                        <label class="form-check-label" form="exampleCheck1"> Firm Name</label>
                        <?php echo Form::text('firm_name', null, ['class' => 'form-control']); ?> 
                    </div> 
                    <div class="form-group">
                        <label class="form-chcek-label" form="examplePassword1">Password</label>
                        <?php echo Form::text('password', null, ['class' => 'form-control']); ?> 
                    </div>


                    <button type="submit" class="btn btn-dark" style="background-color: #000000; color: #fff; margin-top: 10px;">Submit</button>
                <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/slavo/whistleblower/resources/views/tenants/edit.blade.php ENDPATH**/ ?>