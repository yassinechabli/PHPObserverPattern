<?php
/**
 * User: ychabli
 * Date: 08/02/2017
 * Time: 11:43
 */

include_once 'Comment.php';
include_once 'Mail.php';
include_once 'Notification.php';


$comment = new Comment("awseome place ! have a godd summer best Friend");
$comment->attach(new Mail());
$comment->attach(new Notification());
?>

    <center><h1> Observer Pattern </h1></center>
<p  style="border : 2px solid gray; padding: 10px;"> trying to post a comment while , while there is too observers on the comment object (Notification and Mail) . Calling the method <i>postComment()</i>
will update all the observers on the comment object. in this case  we are sending notification and Mail to  All users that are linked to this comment .
</p>
    <center><h2>Have fun with this tutorial !</h2></center>

<?php
$comment->postComment();

?>