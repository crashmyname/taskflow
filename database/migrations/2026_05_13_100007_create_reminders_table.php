<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateRemindersTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('reminders');
        $table->id();
        $table->bigInteger('todo_id')->notNullable();
        $table->dateTime('remind_at')->notNullable();
        $table->integer('is_sent')->default(0);
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'reminders' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('reminders');
        $pdo->exec($table->buildDropSQL());
    }
}
