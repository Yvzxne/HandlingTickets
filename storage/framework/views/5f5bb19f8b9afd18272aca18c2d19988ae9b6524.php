
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('cruds.comment.title')); ?>

    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.comment.fields.id')); ?>

                        </th>
                        <td>
                            <?php echo e($comment->id); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.comment.fields.ticket')); ?>

                        </th>
                        <td>
                            <?php echo e($comment->ticket->title ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.comment.fields.author_name')); ?>

                        </th>
                        <td>
                            <?php echo e($comment->author_name); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.comment.fields.author_email')); ?>

                        </th>
                        <td>
                            <?php echo e($comment->author_email); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.comment.fields.user')); ?>

                        </th>
                        <td>
                            <?php echo e($comment->user->name ?? ''); ?>

                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.comment.fields.comment_text')); ?>

                        </th>
                        <td>
                            <?php echo $comment->comment_text; ?>

                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="<?php echo e(url()->previous()); ?>">
                <?php echo e(trans('global.back_to_list')); ?>

            </a>
        </div>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Laravel-Support-Ticketing\resources\views/admin/comments/show.blade.php ENDPATH**/ ?>