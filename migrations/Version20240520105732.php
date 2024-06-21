<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240520105732 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE diploma (id INT AUTO_INCREMENT NOT NULL, duration INT NOT NULL, location VARCHAR(255) NOT NULL, establishment VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job (id INT AUTO_INCREMENT NOT NULL, duration INT NOT NULL, recommendation VARCHAR(255) NOT NULL, location VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, tags LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', icon VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_skills (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_tree (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(20) NOT NULL, adresse VARCHAR(255) NOT NULL, age SMALLINT NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_CDBF1215E7927C74 (email), UNIQUE INDEX UNIQ_IDENTIFIER_USERNAME (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_tree_job (user_tree_id INT NOT NULL, job_id INT NOT NULL, INDEX IDX_485E25CB5F867AA8 (user_tree_id), INDEX IDX_485E25CBBE04EA9 (job_id), PRIMARY KEY(user_tree_id, job_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_tree_diploma (user_tree_id INT NOT NULL, diploma_id INT NOT NULL, INDEX IDX_A66A57485F867AA8 (user_tree_id), INDEX IDX_A66A5748A99ACEB5 (diploma_id), PRIMARY KEY(user_tree_id, diploma_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_tree_skill (user_tree_id INT NOT NULL, skill_id INT NOT NULL, INDEX IDX_415804FE5F867AA8 (user_tree_id), INDEX IDX_415804FE5585C142 (skill_id), PRIMARY KEY(user_tree_id, skill_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_tree_job ADD CONSTRAINT FK_485E25CB5F867AA8 FOREIGN KEY (user_tree_id) REFERENCES user_tree (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_tree_job ADD CONSTRAINT FK_485E25CBBE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_tree_diploma ADD CONSTRAINT FK_A66A57485F867AA8 FOREIGN KEY (user_tree_id) REFERENCES user_tree (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_tree_diploma ADD CONSTRAINT FK_A66A5748A99ACEB5 FOREIGN KEY (diploma_id) REFERENCES diploma (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_tree_skill ADD CONSTRAINT FK_415804FE5F867AA8 FOREIGN KEY (user_tree_id) REFERENCES user_tree (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_tree_skill ADD CONSTRAINT FK_415804FE5585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_tree_job DROP FOREIGN KEY FK_485E25CB5F867AA8');
        $this->addSql('ALTER TABLE user_tree_job DROP FOREIGN KEY FK_485E25CBBE04EA9');
        $this->addSql('ALTER TABLE user_tree_diploma DROP FOREIGN KEY FK_A66A57485F867AA8');
        $this->addSql('ALTER TABLE user_tree_diploma DROP FOREIGN KEY FK_A66A5748A99ACEB5');
        $this->addSql('ALTER TABLE user_tree_skill DROP FOREIGN KEY FK_415804FE5F867AA8');
        $this->addSql('ALTER TABLE user_tree_skill DROP FOREIGN KEY FK_415804FE5585C142');
        $this->addSql('DROP TABLE diploma');
        $this->addSql('DROP TABLE job');
        $this->addSql('DROP TABLE skill');
        $this->addSql('DROP TABLE user_skills');
        $this->addSql('DROP TABLE user_tree');
        $this->addSql('DROP TABLE user_tree_job');
        $this->addSql('DROP TABLE user_tree_diploma');
        $this->addSql('DROP TABLE user_tree_skill');
    }
}
