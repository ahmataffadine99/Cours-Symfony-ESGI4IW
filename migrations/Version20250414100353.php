<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250414100353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajout du score pour le listing des films sur la homepage';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE media ADD score INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE media DROP score');
    }
}
