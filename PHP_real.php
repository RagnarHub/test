<?php
$root = $this->GetRootActivity();
$quantity = $root->GetVariable('Variable1');
$seria = $root->GetVariable('random_string');
$i = 0;
while ($i < $quantity) {
    $i = $i + 1;
    $entity = new CCrmLead; 
    $fields = array( 
        'TITLE' => 'Лид-терминатор серии '.$seria.', номер '.$i,
        'STATUS_ID' => 'PROCESSED',
        'COMMENTS' => 'Это лид из массового спавна лидов. Скоро они захватят этот портал.',
        'SOURCE_DESCRIPTION' => 'СЛАВА ЛИДАМ!!!',
        'UF_CRM_SORT_FIELD' => '50',
        'UF_CRM_NUNBER' => $i,
        'UF_CRM_SERIA' => $seria,
    ); 
    echo $entity->add($fields);
};

$this -> SetVariable('Variable2', $i);

//девелоп - первый коммит
//коммит на отведенной ветке - бросаем
