<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230204132356 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE period_choice (id INT AUTO_INCREMENT NOT NULL, debut DATETIME NOT NULL, fin DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE option_bloc ADD period_choice_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE option_bloc ADD CONSTRAINT FK_2F763FB94D581D03 FOREIGN KEY (period_choice_id) REFERENCES period_choice (id)');
        $this->addSql('CREATE INDEX IDX_2F763FB94D581D03 ON option_bloc (period_choice_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE option_bloc DROP FOREIGN KEY FK_2F763FB94D581D03');
        $this->addSql('DROP TABLE period_choice');
        $this->addSql('DROP INDEX IDX_2F763FB94D581D03 ON option_bloc');
        $this->addSql('ALTER TABLE option_bloc DROP period_choice_id');
    }
}
