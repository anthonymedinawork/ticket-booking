<?php

declare(strict_types=1);

namespace App\Command;

use Ramsey\Uuid\UuidInterface;
use Spiral\Cqrs\CommandInterface;

final class BuyTicketCommand implements CommandInterface
{
    public function __construct(
        public readonly UuidInterface $reservationId
    ) {
    }
}
