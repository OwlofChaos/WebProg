<?php $__env->startSection('title', 'Impact'); ?>

<?php $__env->startSection('content'); ?>

<div class="impact-page" style="background-color: #34BCF2; padding: 3em; color: white; text-align: center; font-family: Arial, sans-serif;">
    
    <div class="impact-header">
        <h2>Our Impact</h2>
        <div style="display: flex; justify-content: center; gap: 2em; margin-top: 1em;">
            <div>
                <img src="/images/image_4.jpg" alt="Before" style="width: 443px; Height:314px; border-radius: 10px; object-fit: cover;">
                <p>Before</p>
            </div>
            <div>
                <img src="/images/image_5.jpg" alt="After" style="width: 443px; Height:314px; border-radius: 10px; object-fit: cover;">
                <p>After</p>
            </div>
        </div>
    </div>

    
    <div class="cleanup-projects" style="margin-top: 3em;">
        <h3>Cleanup Projects</h3>
        <div style="display: flex; justify-content: center; gap: 2em; flex-wrap: wrap; margin-top: 1em;">
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="background-color: white; color: black; padding: 1em; border-radius: 10px; width: 45%;">
                <img src="<?php echo e(asset('storage/' . $project->image_path)); ?>" alt="<?php echo e($project->name_event); ?>" style="width: 100%; height: auto; border-radius: 10px; object-fit: cover;">
                <p style="margin-top: 20px"><strong>Name Event:</strong> <?php echo e($project->name_event); ?></p>
                <p><strong>Location:</strong> <?php echo e($project->location); ?></p>
                <p><strong>Date:</strong> <?php echo e(\Carbon\Carbon::parse($project->date)->format('d M Y')); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    
    <form action="<?php echo e(route('cleanup_projects.store')); ?>" method="POST" enctype="multipart/form-data" style="margin-top: 3em; background-color: white; padding: 2em; border-radius: 10px;">
        <?php echo csrf_field(); ?>
        <h3>Add New Project</h3>
        <div>
            <label for="name_event">Event Name:</label>
            <input type="text" id="name_event" name="name_event" required>
        </div>
        <div>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
        </div>
        <div>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div>
            <label for="image_path">Image:</label>
            <input type="file" id="image_path" name="image_path" accept="image/*" required>
        </div>
        <button type="submit" style="margin-top: 1em;">Add Project</button>
    </form>    
    
    <div class="impact-statistics" style="margin-top: 3em;">
        <h3>Impact Statistics (Overall Projects)</h3>
        <div style="display: flex; justify-content: center; gap: 3em; margin-top: 1em;">
            <div>
                <h1>200</h1>
                <p>Tons of waste removed</p>
            </div>
            <div>
                <h1>500</h1>
                <p>Volunteers</p>
            </div>
            <div>
                <h1>56</h1>
                <p>Hours volunteered</p>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Inazu\Downloads\New folder\WebProg\resources\views/impact.blade.php ENDPATH**/ ?>