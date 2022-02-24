<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220223233316 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipement ADD idcat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipement ADD CONSTRAINT FK_B8B4C6F3821004EF FOREIGN KEY (idcat_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_B8B4C6F3821004EF ON equipement (idcat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE nom_categorie nom_categorie VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE equipement DROP FOREIGN KEY FK_B8B4C6F3821004EF');
        $this->addSql('DROP INDEX IDX_B8B4C6F3821004EF ON equipement');
        $this->addSql('ALTER TABLE equipement DROP idcat_id, CHANGE libelle_equipement libelle_equipement VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_equipement description_equipement VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
