<div>
    <h3>Index Page</h3>
    <p><?= $message ?></p>
    <?=$this->Form->create(null,[
        'type' => 'post',
        'url' => ['controller' => 'Helo', 'action' => 'index']]
    ) ?>
    <?=$this->Form->text('text1') ?>
    <?=$this->Form->submit('OK') ?>
    <?=$this->Form->end() ?>
    </form>
</div>