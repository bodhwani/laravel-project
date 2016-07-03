<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say?</h3></header>
            <form action="<?php echo e(route('post.create')); ?>" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new_post" rows="5" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
                <input type="hidden"  value="<?php echo e(Session::token()); ?>" name="_token" />
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say....</h3></header>
            <?php foreach($posts as $post): ?>
                <article class="post">
                    <p><?php echo e($post->body); ?></p>
                    <div class="info">
                        Posted by <?php echo e($post->id); ?>

                    </div>
                    <div class="interaction">
                        <a href="#">Like</a>
                        <a href="#">Dislike</a>
                        <?php if(Auth::user() == $post->user): ?>
                            <a href="#">Edit</a>
                            <a href="<?php echo e(route('post.delete' , ['post_id' => $post->id])); ?>">Delete</a>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>

        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>