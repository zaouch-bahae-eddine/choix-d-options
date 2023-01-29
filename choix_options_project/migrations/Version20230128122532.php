<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230128122532 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE follow_student (follow_id INT NOT NULL, student_id INT NOT NULL, INDEX IDX_E9D6F7838711D3BC (follow_id), INDEX IDX_E9D6F783CB944F1A (student_id), PRIMARY KEY(follow_id, student_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE follow_student ADD CONSTRAINT FK_E9D6F7838711D3BC FOREIGN KEY (follow_id) REFERENCES follow (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE follow_student ADD CONSTRAINT FK_E9D6F783CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE follow DROP FOREIGN KEY FK_68344470CB944F1A');
        $this->addSql('DROP INDEX IDX_68344470CB944F1A ON follow');
        $this->addSql('ALTER TABLE follow DROP student_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE follow_student DROP FOREIGN KEY FK_E9D6F7838711D3BC');
        $this->addSql('ALTER TABLE follow_student DROP FOREIGN KEY FK_E9D6F783CB944F1A');
        $this->addSql('DROP TABLE follow_student');
        $this->addSql('ALTER TABLE follow ADD student_id INT NOT NULL');
        $this->addSql('ALTER TABLE follow ADD CONSTRAINT FK_68344470CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_68344470CB944F1A ON follow (student_id)');
    }
}
