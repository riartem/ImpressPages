<!DOCTYPE html>
<html>
<head>

    <?php echo ipHead(); ?>
    <link rel="stylesheet" href="<?php echo ipThemeUrl('assets/theme.css'); ?>">
    <meta name="robots" content="NOINDEX,NOFOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="ip">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <img src="<?php echo ipThemeUrl('assets/ihub_logo.png'); ?>" alt="ImpressPages">

                    <h3>Завершение установки ImpressPages
                        <small>Версия iHub Basic <?echo \Ip\Application::getVersion();?></small></h3>
                </div>
                <div class="row" style="min-height: 200px;">
                    <div class="col-md-3">
                        <? if(! isset($_GET['start'])):?>
                        <form action="/install/?step=5" method="get">
                            <input type="hidden" name="start" value="1">
                            <button type="submit" class="btn btn-default">Начать работу</button>
                        </form>
                        <? endif; ?>
                    </div>
                    <div class="col-md-9 ipsContent">
                        <? if(isset($_GET['start'])):?>
                            <h3>Система готова к работе</h3>
                            <p>
                                <a href="../"><?php _e('Front page', 'Install'); ?></a>
                            </p>
                            <p>
                                <a href="../admin"><?php _e('Administration page', 'Install'); ?></a>
                            </p>
                        <? endif; ?>
                    </div>
                </div>
                <div class="page-footer">
                    Данное ПО создано для вас командами <?php printf(__('<a target="_blank" href="%s">ImpressPages</a>', 'Install', false), 'http://www.impresspages.org/about-us/'); ?>
                    и iHub.
                </div>
            </div>
        </div>
    </div>
</div>

</body>
