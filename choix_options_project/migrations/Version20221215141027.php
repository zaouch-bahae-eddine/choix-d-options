<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221215141027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promotion DROP anne_master, DROP date_limite_choix_ue, DROP promotion_date, CHANGE date_promotion date_promotion INT NOT NULL, CHANGE date_limite_choix_options date_limite_choix_options DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE promotion ADD anne_master INT NOT NULL, ADD date_limite_choix_ue DATETIME NOT NULL, ADD promotion_date VARCHAR(255) DEFAULT NULL, CHANGE date_promotion date_promotion DATE NOT NULL, CHANGE date_limite_choix_options date_limite_choix_options DATETIME DEFAULT NULL');
    }
}
