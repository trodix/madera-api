<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191003205139 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE customer CHANGE phone phone VARCHAR(15) DEFAULT NULL, CHANGE email email VARCHAR(128) DEFAULT NULL, CHANGE street street VARCHAR(100) DEFAULT NULL, CHANGE street_number street_number VARCHAR(10) DEFAULT NULL, CHANGE zipcode zipcode VARCHAR(10) DEFAULT NULL, CHANGE city city VARCHAR(50) DEFAULT NULL, CHANGE country country VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE customer CHANGE phone phone VARCHAR(15) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE email email VARCHAR(128) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE street street VARCHAR(100) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE street_number street_number VARCHAR(10) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE zipcode zipcode VARCHAR(10) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE city city VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE country country VARCHAR(50) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
