<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/src/style.css">
<script src="/src/jquery.js"></script>
<link rel="stylesheet" href="/src/jquery-ui.css">
<script src="/src/jquery-1.js"></script>
<script src="/src/ui.js"></script>
<link rel="stylesheet" href="/src/fontawesome/css/all.css">
<script src="/src/main.js"></script>
<title><?php echo $title; ?></title>
</head>
<body>
<?php if(count($errors) != 0 || count($success) != 0): ?>
    <div class="alarms">
        <?php if(count($success) != 0): ?>
            <?php foreach($success as $suc): ?>
                <div class="alarm-success alarm">
                    <div class="alarm-text">
                        <?php echo $suc; ?>
                        
                    </div>
                    <div class="closing-alarm">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if(count($errors) != 0): ?>
        <?php foreach($errors as $err): ?>
        <div class="alarm-error alarm">
            <div class="alarm-text">
                <?php echo $err; ?>
            </div>
            <div class="closing-alarm">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php if(isset($_SESSION['success'])): ?>
    <div class="alarms">
        <div class="alarm-success alarm">
            <div class="alarm-text">
                <?php echo $_SESSION['success']; ?>
            </div>
            <div class="closing-alarm">
                <i class="fas fa-times"></i>
            </div>
        </div>
    </div>
    <?php $_SESSION['success'] = null;?>
<?php endif; ?>
    


