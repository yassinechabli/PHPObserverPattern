<?php

/**
 *
 * User: ychabli
 * Date: 08/02/2017
 * Time: 11:27
 */
class Comment implements SplSubject
{

    private $observers = array();
    private $_commentDate;
    private $_commentText;

    function __construct($commentText){
        $this->_commentText = $commentText ;
        $this->_commentDate= date("Y-m-d H:i:s");
    }

    public function attach(SplObserver $observer)
    {
        if (!is_int($key = array_search($observer, $this->observers, true))) {
            $this->observers[] = $observer;
        }
    }

    public function detach(SplObserver $observer)
    {
        if (is_int($key = array_search($observer, $this->observers, true))) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }

    /**
     * @return false|string
     */
    public function getCommentDate()
    {
        return $this->_commentDate;
    }

    /**
     * @param false|string $commentDate
     */
    public function setCommentDate($commentDate)
    {
        $this->_commentDate = $commentDate;
    }

    /**
     * @return mixed
     */
    public function getCommentText()
    {
        return $this->_commentText;
    }

    /**
     * @param mixed $commentText
     */
    public function setCommentText($commentText)
    {
        $this->_commentText = $commentText;
    }


    public function postComment(){
        $this->notify();
    }

}