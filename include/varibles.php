<?php

// PHP Input
$update = json_decode(file_get_contents('php://input'));

// For Text
$message = $update->message;
$cid = $message->chat->id;
$mid = $message->message_id;
$uid = $message ->from->id;
$text = $message->text;
$contact = $message->contact;
$phone_number = $contact->phone_number;

// User Property
$name = $message->from->first_name;

// For CallBack Query
$query = $update->callback_query;
$data = $query->data;
$uid2 = $query->query->id;
$cid2 = $query->message->chat->id;
$mid2 = $query->message->message_id;
$ccid = $query->message->chat->id;
$cuid = $query->message->from->id;
$cqid = $query->id;
$cqidd = $query->from->id;
$qid = $query->id;
$name2 = $query->from->first_name;
$photo = $message->photo;
$file_id = $message->file_id;
$location = $message->location;
$pre_check = $update->pre_checkout_query;
$pre_id = $pre_check->id;
$ship_chek = $update->shipping_query;
$ship_id = $ship_chek->id;

?>