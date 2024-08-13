<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240813154702 extends AbstractMigration
{
    public function getingredient(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formules ADD title VARCHAR(255) NOT NULL, ADD ingredient VARCHAR(255) NOT NULL, ADD price VARCHAR(255) NOT NULL, DROP titre, DROP ingredients, DROP prix');
        $this->addSql('ALTER TABLE gourmandises ADD title VARCHAR(255) NOT NULL, ADD ingredient VARCHAR(255) NOT NULL, ADD price VARCHAR(255) NOT NULL, DROP titre, DROP ingredients, DROP prix');
        $this->addSql('ALTER TABLE pizza_chef ADD title VARCHAR(255) NOT NULL, ADD ingredient VARCHAR(255) NOT NULL, ADD price VARCHAR(255) NOT NULL, DROP titre, DROP ingredients, DROP prix');
        $this->addSql('ALTER TABLE pizza_creme ADD title VARCHAR(255) NOT NULL, ADD ingredient VARCHAR(255) NOT NULL, ADD price VARCHAR(255) NOT NULL, DROP titre, DROP ingredients, DROP prix');
        $this->addSql('ALTER TABLE pizza_tomate ADD title VARCHAR(255) NOT NULL, ADD ingredient VARCHAR(255) NOT NULL, ADD price VARCHAR(255) NOT NULL, DROP titre, DROP ingredients, DROP prix');
        $this->addSql('ALTER TABLE salade_bar ADD title VARCHAR(255) NOT NULL, ADD ingredient VARCHAR(255) NOT NULL, ADD price VARCHAR(255) NOT NULL, DROP titre, DROP ingredients, DROP prix');
        $this->addSql('ALTER TABLE snacking ADD title VARCHAR(255) NOT NULL, ADD ingredient VARCHAR(255) NOT NULL, ADD price VARCHAR(255) NOT NULL, DROP titre, DROP ingredients, DROP prix');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE salade_bar ADD titre VARCHAR(255) NOT NULL, ADD ingredients VARCHAR(255) NOT NULL, ADD prix VARCHAR(255) NOT NULL, DROP title, DROP ingredient, DROP price');
        $this->addSql('ALTER TABLE pizza_tomate ADD titre VARCHAR(255) NOT NULL, ADD ingredients VARCHAR(255) NOT NULL, ADD prix VARCHAR(255) NOT NULL, DROP title, DROP ingredient, DROP price');
        $this->addSql('ALTER TABLE formules ADD titre VARCHAR(255) NOT NULL, ADD ingredients VARCHAR(255) NOT NULL, ADD prix VARCHAR(255) NOT NULL, DROP title, DROP ingredient, DROP price');
        $this->addSql('ALTER TABLE pizza_creme ADD titre VARCHAR(255) NOT NULL, ADD ingredients VARCHAR(255) NOT NULL, ADD prix VARCHAR(255) NOT NULL, DROP title, DROP ingredient, DROP price');
        $this->addSql('ALTER TABLE pizza_chef ADD titre VARCHAR(255) NOT NULL, ADD ingredients VARCHAR(255) NOT NULL, ADD prix VARCHAR(255) NOT NULL, DROP title, DROP ingredient, DROP price');
        $this->addSql('ALTER TABLE gourmandises ADD titre VARCHAR(255) NOT NULL, ADD ingredients VARCHAR(255) NOT NULL, ADD prix VARCHAR(255) NOT NULL, DROP title, DROP ingredient, DROP price');
        $this->addSql('ALTER TABLE snacking ADD titre VARCHAR(255) NOT NULL, ADD ingredients VARCHAR(255) NOT NULL, ADD prix VARCHAR(255) NOT NULL, DROP title, DROP ingredient, DROP price');
    }
}
