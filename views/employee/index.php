<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php 
		if (!Yii::$app->user->isGuest)
			echo Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']);
		?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],            
            'first_name',
            'last_name',
            'email:email',
            'phone',
            // 'salary',

            [
				'class' => 'yii\grid\ActionColumn',
				'template' => '{view}{update}{delete}',
				'buttons' => [
                    'update' => function ($url = null, $model) {
                    return (Yii::$app->user->isGuest) ? '' : Html::a('<span class="glyphicon glyphicon-pencil"></span> ', $url = '../employee/update/?id=' . $model->id_employee, [
                                    'title' => Yii::t('yii', 'Jual'),
                        ]);
                    },
					'delete' => function ($url = null, $model) {
                    return (Yii::$app->user->isGuest) ? '' : Html::a('<span class="glyphicon glyphicon-trash"></span> ', $url = '../employee/delete/?id=' . $model->id_employee, [
                                    'title' => Yii::t('yii', 'Jual'),
                        ]);
                    },
                        ],
			],
        ],
    ]); ?>

</div>
