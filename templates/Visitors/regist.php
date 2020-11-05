<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Visitor $visitor
 */
?>
<div class="row">
    <?php if ($type==="student" || $type==="teacher"):?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <?php if ($type==="student"):?>
                    <span class="card-header">2-A.来場者質問票(静大生用) <br>Admission questionnaire for Shizuoka Univ.
                        student.</span>
                    <div class="card-body">
                        <p class="card-text">以下の質問に回答してください。あなたが静大生でない場合は <a href="http://localhost/covid19/">こちら</a>
                            から前のページにお戻りください。</p>
                        <p>Please answer the following questions. If you are not a Student of Shizuoka Univ., you can
                            return back to previous page <a href="http://localhost/covid19/">here</a>.</p>
                    </div>
                    <?php elseif ($type==="teacher"):?>
                    <span class="card-header">2-B.来場者質問票(教職員用) <br>Admission questionnaire for WORKER</span>
                    <div class="card-body">
                        <p class="card-text">以下の質問に回答し、あてはまるものにチェックをつけてください。あなたが教職員でない場合は <a
                                href="http://localhost/covid19/">こちら</a> から前のページにお戻りください。</p>
                        <p>Please answer the following questions. If you are not a worker of Shizuoka Univ., you can
                            return back to previous page <a href="http://localhost/covid19/">here</a>.</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <?= $this->Form->create($visitor); ?>
                <input type="hidden" name="csrf_test_name" value="7c9845e98576bfd512c4f4a4ba7d5773">
                <div class="form-group">
                    <?= $this->Form->control('name', ['label'=>'氏名 Name','class'=>'form-control','placeholder'=>"Your Name"])?>
                    <small id="v_namehelp" class="form-text text-muted">Japanese or English available.</small>
                </div>
                <div class="form-group">
                    <?php if ($type==="student"):?>
                    <?= $this->Form->control('student_number', ['label'=>'学籍番号 Student ID Number','class'=>'form-control','placeholder'=>"Student ID",'required'=>true])?>
                    <?php elseif ($type==="teacher"):?>
                    <?= $this->Form->control('affiliation', ['label'=>'所属部局 Affiliation','class'=>'form-control','placeholder'=>"Student ID",'required'=>true])?>
                    <?php endif;?>
                </div>

                <div class="custom-control custom-checkbox mb-3">
                    <?= $this->Form->control('q1', ['type'=>'checkbox','label'=>'今日私は発熱がありません I do not have a fever today.','class'=>''])?>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <?= $this->Form->control('q2', ['type'=>'checkbox','label'=>'今日私は咳やのどの痛み、味覚障害などの症状はありません I have no
                        symptoms such as coughing, sore throat or taste disorder today.','class'=>''])?>
                    <!-- <input type="checkbox" class="custom-control-input" id="question2">
                    <label class="custom-control-label" for="question2">今日私は咳やのどの痛み、味覚障害などの症状はありません<br>I have no
                        symptoms such as coughing, sore throat or taste disorder today.</label> -->
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <?= $this->Form->control('q3', ['type'=>'checkbox','label'=>'私は新型コロナウィルス感染症患者の濃厚接触者ではありません I did not
                        have close contact with COVID-19 patients.','class'=>''])?>
                    <!-- <input type="checkbox" class="custom-control-input" id="question3">
                    <label class="custom-control-label" for="question3">私は新型コロナウィルス感染症患者の濃厚接触者ではありません<br>I did not
                        have close contact with COVID-19 patients.</label> -->
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <?= $this->Form->control('q4', ['type'=>'checkbox','label'=>'私の家族や知人に新型コロナウィルス感染症に感染している人はいません No one
                        in my family and friends have been infected with COVID-19.','class'=>''])?>
                    <!-- <input type="checkbox" class="custom-control-input" id="question4">
                    <label class="custom-control-label" for="question4">私の家族や知人に新型コロナウィルス感染症に感染している人はいません<br>No one
                        in my family and friends have been infected with COVID-19.</label> -->
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <?= $this->Form->control('q5', ['type'=>'checkbox','label'=>'私は過去14日以内に政府から入国制限や入国後の健康観察期間が設けられている国から帰国していません I have not entered Japan
                        within the last 14 days from a country that has immigration restrictions or post-entry
                        health observation periods required from the Government of Japan.','class'=>''])?>
                    <!-- <input type="checkbox" class="custom-control-input" id="question5">
                    <label class="custom-control-label"
                        for="question5">私は過去14日以内に政府から入国制限や入国後の健康観察期間が設けられている国から帰国していません<br>I have not entered Japan
                        within the last 14 days from a country that has immigration restrictions or post-entry
                        health observation periods required from the Government of Japan.</label> -->
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <?= $this->Form->control('q6', ['type'=>'checkbox','label'=>'私は過去14日以内に政府から入国制限や入国後の健康観察期間が設けられている国から帰国した人と接触していません I did not have
                        close contact with the person who entered Japan within the last 14 days from a country that
                        has immigration restrictions or post-entry health observation periods required from the
                        Government of Japan.','class'=>''])?>
                    <!-- <input type="checkbox" class="custom-control-input" id="question6">
                    <label class="custom-control-label"
                        for="question6">私は過去14日以内に政府から入国制限や入国後の健康観察期間が設けられている国から帰国した人と接触していません<br>I did not have
                        close contact with the person who entered Japan within the last 14 days from a country that
                        has immigration restrictions or post-entry health observation periods required from the
                        Government of Japan.</label> -->
                </div>
                <?= $this->Form->button(__('送信する'), ['class'=>"btn btn-success btn-block mt-3 mb-3"]) ?>

                <?= $this->Form->end(); ?>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <button type="button" onclick="location.href=''"
                            class="btn btn-primary btn-block">前のページに戻る<br>Back to previous Page</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="d-none d-lg-block">
        <nav class="navbar navbar-light bg-light">
            <img src="http://localhost/covid19/common_img/top_logotype.svg" width="20%" alt="">
        </nav>
    </div>
    <div class="d-block d-lg-none">
        <nav class="navbar navbar-light bg-light">
            <img src="http://localhost/covid19/common_img/top_logotype.svg" width="30%" alt="">
        </nav>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">2-C.受付にお越しください<br>Please Visit Staff Office</h5>
                    <div class="card-body">
                        <p class="card-text">ウェブ上での受付はできません。お手数ですが、直接受付にお申し出下さい。</p>
                        <p>You cannot apply for admission on this website. Please visit staff office nearby.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <button type="button" onclick="javascript:window.close();"
                    class="btn btn-success btn-block mt-3">このページを閉じる<br>Close this page.</button>
                <button type="button" onclick="location.href='../select'"
                    class="btn btn-primary btn-block mt-3">はじめのページににもどる<br>Back to Top page.</button>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>