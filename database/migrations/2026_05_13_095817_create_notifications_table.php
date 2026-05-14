<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateNotificationsTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('notifications');
        $table->id();
        $table->bigInteger('user_id')->notNullable();
        $table->string('title');
        $table->text('message');
        $table->integer('is_read')->default(0);
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'notifications' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('notifications');
        $pdo->exec($table->buildDropSQL());
    }
}
