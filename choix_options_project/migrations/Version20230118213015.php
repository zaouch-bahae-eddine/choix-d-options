<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230118213015 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE choice (id INT AUTO_INCREMENT NOT NULL, ue_id INT NOT NULL, student_id INT NOT NULL, priority INT NOT NULL, INDEX IDX_C1AB5A9262E883B1 (ue_id), INDEX IDX_C1AB5A92CB944F1A (student_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE follow (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, ue_id INT NOT NULL, group_num INT NOT NULL, INDEX IDX_68344470CB944F1A (student_id), INDEX IDX_6834447062E883B1 (ue_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE option_bloc (id INT AUTO_INCREMENT NOT NULL, skill_bloc_id INT NOT NULL, nb_ue_to_chose INT NOT NULL, choice_date_start DATE NOT NULL, choice_date_end DATE NOT NULL, INDEX IDX_2F763FB94F7777E9 (skill_bloc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parcour (id INT AUTO_INCREMENT NOT NULL, year_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_B7E5295640C1FEA7 (year_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill_bloc (id INT AUTO_INCREMENT NOT NULL, parcour_id INT NOT NULL, name VARCHAR(255) NOT NULL, ue_optional_to_chose INT NOT NULL, INDEX IDX_803909E89A561E99 (parcour_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, parcour_id INT NOT NULL, INDEX IDX_B723AF33A76ED395 (user_id), INDEX IDX_B723AF339A561E99 (parcour_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_ue (student_id INT NOT NULL, ue_id INT NOT NULL, INDEX IDX_5AE422D1CB944F1A (student_id), INDEX IDX_5AE422D162E883B1 (ue_id), PRIMARY KEY(student_id, ue_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ue (id INT AUTO_INCREMENT NOT NULL, skill_bloc_id INT DEFAULT NULL, option_bloc_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, status INT NOT NULL, capacity_group INT NOT NULL, current_capacity INT NOT NULL, INDEX IDX_2E490A9B4F7777E9 (skill_bloc_id), INDEX IDX_2E490A9B4D76FEB5 (option_bloc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, encrypted VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE year (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE choice ADD CONSTRAINT FK_C1AB5A9262E883B1 FOREIGN KEY (ue_id) REFERENCES ue (id)');
        $this->addSql('ALTER TABLE choice ADD CONSTRAINT FK_C1AB5A92CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE follow ADD CONSTRAINT FK_68344470CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE follow ADD CONSTRAINT FK_6834447062E883B1 FOREIGN KEY (ue_id) REFERENCES ue (id)');
        $this->addSql('ALTER TABLE option_bloc ADD CONSTRAINT FK_2F763FB94F7777E9 FOREIGN KEY (skill_bloc_id) REFERENCES skill_bloc (id)');
        $this->addSql('ALTER TABLE parcour ADD CONSTRAINT FK_B7E5295640C1FEA7 FOREIGN KEY (year_id) REFERENCES year (id)');
        $this->addSql('ALTER TABLE skill_bloc ADD CONSTRAINT FK_803909E89A561E99 FOREIGN KEY (parcour_id) REFERENCES parcour (id)');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF33A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF339A561E99 FOREIGN KEY (parcour_id) REFERENCES parcour (id)');
        $this->addSql('ALTER TABLE student_ue ADD CONSTRAINT FK_5AE422D1CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student_ue ADD CONSTRAINT FK_5AE422D162E883B1 FOREIGN KEY (ue_id) REFERENCES ue (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ue ADD CONSTRAINT FK_2E490A9B4F7777E9 FOREIGN KEY (skill_bloc_id) REFERENCES skill_bloc (id)');
        $this->addSql('ALTER TABLE ue ADD CONSTRAINT FK_2E490A9B4D76FEB5 FOREIGN KEY (option_bloc_id) REFERENCES option_bloc (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE choice DROP FOREIGN KEY FK_C1AB5A9262E883B1');
        $this->addSql('ALTER TABLE choice DROP FOREIGN KEY FK_C1AB5A92CB944F1A');
        $this->addSql('ALTER TABLE follow DROP FOREIGN KEY FK_68344470CB944F1A');
        $this->addSql('ALTER TABLE follow DROP FOREIGN KEY FK_6834447062E883B1');
        $this->addSql('ALTER TABLE option_bloc DROP FOREIGN KEY FK_2F763FB94F7777E9');
        $this->addSql('ALTER TABLE parcour DROP FOREIGN KEY FK_B7E5295640C1FEA7');
        $this->addSql('ALTER TABLE skill_bloc DROP FOREIGN KEY FK_803909E89A561E99');
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF33A76ED395');
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF339A561E99');
        $this->addSql('ALTER TABLE student_ue DROP FOREIGN KEY FK_5AE422D1CB944F1A');
        $this->addSql('ALTER TABLE student_ue DROP FOREIGN KEY FK_5AE422D162E883B1');
        $this->addSql('ALTER TABLE ue DROP FOREIGN KEY FK_2E490A9B4F7777E9');
        $this->addSql('ALTER TABLE ue DROP FOREIGN KEY FK_2E490A9B4D76FEB5');
        $this->addSql('DROP TABLE choice');
        $this->addSql('DROP TABLE follow');
        $this->addSql('DROP TABLE option_bloc');
        $this->addSql('DROP TABLE parcour');
        $this->addSql('DROP TABLE skill_bloc');
        $this->addSql('DROP TABLE student');
        $this->addSql('DROP TABLE student_ue');
        $this->addSql('DROP TABLE ue');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE year');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
