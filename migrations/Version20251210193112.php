<?php

declare(strict_types=1);

namespace Alura\Doctrine\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


final class Version20251210193112 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable(name:'teste');
        $table->addColumn(name:'id', type:'integer', options:['autoincrement' => true]);
        $table->addColumn(name:'coluna_teste', type:'string', length:255);
        $table->setPrimaryKey(columns:['id']);
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable(name:'teste');
    }
}
