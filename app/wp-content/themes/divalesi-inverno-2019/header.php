<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo the_title()?></title>
    <link rel="stylesheet" href="<?= THEME_ASSETS_URI . 'css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= assetsVersion(THEME_ASSETS_DIR."css/main.min.css") ?>">
</head>
<body <?php body_class()?>>
    <header>
        <div class="container">
            <div id="mobile-nav" class="d-none">
                <?php divalesi_header_menu(); ?>
            </div>

            <div id="dark-mask"></div>

            <div id="top" class="d-none d-sm-block clearfix">
                <div class="float-left">
                    <i class="fa fa-phone-square" style="color:white;"> </i> 
                    TELEFONE: <span style="margin-left:0px; border-bottom: 1px solid rgba(125,125,125,0.3);">(51) 3546-6777</span>
                    <i class="fa fa-whatsapp" style="color:white; margin-left:10px;"> </i> 
                    WHATSAPP: <span style="margin-left:0px; border-bottom: 1px solid rgba(125,125,125,0.3);">(51) 99161-3239 <span style="font-size:9px">(seg. a sex. 7h - 11:30 e 13h - 17h)</span></span>
                </div>
                <div class="float-right">
                    <ul>
                        <li><?php myAccountLink(); ?></li>
                        <li><a href="<?= wc_get_cart_url() ?>">Carrinho</a></li>
                        <li><a href="<?= site_url() . '/atendimento' ?>">Atendimento</a></li>
                    </ul>  
                </div>
            </div>

            <div id="main-header" class="clearfix">
                <div class="logo float-left">
                    <img class="img-responsive" src="<?= THEME_ASSETS_URI . 'images/logo-divalesi.png' ?>" alt="Divalesi Inverno 2019">
                </div>

                <div class="d-none d-sm-block">
                    <?php divalesi_header_menu(); ?>
                </div>

                <div id="mobile-nav-icon" class="d-sm-none d-md-none d-lg-none float-right">
                    <div class="float-left">
                        <i class="fas fa-shopping-cart"></i>
                        <div><?= WC()->cart->get_cart_contents_count() ?></div>
                    </div>
                    <span></span>
                </div>
            </div>
        </div>
    </header>