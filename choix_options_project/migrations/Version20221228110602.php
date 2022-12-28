<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221228110602 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bloc (id INT AUTO_INCREMENT NOT NULL, parcour_id INT NOT NULL, name VARCHAR(255) NOT NULL, ue_optional_to_chose INT NOT NULL, INDEX IDX_C778955A9A561E99 (parcour_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bloc ADD CONSTRAINT FK_C778955A9A561E99 FOREIGN KEY (parcour_id) REFERENCES parcour (id)');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD19A561E99 FOREIGN KEY (parcour_id) REFERENCES parcour (id)');
        $this->addSql('CREATE INDEX IDX_C11D7DD19A561E99 ON promotion (parcour_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bloc DROP FOREIGN KEY FK_C778955A9A561E99');
        $this->addSql('DROP TABLE bloc');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD19A561E99');
        $this->addSql('DROP INDEX IDX_C11D7DD19A561E99 ON promotion');
    }
}
