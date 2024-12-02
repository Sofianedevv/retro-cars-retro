<?php
declare(strict_types=1);

namespace App\Enum;

enum StatusReservationEnum : string {
    case CONFIRMED = "confirmed";
    case PENDING = "pending";
    case CANCELLED = "cancelled";
}