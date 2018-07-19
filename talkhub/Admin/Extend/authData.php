<?php
return
[
               [
                    'name' => '后台管理',
                    'model' => 'Admin',
                    'action' => '1',
                    'controller' => '2',
                    'route' => '3',
                    'child' =>
                        [
                                [
                                'name' => '用户管理',
                                'model' => 'Admin',
                                'action' => '',
                                'controller' => 'User',
                                'route' => '',
                                'child' =>
                                     [
                                                [
                                                    'name' => '用户列表',
                                                    'model' => 'Admin',
                                                    'action' => 'index',
                                                    'controller' => 'User',
                                                    'route' => 'Admin/User/index'
                                                ],
                                                [
                                                    'name' => '用户编辑',
                                                    'model' => 'Admin',
                                                    'action' => 'update',
                                                    'controller' => 'User',
                                                    'route' => 'Admin/User/update'
                                                ],
                                                [
                                                    'name' => '用户新增',
                                                    'model' => 'Admin',
                                                    'action' => 'store',
                                                    'controller' => 'User',
                                                    'route' => 'Admin/User/store'
                                                ],
                                                [
                                                    'name' => '用户新增',
                                                    'model' => 'Admin',
                                                    'action' => 'store',
                                                    'controller' => 'User',
                                                    'route' => 'Admin/User/store'
                                                ],
                                     ],
                                ],
                                [
                                'name' => 'bankuai新增',
                                'model' => 'Admin',
                                'action' => 'store',
                                'controller' => 'User',
                                'route' => 'Admin/User/store',
                                'child' =>
                                    [
                                        [
                                            'name' => '板块列表',
                                            'model' => 'Admin',
                                            'action' => 'index',
                                            'controller' => 'User',
                                            'route' => 'Admin/User/index',
                                        ],
                                        [
                                            'name' => '板块编辑',
                                            'model' => 'Admin',
                                            'action' => 'update',
                                            'controller' => 'User',
                                            'route' => 'Admin/User/update',
                                        ],
                                        [
                                            'name' => '板块新增',
                                            'model' => 'Admin',
                                            'action' => 'store',
                                            'controller' => 'User',
                                            'route' => 'Admin/User/store',
                                        ],
                                        [
                                            'name' => '板块新增',
                                            'model' => 'Admin',
                                            'action' => 'store',
                                            'controller' => 'User',
                                            'route' => 'Admin/User/store',
                                        ],
                                    ],
                            ],
                        ],

               ],
];