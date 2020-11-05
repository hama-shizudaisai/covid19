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
            <?= $this->Html->link(__('List Visitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="visitors form content">
            <?= $this->Form->create($visitor) ?>
            <fieldset>
                <legend><?= __('Add Visitor') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('affiliation');
                    echo $this->Form->control('student_number');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
