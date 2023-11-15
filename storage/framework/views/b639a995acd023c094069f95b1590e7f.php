<?php $__env->startSection('content'); ?>
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">requests - <?php echo e($request->id); ?></span>
        <a href=http://127.0.0.1:8000/requests/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    TOTO JE CHAT INTERFACE (WIP)
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            ID
                        </div>
                        <div class="col-6">
                            <?php echo e($request->id); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Request Name
                        </div>
                        <div class="col-6">
                            <?php echo e($request->request); ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6"> 
                            <?php echo Form::model($request, ['url' => $request->getDeletePostLink()]); ?>

                            <?php echo Form::hidden('id'); ?>

                            <button type="button1" class="btn btn-danger btn-sm">Delete</button>
                            <?php echo Form::close(); ?>

                        </div>
                        <div class="col-6 text-right"> 
                          <a href="<?php echo e($request->getEditLink()); ?>" class="btn btn-success btn-sm" role="button" aria-pressed="true" style="width: 48px;">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
<div class="col-md-6 col-lg-7 col-xl-7">
  <ul class="list-unstyled text-black">
            
    <li class="d-flex justify-content-between mb-4">
       <img src="https://cdn-icons-png.flaticon.com/512/6009/6009978.png" alt="avatar" class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
        <div class="card mask-custom">
          <div class="card-header d-flex justify-content-between p-3" style="border-bottom: 1px solid rgba(255,255,255,.3);">
             <p class="fw-bold mb-0"><?php echo e($client->name); ?></p>
              <p class="text-light small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
           </div>
            <div class="card-body">
                  <p class="mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.
                  </p>
                </div>
              </div>
            </li>

            
            <li class="d-flex justify-content-between mb-4">
              <div class="card mask-custom w-100">
                <div class="card-header d-flex justify-content-between p-3"
                  style="border-bottom: 1px solid rgba(255,255,255,.3);">
                  <p class="fw-bold mb-0">Lara Croft</p>
                  <p class="text-light small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
                </div>
                <div class="card-body">
                  <p class="mb-0">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium.
                  </p>
                </div>
              </div>
              <img src="https://media.istockphoto.com/id/1385080451/cs/vektor/boss-ikona-vektor-%C5%BEena-u%C5%BEivatel-osoba-profil-avatar-symbol-pro-podnik%C3%A1n%C3%AD-v-ploch%C3%A9-barv%C4%9B.jpg?s=612x612&w=0&k=20&c=44IF-4WwTTLEhCNCq0jQB5IqV-C2DRdzFRJwxHkbcBw=" alt="avatar"
                class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
            </li>
            <li class="mb-3">
              <div class="form-outline form-white">
                <textarea class="form-control" id="textAreaExample3" rows="4"></textarea>
                <label class="form-label" for="textAreaExample3">Message</label>
              </div>
            </li>
            <button type="button" class="btn btn-light btn-lg btn-rounded float-end">Send</button>
          </ul>
        </div>
      </div>
  </div>
  </section>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/slavo/whistleblower/resources/views/requests/view.blade.php ENDPATH**/ ?>