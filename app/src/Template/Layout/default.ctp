<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><?= __('Framgia Football News') ?></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('News') ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <?php if ($this->request->session()->read('Auth.User.role') == 'user') : ?>
                    <li><a href="#"><?= $this->Html->link(
                                    __('List News'),
                                    ['controller' => 'News', 'action' => 'index', '_full' => true]
                                    ); ?>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($this->request->session()->read('Auth.User.role') == 'admin') : ?>
                    <li><?= $this->Html->link(
                                    __('List News'),
                                    ['controller' => 'Admin/News', 'action' => 'index', '_full' => true]
                                    ); ?>
                        </a>
                    </li>
                    <li><?= $this->Html->link(
                                    __('Add News'),
                                    ['controller' => 'Admin/News', 'action' => 'add', '_full' => true]
                                    ); ?>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Teams') ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <?php if ($this->request->session()->read('Auth.User.role') == 'user') : ?>
                    <li><a href="#"><?= $this->Html->link(
                                    __('List Teams'),
                                    ['controller' => 'Teams', 'action' => 'index', '_full' => true]
                                    ); ?>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if ($this->request->session()->read('Auth.User.role') == 'admin') : ?>
                    <li><?= $this->Html->link(
                                    __('List Teams'),
                                    ['controller' => 'Admin/Teams', 'action' => 'index', '_full' => true]
                                    ); ?>
                        </a>
                    </li>
                    <li><?= $this->Html->link(
                                    __('Add Team'),
                                    ['controller' => 'Admin/Teams', 'action' => 'add', '_full' => true]
                                    ); ?>
                        </a>
                    </li>
                <?php endif; ?>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Players') ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><?= $this->Html->link(
                                    __('List Players'),
                                    ['controller' => 'Players', 'action' => 'index', '_full' => true]
                                    ); ?>
                        </a>
                    </li>
                    <?php if ($this->request->session()->read('Auth.User.role') == 'admin') : ?>
                        <li><a href="#"><?= $this->Html->link(
                                        __('Add Players'),
                                        ['controller' => 'Admin/Players', 'action' => 'add', '_full' => true]
                                        ); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= __('Users') ?>
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <?php if ($this->request->session()->read('Auth.User.role') == 'admin') : ?>
                    <li><?= $this->Html->link(
                                    __('List Users'),
                                    ['controller' => 'Users', 'action' => 'index', '_full' => true]
                                    ); ?>
                        </a>
                    </li>
                    <li><?= $this->Html->link(
                                    __('Add Users'),
                                    ['controller' => 'Users', 'action' => 'add', '_full' => true]
                                    ); ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if ($this->request->session()->read('Auth.User.role') == 'user') : ?>
                        <li><?= $this->Html->link(
                                        __('View Profle'),
                                        ['controller' => 'Users', 'action' => 'view', $this->request->session()->read('Auth.User.id'), '_full' => true]
                                        ); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php if (!($this->request->session()->read('Auth.User'))) : ?>
                <li></span><?= $this->Html->link(
                            __('Register'),
                            ['controller' => 'Users', 'action' => 'add', '_full' => true]
                            ); ?>
                </li>
                <li></span><?= $this->Html->link(
                            __('Sign In'),
                            ['controller' => 'Users', 'action' => 'login', '_full' => true]
                            ); ?>
                </li>
            <?php endif; ?>
            <?php if ($this->request->session()->read('Auth.User')) : ?>
                <li></span><?= $this->Html->link(
                    __('Logout'),
                    ['controller' => 'Users', 'action' => 'logout', '_full' => true]
                    ); ?>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>