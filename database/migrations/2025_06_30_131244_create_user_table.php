<?php

// use PDO;

use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateUserTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('users');
        $table->id();
        $table->string('name',150);
        $table->string('username',150);
        $table->string('password');
        $table->string('role');
        $table->integer('is_active');
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');

        $sql = $table->buildCreateSQL();
        try {
            $pdo->exec($sql);
            echo "Table 'user' berhasil dibuat\n";
            $stmt = $pdo->prepare("
                INSERT INTO users (name, username, password, role, is_active)
                VALUES (:name, :username, :password, :role, :is_active)
            ");

            $stmt->execute([
                ':name' => 'Administrator',
                ':username' => 'admin',
                ':password' => password_hash('admin123', PASSWORD_BCRYPT),
                ':role' => 'admin',
                ':is_active' => 1
            ]);

            echo "User admin berhasil dibuat\n";
        } catch (\PDOException $e) {
            echo "Gagal membuat tabel: " . $e->getMessage() . "\n";
            echo "SQL: $sql\n";
        }

    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('users');
        $pdo->exec($table->buildDropSQL());
    }
}
