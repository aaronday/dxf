<!DOCTYPE HTML>
<html lang="en">
<head>

</head>
<body style="background-color:  white; background-image:  none;">
<div class="container">
     <?php if ($page['user_login']): ?>
                <div id="pr_login" class="pr_login"><?php print render($page['user_login']); ?></div>
            <?php endif; ?>
</div>
</body> 
</html>
