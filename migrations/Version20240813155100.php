<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240813155100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formules CHANGE ingrédient ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE gourmandises CHANGE ingrédient ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_chef CHANGE ingrédient ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_creme CHANGE ingrédient ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_tomate CHANGE ingrédient ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE salade_bar CHANGE ingrédient ingredient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE snacking CHANGE ingrédient ingredient VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salade_bar CHANGE ingredient ingrédient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_tomate CHANGE ingredient ingrédient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE formules CHANGE ingredient ingrédient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_creme CHANGE ingredient ingrédient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pizza_chef CHANGE ingredient ingrédient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE gourmandises CHANGE ingredient ingrédient VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE snacking CHANGE ingredient ingrédient VARCHAR(255) NOT NULL');
    }
}
