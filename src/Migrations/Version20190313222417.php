<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190313222417 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sejour MODIFY SEJNO INT NOT NULL');
        $this->addSql('ALTER TABLE sejour DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE sejour ADD id INT AUTO_INCREMENT NOT NULL, DROP SEJINTITULE, DROP SEJMONTANTMBI, DROP SEJDTEDEB, DROP SEJDUREE, CHANGE SEJNO sejno INT NOT NULL');
        $this->addSql('ALTER TABLE sejour ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sejour MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE sejour DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE sejour ADD SEJINTITULE VARCHAR(128) DEFAULT NULL COLLATE utf8_unicode_ci, ADD SEJMONTANTMBI NUMERIC(10, 2) DEFAULT NULL, ADD SEJDTEDEB DATE DEFAULT NULL, ADD SEJDUREE SMALLINT DEFAULT NULL, DROP id, CHANGE sejno SEJNO INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE sejour ADD PRIMARY KEY (SEJNO)');
    }
}
