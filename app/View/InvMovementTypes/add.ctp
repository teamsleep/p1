<div class="span12">
	<div class="widget-box">
	<div class="widget-title">
		<span class="icon">
			<i class="icon-edit"></i>								
		</span>
		<h5>Adicionar Tipo de Movimento</h5>			
	</div>
	<div class="widget-content nopadding">
	<?php echo $this->BootstrapForm->create('InvMovementType', array('class' => 'form-horizontal'));?>
		<fieldset>
			
			<?php
			echo $this->BootstrapForm->input('name', array(
				'style' => 'width: 400px',
				'label'=>'Nombre:',
				'required' => 'required',
				'helpInline' => '<span class="label label-important">' . __('Requerido') . '</span>&nbsp;')
			);
			echo $this->BootstrapForm->input('status', array(
				'label'=>'Status:',
				'required' => 'required',
				'helpInline' => '<span class="label label-important">' . __('Requerido') . '</span>&nbsp;')
			);
			/*
			echo $this->BootstrapForm->input('document', array(
				'label'=>'Tiene Documento:',
				'required' => 'required',
				'helpInline' => '<span class="label label-important">' . __('Obligatorio') . '</span>&nbsp;')
			);
			 */
			?>
			<div class="row-fluid">
				<div class="span2"></div>
				<div class="span6">
				<div class="btn-toolbar">
				<?php echo $this->BootstrapForm->submit('Guardar', array('id'=>'saveButton', 'class' => 'btn btn-primary', 'div' => false));
					   echo $this->Html->link('Cancelar', array('action' => 'index'), array('class'=>'btn') );
				?>
				</div>				
				</div>
				<div class="span4"></div>
			</div>	
		</fieldset>
	<?php echo $this->BootstrapForm->end();?>
	</div>
	</div>
</div>