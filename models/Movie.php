<?php

/*classe dos filmes e suas propriedades*/ 

  class Movie {

    public $id;
    public $title;
    public $description;
    public $image;
    public $trailer;
    public $category;
    public $length;
    public $users_id;
   

    /*função que gera imagem futuramente*/

    public function imageGenerateName() {
      return bin2hex(random_bytes(60)) . ".jpg";
    }

  }

  interface MovieDAOInterface {

    public function buildMovie($data);              // recebo os dados e fazer objeto de filme.
    public function findAll();                      // encontra todos os filmes do banco de dados.
    public function getLatestMovies();              // vou pegar todos os filmes mais em ordem descrescente.  
    public function getMoviesByCategory($category); // consigo pegar os filmes por uma determinada categoria.
    public function getMoviesByUserId($id);         // consigo pegar os filmes do usuário específico. 
    public function findById($id);                  // encontrar o filme por id.
    public function findByTitle($title);            // encontrar um filme por um título específico.
    public function create(Movie $movie);           // recebo o meu model para criar
    public function update(Movie $movie);           // recebo o meu model para editar
    public function destroy($id);                   // deletando o filme do sistema

  }

  ?>