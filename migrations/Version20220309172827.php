<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220309172827 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD indevidual_contact_id INT DEFAULT NULL, ADD company_contact_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649BF48E35F FOREIGN KEY (indevidual_contact_id) REFERENCES indevidual_contact (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6495A2FCCDC FOREIGN KEY (company_contact_id) REFERENCES company_contact (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649BF48E35F ON user (indevidual_contact_id)');
        $this->addSql('CREATE INDEX IDX_8D93D6495A2FCCDC ON user (company_contact_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company_contact CHANGE name name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE gender gender VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE siren_number siren_number VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone_number phone_number VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE postcode postcode VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adress adress VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE city city VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE contact_type CHANGE label label VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE color color VARCHAR(7) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE event CHANGE title title VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE color_event color_event VARCHAR(7) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE indevidual_contact CHANGE first_name first_name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE last_name last_name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE role role VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone_number phone_number VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649BF48E35F');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6495A2FCCDC');
        $this->addSql('DROP INDEX IDX_8D93D649BF48E35F ON user');
        $this->addSql('DROP INDEX IDX_8D93D6495A2FCCDC ON user');
        $this->addSql('ALTER TABLE user DROP indevidual_contact_id, DROP company_contact_id, CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE name name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE last_name last_name VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(20) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE picture picture VARCHAR(100) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE title title VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}