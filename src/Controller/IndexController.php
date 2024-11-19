<?php
declare(strict_types=1);

namespace WebSpell\Controller;

class IndexController
{
    public function redirect(): void
    {
        header('Location: ../index.php');
        exit;
    }
}
