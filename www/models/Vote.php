<?php

require ('Model.php');

class Vote extends Model {

    public function getVotesByColorId($colorId) {
        $results = $this->db->query(
            'SELECT COUNT(votes.id) AS votes
            FROM colors
            LEFT JOIN votes
                ON votes.color_id = colors.id
            WHERE colors.id = '
            . mysqli_real_escape_string($this->db->getLink(), $colorId)
            . ' GROUP BY colors.id');

        return $results[0]['votes'];
    }
}

