<?php
class Model_Tweet extends ORM
{
    public function add_new($tweet)
    {
        $this->content = $tweet;
        $this->save();
    }
    public function get_tweets()
    {
        return $this->find_all();
    }
}

?>