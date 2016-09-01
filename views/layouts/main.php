<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'เขตสุขภาพที่ 1',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'encodeLabels' => false,
                
                'items' => [
                    ['label' => '<span class="glyphicon glyphicon-home"></span> Home', 'url' => ['/site/index']],
                    //['label' => 'About', 'url' => ['/site/about']],
                    //['label' => 'Contact', 'url' => ['/site/contact']],
                    ['label' => 'รายงาน', 'url' => ['/site/contact']],
                    
                    ['label' => 'ระบบครุภัณฑ์1', 'url' => ['/site/contact'],
                        'items' => [
                            ['label' => 'GridView Export', 'url' => ['/tools/index1']],
                            ['label' => 'Modal on GridView', 'url' => ['/tools/index2']],
                            ['label' => 'Editable GridView', 'url' => ['/tools/index3']],
                            ['label' => 'Filter ComboBox', 'url' => 'http://www.google.co.th',
                                'linkOptions' => ['target' => '_blank']
                            ],
                        ]
                    ],
                    
                    ['label' => 'ระบบครุภัณฑ์2', 'url' => ['/site/contact'], 'visible' => !Yii::$app->user->isGuest,
                        'items' => [
                            ['label' => 'data1', 'url' => ['/tools/index1']],
                            ['label' => 'data2', 'url' => ['/tools/index2']],
                            ['label' => 'data3', 'url' => ['/tools/index3']],
                            ['label' => 'data4', 'url' => 'http://www.google.co.th',
                                'linkOptions' => ['target' => '_blank']
                            ],
                        ]
                    ],
                    Yii::$app->user->isGuest ?
                            ( ['label' => '<span class="glyphicon glyphicon-user"></span> ลงชื่อใช้งาน', 'url' => ['/user/security/login']] ) :
                            ( ['label' => '(' . Yii::$app->user->identity->username . ')',
                        'items' => [
                            ['label' => '<span class="glyphicon glyphicon-user"></span> ข้อมูลส่วนตัว', 'url' => ['/user/settings/profile']],
                            ['label' => '<span class="glyphicon glyphicon-user"></span> Account', 'url' => ['/user/settings/account']],
                            ['label' => '<span class="glyphicon glyphicon-off"></span> ออกจากระบบ', 'url' => ['/user/security/logout'], 'linkOptions' => ['data-method' => 'post']],
                        ]] ),
                    
                    ['label' => 'ลงทะเบียน', 'url' => ['/user/registration/register'],
                        'visible' => Yii::$app->user->isGuest],
                    
                    
                    
                /* Yii::$app->user->isGuest ? (
                  ['label' => 'Login', 'url' => ['/site/login']]
                  ) : (
                  '<li>'
                  . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                  . Html::submitButton(
                  'Logout (' . Yii::$app->user->identity->username . ')',
                  ['class' => 'btn btn-link']
                  )
                  . Html::endForm()
                  . '</li>'
                  ) */
                ],
            ]);

            NavBar::end();
            ?>

            <div class="container">
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
<?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
