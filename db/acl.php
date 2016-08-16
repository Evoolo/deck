<?php
// db/author.php
namespace OCA\Deck\Db;

use JsonSerializable;

class Acl extends Entity implements JsonSerializable {

    public $id;
    protected $participant;
    protected $type;
    protected $boardId;
    protected $permissionWrite;
    protected $permissionInvite;
    protected $permissionManage;

    public function __construct() {
        $this->addType('id','integer');
        $this->addType('boardId','integer');
        $this->addType('permissionWrite', 'boolean');
        $this->addType('permissionInvite', 'boolean');
        $this->addType('permissionManage', 'boolean');
    }
    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'participant' => $this->participant,
            'type' => $this->type,
            'boardId' => $this->boardId,
            'permissionWrite' => $this->permissionWrite,
            'permissionInvite' => $this->permissionInvite,
            'permissionManage' => $this->permissionManage,
        ];
    }
}