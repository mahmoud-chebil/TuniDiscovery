<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220223233731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52BFF51B1BC');
        $this->addSql('DROP INDEX IDX_8B27C52BFF51B1BC ON devis');
        $this->addSql('ALTER TABLE devis ADD remise DOUBLE PRECISION NOT NULL, ADD code_devis VARCHAR(255) NOT NULL, CHANGE num_res_id reservation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52BB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_8B27C52BB83297E7 ON devis (reservation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite CHANGE lib_act lib_act VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE type_act type_act VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52BB83297E7');
        $this->addSql('DROP INDEX IDX_8B27C52BB83297E7 ON devis');
        $this->addSql('ALTER TABLE devis DROP remise, DROP code_devis, CHANGE reservation_id num_res_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52BFF51B1BC FOREIGN KEY (num_res_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_8B27C52BFF51B1BC ON devis (num_res_id)');
        $this->addSql('ALTER TABLE evenement CHANGE desc_even desc_even VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE titre_even titre_even VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reservation CHANGE lib lib VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE user_name user_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE role role VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
