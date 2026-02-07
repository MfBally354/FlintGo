<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FlintGo - Super App untuk semua kebutuhan Anda">
    <meta name="author" content="FlintGo">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>FlintGo - Super App</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/icons/favicon.png">
    
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <?php if(isset($pageCSS)): ?>
        <link rel="stylesheet" href="assets/css/<?php echo $pageCSS; ?>">
    <?php endif; ?>
    
    <style>
        :root {
            --primary-color: #10B981;
            --secondary-color: #059669;
            --background-color: #F8FAFC;
            --text-color: #0F172A;
        }
    </style>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : ''; ?>">