<?php

/**
 * Created by PhpStorm.
 * User: ychabli
 * Date: 08/02/2017
 * Time: 11:38
 */
class Notification implements  SplObserver
{

    public function update(SplSubject $subject)
    {
        echo '<h3>Send Notification to all Friends that are linked To this Comment : '
               .$subject->getCommentText(). ' publihed in ' . $subject->getCommentDate()." </h3>";
    }

}