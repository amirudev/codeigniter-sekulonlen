<?php
namespace App\Entities;

use CodeIgniter\Entity;

class SiswaTugas extends Entity
{
    public function setAttachment($attachment)
    {
        $filename = $attachment->getRandomName();
        $writepath = './uploads';
        $attachment->move($writepath, $filename);
        $this->attributes['attachment'] = $filename;
        return $this;
    }
}