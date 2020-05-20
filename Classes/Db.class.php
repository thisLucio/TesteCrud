<?php

/**
 * classe Db
 *
 * Responsável por criar uma instancia de conexão com tabelas do banco de dados
 *
 * exemplo de uso inicial para ativar a classe
 * $db  = new Db();
 * $db->conectar();
 * $db->setTabela("usuarios"); 
 *
 * @author Sérgio Luiz Tonsig
 */
  class Db {
     private $host;
     private $porta;
     private $usudb;
     private $nomedb;
     private $senhadb;
     private $conexao;
     private $tabela;

/**
 * Construtor responsável por definir os valores das propriedades da tabela
 * @method __construct
 * @param  string    $host        Ip do servidor do banco de dados
 * @param  string    $porta       Número da porta utilizada pelo banco 
 * @param  string    $usudb       Usuário do banco de dados
 * @param  string    $nomedb      Nome do banco de dados
 * @param  string    $senhadb     Senha do banco de dados
 */
     function __construct($host="127.0.0.1",
                          $porta="3306",
                          $usudb="root",
                          $nomedb="unisale",
                          $senhadb=""){
     	$this->host     = $host;
     	$this->porta    = $porta;
        $this->nomedb   = $nomedb;
     	$this->usudb    = $usudb;
     	$this->senhadb  = $senhadb;

     }

 /**
  * Método responsável pela conexão com o banco de dados
  * @method conectar
  * @return id conexao
  */	 
 public function conectar(){
 $dados = "mysql:host="       . $this->host;
 $dados = $dados . ";port="   . $this->porta;
 $dados = $dados . ";dbname=" . $this->nomedb;
 $this->conexao = null;
 try {
	$this->conexao = new PDO($dados,
							 $this->usudb,
							 $this->senhadb);
 }
 catch(PDOException $e) {
    $mensagem  = "DB class conectar() = " . $e->getMessage();
    file_put_contents("erro.log", $mensagem, FILE_APPEND);	 
   }
}

  /**
   * Método responsável por definir a tabela
   * @method setTabela
   * @param  string    $tabela        Nome da tabela no banco de dados
   */
  public function setTabela($tabela = null){
    $this->tabela = $tabela;
  }

  /**
   * Responsável por criar a SQL de seleção (SELECT)
   * @method consultar
   * @param  string $campos nome dos campos e alias a serem retornados
   * @param  string $where  campos e valores do WHERE
   * @param  string $order  campos e suas ordenações
   * @param  string $limit  inicio,quantidade
   * @return Mysqli Result Object
   */
  public function consultar($campos = '*',$where = null,$order = null,$limit = null){
    $campos = is_null($campos)?'*':$campos;

    $where  = is_null($where)?'':'WHERE '.$where;
    $order  = is_null($order)?'':'ORDER BY '.$order;
    $limit  = is_null($limit)?'':'LIMIT '.$limit;

    $query = "SELECT ".$campos." FROM ".$this->tabela." ".$where." ".$order." ".$limit;
    return $this->executaSQL($query);

  }

  /**
   * Método responsável por retornar o total de registros
   * @method totalRegistros
   * @param strings  $query Instruções SQL
   * @return PDO Statement Object
   */
  public function totalRegistros(){
      $sql = "SELECT count(*) as totalReg FROM " . $this->tabela;
      return $this->executaSQL($sql);
  }
  
  /**
   * Método responsável por executar as instruções SQLs
   * @method executaSQL
   * @param strings  $query Instruções SQL
   * @return PDO Statement Object
   */
  public function executaSQL($query){
	$dados = array();
    $query = trim($query);
	$resultado="";
    try{
			$this->conexao->beginTransaction();
			$resultado  = $this->conexao->query($query);
			$this->conexao->commit();
		}catch (PDOException $e) {
    		$this->conexao->rollBack();
			$resultado = null;
			$mensagem  = "db class executaSQL = " . $e->getMessage();
//			file_put_contents("erro.log", $mensagem, FILE_APPEND);
    }
	if ($resultado){
	while($row=$resultado->fetch(PDO::FETCH_ASSOC))
		{
			$dados[] = $row;
		}
	}
    return $dados;

  }

/**
   * Método responsável por criar a query de inserção (INSERT)
   * @method insert
   * @param  mixed  $dados Array ou Objeto (objeto deve possuir o método getAllAttributes do trait GetSet)
   * @return boolean
   */
  public function gravar($dados = null){
    $campos   = implode(",",array_keys($dados));
    $valores  = implode("','",array_values($dados));
    $query = "INSERT INTO ".$this->tabela." (" .
              $campos.") VALUES ('".$valores."')";
//    echo "$query<br>";
    return $this->executaSQL($query);
  }  

 /**
   * Método responsável por criar a query de atualização (UPDATE)
   * @method update
   * @param  string $where Instrução WHERE do Delete
   * @param  mixed  $dados Array ou Objeto (objeto deve possuir o método getAllAttributes do trait GetSet)
   * @return boolean
   */
  public function alterar($where = null,$dados = null){

  if(!is_null($where)){
      $valores = array();
      foreach($dados as $key=>$value){
        $valores[] = $key."='".$value."'";
      }
      $valores = implode(',',$valores);
      $query = "UPDATE ".$this->tabela." SET ".
                $valores." WHERE ".$where;
//      echo "$query<br>";
//      file_put_contents("log.log", $query, FILE_APPEND);
      return $this->executaSQL($query);
  } 
  else {
         return false;
       }

  }
  
  /**
   * Responsável por criar a query de exclusão (DELETE)
   * @method delete
   * @param  string $where Instrução WHERE do Delete
   * @return boolean
   */
  public function excluir($where = null){
    if(!is_null($where)){
      $query = "DELETE FROM ".$this->tabela." WHERE ".$where;
//      echo "$query<br>";
      return $this->executaSQL($query);
     }
     else{
      return false;
    }
  } 
}

?>