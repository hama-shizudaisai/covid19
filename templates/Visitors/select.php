<div class="container-fluid justify-content-center">
    <div class="row">
        <p class="text-center col-12">当てはまる選択肢を選んで下さい</p>
    </div>
    <div class="row">
        <?= $this->Html->link('静大生', ['action'=>'regist','student'], ['class'=>'btn btn-primary btn-lg col-4'])?>
        <?= $this->Html->link('教職員', ['action'=>'regist','teacher'], ['class'=>'btn btn-primary btn-lg col-4'])?>
        <?= $this->Html->link('その他', ['action'=>'regist','others'], ['class'=>'btn btn-primary btn-lg col-4'])?>
    </div>
</div>