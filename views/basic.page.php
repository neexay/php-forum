<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php if($part_meta) include $part_meta?>
    </head>
    <body>
        <div class="page-wrapper">
            <?php if($part_header) include $part_header?>
            <?php if($part_sidebar) include $part_sidebar?>

            <div class="sidecont">
                <div class="confoot">
                    <?php if($part_center) include $part_center?>
                    <?php if($part_footer) include $part_footer?>
                </div>
            </div>
        </div>
    </body>
</html>