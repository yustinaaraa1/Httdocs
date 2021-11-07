<!DOCTYPE html>
<html>

<head>
    <?php echo $head ?>
</head>

<body >
    <div id="wrapper">
        <?php echo $sidebar; ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php echo $navbar; ?>

            <?php echo $content; ?>
            
            <?php echo $footer; ?>
        </div>
    </div>

    <?php echo $js; ?>
</body>
</html>
