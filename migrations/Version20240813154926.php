<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240813154926 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formules CHANGE description ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE gourmandises CHANGE description ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_chef CHANGE description ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_creme CHANGE description ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_tomate CHANGE description ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE salade_bar CHANGE description ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE snacking CHANGE description ingredient VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salade_bar CHANGE ingredient description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_tomate CHANGE ingredient description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE formules CHANGE ingredient description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_creme CHANGE ingredient description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_chef CHANGE ingredient description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE gourmandises CHANGE ingredient description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE snacking CHANGE ingredient description VARCHAR(255) NOT NULL');
    }
}
