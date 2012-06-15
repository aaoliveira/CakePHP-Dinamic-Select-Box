<?php echo $this->Html->script('views/home/listar_cidades.js'); ?>
<div class="form">
    <?php echo $this->Form->create(null); ?>
    <fieldset>
        <legend><?php echo __('Exemplo de select dinamico'); ?></legend>
        <?php echo $this->Form->input('estado_id', array('type' => 'select', 'options' => $estados, 'id' => 'estados', 'empty' => 'selecione um estado')) ?>
        <?php echo $this->Form->input('cidade_id', array('type' => 'select', 'id' => 'cidades', 'empty' => 'selecione uma cidade')) ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>