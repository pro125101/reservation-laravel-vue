<?php
declare(strict_types=1);

namespace App\Contracts;

interface RoomRepositoryInterfaceContract
{
    public function getAll(): iterable;
}
