<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220222214246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064041BD125E3');
        $this->addSql('CREATE TABLE type_reclamation (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE typereclamation');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064041BD125E3');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064041BD125E3 FOREIGN KEY (id_type_id) REFERENCES type_reclamation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064041BD125E3');
        $this->addSql('CREATE TABLE typereclamation (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE type_reclamation');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064041BD125E3');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064041BD125E3 FOREIGN KEY (id_type_id) REFERENCES typereclamation (id)');
    }
}
