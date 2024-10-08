<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    
</head>
<body>
    <div class="navbar">
        <a href="<?php echo e(route('home')); ?>">Home</a>
        <a href="<?php echo e(route('salones_disponibles', ['zona' => 'Ituzaingo'])); ?>">Salones Disponibles</a>
        <a href="<?php echo e(route('contacto', ['numero' => 0])); ?>">Contacto</a>
    </div>

    <div class="content">
        <h1>Contacto</h1>
        <p>Formas de comunicarse con nosotros:</p>
    </div>
</body>
</html>

<style>
        
        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .content {
            padding: 20px;
        }
    </style>

<?php /**PATH C:\xampp\htdocs\Salon_fiesta\resources\views/contacto.blade.php ENDPATH**/ ?>