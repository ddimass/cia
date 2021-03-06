<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => Yii::t('main', 'Investor'), 'icon' => 'file-code-o', 'url' => ['/investors']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => Yii::t('main', 'Administration'),
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => Yii::t('main', 'User managment'), 'icon' => 'file-code-o', 'url' => ['/admin'],],
                            ['label' => Yii::t('language', 'Language'), 'items' => [
                                ['label' => Yii::t('language', 'List of languages'), 'url' => ['/translatemanager/language/list']],
                                ['label' => Yii::t('language', 'Create'), 'url' => ['/translatemanager/language/create']],
                                ['label' => Yii::t('language', 'Scan'), 'url' => ['/translatemanager/language/scan']],
                                ['label' => Yii::t('language', 'Optimize'), 'url' => ['/translatemanager/language/optimizer']],
                                ['label' => Yii::t('language', 'Im-/Export'), 'items' => [
                                    ['label' => Yii::t('language', 'Import'), 'url' => ['/translatemanager/language/import']],
                                    ['label' => Yii::t('language', 'Export'), 'url' => ['/translatemanager/language/export']],
                                ]]]],
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                        ],
                    ],
                ],
            ]



        ) 
        
        
      

        ?>

    </section>

</aside>
