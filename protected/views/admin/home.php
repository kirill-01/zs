<?php
/* @var $this SiteController */
/* @var $oActionForm ActionForm */
/* @var $oForm CActiveForm  */
?>
<h1>Панель управления</h1>
<!-- Nav tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#newAction" data-toggle="tab">Добавление акции</a></li>
	<li><a href="#currentAction" data-toggle="tab">Активные акции</a></li>
	<li><a href="#pastAction" data-toggle="tab">Прошедшие акции</a></li>
	<li><a href="#companyes" data-toggle="tab">Компании</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content container">
	<div class="tab-pane active" id="newAction">
		<?php $oForm = $this->beginWidget('CActiveForm', array(
				'id'=>'newActionForm',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>
		<table class="table" style="width:70%">
			<tr>
				<td><?= $oForm->labelEx($oActionForm, 'is_active')?></td>
				<td>
					<?= $oForm->checkBox($oActionForm, 'is_active', array('class'=>'form-control'))?>
					<?= $oForm->error($oActionForm, 'is_active')?>
				</td>
			</tr>
			<tr>
				<td><?= $oForm->labelEx($oActionForm, 'title')?></td>
				<td>
					<?= $oForm->textField($oActionForm, 'title', array('class'=>'form-control'))?>
					<?= $oForm->error($oActionForm, 'title')?>
				</td>
			</tr>
			<tr>
				<td><?= $oForm->labelEx($oActionForm, 'description')?></td>
				<td>
					<?= $oForm->textArea($oActionForm, 'description', array('class'=>'form-control'))?>
					<?= $oForm->error($oActionForm, 'description')?>
				</td>
			</tr>
			<tr>
				<td><?= $oForm->labelEx($oActionForm, 'category')?></td>
				<td>
					<?= $oForm->dropDownList($oActionForm, 'category', $aCategoryesList, array('class'=>'form-control'))?>
					<?= $oForm->error($oActionForm, 'category')?>
				</td>
			</tr>
			<tr>
				<td><?= $oForm->labelEx($oActionForm, 'date_start')?></td>
				<td>
					<?= $oForm->textField($oActionForm, 'date_start', array('class'=>'form-control datepicker'))?>
					<?= $oForm->error($oActionForm, 'date_start')?>
				</td>
			</tr>
			<tr>
				<td><?= $oForm->labelEx($oActionForm, 'date_end')?></td>
				<td>
					<?= $oForm->textField($oActionForm, 'date_end', array('class'=>'form-control datepicker'))?>
					<?= $oForm->error($oActionForm, 'date_end')?>
				</td>
			</tr>
			<tr>
				<td><?= $oForm->labelEx($oActionForm, 'date_exp')?></td>
				<td>
					<?= $oForm->textField($oActionForm, 'date_exp', array('class'=>'form-control datepicker'))?>
					<?= $oForm->error($oActionForm, 'date_exp')?>
				</td>
			</tr>


		</table>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Добавить', array('class'=>'btn btn-success')); ?>
		</div>

		<?php $this->endWidget(); ?>
	</div>
	<div class="tab-pane" id="currentAction">
		<?php
		$this->renderPartial('/admin/currentActions', compact('aCurrentActions'));
		?>
	</div>
	<div class="tab-pane" id="pastAction">
		<?php
		$this->renderPartial('/admin/currentActions', compact('aPastActions'));
		?>
	</div>
	<div class="tab-pane" id="companyes">
		<?php
		$this->renderPartial('/admin/companyes', compact('aCompanyes', 'oCompanyForm'));
		?>
	</div>
</div>
<script>
	$(function() {
		$( ".datepicker" ).datepicker();
	});
</script>