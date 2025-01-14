<?php

  class Review {

    public $id;
    public $rating;          // nota
    public $review;          // comentário do usuário  
    public $users_id;        // id do usuário que envio a resposta
    public $movies_id;       // id do filme que agente vai colocar a resposta

  }

  interface ReviewDAOInterface {

    public function buildReview($data);                 // fazer o objeto, recebe array com dados
    public function create(Review $review);             // recebe o objeto   
    public function getMoviesReview($id);               // todas as notas e critícas pelo id do filme
    public function hasAlreadyReviewed($id, $userId);   // ver se o usuário já fez a revisão daquele filme
    public function getRatings($id);                    // recebe todas as notas de um filme

  }
  ?>