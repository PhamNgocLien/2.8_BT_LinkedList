<?php

include_once 'Node.php';
class LinkedList
{
    private $count;
    private $firstNode;
    private $lastNode;

    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function addFirst($data){
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if ($this->lastNode == null) {
            $this->lastNode = $node;
        }

        $this->count++;
    }

    public function addLast($data){
        if ($this->firstNode != null) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }

    public function add($data,$index){
        $node = new Node($data);
        $current = $this->firstNode;
        $pre = $this->firstNode;

        for ($i = 0; $i < $index; $i++) {
            $pre = $current;
            $current = $current->next;
        }

        $pre->next = $node;
        $node->next = $current;
    }

    public function getLinkedList(){
        $arr = array();
        $current = $this->firstNode;
        while ($current != null) {
            array_push($arr,$current->getNode());
            $current = $current->next;
        }
        return $arr;
    }

    public function totalNodes()
    {
        return $this->count;
    }
}