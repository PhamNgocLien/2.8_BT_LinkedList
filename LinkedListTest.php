<?php

include_once 'Node.php';
include_once 'LinkedList.php';

$list = new LinkedList();
$list->addFirst('mama');
$list->addLast('Min');
$list->addFirst('papa');
$list->addLast('Max');
$list->add('and',2);
$list->removeFirst();
$list->removeLast();
$list->remove(1);

echo '<pre>';
print_r($list->getLinkedList());