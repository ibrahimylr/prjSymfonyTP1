<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201121194749 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment ADD created_at DATETIME NOT NULL, ADD image_name VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_F87474F3989D9B62 ON lesson');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP created_at, DROP image_name');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F87474F3989D9B62 ON lesson (slug)');
    }
}
