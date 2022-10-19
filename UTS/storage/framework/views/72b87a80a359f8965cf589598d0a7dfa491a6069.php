<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
         .button-flat-outline {
    border: 1px solid #801515;        /* border: tebal[px] tipe[solid,dashed,dotted] warna[#hex, rgb()]; */
    background: transparent;          /* set warna background menjadi transparan */
    color: #801515;                   /* ubah warna font */
    font-size: 16px;                  /* ubah ukuran font */
    padding: 0.5em 1em 0.5em 1em;     /* padding: top right bottom left; */
    }
    .button-flat-outline:hover {
        opacity: 0.8;                     /* ubah tingkat transparansi saat cursor menuju button. 0.0 s.d 1.0 */
    }
    .button-flat-outline:active {
        background: #550000;              /* ubah background saat button ditekan */
        color: #FFFFFF;                   /* set warna font menjadi putih */       
    }
      </style>
</head>
<body>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
        <button class="button-flat-outline"><a href="<?php echo e(url('/siswa')); ?>">siswa</a></button>
        <button class="button-flat-outline"><a href="<?php echo e(url('/buku')); ?>">buku</a></button>
        <button class="button-flat-outline"><a href="<?php echo e(url('/peminjaman')); ?>">peminjaman</a></button>
     <?php $__env->endSlot(); ?>


    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
 
</body>
</html>


<?php /**PATH C:\xampp\htdocs\UTS\resources\views/dashboard.blade.php ENDPATH**/ ?>