

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<head>
    <style>
        body {
            background-color: #34BCF2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            border-radius: 15px;
            overflow: hidden;
            max-width: 600px;
            background-color: white;
            padding: 40px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #343a40;
            margin-bottom: 2rem;
            text-align: center;
            font-weight: bold;
            font-size: 1.75rem;
        }

        label {
            font-size: 0.9rem;
            font-weight: bold;
            color: #495057;
        }

        .form-check-input {
            margin-right: 10px;
        }

        .btn-primary {
            color: black;
            background-color: #50c878;
            border-color: #50c878;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }

        .alert {
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Your Profile</h2>
    
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('profile.update')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name">Full Name:</label>
            <input type="text" id="name" class="form-control" value="<?php echo e($user->name); ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control" value="<?php echo e($user->email); ?>" disabled>
        </div>

        <div class="mb-3">
            <label for="role">Select Role(s):</label>
            <div class="form-check">
                <input type="checkbox" name="role[]" value="Donator" id="role-donator" 
                    class="form-check-input" <?php echo e(str_contains($user->role, 'Donator') ? 'checked' : ''); ?>>
                <label for="role-donator" class="form-check-label">Donator</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="role[]" value="Volunteer" id="role-volunteer" 
                    class="form-check-input" <?php echo e(str_contains($user->role, 'Volunteer') ? 'checked' : ''); ?>>
                <label for="role-volunteer" class="form-check-label">Volunteer</label>
            </div>
        </div>

        <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <button type="submit" class="btn btn-primary w-100">Update Profile</button>
    </form>
</div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Downloads\Webprog\WebProg\WebProg\resources\views/profile.blade.php ENDPATH**/ ?>