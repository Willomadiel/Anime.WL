const mysql = require('mysql');

// Configuração da conexão com o banco de dados
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'seu_usuario',
  password: 'sua_senha',
  database: 'seu_banco_de_dados'
});

// Conexão com o banco de dados
connection.connect(function(err) {
  if (err) {
    console.error('Erro ao conectar ao banco de dados: ' + err.stack);
    return;
  }
  console.log('Conexão bem-sucedida com o banco de dados.');
});

// Exemplo de consulta ao banco de dados
connection.query('SELECT * FROM tabela', function(err, rows, fields) {
  if (err) {
    console.error('Erro ao executar consulta: ' + err.stack);
    return;
  }
  console.log('Resultado da consulta:', rows);
});

// Encerramento da conexão com o banco de dados
connection.end(function(err) {
  if (err) {
    console.error('Erro ao encerrar conexão com o banco de dados: ' + err.stack);
    return;
  }
  console.log('Conexão encerrada com o banco de dados.');
});
