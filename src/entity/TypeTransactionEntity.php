<?php

namespace App\Entity;

enum  TypeTransactionEntity: string
{
case DEPOT = "depot";
case TRANSFERE = "transfere";
case RETRAIT = "retrait";
} 