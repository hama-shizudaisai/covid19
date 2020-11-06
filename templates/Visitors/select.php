<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">1.来場者タイプ ／ Visitor type</h5>
                <div class="card-body">
                    <p class="card-text">あなたにあてはまるものを選択してください。</p>
                    <p>What are you?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <?= $this->Html->link('私は 静大生 です。I am a STUDENT of Shizuoka Univ.', ['action' => 'regist', 'student'], ['class' => 'btn btn-success btn-block mt-3']) ?>
            <?= $this->Html->link('私は 静大の教職員 です。I am a WORKER of Shizuoka Univ.', ['action' => 'regist', 'teacher'], ['class' => 'btn btn-success btn-block mt-3']) ?>
            <?= $this->Html->link('私は 上記以外 です。I do not classified into any selections
                above.', ['action' => 'regist', 'others'], ['class' => 'btn btn-success btn-block mt-3']) ?>
        </div>
    </div>
</div>