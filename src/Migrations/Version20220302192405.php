<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220302192405 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, lib_act VARCHAR(255) NOT NULL, type_act VARCHAR(255) NOT NULL, prix_act DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activite_evenement (activite_id INT NOT NULL, evenement_id INT NOT NULL, INDEX IDX_48D219A59B0F88B1 (activite_id), INDEX IDX_48D219A5FD02F13 (evenement_id), PRIMARY KEY(activite_id, evenement_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE devis (id INT AUTO_INCREMENT NOT NULL, reservation_id INT DEFAULT NULL, prix_tot DOUBLE PRECISION NOT NULL, remise DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_8B27C52BB83297E7 (reservation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, prix_even DOUBLE PRECISION NOT NULL, desc_even VARCHAR(255) NOT NULL, titre_even VARCHAR(255) NOT NULL, nbre_place INT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, even_id INT DEFAULT NULL, user_id INT DEFAULT NULL, nb_personne INT NOT NULL, dateres DATE NOT NULL, etat TINYINT(1) NOT NULL, INDEX IDX_42C849558AB236CF (even_id), INDEX IDX_42C84955A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, user_name VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activite_evenement ADD CONSTRAINT FK_48D219A59B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activite_evenement ADD CONSTRAINT FK_48D219A5FD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE devis ADD CONSTRAINT FK_8B27C52BB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849558AB236CF FOREIGN KEY (even_id) REFERENCES evenement (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activite_evenement DROP FOREIGN KEY FK_48D219A59B0F88B1');
        $this->addSql('ALTER TABLE activite_evenement DROP FOREIGN KEY FK_48D219A5FD02F13');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849558AB236CF');
        $this->addSql('ALTER TABLE devis DROP FOREIGN KEY FK_8B27C52BB83297E7');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE activite_evenement');
        $this->addSql('DROP TABLE devis');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE user');
    }
}
