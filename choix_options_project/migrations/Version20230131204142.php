<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230131204142 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE student_ue (student_id INT NOT NULL, ue_id INT NOT NULL, INDEX IDX_5AE422D1CB944F1A (student_id), INDEX IDX_5AE422D162E883B1 (ue_id), PRIMARY KEY(student_id, ue_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE student_ue ADD CONSTRAINT FK_5AE422D1CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student_ue ADD CONSTRAINT FK_5AE422D162E883B1 FOREIGN KEY (ue_id) REFERENCES ue (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student_ue DROP FOREIGN KEY FK_5AE422D1CB944F1A');
        $this->addSql('ALTER TABLE student_ue DROP FOREIGN KEY FK_5AE422D162E883B1');
        $this->addSql('DROP TABLE student_ue');
    }
}
