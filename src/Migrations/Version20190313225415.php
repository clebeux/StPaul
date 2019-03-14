<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190313225415 extends AbstractMigration
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
        $this->addSql('ALTER TABLE sejour ADD id INT AUTO_INCREMENT NOT NULL, CHANGE SEJNO sejno INT NOT NULL, CHANGE sejintitule sej_intitule VARCHAR(128) DEFAULT NULL, CHANGE sejmontantmbi sej_montant_mbi NUMERIC(10, 2) DEFAULT NULL, CHANGE sejdtedeb sej_dte_deb DATE DEFAULT NULL, CHANGE sejduree sej_duree SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE sejour ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sejour MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE sejour DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE sejour DROP id, CHANGE sejno SEJNO INT AUTO_INCREMENT NOT NULL, CHANGE sej_intitule SEJINTITULE VARCHAR(128) DEFAULT NULL COLLATE utf8_unicode_ci, CHANGE sej_montant_mbi SEJMONTANTMBI NUMERIC(10, 2) DEFAULT NULL, CHANGE sej_dte_deb SEJDTEDEB DATE DEFAULT NULL, CHANGE sej_duree SEJDUREE SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE sejour ADD PRIMARY KEY (SEJNO)');
    }
}
