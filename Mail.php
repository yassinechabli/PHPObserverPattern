<?php

/**
 * User: ychabli
 * Date: 08/02/2017
 * Time: 11:42
 */
class Mail implements  SplObserver
{

    public function update(SplSubject $subject)
    {
        echo '<h3>Send Mail to all Friends on their Boxs that are linked To this Comment : '
            . $subject->getCommentText() . ' publihed in ' . $subject->getCommentDate()." </h3>";
    }

}