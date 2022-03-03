<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220302232114 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD date_naissance DATE NOT NULL, ADD adresse VARCHAR(255) NOT NULL, ADD lieu_de_naissance VARCHAR(255) NOT NULL, ADD numero_carte_etudiant VARCHAR(255) NOT NULL, ADD numero_carte_national_identite INT NOT NULL, ADD niveau_etude VARCHAR(255) NOT NULL, ADD faculte VARCHAR(255) NOT NULL, ADD codification VARCHAR(255) NOT NULL, CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP nom, DROP prenom, DROP date_naissance, DROP adresse, DROP lieu_de_naissance, DROP numero_carte_etudiant, DROP numero_carte_national_identite, DROP niveau_etude, DROP faculte, DROP codification, CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`');
    }
}
