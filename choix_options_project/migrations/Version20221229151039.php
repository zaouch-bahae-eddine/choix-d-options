<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221229151039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ue (id INT AUTO_INCREMENT NOT NULL, bloc_id INT NOT NULL, name VARCHAR(255) NOT NULL, status INT NOT NULL, nb_group INT NOT NULL, capacity_group INT NOT NULL, INDEX IDX_2E490A9B5582E9C0 (bloc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ue ADD CONSTRAINT FK_2E490A9B5582E9C0 FOREIGN KEY (bloc_id) REFERENCES bloc (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ue DROP FOREIGN KEY FK_2E490A9B5582E9C0');
        $this->addSql('DROP TABLE ue');
    }
}
