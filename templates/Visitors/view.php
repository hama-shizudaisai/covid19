<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitor $visitor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Visitor'), ['action' => 'edit', $visitor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Visitor'), ['action' => 'delete', $visitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Visitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Visitor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visitors view content">
            <h3><?= h($visitor->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($visitor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($visitor->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Affiliation') ?></th>
                    <td><?= h($visitor->affiliation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Student Number') ?></th>
                    <td><?= h($visitor->student_number) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
