<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220223094644 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE detaileven');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE detaileven (id INT AUTO_INCREMENT NOT NULL, even_id INT DEFAULT NULL, act_id INT DEFAULT NULL, INDEX IDX_B594D41C8AB236CF (even_id), INDEX IDX_B594D41CD1A55B28 (act_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE detaileven ADD CONSTRAINT FK_B594D41C8AB236CF FOREIGN KEY (even_id) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE detaileven ADD CONSTRAINT FK_B594D41CD1A55B28 FOREIGN KEY (act_id) REFERENCES activite (id)');
        $this->addSql('ALTER TABLE activite CHANGE lib_act lib_act VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_act type_act VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE evenement CHANGE desc_even desc_even VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE titre_even titre_even VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE user_name user_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE role role VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
