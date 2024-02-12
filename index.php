<?php
   require_once 'vendor/autoload.php';
   
   $produto = new \App\Model\Produto;
   $produto->setId(1);
   $produto->setNome('Monitor Sansung');
   $produto->setDescricao('Monitor Gamer 144hz');

   $produtoDao = new \App\Model\ProdutoDao();
   $produtoDao->update($produto);
   $produtoDao->read();

   foreach($produtoDao->read() as $produto){
        echo $produto['nome'] . '</br>' . $produto['descricao'] . '</br>' . '</hr>';
   }

?>