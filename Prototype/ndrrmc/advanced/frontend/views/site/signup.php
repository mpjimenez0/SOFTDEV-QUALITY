<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Region;
use frontend\models\Barangay;
use frontend\models\CityMunicipal;
use kartik\date\DatePicker;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>


            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>  

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'first_name') ?>

            <?= $form->field($model, 'middle_name') ?>

            <?= $form->field($model, 'last_name') ?>

            <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'birthdate')->widget(DatePicker::classname(),
                                    [
                                        'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                        ]
                                    ]

            ); ?>

            <?= $form->field($model, 'type')->dropDownList(
                                    [
                                        'National Admin' => 'National Admin',
                                        'Regional Admin' => 'Regional Admin',
                                        'Provincial Admin' => 'Provincial Admin',
                                        'Municipal Admin' => 'Municipal Admin',
                                        'External User' => 'External User',
                                    ],
                                    ['prompt' => 'Select User Type']

            ) ?>

            <?= $form->field($model, 'external_type')->dropDownList(
                                    [

                                        'Camp Coordination and Camp Management' => 'Camp Coordination and Management',
                                        'Education' => 'Education',
                                        'Emergency' => 'Emergency Telecom',
                                        'Food and Non-Food Items' => 'Food and Non-Food',
                                        'International Humanitarian Relations' => 'International Humanitarian Relations',
                                        'Law and Order' => 'Law and Order',
                                        'Logistics' => 'Logistics',
                                        'Management of the Dead and Missing' => 'Management of the Dead and Missing',
                                        'Protection' => 'Protection',
                                        'Pyscho Spiritual Integration' => 'Pyscho Spiritual Integration',
                                        'Search, Rescue, and Retrieval' => 'Search, Rescue, and Retrieval',
                                        'Water, Sanitation, Health (WaSH)' => 'Water, Sanitation, Health (WaSH)'
                                    ],
                                    ['prompt' => 'Select External Type']


            ) ?>

            <?= $form->field($model, 'status')->dropDownList(
                                    [
                                        'Active' => 'Active',
                                        'Inactive' => 'Inactive'
                                    ],
                                    ['prompt' => 'Select Status']

            ) ?>


            <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(Region::find()->all(), 'id', 'Region_Name'),
                                    [
                                        'prompt' => 'Select Region',
                                        'style' => 'width:250px',
                                        'onChange' => '
                                        $.post("index.php?r=city-municipal/lists&id='.'"+$(this).val(), function( data) {
                                        $( "select#signupform-city_municipal_id" ).html( data );

                                        });'
                                    ]

            ) ?>

            <?= $form->field($model, 'city_municipal_id')->dropDownList(ArrayHelper::map(CityMunicipal::find()->all(), 'id', 'CityMunicipal'),
                                    [
                                        'prompt' => 'Select City/Municipal',
                                        'style' => 'width:250px', 
                                        'onChange' => '
                                            $.post("index.php?r=barangay/lists&id='.'"+$(this).val(), function( data) {
                                            $( "select#signupform-barangay_id" ).html( data );

                                            });'

                                    ]

            ) ?>


            <?= $form->field($model, 'barangay_id')->dropDownList(ArrayHelper::map(Barangay::find()->all(), 'id', 'Barangay_Name'),
                                    [
                                        'prompt' => 'Select Barangay',
                                        'style' => 'width:250px',
                                    ]


                ) ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
