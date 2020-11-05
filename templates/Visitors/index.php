<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitor[]|\Cake\Collection\CollectionInterface $visitors
 */
?>
<div class="visitors index content">
    <?= $this->Html->link(__('New Visitor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Visitors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('affiliation') ?></th>
                    <th><?= $this->Paginator->sort('student_number') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($visitors as $visitor): ?>
                <tr>
                    <td><?= h($visitor->id) ?></td>
                    <td><?= h($visitor->name) ?></td>
                    <td><?= h($visitor->affiliation) ?></td>
                    <td><?= h($visitor->student_number) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $visitor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visitor->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitor->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
