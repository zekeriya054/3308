<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                      //  ['label' => 'Öğrenci İşleri', 'options' => ['class' => 'header']],
                        ['label' => 'Genel Bilgiler', 'icon' => 'fa fa-cog',
                            'url' => ['/'], 'active' => $this->context->route == 'site/index',
                            'items' => [
                                [
                                    'label' => 'Kurum Bilgileri',
                                    'icon' => 'fa fa-university',
                                    'url' => '?r=master1/',
                                    'active' => $this->context->route == 'master1/index'
                                ],
                                [
                                    'label' => 'Sigorta Bigileri',
                                    'icon' => 'fa fa-users',
                                    'url' => '?r=master2/',
                                    'active' => $this->context->route == 'master2/index',

                                ],
                                [
                                    'label' => 'Alanlar',
                                    'icon' => 'fa fa-users',
                                    'url' => '?r=alanlar/',
                                    'active' => $this->context->route == 'alanlar/index',

                                ],
                                [
                                    'label' => 'Dallar',
                                    'icon' => 'fa fa-users',
                                    'url' => '?r=dallar/',
                                    'active' => $this->context->route == 'dallar/index',

                                ],
                                [
                                    'label' => 'Sınıflar',
                                    'icon' => 'fa fa-users',
                                    'url' => '?r=siniflar/',
                                    'active' => $this->context->route == 'siniflar/index',

                                ],

                            ]
                        ],
                        ['label'=>'Öğrenci İşlemleri','icon'=>'fa fa-cog','url'=>['/'],'active'=>$this->context->route=='site/index',
                          'items'=>[
                            [
                              'label'=>'Öğrenci Kayıt',
                              'icon'=>'fa fa-universty',
                              'url'=>'?r=master2/',
                              'active'=>$this->context->route=='master2/index',
                            ],
                            [
                              'label'=>'E-Okuldan öğrenci Aktarma',
                              'icon'=>'fa fa-universty',
                              'url'=>'?r=master2/',
                              'active'=>$this->context->route=='master2/index',
                            ]
                          ]
                        ]

                      //  ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],

                    ],
                ]
        )
        ?>

    </section>
    <!-- /.sidebar -->
</aside>
