const mysql = require('mysql');
const connection = mysql.createConnection({
    host: 'localhost',       
    user: 'root',         
    password: '',      
    database: 'cadastro'   
  });
const listanimes = { names: 'John'};
connection.query('INSERT INTO tabela SET ?', listanimes, (error, results, fields) => {
  if (error) {
    console.error(error);
  } else {
    console.log('Registro inserido com sucesso!');
  }
});