<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230120113415 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ue_skill_bloc (ue_id INT NOT NULL, skill_bloc_id INT NOT NULL, INDEX IDX_90ABDA7162E883B1 (ue_id), INDEX IDX_90ABDA714F7777E9 (skill_bloc_id), PRIMARY KEY(ue_id, skill_bloc_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ue_option_bloc (ue_id INT NOT NULL, option_bloc_id INT NOT NULL, INDEX IDX_A6B5868A62E883B1 (ue_id), INDEX IDX_A6B5868A4D76FEB5 (option_bloc_id), PRIMARY KEY(ue_id, option_bloc_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ue_skill_bloc ADD CONSTRAINT FK_90ABDA7162E883B1 FOREIGN KEY (ue_id) REFERENCES ue (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ue_skill_bloc ADD CONSTRAINT FK_90ABDA714F7777E9 FOREIGN KEY (skill_bloc_id) REFERENCES skill_bloc (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ue_option_bloc ADD CONSTRAINT FK_A6B5868A62E883B1 FOREIGN KEY (ue_id) REFERENCES ue (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ue_option_bloc ADD CONSTRAINT FK_A6B5868A4D76FEB5 FOREIGN KEY (option_bloc_id) REFERENCES option_bloc (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ue DROP FOREIGN KEY FK_2E490A9B4D76FEB5');
        $this->addSql('ALTER TABLE ue DROP FOREIGN KEY FK_2E490A9B4F7777E9');
        $this->addSql('DROP INDEX IDX_2E490A9B4F7777E9 ON ue');
        $this->addSql('DROP INDEX IDX_2E490A9B4D76FEB5 ON ue');
        $this->addSql('ALTER TABLE ue DROP skill_bloc_id, DROP option_bloc_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ue_skill_bloc DROP FOREIGN KEY FK_90ABDA7162E883B1');
        $this->addSql('ALTER TABLE ue_skill_bloc DROP FOREIGN KEY FK_90ABDA714F7777E9');
        $this->addSql('ALTER TABLE ue_option_bloc DROP FOREIGN KEY FK_A6B5868A62E883B1');
        $this->addSql('ALTER TABLE ue_option_bloc DROP FOREIGN KEY FK_A6B5868A4D76FEB5');
        $this->addSql('DROP TABLE ue_skill_bloc');
        $this->addSql('DROP TABLE ue_option_bloc');
        $this->addSql('ALTER TABLE ue ADD skill_bloc_id INT DEFAULT NULL, ADD option_bloc_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ue ADD CONSTRAINT FK_2E490A9B4D76FEB5 FOREIGN KEY (option_bloc_id) REFERENCES option_bloc (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE ue ADD CONSTRAINT FK_2E490A9B4F7777E9 FOREIGN KEY (skill_bloc_id) REFERENCES skill_bloc (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_2E490A9B4F7777E9 ON ue (skill_bloc_id)');
        $this->addSql('CREATE INDEX IDX_2E490A9B4D76FEB5 ON ue (option_bloc_id)');
    }
}
