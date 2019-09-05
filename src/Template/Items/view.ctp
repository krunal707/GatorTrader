<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $item->has('user') ? $this->Html->link($item->user->id, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category Name') ?></th>
            <td><?= h($item->category_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($item->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($item->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($item->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img1') ?></th>
            <td><?= $this->Number->format($item->img1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img2') ?></th>
            <td><?= $this->Number->format($item->img2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img3') ?></th>
            <td><?= $this->Number->format($item->img3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img4') ?></th>
            <td><?= $this->Number->format($item->img4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sold') ?></th>
            <td><?= $this->Number->format($item->sold) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Posted') ?></th>
            <td><?= h($item->date_posted) ?></td>
        </tr>
    </table>
</div>
